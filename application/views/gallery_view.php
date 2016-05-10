<div class="row" id="content">
    <div id="articles">
        <div class="row">
            <?php foreach ($img_for_gallery as $item):?>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <a href="" class="thumbnail" data-toggle="modal" data-target="#lightbox">
                    <img class="img_of_article" src="<?= base_url(); ?>images/news/images/<?php echo $item['img']; ?>" alt="">
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div><br>   
            
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
        
        <div id="pagination">
            <?php echo $this->pagination->create_links() ;?>
        </div>      
</div>