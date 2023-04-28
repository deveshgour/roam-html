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
            <div class="authPage_top text-center">
                <a href="javascript:void(0);" class="authPage_button"></a>
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
                            <em class="icon-eye form-icon toggle-password" toggle="#password-field"></em>
                        </div>
                        <div class="form-group floating-group">
                            <label class="floating-label">Confirm Password</label>
                            <input type="password" class="form-control floating-control" id="password-field1"/>
                            <em class="icon-eye form-icon toggle-password" toggle="#password-field1"></em>
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
    <script>

    $(".toggle-password").click(function() {
        $(this).toggleClass("icon-eye icon-eye");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
        input.attr("type", "text");
        } else {
        input.attr("type", "password");
        }
    })
    // ----floatin input label in input and select

$('.form-group').find('.floating-control').each(function (index, ele) {
	var $ele = $(ele);
	if($ele.val() != '' || $ele.is(':selected') === true){
		$ele.parents('.floating-group').addClass('focused');
	}
})


$('.floating-control').on('focus', function (e) {
	$(this).parents('.floating-group').addClass('focused');	
}).on('blur', function(){
	if($(this).val().length > 0){
		$(this).parents('.floating-group').addClass('focused');		
	}else{
		$(this).parents('.floating-group').removeClass('focused');
	}
});
$('.floating-control').on('change', function (e) {
	if($(this).is('select')){
		if($(this).val() === $("option:first", $(this)).val()) {
			$(this).parents('.floating-group').removeClass('focused');
		}
		else{
			$(this).parents('.floating-group').addClass('focused');
		}
	}
})


// --------select2-------
$(document).ready(function() {
	//---- select2 single----
	$('.customSelect').each(function() {
		var dropdownParents = $(this).parents('.select2Part')
		$(this).select2({
			dropdownParent: dropdownParents,
			minimumResultsForSearch: -1
		}).on("select2:open", function (e) { 
			$(this).parents('.floating-group').addClass('focused');
		}).on("select2:close", function (e) {
			if($(this).find(':selected').val() === ''){
				$(this).parents('.floating-group').removeClass('focused');
			}
		});
	});

	//---- select2 multiple----
	$('.customSelectMultiple').each(function() {
		var dropdownParents = $(this).parents('.select2Part');
		// var placehldrget = $(this).attr("data-placeholder");
		$(this).select2({
			dropdownParent: dropdownParents,
			// placeholder: placehldrget,
			// tags: true,
			// closeOnSelect: false,
		}).on("select2:open", function (e) { 
			$(this).parents('.floating-group').addClass('focused');
		}).on("select2:close", function (e) {
			if($(this).val() != ''){
				$(this).parents('.floating-group').addClass('focused');
			}else{
				$(this).parents('.floating-group').removeClass('focused');
			}
		}).on("select2:select", function (e) { 
			$(this).parents('.floating-group').addClass('focused');
		}).on("select2:unselect", function (e) {
			$(this).parents('.floating-group').addClass('focused');
		})
	});
});
</script>
</body>
</html>