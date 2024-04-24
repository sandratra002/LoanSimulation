<a href="<?php echo base_url("simulation/simulation_list");  ?>">See all simulation</a>

<form action="<?php echo base_url("simulation/simulate");  ?>" class="form" method="post" id="login-form">
    <h1 class="form__title">Simulation</h1>

    <hr class="form__sep">

    <div class="form__content">
        <div class="form__input vertical">
            <label for="login-email" class="form__label">Amount:</label>

            <input required type="number" name="email" id="login-email" class="form__input-field" value="" placeholder="" />
        </div>

        <div class="form__input vertical">
            <label for="lrate" class="form__label">Rate:</label>

            <input required type="number" name="rate" id="lrate" class="form__input-field" value="" placeholder="" />
        </div>
        <div class="form_input horizontal">
            <div class="form__input vertical">
                <label for="start_date" class="form__label">StartDate:</label>

                <input required type="number" name="start_date" id="start_date" class="form__input-field" value="" placeholder="" />
            </div>
            <div class="form__input vertical">
                <label for="duration" class="form__label">Duration:</label>

                <input required type="number" name="duration" id="duration" class="form__input-field" value="" placeholder="" />
            </div>
            <div class="form__input vertical">
                <label for="start_return" class="form__label">Start return:</label>

                <input required type="number" name="start_return" id="start_return" class="form__input-field" value="" placeholder="" />
            </div>
        </div>
    </div>

    <input type="submit" value="Submit" class="form__submit btn" />
    <?php if (isset($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
    <?php  } ?>
</form>