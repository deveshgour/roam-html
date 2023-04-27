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
            <div class="authPage_top text-center">
                <a href="javascript:void(0);" class="authPage_button"></a>
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
                            <input type="password" class="form-control floating-control" />
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </main>
</body>
</html>