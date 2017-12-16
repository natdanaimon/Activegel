<?php


class mailService {

    function getListEmail($db) {
        
        $sql = " select * from tb_customer where s_status = 'A' and s_flg_email = 'Y' ";

        $_data = $db->Search_Data_FormatJson($sql);
        $db->close_conn();
        return $_data;
    }

}
