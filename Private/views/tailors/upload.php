<?php require_once(INC_PATH . 'head.php'); ?>

<?php require_once(INC_PATH . 'navigation.php'); ?>

<?php echo "Hello" ?>;

<section class="container">
    <div class="container p-5 d-flex justify-content-center">
        <div class="justify-content-center">
            <h2>Upload Photos</h2>
            <div>
                <form class="row g-3 needs-validation" action="<?= URL_ROOT ?>Profiles/upload.php/<?=$data['id']?>"
                      method="post">                      
                    Select Image File to Upload:
                   <input type="file" name="images" multiple="multiple">
                   <button type="submit" class="btn btn-warning" id="butsave"
                     name="submit">Submit<span class="glyphicon glyphicon-send"></span></button>
                    </form>
            </div>
        </div>
    </div>
</section>

<?php
require_once(INC_PATH . 'footer.php');
?>


