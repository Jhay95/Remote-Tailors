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
                        <div class="card-body">
                            <?php if (empty($data['photo'])): ?>
                                <?php if ($data['customer']['customer_gender'] == 'Male'): ?>
                                    <img src="<?php echo URL_ROOT; ?>assets/profile_uploads/m dummy.png"
                                         alt="Card image" width="160px" height="160px">
                                <?php else: ?>
                                    <img src="<?php echo URL_ROOT; ?>assets/profile_uploads/f dummy.png"
                                         alt="Card image" width="160px" height="160px">
                                <?php endif; ?>
                            <?php else: ?>
                                <img src="<?php echo URL_ROOT; ?>assets/profile_uploads/<?php echo $data['photo']['photo_name']; ?>"
                                     alt="Card image" width="160px" height="160px">
                            <?php endif; ?>
                        </div>
                    </div>

                    <!--Data information--->
                    <div class="col-9">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <br>
                                <h6 class="card-text"><strong>NAME:</strong>
                                    <em><?php echo $data['customer']['customer_fname'] . " " . $data['customer']['customer_lname']; ?>
                                        <em></h6>
                                <br>
                                <h6 class="card-text">
                                    <strong>LOCATION: </strong><em><?php echo $data['customer']['customer_city']; ?></em>
                                </h6>
                                <br>
                                <h6 class="card-text">
                                    <strong>GENDER: </strong><em><?php echo $data['customer']['customer_gender']; ?></em>
                                </h6>
                            </div>

                            <div class="col-sm-6">
                                <br>
                                <h6 class="card-text">
                                    <strong>EMAIL: </strong><em><?php echo $data['customer']['customer_email']; ?></em>
                                </h6>
                                <br>
                                <h6 class="card-text">
                                    <strong>PHONE: </strong><em><?php echo $data['customer']['customer_phone']; ?></em>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!----Modify Tailor profile---->
            <div class="col-sm-3">
                <div class="well well-sm text-center">
                    <div class="btn-group-vertical">
                        <button type="button" class="btn btn-secondary"><a
                                    href="<?php echo URL_ROOT ;?>customers/edit/<?php echo $data['customer']['customer_id']; ?>">Edit
                                Profile</a></button>
                        <br>
                        <button type="button" class="btn btn-secondary"><a
                                    href="<?php echo URL_ROOT; ?>customers/upload/<?php echo $data['customer']['customer_id']; ?>">Upload
                                Photo</a></button>
                        <br>
                        <button type="button" class="btn btn-secondary">Upload Works</button>
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
                <h3>My Orders</h3>
                <div class="row">
                    <div class="col-sm-3">
                        <img src="http://via.placeholder.com/140x140" class="img-responsive" style="width:100%"
                             alt="Image">
                    </div>
                    <div class="col-sm-3">
                        <img src="http://via.placeholder.com/140x140" class="img-responsive" style="width:100%"
                             alt="Image">
                    </div>
                    <div class="col-sm-3">
                        <img src="http://via.placeholder.com/140x140" class="img-responsive" style="width:100%"
                             alt="Image">
                    </div>
                    <div class="col-sm-3">
                        <img src="http://via.placeholder.com/140x140" class="img-responsive" style="width:100%"
                             alt="Image">
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="well well-sm text-center">
                    <div class="btn-group-vertical">
                        <br>
                        <button type="button" class="btn btn-secondary"><a href="<?php echo URL_ROOT;?>pages/index">Find a
                                Tailor</a></button>
                        <br>
                        <button type="button" class="btn btn-secondary">My Orders</button>
                        <br>
                        <button type="button" class="btn btn-secondary"><a href="<?php echo URL_ROOT ;?>customers/tailors/<?php echo $data['customer']['customer_id']; ?>">My Tailors</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  footer -->
<?php
require_once(INC_PATH . 'footer.php');
?>




