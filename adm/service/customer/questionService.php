<?php

@session_start();

class questionService {

    function dataTable() {
        $db = new ConnectDB();
        $strSql = " select u.*,s.s_detail_th status_th, s.s_detail_en status_en ";
        $strSql .= "from tb_question u , tb_status s  ";
        $strSql .= "where u.s_status = s.s_status ";
        $strSql .= "and s.s_type = 'MAIL' ";
        $strSql .= "order by u.d_create desc , u.s_status desc ";
        $_data = $db->Search_Data_FormatJson($strSql);
        $db->close_conn();
        return $_data;
    }

    function getInfo($seq) {
        $db = new ConnectDB();
        $strSql = " select * from tb_question where i_question =" . $seq;
        $_data = $db->Search_Data_FormatJson($strSql);
        $db->close_conn();
        return $_data;
    }

    function updateStatusRead($db, $seq) {
        $strSQL = "update tb_question set s_status = 'R' where i_question =".$seq;
        $arr = array(
            array("query" => "$strSQL")
        );
        $reslut = $db->insert_for_upadte($arr);
        return $reslut;
    }

    function delete($db, $seq) {
        $strSQL = "DELETE FROM tb_question WHERE i_question = '" . $seq . "' ";
        $arr = array(
            array("query" => "$strSQL")
        );
        $reslut = $db->insert_for_upadte($arr);
        return $reslut;
    }

    function deleteAll($db, $query) {

        $strSQL = "DELETE FROM tb_question WHERE i_question in ($query) ";
        $arr = array(
            array("query" => "$strSQL")
        );
        $reslut = $db->insert_for_upadte($arr);
        return $reslut;
    }

    function SelectById($db, $seq) {
        $strSql = "SELECT * FROM tb_question WHERE i_question = '" . $seq . "' ";
        $_data = $db->Search_Data_FormatJson($strSql);
        return $_data;
    }

    function SelectByArray($db, $query) {
        $strSql = "SELECT * FROM tb_question WHERE i_question in ($query) ";
        $_data = $db->Search_Data_FormatJson($strSql);
        return $_data;
    }

}
