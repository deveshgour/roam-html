<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Roam</title>
    <?php include('include/head-link.php'); ?>

</head>

<body>
    <?php include('include/header.php'); ?>
    <main class="petListPage">


        <section class="petListBanner">
            <div class="container">
                <div class="petListBanner_inner">
                    <h1>The lat <span class="font-bd">Pet Tag </span> <br> You'll ever need</h1>
                    <p>We took Apple's Find My tracking technology <br> and built it into a pet tag.</p>
                    <a class="btn btn-secondary" href="#">Shop Now</a>
                </div>
            </div>
        </section>
        <section class="myPets">
            <div class="container">
                <div class="myPets_inner">
                    <h2>My Pet’s</h2>
                    <p>Tap on a pet to view their profile</p>

                    <ul class="list-unstyled">
                        <li class="myPets_item">
                            <div class="myPets_item_img">
                                <img src="<?php echo IMAGES_URL ?>/pet_1.png" alt="pet" class="img-fluid" />
                            </div>
                            <p>Jebby</p>
                        </li>
                        <li class="myPets_item myPets_item-add">
                            <a href="javascript:;">
                                <div class="myPets_item_icon">
                                    <img src="<?php echo IMAGES_URL ?>/add_circle_icon.svg" alt="add" class="img-fluid" />
                                </div>
                                <p>Add Pet</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>



    </main>
    <?php include('include/footer.php') ?>
    <?php include('include/footer-scripts.php') ?>

</body>

</html>