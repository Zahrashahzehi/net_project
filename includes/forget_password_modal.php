<!--HEADER FORGET PASSWORD MODAL-->
<div class="modal fade" id="forget-modal">
    <div class="modal-dialog">
        <div class="modal_form modal-content">
            <!--HEADER MODAL-->
            <div class="modal-header">
                <h5 class="modal-title">درخواست رمز عبور جدید</h5>
                <button class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button><!--close-->
            </div><!--modal-header-->
            <!--MODAL BODY-->
            <div class="modal-body">
                <p class="text-muted text-center mb-2">
                    آدرس ایمیلتان را وارد کنید تا لینک پسورد جدید را برایتان بفرستیم.
                </p><!--text-muted text-center mb-2-->
                <form method="post">
                    <div class="form-group">
                    <input type="email" class="form-control" name="forget_email" placeholder="ایمیل...">
                    </div><!--form-group-->
                    <input type="submit" name="forget" class="btn btn-success btn-block" value="ارسال">
                    <p class="text-muted text-center mt-2">
                        آیا عضو نشده اید؟
                        <a href="#" data-target="#register-modal" data-toggle="modal" data-dismiss="modal">ثبت نام</a> 
                    </p><!--text-muted text-center mt-2-->
                </form><!--form-->
            </div><!--modal-body-->
        </div><!--modal_form modal-content-->
    </div><!--modal-dialog-->
</div><!--modal fade-->