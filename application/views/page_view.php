<div class="row" id="content">
    <div class="col-lg-12">
        <div id="articles">
            <div class="col-lg-8">
                <p class="title_of_article"><?= $page_info['title']; ?></p>
            </div>
            <div class="col-lg-4">
                <p class="date_of_article">Дата: <?= $page_info['date_time']; ?></p><br>
            </div>

            <img src="<?= base_url(); ?>images/news/images/1.jpeg" alt="" class="preview_img_of_article">
            <div class="text_of_article">
                <?= $page_info['text']; ?>
            </div>
            <div class="clear"></div>
            <div class="row" id="article_img">
                <div class="col-lg-3">
                    <img src="<?= base_url(); ?>images/news/images/1.jpeg" alt="" class="img-responsive img_of_article">
                </div>
                <div class="col-lg-3">
                    <img src="<?= base_url(); ?>images/news/images/1.jpeg" alt="" class="img-responsive img_of_article">
                </div>
                <div class="col-lg-3">
                    <img src="<?= base_url(); ?>images/news/images/1.jpeg" alt="" class="img-responsive img_of_article">
                </div>
                <div class="col-lg-3">
                    <img src="<?= base_url(); ?>images/news/images/1.jpeg" alt="" class="img-responsive img_of_article">
                </div>
            </div>
        </div><br>
    </div>
</div>