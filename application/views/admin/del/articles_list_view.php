        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <h3>Выберете статью для удаления</h3>
                    <thead>
                        <tr>
                            <th>Название статьи</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articles_list as $item): ?>
                    <form method="post" action="">

                        <tr>
                            <td><?= $item['title']; ?></td>
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