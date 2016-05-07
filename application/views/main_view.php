<div class="row" id="content">
    <?php if ($page_info['title_url'] == 'main'): ?>
        <div id="articles">
            <div class="col-lg-8">
                <a href="<?= base_url(); ?>index.php/article/<?= $last_news['title_url']; ?>" class="title_of_article">
                    <?= $last_news['title']; ?>
                </a>
            </div>
            <div class="col-lg-4">
                <p class="date_of_article">Дата: <?= $last_news['date_time']; ?></p><br>
            </div>
            <a href="<?= base_url(); ?>index.php/article/<?= $last_news['title_url']; ?>">
                <img src="<?= base_url(); ?>images/news/images/<?= $last_news['preview_img']; ?>" alt="" class="preview_img_of_article">
            </a>
            <div class="text_of_article">
                <?= $last_news['text']; ?>
                <div class="clear"></div>
                <a class="link_of_article btn btn-default" href="<?= base_url(); ?>index.php/article/<?= $last_news['title_url']; ?>">
                    Читать &raquo;
                </a>
            </div>
            <div class="clear"></div>
        </div><br>
    <?php endif; ?>    
</div>