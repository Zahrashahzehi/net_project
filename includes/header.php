<?php include("register.php");?>
<?php include("hedear_login_model.php");?>
<?php include("forget_password_modal.php");?>
<!--HEADER NAVIGATION MENU -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <spam class="navbar-toggler-icon"></spam><!--navbar-toggler-icon -->
        </button><!--navbar-toggler -->
        <a href="http://localhost/freelanser/index.php" class="navbar-brand">فریلنس</a>
        <a href="http://localhost/freelanser/mobile.categories.php" class="navbar-toggler">
            <i class="fa fa-th-large"></i>
        </a><!--navbar-toggler -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <hr>
            <form method="post" class="form-inline mx-auto">
                <div class="input-group">
                    <input type="text" class="form-control" required placeholder="جستجو پروژه" name="search_query">
                    <span class="input_group-btn">
                        <button class="btn-primary">
                            <i class="fa fa-search"></i>
                        </button><!--btn-primary-->
                    </span><!--input_group-btn-->
                </div><!--input-group-->
            </form><!--form-inline ml-auto-->
            <hr>

            <ul class="navbar-nav">
            <i class="nav-item active">
                    <a href="http://localhost/freelanser/index.php"  class="nav-link" >خانه</a>
                </i><!--nav-item-->
                <i class="nav-item">
                    <a href="#"  class="nav-link" data-toggle="modal" data-target="#register-modal" >سفارش پروژه</a>
                </i><!--nav-item-->
                <i class="nav-item">
                    <a href="#"  class="nav-link" data-toggle="modal" data-target="#login-modal" >ورود</a>
                </i><!--nav-item-->
                <i class="nav-item">
                    <a href="#"  class="btn btn-primary" data-toggle="modal" data-target="#register-modal" >ثبت نام</a>
                </i><!--nav-item-->
            </ul><!--navbar-nav-->
        </div><!--collapse navbar-collapse-->
    </div><!--container -->
</nav><!--navbar navbar-expand-lg navbar-dark bg-dark fixed-top-->
<!--HEDER CATEGORIES NAVIGATION MENU-->
<?php include("category_nav.php");?>








