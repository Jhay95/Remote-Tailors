<?php require_once(INC_PATH . 'head.php'); ?>

<?php require_once(INC_PATH . 'navigation.php'); ?>

<section class="container">
    <div class="container p-5 d-flex justify-content-center">
        <div class="justify-content-center">
            <h2>Upload Photos</h2>
            <div>
                <form method="post" action="multi_file_upload"  enctype="multipart/form-data">
                    <input type="file" name="image[]" multiple="multiple">
                  <button type="submit" class="btn btn-warning" id="butsave"
                            name="submit">Submit<span class="glyphicon glyphicon-send"></span></button></p>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
require_once(INC_PATH . 'footer.php');
?>



