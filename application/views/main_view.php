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
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<a href="<?= base_url(); ?>index.php/article/<?= $last_news['title_url']; ?>">
						<img align="left" src="<?= base_url(); ?>images/news/images/<?= $last_news['preview_img']; ?>" alt="" class="img-responsive preview_img_of_article">
					</a>
				</div>
				<div class="text_of_article">
					<?= $last_news['text']; ?><br><br>
					<a class="link_of_article btn btn-default" href="<?= base_url(); ?>index.php/article/<?= $last_news['title_url']; ?>">
						Читать &raquo;
					</a>
				</div>
			</div>
        </div><br>
    <?php endif; ?>    
</div>