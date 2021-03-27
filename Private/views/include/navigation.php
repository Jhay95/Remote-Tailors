<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo Section -->
        <a class="navbar-brand" href="<?= URL_ROOT ?>pages/index.php"><span class="text">Remote Tailor</span></a>

        <!-- Navigation Section -->
        <div class="row">
            <!--Clinton change the row class to col-->

            <!---First Navigation bar --->
            <div class="row-sm-8">
                <div id="navfirst">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <!---Clinton Changed ml-auto to justify-content-end --->
                            <?php if (loggedin() && $_SESSION['user'] == 'tailor') : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL_ROOT; ?>profiles/index/<?php echo $_SESSION['id']; ?>">My Dashboard</a>
                                </li>
                            <?php elseif (loggedin() && $_SESSION['user'] == 'customer') :  ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL_ROOT; ?>customers/index/<?php echo $_SESSION['id']; ?>">My Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo URL_ROOT; ?>customers/message/<?php echo $_SESSION['id']; ?>">My Messages</a>
                                </li>
                            <?php else : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= URL_ROOT ?>pages/index">Home</a>
                            </li>
                            <?php endif;?>

                            <li class="nav-item">
                                <a class="nav-link" href="<?= URL_ROOT ?>pages/about">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Looking for
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?= URL_ROOT ?>pages/men">Tailors for Men</a>
                                    <a class="dropdown-item" href="<?= URL_ROOT ?>pages/women">Tailors for Women</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!---Second Navigation bar --->
            <div class="row-sm-4">
                <div id="navsecond">
                    <ul class="navbar-nav ml-auto">
                        <!--Clinton Changed ml-auto to justify-content-end-->
                        <?php if (loggedin() && $_SESSION['user'] == 'tailor') : ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL_ROOT; ?>tailors/signout">Sign Out</a>
                            </li>
                        <?php elseif (loggedin() && $_SESSION['user'] == 'customer') :?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo URL_ROOT; ?>customers/signout">Sign Out</a>
                            </li>
                        <?php else : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Register
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?= URL_ROOT ?>tailors/signup">I am a Tailor</a>
                                    <a class="dropdown-item" href="<?= URL_ROOT ?>customers/signup">Looking for
                                        Tailor</a>
                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sign in
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="<?= URL_ROOT ?>tailors/signin">I am a Tailor</a>
                                    <a class="dropdown-item" href="<?= URL_ROOT ?>customers/signin">Looking for
                                        Tailor</a>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>