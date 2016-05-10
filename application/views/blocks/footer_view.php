            <div class="row" id="footer">
                <div class="col-lg-12">
                    
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bot_menu">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>images/logo.png" alt="logosite"></a>
                            </div>

                            <div class="collapse navbar-collapse" id="bot_menu">
                                <ul class="nav navbar-nav navbar-left">
                                    <?php foreach ($menu as $item):?>
                    <li>
                        <a <?php if ($page_info['title_url'] == $item['title_url']) echo "class='active_menu'"; ?> href="<?= base_url(); ?>index.php/<?= $item['title_url']; ?>"><?= $item['title']; ?></a>
                    </li>
                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?= base_url(); ?>js/bootstrap.js"></script>
        <script src="<?= base_url(); ?>js/bootstrap-lightbox.js"></script>
    </body>
</html>