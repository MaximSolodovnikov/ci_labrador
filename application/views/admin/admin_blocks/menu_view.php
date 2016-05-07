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
                    <li><a href="<?= base_url(); ?>index.php/admin/logout">Выход</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-3 col-md-2 sidebar">
                <h3>Статьи</h3>
                <ul class="nav nav-sidebar"> 
                    <li>
                        <a href="<?= base_url(); ?>index.php/admin/add/article" accesskey="">Добавить</a>
                    </li>
                    <li>
                        <a href=""  accesskey="">Редактировать</a>
                    </li>
                    <li>
                        <a href=""  accesskey="">Удалить</a>
                    </li>
                </ul>
                
                <h3>Пользователи</h3>
                <ul class="nav nav-sidebar"> 
                    <li>
                        <a href="<?= base_url(); ?>index.php/admin/add/user" accesskey="">Добавить</a>
                    </li>
                    <li>
                        <a href=""  accesskey="">Редактировать</a>
                    </li>
                    <li>
                        <a href=""  accesskey="">Удалить</a>
                    </li>
                </ul>
            </div>