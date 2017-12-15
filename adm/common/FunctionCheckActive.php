<?php

function ACTIVEPAGES($page, $sub) {


    //csm
    $_SESSION["nav_main_dashboard"] = "";
    $_SESSION["nav_main_setting"] = "";
    $_SESSION["nav_main_emp"] = "";
    $_SESSION["nav_main_cus"] = "";
    $_SESSION["nav_main_ui"] = "";

    //csm setting
    $_SESSION["nav_sub_set_comp_partner"] = "";
    $_SESSION["nav_sub_set_cmail"] = "";


    //csm employee
    $_SESSION["nav_sub_emp_user"] = "";




    //csm customer
    $_SESSION["nav_sub_cus_customer"] = "";
    $_SESSION["nav_sub_cus_question"] = "";



    //csm ui
    $_SESSION["nav_sub_ui_slide"] = "";
    $_SESSION["nav_sub_ui_news"] = "";
    $_SESSION["nav_sub_ui_event"] = "";
    $_SESSION["nav_sub_ui_popup"] = "";






    if ($page == 0) {
        $_SESSION["nav_main_dashboard"] = " active open";
    } else if ($page == 1) {
        
    } else if ($page == 2) {

        $_SESSION["nav_main_cus"] = " active open";
        if ($sub == 1) {
            $_SESSION["nav_sub_cus_customer"] = " active open";
        }else if ($sub == 2) {
            $_SESSION["nav_sub_cus_question"] = " active open";
        }
    } else if ($page == 9) {
        $_SESSION["nav_main_emp"] = " active open";
        if ($sub == 1) {
            $_SESSION["nav_sub_emp_user"] = " active open";
        }
    } else if ($page == 14) {
        $_SESSION["nav_main_ui"] = " active open";
        if ($sub == 1) {
            $_SESSION["nav_sub_ui_slide"] = " active open";
        } else if ($sub == 2) {
            $_SESSION["nav_sub_ui_news"] = " active open";
        } else if ($sub == 5) {
            $_SESSION["nav_sub_ui_popup"] = " active open";
        } else if ($sub == 7) {
            $_SESSION["nav_sub_ui_event"] = " active open";
        }
    } else if ($page == 99) {
        $_SESSION["nav_main_setting"] = " active open";

        if ($sub == 7) {
            $_SESSION["nav_sub_set_comp_partner"] = " active open";
        } else if ($sub == 14) {
            $_SESSION["nav_sub_set_cmail"] = " active open";
        }
    }
}
