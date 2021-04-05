<!---!DOC HTML Starts here--->
<?php require_once(INC_PATH . 'head.php'); ?>
<?php require_once(INC_PATH . "navigation.php"); ?>

<section class="content">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-5" style="background-color: #7f2222">
                <div id="user" class="justify-content-center" style="background-color: #2b7f22">
                    <img src="http://via.placeholder.com/180x180" alt="Card image">
                    <h4>Lorem Ipsum</h4>
                </div>

                <div id="tailors" style="background-color: #228f8b">
                    <h3>My Tailors</h3>
                    <hr>
                    <?php if (empty($data['tailors'])) : ?>
                        <h4>You have not contacted any tailor yet.</h4>
                    <?php else: ?>
                        <div>
                            <?php foreach ($data['tailors'] as $tailor) : ?>
                                <div>

                                    <h5><?php echo $tailor['tailor_fname'] . " " . $tailor['tailor_lname'] ?> <span>
                                    <button type="button" class="btn btn-secondary">
                                        <a href="<?php echo URL_ROOT; ?>customers/message/<?php echo $tailor['message_tailor_id']; ?>">Message!</a>
                                    </button>
                                </span></h5>


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




