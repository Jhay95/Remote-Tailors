<?php require_once(INC_PATH . 'head.php'); ?>

<!--Carousel/Banner ---->
<header>
    <?php require_once(INC_PATH . 'navigation.php'); ?>

    <div class="banner" id="register">

    </div>
</header>

<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Create Account</h2>

                <div>
                    <form class="container needs-validation" action="<?= URL_ROOT ?>customers/register"
                          method="post"
                          novalidate>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="fname" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="uname">Username</label>
                            <input type="text" class="form-control" name="uname" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary" name="submit-visitor">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
require_once(INC_PATH . 'footer.php');
?>
