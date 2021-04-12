<!---!DOC HTML Starts here--->
<?php require_once(INC_PATH . 'head.php'); ?>
<?php require_once(INC_PATH . "navigation.php"); ?>

<section class="content">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-md-7 mx-auto">
                <span><a href="<?php echo URL_ROOT; ?>customers/tailors/<?php echo $_SESSION['id']; ?>">Back to contacts</a>
                </span>
            </div>
            <div class="col-md-7 mx-auto bg-light">
                <div class="user">
                    <img src="http://via.placeholder.com/50x50" alt="">
                    <span><?php echo $data['tailor']['tailor_fname'] . " " . $data['tailor']['tailor_lname']; ?></span>
                </div>

                <!-------Messages if any exist------------>
                <?php if (!empty($data['messages'])) : ?>
                    <div>
                        <?php foreach ($data['messages'] as $message) : ?>
                            <div>
                                <span><?php echo $message['message_sent_date']; ?></span>
                                <span><?php echo ($message['message_sent_by'] == 'Customer') ? 'by me' : 'by '.$data['tailor']['tailor_fname'] . " " . $data['tailor']['tailor_lname']; ?></span>
                                <p><?php echo $message['message_body']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <!-------Form for new message------->
                <form action="<?php echo URL_ROOT; ?>customers/message/<?php echo $data['tailor']['tailor_id']; ?>"
                      method="post">
                    <div class="form-group">
                        <textarea name="message" id=""
                                  class="form-control <?php echo (!empty($data['message_err'])) ? 'is-invalid' : ''; ?>"
                                  placeholder="Start typing message here"
                                  cols="25" rows="5"></textarea>
                        <span class="invalid-feedback"><?php echo $data['message_err']; ?></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="send">

                    </div>

                </form>

            </div>
        </div>

    </div>
</section>


<!--  footer -->
<?php
require_once(INC_PATH . 'footer.php');
?>




