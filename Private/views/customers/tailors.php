<!---!DOC HTML Starts here--->
<?php require_once(INC_PATH . 'head.php'); ?>
<?php require_once(INC_PATH . "navigation.php"); ?>

<section class="content">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-md-7 mx-auto"> <!-- -->
                <div id="user">
                    <img src="http://via.placeholder.com/180x180" alt="profile photo">
                    <h5><?php echo $data['self']['customer_fname'] . " " . $data['self']['customer_lname'] ;?></h5>
                </div>

                <div id="tailors">
                    <h3>My Tailors</h3>
                    <hr>
                    <?php if (empty($data['tailors'])) : ?>
                        <h4>You have not contacted any tailor yet.</h4>
                    <?php else: ?>
                        <div>
                            <?php foreach ($data['tailors'] as $tailor) : ?>
                                <div>
                                    <h5>
                                        <a href="<?php echo URL_ROOT; ?>customers/message/<?php echo $tailor['message_tailor_id']; ?>">
                                            <?php echo $tailor['tailor_fname'] . " " . $tailor['tailor_lname']; ?>
                                        </a>
                                  </h5>

                                </div>
                            <?php endforeach; ?>
                        </div>
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




