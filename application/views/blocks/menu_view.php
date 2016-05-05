<!-- TOP-MENU -->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topmenu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="<?= base_url() ;?>"><img src="<?= base_url(); ?>images/logo.png" alt="logosite"></a>
        </div>

        <div class="collapse navbar-collapse" id="topmenu">
            <ul class="nav navbar-nav navbar-right">
                <?php foreach ($menu as $item):?>
                    <li><a href=""><?= $item['title']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</nav>
<!-- END TOP-MENU -->