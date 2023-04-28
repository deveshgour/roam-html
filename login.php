<!DOCTYPE html>
<html lang="en-US">
<?php $currentPage = 'Home'; ?>

<head>
    <title>Roam | Login</title>
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
                        <p class="mb-0">Welcome Back!</p>
                        <h1 class="mb-0">Login</h1>
                    </div>
                    <form class="commonForm">
                        <div class="form-group floating-group">
                            <label class="floating-label">Email</label>
                            <input type="email" class="form-control floating-control" />
                        </div>
                        <div class="form-group floating-group">
                            <label class="floating-label">Password</label>
                            <input type="password" class="form-control floating-control" id="password-field"/>
                            <em class="icon-eye-off form-icon toggle-password" toggle="#password-field"></em>
                        </div>
                        <div class="text-end form-group">
                            <a href="javascript:void(0);" class="linkBtn">Forgot Password</a>
                        </div>
                        <button class="btn btn-primary w-100">Login</button>
                    </form>
                    <div class="loginSec_bottom text-center">
                        <p>Don’t have an account? <a href="<?php echo BASE_URL?>/sign-up.php" class="linkBtn">Register here</a> </p>
                        <p class="mb-0">Forgot your password ? <a href="javascript:void(0);" class="linkBtn">Reset it here</a> </p>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php include 'include/footer-scripts.php' ?>

</body>
</html>