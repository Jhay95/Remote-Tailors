<!---!DOC HTML Starts here--->
<?php require_once(INC_PATH . 'head.php'); ?>
<?php require_once(INC_PATH . "navigation.php"); ?>

<section class="content">
    <div class="container">
        <!---- Tailor profile---->
        <div class="row">
            <div class="col-sm-9">
                <div class="row">
                    <!--Profile pics--->
                    <div class="col-sm-3">
                        <?php if (empty($data['photo'])): ?>
                            <?php if ($data['tailor']['tailor_gender'] == 'Male'): ?>
                                <img src="<?php echo URL_ROOT; ?>assets/profile_uploads/m dummy.png"
                                     alt="Card image" width="180px" height="180px">
                            <?php else: ?>
                                <img src="<?php echo URL_ROOT; ?>assets/profile_uploads/f dummy.png"
                                     alt="Card image" width="180px" height="180px">
                            <?php endif; ?>

                        <?php else: ?>
                            <img src="<?php echo URL_ROOT; ?>assets/profile_uploads/<?php echo $data['photo']['photo_name']; ?>"
                                 alt="Card image" width="180px" height="180px">
                        <?php endif; ?>
                    </div>

                    <!--Data information--->
                    <div class="col-9">
                        <div class="row">
                            <div class="col-sm-6">
                                <br>
                                <h6 class="card-text"><strong>NAME:</strong>
                                    <em><?php echo $data['tailor']['tailor_fname'] . " " . $data['tailor']['tailor_lname']; ?>
                                        <em></h6>
                                <br>
                                <h6 class="card-text">
                                    <strong>LOCATION: </strong><em><?php echo $data['tailor']['tailor_city']; ?></em>
                                </h6>
                                <br>
                                <h6 class="card-text"><strong>STYLE: </strong>
                                    <em><?php echo $data['tailor']['tailor_style']; ?></em></h6>
                                <br>
                                <h6 class="card-text"><strong>GENDER PREFERENCE: </strong>
                                    <em><?php echo $data['tailor']['tailor_pref']; ?></em></h6>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!----Modify Tailor profile---->
            <div class="col-sm-3">
                <div class="well well-sm text-center">
                    <div class="btn-group-vertical">
                        <br>
                        <button type="button" class="btn btn-secondary"><a href="<?php echo URL_ROOT ;?>customers/message/<?php echo $data['tailor']['tailor_id'] ; ?>">Contact</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!---Tailors Work Gallery --->
<section class="content">
    <div class="container">
        <!----Photo Gallery------>
        <div class="row">
            <div class="col-md-9">
                <h3>Tailor's Works</h3>
                <div class="row">
                    <?php if (empty($data['works'])): ?>
                        <div class="col-sm-3">
                            <img src="http://via.placeholder.com/180x180" alt="Card image">
                        </div>
                    <?php else: ?>
                        <?php foreach ($data['works'] as $work): ?>
                            <div class="col-sm-3">
                                <img src="<?php echo URL_ROOT; ?>assets/work_uploads/<?php echo $work['photo_name']; ?>"
                                     alt="Card image" width="180px" height="180px">
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  footer -->
<?php
require_once(INC_PATH . 'footer.php');
?>
