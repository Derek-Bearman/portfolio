<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="wrapper">
    <div class="background">
        <div class="form form-login">
            <?php flash('register_success'); ?>
            <h2>Login</h2>
            <!-- <p>Please enter your credentials to log in.</p> -->
            <form action="<?php echo URLROOT ?>/users/login" method="POST">
                <div class="login-email form-grid-item">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="<?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                    <span></span>
                    <span class="error"><?php echo $data['email_err']; ?></span>
                </div>
                <div class="login-password form-grid-item">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="<?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                    <span></span>
                    <span class="error"><?php echo $data['password_err']; ?></span>
                </div>

                <div class="form-submit form-grid-item">
                    <div class="login-register">
                        <a href="<?php echo URLROOT?>/users/register"><b>Register</b></a>
                    </div>
                    <input type="submit" value="Login" class="button">
                </div>
            </form>
        </div>
    </div>
</div>

<?php require APPROOT . '/views/inc/footer.php'; ?>
