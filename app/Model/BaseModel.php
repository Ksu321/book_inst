<?php

namespace App\Model;


use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class BaseModel extends Model
{


    const IS_DRAFT = 0;
    const IS_PUBLIC = 1;


    public static function add($fields)
    {
        $announcement = new static;
        $announcement->fill($fields);
        $announcement->user_id = 1;
        $announcement->save();
        return $announcement;
    }

    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }


    public function setDateAttribute($value)
    {
        $date = Carbon::createFromFormat('d/m/y', $value)->format('Y-m-d');
        $this->attributes['date'] = $date;
    }

    public function setCategory($id)
    {
        if ($id ==null ) { return;}
        $this->category_id = $id;
        $this->save();
    }

    public function setTags($ids)
    {
        if ($ids == null) { return;}
        $this->tags()->sync($ids);
    }

    public function setDraft()
    {
        $this->status = 0;
        $this->save();
    }

    public function setPublic()
    {
        $this->status = 1;
        $this->save();
    }

    public function toggleStatus($value)
    {
        if($value == null)
        {
            return $this->setDraft();
        }
        return $this->setPublic();
    }


    public function getCategoryTitle()
    {
        return ($this->category != null)
            ?   $this->category->title
            :   'Категорія відсутня';
    }

    public function getTagsTitles()
    {
        return (!$this->tags->isEmpty())
            ?   implode(', ', $this->tags->pluck('title')->all())
            : 'Теги відсутні';
    }

    public function getCategoryID()
    {
        return $this->category != null ? $this->category->id : 'Нет категории';
    }

    public function setSpecialization($id)
    {
        if ($id ==null ) { return;}
        $this->specialization_id = $id;
        $this->save();
    }

    public function getSpecializationID()
    {
        return $this->specialization != null ? $this->specialization->id : 'Нет спеціалізації';
    }

    public function getSpecializationTitle()
    {
        return ($this->specialization != null)
            ?   $this->specialization->title
            :   'Спеціалізація відсутня';
    }

    public function getDateAttribute($value)
    {
        $date = Carbon::createFromFormat('Y-m-d', $value)->format('d/m/y');

        return $date;
    }

    public function getDate()
    {
        return Carbon::createFromFormat('d/m/y', $this->date)->format('d.m.Y');
    }

    public function setPublishings($ids)
    {
        $this->publishings()->sync($ids);
    }

    public function getPublishingsTitles()
    {
        return (!$this->publishings->isEmpty())
            ?   implode(', ', $this->publishings->pluck('name')->all())
            : 'Видавництва відсутні';
    }

    public function setBookNews($ids)
    {
        $this->bookNews()->sync($ids);
    }

    public function getBookNewsTitles()
    {
        return (!$this->bookNews->isEmpty())
            ?   implode(', ', $this->bookNews->pluck('name_book')->all())
            : 'Книги відсутні';
    }

    public function setAuthors($ids)
    {
        $this->authors()->sync($ids);
    }

    public function getAuthorsTitles()
    {
        return (!$this->authors->isEmpty())
            ?   implode(', ', $this->authors->pluck('name')->all())
            : 'Автори відсутні';
    }

    public function setIllustrators($ids)
    {
        $this->illustrators()->sync($ids);
    }

    public function getIllustratorsTitles()
    {
        return (!$this->illustrators->isEmpty())
            ?   implode(', ', $this->illustrators->pluck('name')->all())
            : 'Ілюстратори відсутні';
    }

    public function setInterpreters($ids)
    {
        $this->interpreters()->sync($ids);
    }

    public function getInterpretersTitles()
    {
        return (!$this->interpreters->isEmpty())
            ?   implode(', ', $this->interpreters->pluck('name')->all())
            : 'Перекладачі відсутні';
    }


    public function uploadImage($image)
    {
        if ($image == null) { return; }
        $this->removeImage();
        $filename = str_random(10).'.'. $image->extension();
        $image->storeAs('uploads/articles/', $filename);
        $this->image = $filename;
        $this->save();
    }

    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/articles/' . $this->image);
        }
    }

    public function getImage()
    {
        if ($this->image == null) { return 'img/no-img.png'; }
        return '/uploads/articles/' . $this->image;
    }

    public function remove()
    {
        $this->removeFile();
        $this->removeImage();
        $this->delete();
    }

    public function uploadFile($file)
    {
        if ($file == null) { return; }
        $this->removeFile();
        $filename =  $file->getClientOriginalName();
        $file->storeAs('uploads/articles/', $filename);
        $this->file = $filename;
        $this->save();
    }

    public function removeFile()
    {
        if($this->file != null)
        {
            Storage::delete('uploads/articles/' . $this->file);
        }
    }

    public function getFile()
    {
        if ($this->file == null) {
            return null;
        }
        return '/uploads/articles/' . $this->file;
    }
}