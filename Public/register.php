<?php
require_once('head.php');
?>

<!--Carousel/Banner ---->
<header>
    <?php
    require_once("navigation.php");
    ?>

    <div class="banner" id="register">

    </div>
</header>

<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Create Account</h2>

                <div>
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-tailor-tab" data-toggle="tab" href="#nav-tailor"
                               role="tab"
                               aria-controls="nav-tailor" aria-selected="true">Tailor</a>
                            <a class="nav-item nav-link" id="nav-customer-tab" data-toggle="tab" href="#nav-customer"
                               role="tab"
                               aria-controls="nav-customer" aria-selected="false">Customer</a>
                        </div>
                    </nav>
                    <!---Error Message to output when submit button is click with empty fields---->
                    <?php
                    if (@$_GET['Empty']==true) {
                        ?>
                        <div style="color: #e50505;">
                            <?php
                            echo $_GET['Empty']
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <!---Error Message to output when Email Already exist---->
                    <?php
                    if (@$_GET['Email']==true) {
                        ?>
                        <div style="color: #e50505;">
                            <?php
                            echo $_GET['Email']
                            ?>
                        </div>
                        <?php
                    }
                    ?>

                    <!---Error Message to output when Username Already exist---->
                    <?php
                    if (@$_GET['Username']==true) {
                        ?>
                        <div style="color: #e50505;">
                            <?php
                            echo $_GET['Username']
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-tailor" role="tabpanel"
                             aria-labelledby="nav-tailor-tab">
                            <form class="container needs-validation" action="../Private/register.php" method="post" novalidate>
                                <div class="form-group">
                                    <label for="fname">First Name</label>
                                    <input type="text" class="form-control" name="fname" required>
                                </div>

                                <div class="form-group">
                                    <label for="lname">Last Name</label>
                                    <input type="text" class="form-control" name="lname" required>
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

                                <button type="submit" class="btn btn-primary" name="submit-tailor">Submit</button>
                            </form>
                        </div>

                        <div class="tab-pane fade show" id="nav-customer" role="tabpanel"
                             aria-labelledby="nav-customer-tab">
                            <form class="container needs-validation" action="../Private/register.php" method="post" novalidate>
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
        </div>
    </div>
</section>
<?php
require_once('footer.php');
?>
