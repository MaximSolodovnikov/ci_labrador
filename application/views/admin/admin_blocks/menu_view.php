<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= base_url(); ?>index.php/admin">Админ панель</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a style="color: yellow;" href="<?= base_url(); ?>index.php/admin/logout">Выход</a></li><li class="line_in_menu"></li>
                    <li class="hidden-sm hidden-md hidden-lg">
                        <a href="<?= base_url(); ?>index.php/admin/add/articles" accesskey="">Добавить статью</a>
                    </li>
                    <li class="hidden-sm hidden-md hidden-lg">
                        <a href="<?= base_url(); ?>index.php/admin/editlist/articles"  accesskey="">Редактировать статью</a>
                    </li>
                    <li class="hidden-sm hidden-md hidden-lg">
                        <a href="<?= base_url(); ?>index.php/admin/del/articles"  accesskey="">Удалить статью</a>
                    </li>
                    <li class="line_in_menu"></li>
                    <li class="hidden-sm hidden-md hidden-lg">
                        <a href="<?= base_url(); ?>index.php/admin/add/users" accesskey="">Добавить пользователя</a>
                    </li>
                    <li class="hidden-sm hidden-md hidden-lg">
                        <a href="<?= base_url(); ?>index.php/admin/editlist/users"  accesskey="">Редактировать пользователя</a>
                    </li>
                    <li class="hidden-sm hidden-md hidden-lg">
                        <a href="<?= base_url(); ?>index.php/admin/del/users"  accesskey="">Удалить пользователя</a>
                    </li>
                    <li class="line_in_menu"></li>
                    <li class="hidden-sm hidden-md hidden-lg">
                        <a href="<?= base_url(); ?>index.php/admin/add/slider" accesskey="">Добавить фото в слайдер</a>
                    </li>
                    <li class="hidden-sm hidden-md hidden-lg">
                        <a href="<?= base_url(); ?>index.php/admin/del/slider"  accesskey="">Удалить фото из слайдера</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-2 sidebar">
                
                <ul class="nav nav-sidebar section_body"> 
                    <li class="section_title">Статьи</li>
                    <li>
                        <a href="<?= base_url(); ?>index.php/admin/add/articles" accesskey="">Добавить</a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>index.php/admin/editlist/articles"  accesskey="">Редактировать</a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>index.php/admin/del/articles"  accesskey="">Удалить</a>
                    </li>
                </ul>

                <ul class="nav nav-sidebar section_body">
                    <li class="section_title">Пользователи</li>
                    <li>
                        <a href="<?= base_url(); ?>index.php/admin/add/users" accesskey="">Добавить</a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>index.php/admin/editlist/users"  accesskey="">Редактировать</a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>index.php/admin/del/users"  accesskey="">Удалить</a>
                    </li>
                </ul>
                
                <ul class="nav nav-sidebar section_body">
                    <li class="section_title">Слайдер</li>
                    <li>
                        <a href="<?= base_url(); ?>index.php/admin/add/slider" accesskey="">Добавить</a>
                    </li>
                    <li>
                        <a href="<?= base_url(); ?>index.php/admin/del/slider"  accesskey="">Удалить</a>
                    </li>
                </ul>
            </div>