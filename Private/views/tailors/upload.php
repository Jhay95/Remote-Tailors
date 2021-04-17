<?php require_once(INC_PATH . "head.php"); ?>
<?php require_once(INC_PATH . "navigation.php"); ?>

    <div class="container">
        <div class="justify-content-center">
            <h2>Upload Photos</h2>
            <form action="<?= URL_ROOT ?>profiles/upload/" method="post" enctype="multipart/form-data">
            <p>Please Select FIle</p>
            <input type="file" name="file">
            <button type="submit" class="btn btn-warning" id="butsave" name="submit">upload</button>
            </form>
        </div>
    </div>

<?php
require_once(INC_PATH . 'footer.php');
?>