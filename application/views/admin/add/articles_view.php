<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="row" id="content">
        <div class="col-lg-12">
            <div id="articles">

                <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                    <fieldset>
                        <legend style="font-style: italic; font-weight: bold;">Добавление статьи</legend>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Название статьи</label>
                            <div class="col-lg-10">
                                <?php if (form_error('title')): ?>
                                    <p class="text-danger"><?= form_error('title'); ?></p>
                                <?php endif; ?>
                                <input type="text" class="form-control" name="title" placeholder="Название статьи" value="<?= set_value('title')?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Главная картинка для статьи</label>
                            <div class="col-lg-10">
                                <input type="file" name="userfile"><br/>
                            </div>   
                        </div>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Название статьи (латиницей)</label>
                            <div class="col-lg-10">
                                <?php if (form_error('title_url')): ?>
                                    <p class="text-danger"><?= form_error('title_url'); ?></p>
                                <?php endif; ?>
                                <input type="text" class="form-control" name="title_url" placeholder="Название статьи (латиницей, без пробелов, пробелы заменять нижним подчеркиванием)" value="<?= set_value('title_url')?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textArea" class="col-lg-2 control-label">Текст статьи</label>
                            <div class="col-lg-10">
                                <?php if (form_error('text')): ?>
                                    <p class="text-danger"><?= form_error('text'); ?></p>
                                <?php endif; ?>
                                <textarea name="text" class="form-control" rows="3" id="textArea" placeholder="Текст статьи"><?= set_value('text')?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textArea" class="col-lg-2 control-label">Ключевые слова для статьи</label>
                            <div class="col-lg-10">
                                <?php if (form_error('keywords')): ?>
                                    <p class="text-danger"><?= form_error('keywords'); ?></p>
                                <?php endif; ?>
                                <textarea name="keywords" class="form-control" rows="3" id="textArea" placeholder="Ключевые слова - это слова из предполагаемого вопроса, которые есть на странице нашего сайта или в ссылках, ведущих на страницу нашего сайта, называются «ключевыми». Например: лабрадор, щенки лабрадора и т.д."><?= set_value('keywords')?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <input type="submit" class="btn btn-primary" value="Добавить статью" name="add">
                            </div>
                        </div>
                    </fieldset>
                </form>
                
            </div>
        </div>
    </div>
</div>
