<?php
include_once("public/includes/header.php");
?>
<section class="container">
    <div class="display-flex my-md mx-sm">
        <h1>Forget Password</h1>
        <form class="form shadow-md my-md mx-sm align-center" method="POST">
            <div class="input-wrapper border-radius-sm">
                <input class="input text-color-gray placeholder-color-light-gray focus-outline-indigo" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="button-wrapper border-radius-sm">
                <input class="button bg-color-indigo text-color-white focus-light-indigo hover-light-indigo" type="submit" name="forget" value="Submit">
                <a class="button bg-color-indigo text-color-white focus-light-indigo hover-light-indigo" href="?q=login">Login</a>
            </div>
        </form>
    </div>
</section>
<?php
include_once("public/includes/footer.php");
?>