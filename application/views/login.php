<form action="<?php echo base_url("logincontroller/login");  ?>" class="form" method="post" id="login-form">
    <h1 class="form__title">Login</h1>

    <hr class="form__sep">

    <div class="form__content">
        <div class="form__input vertical">
            <label for="login-email" class="form__label">Email:</label>

            <input required type="email" name="email" id="login-email" class="form__input-field" value="" placeholder="" />
        </div>

        <div class="form__input vertical">
            <label for="login-password" class="form__label">Password:</label>

            <input required type="password" name="password" id="login-password" class="form__input-field" value="" placeholder="" />
        </div>
    </div>

    <input type="submit" value="Submit" class="form__submit btn" />
    <a style="text-align: center;"  href="<?php echo base_url("logincontroller/signup"); ?>"> Sign up?</a>
</form>