<?php pageAdd('include/header');?>
<section class="container">
    <div class="display-flex my-md mx-sm">
        <h1>Login page</h1>
        <form class="form shadow-md my-md mx-sm align-center" method="POST" action="submit-login">
            <div class="input-wrapper border-radius-sm">
                <input class="input text-color-gray placeholder-color-light-gray focus-outline-indigo" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-wrapper border-radius-sm">
                <input class="input text-color-gray placeholder-color-light-gray focus-outline-indigo" type="password" name="password" placeholder="Password" required>
            </div>
            <div class="button-wrapper border-radius-sm">
                <input class="button bg-color-indigo text-color-white focus-light-indigo hover-light-indigo" type="submit" name="login" value="Login">
            </div>
            <div class="button-wrapper border-radius-sm action-btns">
                <a class="button bg-color-indigo text-color-white focus-light-indigo hover-light-indigo" href="forget-password">Forget Password?</a>
                <a class="button bg-color-indigo text-color-white focus-light-indigo hover-light-indigo" href="register">Register</a>
            </div>
        </form>
    </div>
</section>

<?php pageAdd('include/footer'); ?>