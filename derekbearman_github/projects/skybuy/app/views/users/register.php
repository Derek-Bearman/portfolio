<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="wrapper">
    <div class="background">
        <div class="form form-register">
            <h2>Create an Account</h2>
            <form action="<?php echo URLROOT; ?>/users/register" method="post">
                <div class="register-name form-grid-item">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="<?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['name']; ?>">
                    <span></span>
                    <span class="error"><?php echo $data['name_err']; ?></span>
                </div>
                <div class="register-email form-grid-item">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="<?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
                    <span></span>
                    <span class="error"><?php echo $data['email_err']; ?></span>
                </div>
                <div class="register-password form-grid-item">
                    <label for="password">Password:</label>
                    <input type="password" name="password" class="<?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                    <span></span>
                    <span class="error"><?php echo $data['password_err']; ?></span>
                </div>
                <div class="register-confirm form-grid-item">
                    <label for="confirm_password">Confirm:</label>
                    <input type="password" name="confirm_password" class="<?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['confirm_password']; ?>">
                    <span></span>
                    <span class="error"><?php echo $data['confirm_password_err']; ?></span>
                </div>

                <div class="form-submit form-grid-item">
                    <div class="login-register">
                        <a href="<?php echo URLROOT?>/users/login"><b>Login</b></a>
                    </div>
                    <input type="submit" value="Register" class="button">
                </div>
            </form>
        </div>
    </div>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
