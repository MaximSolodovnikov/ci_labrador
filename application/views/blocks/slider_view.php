<?php if ($page_info['title_url'] == 'main'): ?>

<div class="row slider">
    <div class="col-lg-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <?php foreach ($slider as $item):?>
                    <li data-target="#carousel-example-generic" data-slide-to="<?= $item['id'];?>"></li>
                <?php endforeach; ?>
            </ol>
 
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?= base_url(); ?>images/slider/1.jpg" alt="">
                </div>
                <?php foreach ($slider as $item):?>
                    <div class="item">
                        <img src="<?= base_url(); ?>images/slider/<?= $item['slider_img'];?>" alt="">
                    </div>
                <?php endforeach; ?>
            </div>
          
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
</div>

<?php endif; ?>