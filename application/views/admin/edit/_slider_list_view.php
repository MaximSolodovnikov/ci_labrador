        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <h3>Выберете картинку слайдера для редактирования, <br>формат картинки должен быть 960 х 640</h3>
                    <thead>
                        <tr>
                            <th>Картинки слайдера</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach ($slider_list as $item): ?>
                        <tr>
                            <td><a href=""><img src="<?= base_url(); ?>images/slider/<?= $item['slider_img']; ?>" alt="" style="width: 30%"></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>