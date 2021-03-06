<div class="row" id="content">
        <?php foreach ($news as $item): ?>
            <div id="articles">
                <div class="col-lg-8">
                    <a href="<?= base_url() ;?>index.php/article/<?= $item['title_url']; ?>" class="title_of_article">
                        <?= $item['title']; ?>
                    </a>
                </div>
                <div class="col-lg-4">
                    <p class="date_of_article">Дата: <?= $item['date_time']; ?></p><br>
                </div>
				<div class="row">
					<div class="col-xs-12 col-sm-4">
						<a href="<?= base_url() ;?>index.php/article/<?= $item['title_url']; ?>">
							<img src="<?= base_url(); ?>images/news/images/<?= $item['preview_img']; ?>" alt="" class="preview_img_of_article">
						</a>
					</div>		
					<div class="text_of_article">
						<?= $item['text']; ?><br><br>

						<a class="link_of_article btn btn-default" href="<?= base_url() ;?>index.php/article/<?= $item['title_url']; ?>">
							Читать &raquo;
						</a>
					</div>
				</div>
            </div><br>
        <?php endforeach; ?>
    
        <div id="pagination">
            <?php echo $this->pagination->create_links() ;?>
        </div>
        
</div>