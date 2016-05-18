        <div class="row" id="footer">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <p class="top hidden-sm hidden-md hidden-lg">Подняться на верх</p>   
                    <div class="collapse navbar-collapse">
                        <a class="navbar-right"href="<?= base_url() ;?>"><img src="<?= base_url(); ?>images/logo.png" alt="logosite"></a>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="<?= base_url(); ?>js/bootstrap.js"></script>
        <script src="<?= base_url(); ?>js/bootstrap-lightbox.js"></script>
        <script src="<?= base_url(); ?>js/top.js"></script>
    </body>
</html>