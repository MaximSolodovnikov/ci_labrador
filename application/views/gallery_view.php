<div class="row" id="content">
    
        <div id="articles">
            <div class="text_of_article">
                <?php foreach ($img_for_gallery as $item):?>
					<div class="col-xs-6 col-md-3">
						<a href="" class="thumbnail" data-toggle="modal" data-target="#lightbox">
							<img class="img_of_article" src="<?= base_url(); ?>images/news/images/<?php echo $item['img']; ?>" alt="">
						</a>
					</div>
				<?php endforeach; ?>
            </div>
            <div class="clear"></div>
        </div><br>
          
</div>