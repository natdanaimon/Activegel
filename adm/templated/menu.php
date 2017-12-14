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








        <!--R8 ตั้งค่า-->
        <li class="nav-item <?= $_SESSION["nav_main_setting"] ?>">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-cog"></i>
                <span class="title">R8. <?= $_SESSION[setting] ?></span>
                <span class="selected"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  <?= $_SESSION["nav_sub_set_vat"] ?>">
                    <a href="set_vat.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[vat] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_dmg"] ?>">
                    <a href="set_dmg.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[level_dmg] ?></span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_daily"] ?>">
                    <a href="set_daily.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[daily_record] ?></span>
                        <span class="selected"></span>
                    </a>
                </li> 
                <li class="nav-item  <?= $_SESSION["nav_sub_set_item"] ?>">
                    <a href="set_item.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[item] ?></span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_comp_insurance"] ?>">
                    <a href="set_compInsurance.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[comp_insurance] ?></span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_comp_partner"] ?>">
                    <a href="set_compPartner.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[comp_partner] ?></span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_department"] ?>">
                    <a href="set_department.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[department] ?></span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_autoassessment"] ?>">
                    <a href="set_auto.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[autoassessment] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_cmail"] ?>">
                    <a href="set_mail.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[set_cmail] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_compu"] ?>">
                    <a href="set_compulsory.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[set_compu] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>





                <li class="heading">
                    <h3 class="uppercase"></h3>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_year"] ?>">
                    <a href="set_caryear.php" class="nav-link ">
                        <span class="title"><?= $_SESSION[set_year] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_brand"] ?>">
                    <a href="set_carbrand.php" class="nav-link ">
                        <span class="title"><?= $_SESSION[set_brand] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_gen"] ?>">
                    <a href="set_cargeneration.php" class="nav-link ">
                        <span class="title"><?= $_SESSION[set_generation] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_sub"] ?>">
                    <a href="set_carsub.php" class="nav-link ">
                        <span class="title"><?= $_SESSION[set_sub] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_set_map"] ?>">
                    <a href="set_carmapping.php" class="nav-link ">
                        <span class="title"><?= $_SESSION[set_mapping] ?></span>
                        <span class="selected"></span>
                        <span class="badge badge-success" ></span>
                    </a>
                </li>

            </ul>
        </li>
        <!--R8 ตั้งค่า-->



        
        <!--R9 บริหารจัดการข้อมูลพนักงาน-->
        <li class="nav-item <?= $_SESSION["nav_main_emp"] ?>">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-users"></i>
                <span class="title">R9. <?= $_SESSION[emp_manage] ?></span>
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
        <!--R9 บริหารจัดการข้อมูลพนักงาน-->















        <!--R14 บริหารจัดการหน้าจอเว็บไซต์-->
        <li class="nav-item <?= $_SESSION["nav_main_ui"] ?>">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="fa fa-television"></i>
                <span class="title">R14. <?= $_SESSION[ui_management] ?></span>
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
                <li class="nav-item  <?= $_SESSION["nav_sub_ui_knowledge"] ?>">
                    <a href="ui_knowledge.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[ui_knowledge] ?></span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_ui_promotion"] ?>">
                    <a href="ui_promotion.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[ui_promotion] ?></span>
                        <span class="selected"></span>
                    </a>
                </li>
                <li class="nav-item  <?= $_SESSION["nav_sub_ui_portfolio"] ?>">
                    <a href="ui_portfolio.php" class="nav-link ">

                        <span class="title"><?= $_SESSION[ui_portfolio] ?></span>
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
        <!--R14 บริหารจัดการหน้าจอเว็บไซต์-->



    <?php } ?>


















</ul>
</li>
</ul>