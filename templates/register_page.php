<?php ?>



<section class="contents-section register-page">
    <div class="register-form-container">
        <form action="#" method="post">
            <fieldset class="form-fieldset register-form-fieldset">
                <legend class="form-legend register-form-legend">Sign Up</legend>


                <label>Email<br> <input type="email" class="register-form-item" name="register-email" required autofocus ></label>
                <label>Login<br><input type="text" class="register-form-item" name="register-login" required></label>
                <label>Password<br> <input type="password" class="register-form-item" name="register-password"required minlength="6" maxlength="12"></label>
                <label>Repeat password<br> <input type="password" class="register-form-item" name="register-password-repeat"required></label>
                <label>Nickname<br> <input type="text" class="register-form-item" name="register-nickname"required maxlength="24"> </label>

            </fieldset>
            <input type="submit" class="submit-filter-button register-form-submit" name="register-form-submit" value="Submit">

        </form>

    </div>
</section>
