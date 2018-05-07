<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="{{route('admin.index')}}">
                    <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
                </a>
            </li>
            <li><a href="{{route('categories.index')}}"><i class="fa fa-list-ul"></i> <span>Категорії</span></a></li>
            <li><a href="{{route('tags.index')}}"><i class="fa fa-tags"></i> <span>Теги</span></a></li>,
            <!--         актуальне -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-line-chart"></i> <span>Актуальне</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('announcements.index')}}"><i class="fa fa-bullhorn"></i>Анонси</a></li>
                    <li><a href="{{route('news.index')}}"><i class="fa fa-newspaper-o"></i>Новини</a></li>
                    <li><a href="{{route('booknews.index')}}"><i class="fa fa-file-text-o"></i>Книжкові новини</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tasks"></i> <span>Книжковий ринок</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('statistics.index')}}"><i class="fa fa-bar-chart"></i>Статистики</a></li>
                    <li><a href="{{route('publishing.index')}}"><i class="fa fa-file"></i>Видавництва</a></li>
                    <li><a href="editors.html"><i class="fa fa-home"></i>Книгарні</a></li>
                    <li><a href="editors.html"><i class="fa fa-tree"></i>Фестивалі/Ярмарки</a></li>
                    <li><a href="editors.html"><i class="fa fa-tv"></i>Книжкові медіа</a></li>
                </ul>
            </li>
            <!--         автори -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Автори</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{route('authors.index')}}"><i class="fa fa-pencil"></i>Письменники</a></li>
                    <li><a href="{{route('interpreters.index')}}"><i class="fa fa-pencil-square-o"></i>Перекладачі</a></li>
                    <li><a href="{{route('illustrators.index')}}"><i class="fa fa-paint-brush"></i>Ілюстратори</a></li>
                </ul>
            </li>
            <!--         каталоги -->
            <li><a href="{{route('catalogs.index')}}"><i class="fa fa-sitemap"></i> <span>Каталоги</span></a></li>
            <!--         можливості -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-trophy"></i> <span>Можливості</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="general.html"><i class="fa fa-keyboard-o"></i>Резиденції</a></li>
                    <li><a href="advanced.html"><i class="fa fa-money"></i>Гранти</a></li>
                    <li><a href="editors.html"><i class="fa fa-mortar-board"></i>Стипендії</a></li>
                    <li><a href="editors.html"><i class="fa fa-cubes"></i>Премії/Конкурси</a></li>
                </ul>
            </li>
            <!--         українська книга -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Українська книга</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="general.html"><i class="fa fa-pencil-square"></i>Заяви</a></li>
                </ul>
            </li>
            <!--         про нас -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-heart"></i> <span>Про нас</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="general.html"><i class="fa fa-volume-up"></i>Публічна інформація</a></li>
                </ul>
            </li>
            <!--          статті -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i> <span>Статті</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="general.html"><i class="fa fa-map-o"></i>Підрубрики</a></li>
                </ul>
            </li>
                        <li><a href="{{route('users.index')}}"><i class="fa fa-users"></i> <span>Пользователи</span></a></li>
            <li><a href="#"><i class="fa fa-user-plus"></i> <span>Подписчики</span></a></li>


            {{----}}
            {{--<li class="treeview">--}}
                {{--<a href="">--}}
                    {{--<i class="fa fa-dashboard"></i> <span>Адмін-панель</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li><a href="{{route('announcements.index')}}"><i class="fa fa-sticky-note-o"></i> <span>Анонси</span></a></li>--}}
            {{--<li><a href="{{route('news.index')}}"><i class="fa fa-commenting"></i> <span>Новини</span></a></li>--}}
            {{--<li><a href="{{route('booknews.index')}}"><i class="fa fa-commenting"></i> <span>Книжкові Новини</span></a></li>--}}
            {{--<li><a href="{{route('illustrators.index')}}"><i class="fa fa-commenting"></i> <span>Ілюстратори</span></a></li>--}}
            {{--<li><a href="{{route('authors.index')}}"><i class="fa fa-commenting"></i> <span>Автори</span></a></li>--}}
            {{--<li><a href="{{route('publishing.index')}}"><i class="fa fa-commenting"></i> <span>Видавництво</span></a></li>--}}
            {{--<li><a href="{{route('interpreters.index')}}"><i class="fa fa-commenting"></i> <span>Перекладачі</span></a></li>--}}
            {{--<li><a href="{{route('categories.index')}}"><i class="fa fa-list-ul"></i> <span>Категорії</span></a></li>--}}
            {{--<li><a href="{{route('tags.index')}}"><i class="fa fa-tags"></i> <span>Теги</span></a></li>--}}
            {{--<li><a href="{{route('users.index')}}"><i class="fa fa-users"></i> <span>Користувачі</span></a></li>--}}
            {{--<li><a href="{{route('partners.index')}}"><i class="fa fa-user-plus"></i> <span>Партнери</span></a></li>--}}
        </ul>
    </section>
</aside>