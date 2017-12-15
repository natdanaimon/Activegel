<?php

@session_start();

class notificationService {

    function countNotify() {
        require_once('../common/ConnectDB.php');
        $db = new ConnectDB();
        $strSql = "select * from tb_user";
        $_data = $db->Search_Data_FormatJson($strSql);
        $db->close_conn();
        return $_data;
    }

    function listNotify() {
        require_once('../common/ConnectDB.php');
        $db = new ConnectDB();
        $strSql = "";
        $strSql .= "select * from ( ";
        $strSql .= "select 'QUESTION' as 'app' , 'QUEST' as 'act' , s_subject  as 'text' , d_create as time from tb_question WHERE s_status = 'U' ";
        $strSql .= " ) noti order by time desc ";
        $_data = $db->Search_Data_FormatJson($strSql);
        $db->close_conn();
        return $_data;
    }

}
