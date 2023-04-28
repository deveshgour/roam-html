<!DOCTYPE html>
<html lang="en-US">
<?php $currentPage = 'Home'; ?>

<head>
    <title>Roam | Sign-up</title>
    <?php include 'include/head-link.php' ?>
</head>

<body>
    <main class="mainContent">
        <div class="authPage">
            <div class="authPage_top text-sm-center">
                <a href="javascript:void(0);" class="authPage_button d-flex align-items-center justify-content-center"><em class="icon-menu-icon"></em></a>
                <a href="javascript:void(0);" class="authPage_logo">
                    <img src="<?php echo IMAGES_URL ?>/logo.png" alt="logo " class="img-fluid">
                </a>
            </div>
            <section class="loginSec">
                <div class="loginSec_inner">
                    <div class="loginSec_txt">
                        <p class="mb-0">Create your RoamTag Account</p>
                        <h1 class="mb-0">Register</h1>
                    </div>
                    <form class="commonForm">
                        <div class="form-group floating-group">
                            <label class="floating-label">Email</label>
                            <input type="email" class="form-control floating-control" />
                        </div>
                        <div class="form-group floating-group">
                            <label class="floating-label">Confirm Email</label>
                            <input type="email" class="form-control floating-control" />
                        </div>
                        <div class="form-group floating-group">
                            <label class="floating-label">First Name</label>
                            <input type="text" class="form-control floating-control" />
                        </div>
                        <div class="form-group floating-group">
                            <label class="floating-label">Last Name</label>
                            <input type="text" class="form-control floating-control" />
                        </div>
                        <div class="form-group floating-group">
                            <label class="floating-label">Password</label>
                            <input type="password" class="form-control floating-control" id="password-field"/>
                            <em class="icon-eye-off form-icon toggle-password" toggle="#password-field"></em>
                        </div>
                        <div class="form-group floating-group">
                            <label class="floating-label">Confirm Password</label>
                            <input type="password" class="form-control floating-control" id="password-field1"/>
                            <em class="icon-eye-off form-icon toggle-password" toggle="#password-field1"></em>
                        </div>
                        <button class="btn btn-primary w-100">Register</button>
                    </form>
                    <div class="loginSec_bottom text-center">
                        <p class="mb-o">Already have an account?  <a href="<?php echo BASE_URL?>/login.php" class="linkBtn">Login Here</a> </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php include 'include/footer-scripts.php' ?>

</body>
</html>