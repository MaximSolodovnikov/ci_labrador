        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <h3>Выберете статью для редактирования</h3>
                    <thead>
                        <tr>
                            <th>Название статьи</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($articles_list as $item): ?>
                        <tr>
                            <td><a href=""><?= $item['title']; ?></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</div>