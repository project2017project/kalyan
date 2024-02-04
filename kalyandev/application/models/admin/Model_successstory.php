<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Model_successstory extends CI_Model 

{



	function get_auto_increment_id()

    {

        $sql = "SHOW TABLE STATUS LIKE 'tbl_successstory'";

        $query = $this->db->query($sql);

        return $query->result_array();

    }

	

    function show() {

        $sql = "SELECT * FROM tbl_successstory t1

                JOIN tbl_lang t2

                ON t1.lang_id = t2.lang_id";

        $query = $this->db->query($sql);

        return $query->result_array();

    }



    function add($data) {

        $this->db->insert('tbl_successstory',$data);

        return $this->db->insert_id();

    }



    function update($id,$data) {

        $this->db->where('id',$id);

        $this->db->update('tbl_successstory',$data);

    }



    function delete($id)

    {

        $this->db->where('id',$id);

        $this->db->delete('tbl_successstory');

    }



    function getData($id)

    {

        $sql = 'SELECT * FROM tbl_successstory WHERE id=?';

        $query = $this->db->query($sql,array($id));

        return $query->first_row('array');

    }



    function successstory_check($id)

    {

        $sql = 'SELECT * FROM tbl_successstory WHERE id=?';

        $query = $this->db->query($sql,array($id));

        return $query->first_row('array');

    }

    

}