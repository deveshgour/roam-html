<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Roam</title>
    <?php include('include/head-link.php'); ?>

</head>

<body>
    <?php include('include/header.php'); ?>
    <main class="addNewPetPage addNewPetPage-two">
        <div class="container">
            <div class="addNewPetPage_inner">
                <a href="javascript:void(0)" class="backBtn"><em class="icon-arrow-left-icon"></em> Add New Pet</a>
                <section class="petDetails">
                    <div class="petDetails_inner d-flex align-items-center">
                        <div class="petDetails_img flex-shrink-0">
                            <img src="<?php echo IMAGES_URL ?>/add-pet-img.png" alt="pet" class="img-fluid" />
                        </div>
                        <div class="petDetails_txt">
                            <h3 class="font-sbd">Your Pet Roam Tag is Added</h3>
                            <p>You can attach multiple roamtag to a single pet. if you remove a tag from a pet you will need to activate it again</p>
                            <div class=" d-flex align-items-center justify-content-between petDetails_price">
                                <div>
                                    <h6 class="font-sbd mb-0">RO2345M</h6>
                                    <span class="status font-sbd">Activate</span>
                                </div>
                                <a href="#!" class="btn btn-md btn-primary">Remove</a>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="petForm py-60">
                    <div class="petForm_inner">
                        <from class="commonForm">
                            <div class="uploadPhoto mx-auto text-center">
                                <span class="uploadPhoto_img mx-auto"><img src="<?php echo IMAGES_URL ?>/gallery.png" alt="gallery" class="img-fluid" /></span>
                                <label><input type="file" name="">Upload Photo</label>
                            </div>
                            <div class="form-group floating-group">
                                <label class="floating-label">Name</label>
                                <input type="text" class="form-control floating-control" />
                            </div>
                            <div class="form-group floating-group">
                                <label class="floating-label">Bio</label>
                                <textarea name="" id="" rows="4" class="form-control form-control-textarea floating-control"></textarea>
                            </div>
                            <div class="form-group floating-group">
                                <label class="floating-label">Breed</label>
                                <input type="text" class="form-control floating-control" />
                            </div>
                            <div class="form-group select2 w-100 floating-group">
                                <label class="floating-label">Weight (lb)</label>
                                <select name="" id="" class="form-control customSelect floating-control">
                                    <option value="" >Select Weight</option>
                                    <option value="1" selected>Weight 1</option>
                                    <option value="2">Weight 2</option>
                                </select>
                                <em class="icon-arrow_down form-icon"></em>
                            </div>
                            <div class="form-group floating-group">
                                <label class="floating-label">Birthdate (Estimate if necessary)</label>
                                <input type="" class="form-control floating-control" />
                            </div>
                            <div class="form-group">
                                <div class="radioBtns">
                                    <input type="radio" name="radio" id="male" checked>
                                    <label for="male">Male</label>
                                    <input type="radio" name="radio" id="female">
                                    <label for="female">Female</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="mb-0">You can skip after basic info and can fill other info on pet profile edit page. </p>
                            </div>
                            <button class="btn btn-primary w-100">Save & Exit</button>
                        </from>
                    </div>
                </section>
            </div>
        </div>

    </main>
    <?php include('include/footer.php') ?>
    <?php include('include/footer-scripts.php') ?>

</body>

</html>