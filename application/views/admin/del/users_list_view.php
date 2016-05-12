        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <h3>Выберете пользователя для удаления</h3>
                    <thead>
                        <tr>
                            <th>Данные пользователя</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users_list as $item): ?>
                            <form method="post" action="">
                            <tr>
                                <td>Email и пароль пользователя: <?= $item['email'] . " | " . $item['pswd']; ?></td>
                                <td><input type="submit" name="del" value="Удалить"></td>
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