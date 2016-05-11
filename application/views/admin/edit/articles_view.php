<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="row" id="content">
        <div class="col-lg-12">
            <div id="articles">

                <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
                    <fieldset>
                        <legend style="font-style: italic; font-weight: bold;">Редактирование статьи</legend>
                        <div class="form-group">
                            <label for="inputPassword" class="col-lg-2 control-label">Название статьи</label>
                            <div class="col-lg-10">
                                <?php if (form_error('title')): ?>
                                    <p class="text-danger"><?= form_error('title'); ?></p>
                                <?php endif; ?>
                                <input type="text" class="form-control" name="title" placeholder="Название статьи" value="<?= $page_info['title']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Главная картинка для статьи</label>
                            <div class="col-lg-2" style="width: 30%">
                                <img class="img-responsive" src="<?= base_url();?>images/news/images/<?= $page_info['preview_img']; ?>" alt="">
                            </div><br>
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
                                <input type="text" class="form-control" name="title_url" placeholder="Название статьи (латиницей, без пробелов, пробелы заменять нижним подчеркиванием)" value="<?= $page_info['title_url']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textArea" class="col-lg-2 control-label">Текст статьи</label>
                            <div class="col-lg-10">
                                <?php if (form_error('text')): ?>
                                    <p class="text-danger"><?= form_error('text'); ?></p>
                                <?php endif; ?>
                                <textarea name="text" class="form-control" rows="10" id="textArea"><?= $page_info['text']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="textArea" class="col-lg-2 control-label">Ключевые слова для статьи</label>
                            <div class="col-lg-10">
                                <?php if (form_error('keywords')): ?>
                                    <p class="text-danger"><?= form_error('keywords'); ?></p>
                                <?php endif; ?>
                                <textarea name="keywords" class="form-control" rows="3" id="textArea"><?= $page_info['keywords']; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <input type="submit" class="btn btn-primary" value="Редактировать статью" name="edit">
                            </div>
                        </div>
                    </fieldset>
                </form>
                
            </div>
        </div>
    </div>
</div>
