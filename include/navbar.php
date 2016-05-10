<!-- NAVBAR
================================================== -->
<div class="navbar-wrapper">
    <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
    <div class="container">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="/"><img src="assets/img/logo.png" width="120"/></a>

                <div class="nav-collapse collapse">
                    <ul class="nav">
                        <li class="<?php echo ($page == "home" ? "active" : "")?>"><a href="/">ГЛАВНАЯ</a></li>
                        <li class="<?php echo ($page == "about" ? "active" : "")?>"><a href="about.php">ОБО МНЕ</a></li>
                        <li class="<?php echo ($page == "services" ? "active" : "")?>"><a href="services.php">УСЛУГИ</a></li>
                        <li class="<?php echo ($page == "blog" ? "active" : "")?>"><a href="blog.php">ФОТОСЕССИИ</a></li>
                        <li class="<?php echo ($page == "contacts" ? "active" : "")?>"><a href="contacts.php">КОНТАКТЫ</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- /.navbar-inner -->
        </div>
        <!-- /.navbar -->

    </div>
    <!-- /.container -->
</div>
<!-- /.navbar-wrapper -->
