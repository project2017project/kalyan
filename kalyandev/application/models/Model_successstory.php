<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Model_successstory extends CI_Model 

{

    public function all_successstory()

    {

        $query = $this->db->query("SELECT * FROM tbl_successstory WHERE lang_id=? ORDER BY id ASC", [$_SESSION['sess_lang_id']]);

        return $query->result_array();

    }



    public function successstory_check($id) {

        $sql = 'SELECT * FROM tbl_successstory WHERE id=?';

        $query = $this->db->query($sql,array($id));

        return $query->num_rows();

    }



    public function successstory_detail($id) {

        $sql = 'SELECT * FROM tbl_successstory WHERE id=?';

        $query = $this->db->query($sql,array($id));

        return $query->first_row('array');

    }



    public function check_captcha()

    {

        $query = $this->db->query("SELECT * FROM tbl_setting_captcha WHERE id=?",[1]);

        return $query->first_row('array');

    }



    public function total_captcha()

    {

        $query = $this->db->query("SELECT * FROM tbl_captcha");

        return $query->num_rows();

    }



    public function get_particular_captcha($id)

    {

        $query = $this->db->query("SELECT * FROM tbl_captcha WHERE captcha_id=?",[$id]);

        return $query->first_row('array');

    }

}