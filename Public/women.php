<?php
require_once('../Private/functions.php');

// Test tailor data
$res = get_women();
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

    <div class="banner" id="women">

    </div>
</header>

<!--- Filter bar ---->
<?php
require_once("filter.php")
?>


<!---Display Table--->
<section class="content">
    <div class="container">
        <div class="row">
            <?php while ($row = $res->fetch_assoc()) { ?>
                <div class="col-sm-4">
                    <div class="row t-card">
                        <div class="col-sm-5">
                            <img src="http://via.placeholder.com/140x140" alt="">
                        </div>

                        <div class="col-sm-7">
                            <?php echo "<br>" . "<h6><strong>Name: </strong><em>" . $row["tailor_fname"] . " " . $row["tailor_lname"] . "</em></h6>";
                            echo "<h6><strong>Location:</strong><em>" . $row["tailor_city"] . "</em></h6>";
                            echo "<h6><strong>Specialty:</strong><em>" . $row["tailor_style"] . "</em></h6>";
                            ?>
                            <button type="submit" class="btn btn-secondary btn-sm" name="see-tailor">see more</button>
                        </div>
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