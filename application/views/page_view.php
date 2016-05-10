<div class="row" id="content">
    <div class="col-lg-12">
        <div id="articles">
            <div class="col-lg-8">
                <h4 class="title_of_article"><?= $page_info['title']; ?></h4>
            </div>
            <div class="col-lg-4">
                <p class="date_of_article">Дата: <?= $page_info['date_time']; ?></p><br>
            </div>
			<div class="row">
				<div class="col-xs-12 col-sm-4">
					<img src="<?= base_url(); ?>images/news/images/<?= $page_info['preview_img']; ?>" alt="" class="preview_img_of_article">
				</div>
				<div class="text_of_article">
					<?= $page_info['text']; ?>
				</div>
			</div>
                <div class="row" id="article_img">
                    <?php foreach ($img as $item):?>
                        <?php if (isset($item['img'])): ?>
                            <div class="col-xs-6 col-md-3">
                                <a href="" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                                    <img class="img_of_article" src="<?= base_url(); ?>images/news/images/<?php echo $item['img']; ?>" alt="">
                                </a>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>    
                </div>
             
            <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="" alt="" />
                        </div>
                    </div>
                </div>
            </div>

        </div><br>
    </div>
</div>