<!--HEDEAR REGISTER MODAL-->
<div class="modal fada" id="register-modal">
    <div class="modal-dialog">
        <div class="modal_form m_register modal-content">
            <!--HEADER MODAL-->
            <div class="modal-header">
                <h5 class="modal-title">فرم ثبت نام</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button><!--close-->
            </div><!--modal-header-->
            <!--MODAL BODY-->
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name" class="form-control-label form_text">نام و نام خانوادگی </label>
                        <input type="text" class="form-control" name="name" placeholder="نام و نام خانوادگی">
                    </div><!--form-group-->

                    <div class="form-group">
                        <label for="u_name" class="form-control-label form_text">نام کاربری</label>
                        <input type="text" class="form-control" name="u_name" placeholder="نام کاربری">
                        <small class="form_text text-muted">
                            مهم!نام کاربری بعد از ثبت نام قابل تغییر نیست
                        </small>
                    </div><!--form-group-->

                    <div class="form-group">
                        <label for="email" class="form-control-label form_text">ایمیل</label>
                        <input type="email" class="form-control" name="email" placeholder="ایمیل...">
                    </div><!--form-group-->

                    <div class="form-group">
                        <label for="pass" class="form-control-label form_text">رمز عبور</label>
                        <input type="password" class="form-control" name="pass" placeholder="رمز عبور ...">
                    </div><!--form-group-->

                    <div class="form-group">
                        <label for="con_pass" class="form-control-label form_text">تایید رمز عبور</label>
                        <input type="password" class="form-control" name="con_pass" placeholder="تایید رمز عبور...">
                    </div><!--form-group-->
                    <input class="btn btn-success btn.block" type="submit" value="ثبت نام کنید">

                </form>
            </div><!--modal-body-->

        </div><!--modal_form m_register modal-content-->
    </div><!--modal-dialog-->

</div><!--modal fada-->