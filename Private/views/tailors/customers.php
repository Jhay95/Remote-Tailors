<!---!DOC HTML Starts here--->
<?php require_once(INC_PATH . 'head.php'); ?>
<?php require_once(INC_PATH . "navigation.php"); ?>

<section class="content">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-md-7 mx-auto bg-light">
                <div id="user">
                    <img src="http://via.placeholder.com/180x180" alt="profile photo">
                    <h5><?php echo $data['self']['tailor_fname'] . " " . $data['self']['tailor_lname'] ;?></h5>
                </div>

                <div id="customers">
                    <h3>My Customers</h3>
                    <hr>
                    <?php if (empty($data['customers'])) : ?>
                        <h4>You do not have any Customer yet!</h4>
                    <?php else: ?>
                        <div>
                            <?php foreach ($data['customers'] as $customer) : ?>
                                <div>

                                    <h5>
                                        <a href="<?php echo URL_ROOT; ?>tailors/message/<?php echo $customer['message_customer_id']; ?>">
                                            <?php echo $customer['customer_fname'] . " " . $customer['customer_lname'] ;?>
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




