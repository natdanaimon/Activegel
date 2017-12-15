<?php @session_start(); ?>

<ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
    <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <li class="sidebar-toggler-wrapper hide">
        <div class="sidebar-toggler">
            <span></span>
        </div>
    </li>
    <li class="heading">

    </li>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
    <li class="nav-item start <?= $_SESSION["nav_main_dashboard"] ?>">
        <a href="dashboard.php" class="nav-link nav-toggle">
            <i class="fa fa-pie-chart"></i>
            <span class="title"><?= $_SESSION[home_overview] ?></span>

        </a>
    </li>
    <?php if ($_SESSION["perm"] == "A") { ?>
        <!--R2 บริหารจัดการข้อมูลลูกค้า-->
        <li class="nav-item <?= $_SESSION["nav_main_cus"] ?>">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-user"></i>
                <span class="title">R2. <?= $_SESSION[cus_mcustomer] ?></span>
                <span class="selected"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  <?= $_SESSION["nav_sub_cus_customer"] ?>">
                    <a href="cus_customer.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[cus_customer] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>
            </ul>
        </li>
        <!--R2 บริหารจัดการข้อมูลลูกค้า-->













        <!--R3 บริหารจัดการข้อมูลพนักงาน-->
        <li class="nav-item <?= $_SESSION["nav_main_emp"] ?>">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-users"></i>
                <span class="title">R3. <?= $_SESSION[emp_manage] ?></span>
                <span class="selected"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  <?= $_SESSION["nav_sub_emp_user"] ?>">
                    <a href="emp_user.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[emp_user] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>




            </ul>
        </li>
        <!--R3 บริหารจัดการข้อมูลพนักงาน-->















        <!--R4 บริหารจัดการหน้าจอเว็บไซต์-->
        <li class="nav-item <?= $_SESSION["nav_main_ui"] ?>">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-television"></i>
                <span class="title">R4. <?= $_SESSION[ui_management] ?></span>
                <span class="selected"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  <?= $_SESSION["nav_sub_ui_slide"] ?>">
                    <a href="ui_slide.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[ui_slide] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_ui_news"] ?>">
                    <a href="ui_news.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[ui_news] ?></span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_ui_event"] ?>">
                    <a href="ui_event.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[ui_event] ?></span>
                        <span class="selected"></span>
                    </a>
                </li>

                <li class="nav-item  <?= $_SESSION["nav_sub_ui_popup"] ?>">
                    <a href="ui_popup.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[ui_popup] ?></span>
                        <span class="selected"></span>
                    </a>
                </li>



            </ul>
        </li>
        <!--R4 บริหารจัดการหน้าจอเว็บไซต์-->

        <!--R5 ตั้งค่า-->
        <li class="nav-item <?= $_SESSION["nav_main_setting"] ?>">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-cog"></i>
                <span class="title">R5. <?= $_SESSION[setting] ?></span>
                <span class="selected"></span>
            </a>
            <ul class="sub-menu">


                <li class="nav-item  <?= $_SESSION["nav_sub_set_comp_partner"] ?>">
                    <a href="set_compPartner.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[comp_partner] ?></span>
                        <span class="selected"></span>
                    </a>
                </li>

                <li class="nav-item  <?= $_SESSION["nav_sub_set_cmail"] ?>">
                    <a href="set_mail.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[set_cmail] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>



            </ul>
        </li>
        <!--R5 ตั้งค่า-->
    <?php } ?>


















</ul>
</li>
</ul>