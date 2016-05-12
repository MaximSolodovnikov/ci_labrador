        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <h3>Выберете картинку слайдера для удаления</h3>
                    <thead>
                        <tr>
                            <th>Картинки слайдера</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($slider_list as $item): ?>
                            <form method="post" action="">
                            <tr>
                                <td><img src="<?= base_url(); ?>images/slider/<?= $item['slider_img']; ?>" alt="" style="width: 30%"></td>
                                <td><td><input type="submit" name="del" value="Удалить"></td></td>
                                <input type="hidden" name="id" value="<?= $item['id']; ?>">
                            </tr>
                            </form>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>