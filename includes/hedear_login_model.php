<!--HEADER LOGIN MODAL-->
<div class="modal fade" id="login-modal">
    <div class="modal-dialog">
        <div class="modal_form modal-content">
            <!--HEADER MODAL-->
            <div class="modal-header">
                <h5 class="modal-title">ورود به حساب کاربری</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button><!--close-->
            </div><!--modal-header-->
            <!--MODAL BODY-->
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" name="seller_user_name" placeholder="نام کاربری...">
                </div><!--form-group-->
                <div class="form-group">
                    <input type="password" class="form-control" name="seller_pass" placeholder="رمز عبور...">
                </div><!--form-group-->
                <input type="submit" class="btn btn-success btn-block" value="ورود">
                <div class="text-center mt-3">
                    <a href="#" data-toggle="modal" data-target="#register-modal" data-dismiss="modal">ثبت نام</a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="#" data-toggle="modal" data-target="#forget-modal" data-dismiss="modal">رمز عبور خود را فراموش کرده ام</a>
                </div><!--text-center mt-3-->
            </div><!--modal-body-->
        </div><!--modal_form modal-content-->
    </div><!--modal-dialog-->
</div><!--modal fade-->