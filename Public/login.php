<?php
require_once('../Private/initialize.php');

session_start();

$www = WWW_ROOT;
$auth = 'tailors/index.php';
$unauth = 'validate.php';

if (IsSet($_SESSION["user"]))			//if username exists in session, user has logged in
{
    header("Location: $auth");		//forward to use home page
    exit();
}
?>

<!---!DOC HTML Starts here--->
<?php
require_once('head.php');
?>

<!--Carousel/Banner ---->
<header>
    <?php
    require_once("navigation.php");
    ?>

    <div class="banner" id="login">

    </div>
</header>

<section class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Sign in</h2>

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

                    <!---Error Message to output when Login details are not valid---->
                    <?php
                    if (@$_GET['Invalid']==true) {
                        ?>
                        <div style="color: #e50505;">
                            <?php
                            echo $_GET['Invalid']
                            ?>
                        </div>
                        <?php
                    }
                    ?>

                    <!---Logged out Message ---->
                    <?php
                    if (@$_GET['Logout']==true) {
                        ?>
                        <div style="color: #e50505;">
                            <?php
                            echo $_GET['Logout']
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-tailor" role="tabpanel"
                             aria-labelledby="nav-tailor-tab">
                            <form class="container" action="../Private/validate.php" method="post">

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <input type="submit" class="btn btn-primary" name="submit-tailor">
                            </form>
                        </div>

                        <div class="tab-pane fade show" id="nav-customer" role="tabpanel"
                             aria-labelledby="nav-customer-tab">
                            <form class="container" action="../Private/validate.php" method="post">

                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <input type="submit" class="btn btn-primary" name="submit-visitor">
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
