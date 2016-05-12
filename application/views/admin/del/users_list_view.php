        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <h3>Выберете пользователя для редактирования</h3>
                    <thead>
                        <tr>
                            <th>Данные пользователя</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php foreach ($users_list as $item): ?>
                        <tr>
                            <td>Email и пароль пользователя: <a href="<?= base_url(); ?>index.php/admin/edit/<?= $page; ?>/<?= $item['id']; ?>"><?= $item['email'] . " | " . $item['pswd']; ?></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>