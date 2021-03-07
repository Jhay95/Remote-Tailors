<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Logo Section -->
        <a class="navbar-brand" href="<?= URL_ROOT?>pages/index.php"><span class="text">Remote Tailor</span></a>

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
                            <li class="nav-item">
                                <a class="nav-link" href="<?= URL_ROOT?>pages/index">Home</a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= URL_ROOT?>pages/about">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= URL_ROOT?>pages/men">Men</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= URL_ROOT?>pages/women">Women</a>
                            </li>
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
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL_ROOT?>pages/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= URL_ROOT?>pages/signin">Sign in</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</nav>
