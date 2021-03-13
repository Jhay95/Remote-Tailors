<!--HTML !Doc Starts here-->
<?php
require_once(INC_PATH . 'head.php');
?>


<!--Carousel/Banner ---->
<header>
    <?php
    require_once(INC_PATH . 'navigation.php');
    ?>

    <div class="banner" id="men">

    </div>
</header>

<!--- Filter bar ---->
<?php
require_once(INC_PATH . 'filter.php')
?>


<!---Display Table--->
<section class="content">
    <div class="container">
        <div class="row">
            <?php foreach ($data['tailors'] as $tailor): ?>
                <div class="col-sm-4">
                    <div class="row t-card">
                        <div class="col-sm-5">
                            <img src="http://via.placeholder.com/140x140" alt="">
                        </div>

                        <div class="col-sm-7">
                            <br>
                            <h6><strong>Name: </strong><em><?= $tailor["tailor_fname"] . " " . $tailor["tailor_lname"]; ?></em></h6>
                            <h6><strong>Location:</strong><em><?= $tailor["tailor_city"]; ?></em></h6>
                            <h6><strong>Specialty:</strong><em><?= $tailor["tailor_style"]; ?></em></h6>
                            <button type="submit" class="btn btn-secondary btn-sm" name="see-tailor"><a href="<?= URL_ROOT ?>tailors/profile/<?= $tailor['tailor_id']?>">see more</a></button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
require_once(INC_PATH . 'footer.php');
?>
