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
                <a class="navbar-brand" href="#">Админ панель</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Выход</a></li>
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
                        <a href="<?=base_url();?>" accesskey="">Добавить</a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>index.php/pages/ingredients"  accesskey="">Редактировать</a>
                    </li>
                    <li>
                        <a href="<?=base_url();?>index.php/pages/ingredients"  accesskey="">Удалить</a>
                    </li>
                    
                </ul>
            </div>