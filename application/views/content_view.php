<div class="row" id="content">
    <?php foreach ($news as $item): ?>
        <div id="articles">
            <div class="col-lg-8">
                <a href="" class="title_of_article"><?= $item['title']; ?></a>
            </div>
            <div class="col-lg-4">
                <p class="date_of_article">Дата: <?= $item['date_time']; ?></p><br>
            </div>
            <a href="page.php"><img src="<?= base_url(); ?>images/news/<?= $item['preview_img']; ?>" alt="" class="preview_img_of_article"></a>
            <div class="text_of_article">
                <?= $item['text']; ?>
                <div class="clear"></div>
                <a class="link_of_article btn btn-default" href="">Читать &raquo;</a>
            </div>
            <div class="clear"></div>
        </div><br>
    <?php endforeach; ?>
</div>