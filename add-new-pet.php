<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Roam</title>
    <?php include('include/head-link.php'); ?>

</head>

<body>
    <?php include('include/header.php'); ?>
    <main class="addNewPetPage addNewPetPage-one">
        <div class="container">
            <div class="addNewPetPage_inner">
                <a href="javascript:void(0)" class="backBtn"><em class="icon-arrow-left-icon"></em> Add New Pet</a>
                <div class="addNewPetPage_details">
                    <section class="codeSec">
                        <div class="codeSec_inner">
                            <h3>Enter the code on the back of your RoamTag. </h3>
                            <p>If the link on your RoamTag is RoamTag.co/tag/aBc123, your <b>code is aBc123</b>.</p>
                        </div>
                    </section>
                    <section class="fromSec">
                        <from class="commonForm">
                            <div class="form-group floating-group mb-0">
                                <label class="floating-label">Roam Tag Code</label>
                                <input type="text" class="form-control floating-control" />
                            </div>
                            <p class="formNote">Please enter a Tag code.</p>
                        </form>
                    </section>
                    <section class="orSec">
                        
                    </section>
                    <section class="codeSec">
                        <div class="codeSec_inner d-flex align-items-center">
                            <div class="codeSec_txt">
                                <p>Scan the QR code on the back of Tag, Using of your back camera. </p>
                                <span>Scan Now</span>
                            </div>
                            <div class="codeSec_img">
                                
                            </div>
                        </div>
                    </section>
                    <a href="add-new-pet2.php" class="btn btn-primary w-100">Submit and Next</a>
                </div>
            </div>
        </div>

    </main>
    <?php include('include/footer.php') ?>
    <?php include('include/footer-scripts.php') ?>

</body>

</html>