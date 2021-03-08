<?php
/*session_start();

$www = WWW_ROOT;
$auth = 'tailors/index.php';
$unauth = 'validate.php';

if (IsSet($_SESSION["user"]))			//if username exists in session, user has logged in
{
    header("Location: $auth");		//forward to use home page
    exit();
}
*/ ?>

<!---!DOC HTML Starts here--->
<?php
require_once(INC_PATH . 'head.php');
?>

<!--Carousel/Banner ---->
<header>
    <?php
    require_once(INC_PATH . 'navigation.php');
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
                    <form class="container" action="<?= URL_ROOT ?>customers/login" method="post">
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
</section>
<?php
require_once(INC_PATH . 'footer.php');
?>
