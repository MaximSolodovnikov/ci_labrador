            <div class="row" id="footer">
                <div class="col-lg-12">
                    
                    <!-- BOTTOM-MENU -->
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bot_menu">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a href="#"><img src="<?= base_url(); ?>images/logo.png" alt="logosite"></a>
                            </div>

                            <div class="collapse navbar-collapse" id="bot_menu">
                                <ul class="nav navbar-nav navbar-left">
                                    <?php foreach ($menu as $item):?>
                                        <li class="bottom-items"><a href=""><?= $item['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- END BOTTOM-MENU -->
                    
                </div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?= base_url(); ?>js/bootstrap.js"></script>
    </body>
</html>