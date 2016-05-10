<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="row" id="content">
        <div class="col-lg-12">
            <div id="articles">

                <form class="form-horizontal" method="post" action="">
                    <fieldset>
                        <legend style="font-style: italic; font-weight: bold;">Добавление пользователя</legend>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <?php if (form_error('email')): ?>
                                    <p class="text-danger"><?= form_error('email'); ?></p>
                                <?php endif; ?>
                                <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?= set_value('email') ;?>">
                            </div>
                        </div>
                        
                        <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Пароль</label>
                            <div class="col-lg-10">
                            <?php if (form_error('pswd')): ?>    
                                <p class="text-danger"><?= form_error('pswd'); ?></p>
                            <?php endif; ?>
                            <input type="password" name="pswd" class="form-control" id="inputPassword" placeholder="Пароль" value="<?= set_value('pswd') ;?>">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-10 col-lg-offset-2">
                                <input type="submit" class="btn btn-primary" value="Добавить пользователя" name="add">
                            </div>
                        </div>
                    </fieldset>
                </form>
                
            </div>
        </div>
    </div>
</div>
