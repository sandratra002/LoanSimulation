<form action="<?php echo base_url("logincontroller/signup"); ?>" class="form enabled" method="post" id="signup-form">
    <h1 class="form__title">Signup</h1>

    <hr class="form__sep">

    <div class="form__content">
        <div class="form__input-group horizontal">
            <div class="form__input vertical">
                <label for="name" class="form__label">Name:</label>

                <input required type="text" name="name" id="name" class="form__input-field" value="" placeholder="" />
            </div>
            <div class="form__input vertical">
                <label for="first-name" class="form__label">First name:</label>

                <input required type="text" name="first-name" id="first-name" class="form__input-field" value="" placeholder="" />
            </div>
        </div>
        <div class="form__input vertical">
            <label for="signup-email" class="form__label">Email:</label>

            <input required type="email" name="email" id="signup-email" class="form__input-field" value="" placeholder="" />
        </div>

        <div class="form__input-group horizontal">
            <div class="form__input vertical">
                <label for="password" class="form__label">Password:</label>

                <input required type="password" name="password" id="password" class="form__input-field" value="" placeholder="" />
            </div>
            <div class="form__input vertical">
                <label for="confirm-password" class="form__label">Confirm Password:</label>

                <input required type="password" name="confirm-password" id="confirm-password" class="form__input-field" value="" placeholder="" />
            </div>
        </div>
    </div>
    <input type="submit" value="Submit" class="form__submit btn" />
</form>