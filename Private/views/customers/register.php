<?php require_once(INC_PATH . 'head.php'); ?>
<?php require_once(INC_PATH . 'navigation.php'); ?>
<section class="container-fluid">
    <div class="row row-full">
        <div class="col-sm-3 col-md-6 col-lg-5">
            <div class="left-col" id="register">

            </div>
        </div>
        <div class="col-sm-9 col-md-6 col-lg-7">
            <div class="content col-md-10 justify-content-center">
                <h2>Create Account</h2>
                <form class="needs-validation" action="<?= URL_ROOT ?>customers/signup"
                      method="post">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname"
                               class="form-control <?php echo (!empty($data['fname_err'])) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $data['fname']; ?>">
                        <span class="invalid-feedback"><?php echo $data['fname_err']; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text"
                               class="form-control <?php echo (!empty($data['lname_err'])) ? 'is-invalid' : ''; ?>"
                               name="lname" value="<?php echo $data['lname']; ?>">
                        <span class="invalid-feedback"><?php echo $data['lname_err']; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email"
                               class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                               name="email" value="<?php echo $data['email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="uname">Username</label>
                        <input type="text"
                               class="form-control <?php echo (!empty($data['username_err'])) ? 'is-invalid' : ''; ?>"
                               name="uname" value="<?php echo $data['username']; ?>">
                        <span class="invalid-feedback"><?php echo $data['username_err']; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password"
                               class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>"
                               name="password" value="<?php echo $data['password']; ?>">
                        <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit-customer">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>


<?php require_once(INC_PATH . 'footer.php'); ?>

