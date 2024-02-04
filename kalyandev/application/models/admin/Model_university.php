<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Model_university extends CI_Model 

{



	function get_auto_increment_id()

    {

        $sql = "SHOW TABLE STATUS LIKE 'tbl_university'";

        $query = $this->db->query($sql);

        return $query->result_array();

    }

	

    function show() {

        $sql = "SELECT * FROM tbl_university t1

                JOIN tbl_lang t2

                ON t1.lang_id = t2.lang_id";

        $query = $this->db->query($sql);

        return $query->result_array();

    }



    function add($data) {

        $this->db->insert('tbl_university',$data);

        return $this->db->insert_id();

    }



    function update($id,$data) {

        $this->db->where('id',$id);

        $this->db->update('tbl_university',$data);

    }



    function delete($id)

    {

        $this->db->where('id',$id);

        $this->db->delete('tbl_university');

    }



    function getData($id)

    {

        $sql = 'SELECT * FROM tbl_university WHERE id=?';

        $query = $this->db->query($sql,array($id));

        return $query->first_row('array');

    }



    function university_check($id)

    {

        $sql = 'SELECT * FROM tbl_university WHERE id=?';

        $query = $this->db->query($sql,array($id));

        return $query->first_row('array');

    }

    

}