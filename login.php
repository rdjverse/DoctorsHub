<?php include('header.php'); 
$title='Enter OTP';
?>

<div style= "max-width: fit-content; margin-left: auto; margin-right: auto; border: 2px solid #1B75BB; border-radius: 6px; margin-top: 4rem; padding: 2rem 0px; " class="col-lg-6" > 
    <div class="bg-white text-center rounded p-4">

        <form action="">

            <h1 class="mb-4" style=" font-size: 2rem;" ><?php echo $title; ?></h1>

            <div id="enter_mobile" class="col-12 col-md-12">
                <input  type="tel" class="form-control bg-light border-0" placeholder="Enter mobile number" style="height: 42px;" maxlength="10" value="" id="mobile_number">
            </div>
            <div id="enter_otp" class="col-12 col-md-12" style="display:none">
                <input type="text" class="form-control bg-light border-0" placeholder="Enter OTP" style="height: 42px" maxlength="4" id="input_otp">
            </div>

            <div class="col-sm-6" style="margin: 0px auto;">
                    <button id="send_otp" style=" border: 1px solid black; color:white; padding: 3px; border-radius: 7px; width: 100%; margin-top: 10px; background-color: #1877f2 !important;" type="button"> Send Otp </button>
                    <button id="verifying_otp" style="display:none; border: 1px solid black; color:white; padding: 3px; border-radius: 7px; width: 100%; margin-top: 10px; background-color: #1877f2 !important;" type="submit"> Verify </button>
                    <a href="resend_otp.php?mobile=7908099602&otp=8367" id="resend_btn" style="display:none;color:blue;text-decoration:underline;font-size: 12px">Resend otp</a>
                   
            </div>
        </form>
    </div>
</div
<?php include('footer.php'); ?>