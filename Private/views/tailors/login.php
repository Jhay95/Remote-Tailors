<!---!DOC HTML Starts here--->
<?php
require_once(INC_PATH . 'head.php');
?>
<?php require_once(INC_PATH . 'navigation.php'); ?>

<section id="login">
    <div class="row justify-content-center">
        <div class="col-md-5 align-self-center">
            <h2>Sign in</h2>
            <div>
                <form class="container" action="<?= URL_ROOT ?>tailors/signin" method="post">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email"
                               class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                               name="email" value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password"
                               class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                               name="password" value="<?php echo $data['password']; ?>">
                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>
                    <input type="submit" class="btn btn-primary" name="submit-tailor">
                </form>
            </div>
        </div>
    </div>
</section>


<?php
require_once(INC_PATH . 'footer.php');
?>
