<?php require_once(INC_PATH . "head.php"); ?>
<?php require_once(INC_PATH . "navigation.php"); ?>

    <section id="photo-upload">
        <div class="row justify-content-center">
            <div class="col-md-5 log-overlay">
                <div class="card bg-light">
                    <div class="card-header">
                        <h2>Upload my works</h2>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?php echo URL_ROOT; ?>profiles/works/<?php echo $_SESSION['id']; ?>" method="post"
                          enctype="multipart/form-data">
                        <h5>Please Select File</h5>
                        <p>file upload types: *.png, *.jpeg, *.gif</p>
                        <input type="file" multiple name="file[]" class="<?php echo (!empty($data['file_error'])) ? 'is-invalid' : ''; ?>">
                        <span class="invalid-feedback"><?php echo $data['file_error']; ?></span>
                        <button type="submit" class="btn btn-warning" id="butsave" name="submit">upload</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
require_once(INC_PATH . 'footer.php');
?>