        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <h3>Статистика</h3>
                    <thead>
                        <tr>
                            <th><a href="<?= base_url(); ?>index.php/admin/editlist/articles">Статьи</a></th>
                            <th><a href="<?= base_url(); ?>index.php/admin/editlist/users">Пользователи</a></th>
                            <th><a href="<?= base_url(); ?>index.php/admin/del/slider">Картинки в слайдере</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $stat['articles']; ?></td>
                            <td><?= $stat['users']; ?></td>
                            <td><?= $stat['slider']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>