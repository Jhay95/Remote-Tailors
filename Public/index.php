<?php
require_once('../Private/functions.php');

// Test tailor data
$res = get_tailor();

?>

<!--HTML !Doc Starts here-->
<?php
require_once('head.php');
?>


<!--Carousel/Banner ---->
<header>
    <?php
    require_once("navigation.php");
    ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../assets/images/pexels-cottonbro-4620607.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="../assets/images/pexels-cottonbro-4620610.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="../assets/images/pexels-pixabay-461035.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>...</h5>
                    <p>...</p>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<!--- Filter bar ---->
<div class="jumbotron">

</div>


<!---Display Table--->
<section class="container">
    <h1>Welcome!!</h1>

    <div class="container">
        <div class="row">
            <?php while ($row = $res->fetch_assoc()) { ?>
                <div class="col-sm-4 display">
                    <div>
                        <img class="pics" src="" alt="">
                    </div>

                    <div>
                        <?php echo "<h6>" . $row["tailor_fname"]. " " . $row["tailor_lname"] . "</h6>". "<br>"; ?>

                    </div>


                </div>
            <?php } ?>
        </div>
    </div>


</section>


<?php
require_once('footer.php');
?>
