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

    <div class="banner">

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

<!-- -->