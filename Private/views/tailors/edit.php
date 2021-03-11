<?php require_once(INC_PATH . 'head.php'); ?>

<?php require_once(INC_PATH . 'navigation.php'); ?>

<section class="content">
    <div class="container">
        <div class="justify-content-center">
            <h2>Update Information</h2>
            <div>
                <form class="row g-3 needs-validation" action="<?= URL_ROOT ?>profiles/update/<?=$data['tailor']['tailor_id']?>"
                      method="post">

                    <div class="form-group col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname"
                               class="form-control <?php echo (!empty($data['fname_err'])) ? 'is-invalid' : ''; ?>"
                               value="<?php echo $data['tailor']['tailor_fname']; ?>">
                        <span class="invalid-feedback"><?php echo $data['fname_err']; ?></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="text"
                               class="form-control <?php echo (!empty($data['lname_err'])) ? 'is-invalid' : ''; ?>"
                               name="lname" value="<?php echo $data['tailor']['tailor_lname']; ?>">
                        <span class="invalid-feedback"><?php echo $data['lname_err']; ?></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email address</label>
                        <input type="email"
                               class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>"
                               name="email" value="<?php echo $data['tailor']['tailor_email']; ?>">
                        <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="phone">Phone Number</label>
                        <input type="number"
                               class="form-control <?php echo (!empty($data['phone_err'])) ? 'is-invalid' : ''; ?>"
                               name="phone" value="<?php echo $data['tailor']['tailor_phone']; ?>">
                        <span class="invalid-feedback"><?php echo $data['phone_err']; ?></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="address">Address</label>
                        <input type="text"
                               class="form-control"
                               name="address" value="<?php echo $data['tailor']['tailor_address']; ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text"
                               class="form-control"
                               name="city" value="<?php echo $data['tailor']['tailor_city']; ?>">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="gender">Gender</label>
                        <select class="form-select form-control" name="gender" >
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Undefined">Undefined</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="style">Style</label>
                        <select class="form-select form-control" name="style" >
                            <option value="English">English</option>
                            <option value="Native">Native</option>
                            <option value="Casual">Casual</option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="pref">Gender Preference</label>
                        <select class="form-select form-control" name="pref" >
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <input type="submit" class="btn btn-primary" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php
require_once(INC_PATH . 'footer.php');
?>
