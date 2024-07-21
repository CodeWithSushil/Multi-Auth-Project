<?php
include_once("public/includes/header.php");
?>
<section class="container">
    <div class="display-flex my-md mx-sm">
        <h1>New Password</h1>
        <form class="form shadow-md my-md mx-sm align-center" method="POST">
            <input type="hidden" name="email" value="email">
            <div class="input-wrapper border-radius-sm">
                <input class="input text-color-gray placeholder-color-light-gray focus-outline-indigo" type="number" name="otp" placeholder="OTP" required>
                <a class="button" id="otp">Resend OTP</a>
            </div>
            <div class="input-wrapper border-radius-sm">
                <input class="input text-color-gray placeholder-color-light-gray focus-outline-indigo" type="password" name="password" placeholder="New password" required>
            </div>
            <div class="button-wrapper border-radius-sm">
                <input class="button bg-color-indigo text-color-white focus-light-indigo hover-light-indigo" type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</section>
<?php
include_once("public/includes/footer.php");
?>
