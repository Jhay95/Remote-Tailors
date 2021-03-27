<!---!DOC HTML Starts here--->
<?php require_once(INC_PATH . 'head.php'); ?>
<?php require_once(INC_PATH . "navigation.php"); ?>

<section class="content">
    <div class="container">
        <!---- Customer Message---->
                 <div class="row">
                    <!--Profile--->
                    <div class="col-md-4">
                                    
                                        <div class="card-body">
                                            <img src="http://via.placeholder.com/180x180" alt="Card image">
                                        </div>
                                        
                                    
                                        <div class="card-body">
                                                <h6 class="card-text">
                                                            <em><?php echo $data['customer']['customer_fname'] . " " . $data['customer']['customer_lname']; ?>
                                                                </em></h6>
                                        </div>

                                        <br>
                                        <!--My Tailors List--->
                                        <div>
                                            <h3>My Tailors List </h3>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <input type="radio" id="T1" name="mytailor" value="Tailor1">
                                                <img src="http://via.placeholder.com/40x40" class="img-responsive" style="width:20%" alt="Image"> 
                                                <strong>Tailor1</strong>
                                                </div>
                                            </div>
                                                </br>
                                                </br>
                                            <div class="row">
                                                <div class="col-md-12">   
                                                <input type="radio" id="T2" name="mytailor" value="Tailor2">
                                                <img src="http://via.placeholder.com/40x40" class="img-responsive" style="width:20%"
                                                        alt="Image"><strong>Tailor2</strong>

                                                </div>
                                            
                                            </div>
                                        </div>

                                        
                            </div>
                    
                    <!--Message Area-->
                    <div class="col-md-8">
                        <div class="row">
                                 <div class="col-md-12"> 
                             

                                            <label for="msg1">Message 1</label>
                                            <textarea class="form-control rounded-20" id="message1" rows="3"></textarea>


                                </div>
                        </div>
                        <br>
                        <div class="row">
                                 <div class="col-md-12"> 
                             

                                            <label for="msg2">Message 2</label>
                                            <textarea class="form-control rounded-20" id="message2" rows="3"></textarea>


                                </div>
                        </div>
                        <br>
                        <div class="row">
                                 <div class="col-md-12"> 
                             

                                            <label for="msg3">Message 3</label>
                                            <textarea class="form-control rounded-20" id="message3" rows="3"></textarea>


                                </div>
                        </div>
                        <br>
                        <div class="row">
                                 <div class="col-md-12"> 
                                <br>
                                <button type="button" class="btn btn-secondary"><a href="<?= URL_ROOT ?>pages/index"> Send</a></button>
                                <br>
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




