<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Successstory extends CI_Controller 

{

	function __construct() 

	{

        parent::__construct();

        $this->load->model('admin/Model_common');

        $this->load->model('admin/Model_successstory');

    }



	public function index()

	{

		$data['setting'] = $this->Model_common->get_setting_data();



		$data['successstory'] = $this->Model_successstory->show();



		$this->load->view('admin/view_header',$data);

		$this->load->view('admin/view_successstory',$data);

		$this->load->view('admin/view_footer');

	}



	public function add()

	{

		$data['setting'] = $this->Model_common->get_setting_data();

		$data['all_lang'] = $this->Model_common->all_lang();



		$error = '';

		$success = '';



		if(isset($_POST['form1'])) {



			if(PROJECT_MODE == 0) {

				$this->session->set_flashdata('error',PROJECT_NOTIFICATION);

				redirect($_SERVER['HTTP_REFERER']);

			}





			$valid = 1;



			$this->form_validation->set_rules('name', 'Name', 'trim|required');

			$this->form_validation->set_rules('short_description', 'Short Description', 'trim|required');

			$this->form_validation->set_rules('description', 'Description', 'trim|required');



			if($this->form_validation->run() == FALSE) {

				$valid = 0;

                $error .= validation_errors();

            }



            $path = $_FILES['photo']['name'];

		    $path_tmp = $_FILES['photo']['tmp_name'];



		    if($path!='') {

		        $ext = pathinfo( $path, PATHINFO_EXTENSION );

		        $file_name = basename( $path, '.' . $ext );

		        $ext_check = $this->Model_common->extension_check_photo($ext);

		        if($ext_check == FALSE) {

		            $valid = 0;

		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';

		        }

		    } else {

		    	$valid = 0;

		        $error .= 'You must have to select a photo for featured photo<br>';

		    }



		    

		    if($valid == 1) 

		    {

				$next_id = $this->Model_successstory->get_auto_increment_id();

				foreach ($next_id as $row) {

		            $ai_id = $row['Auto_increment'];

		        }



		        $final_name = 'successstory-'.$ai_id.'.'.$ext;

		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );



		        $form_data = array(

					'name'              => $_POST['name'],

					'short_description' => $_POST['short_description'],

					'description'       => $_POST['description'],

					'photo'             => $final_name,

					'meta_title'        => $_POST['meta_title'],

					'meta_keyword'      => $_POST['meta_keyword'],

					'meta_description'  => $_POST['meta_description'],

					'lang_id'           => $_POST['lang_id']

	            );

	            $this->Model_successstory->add($form_data);



		        $success = 'successstory is added successfully!';

		        $this->session->set_flashdata('success',$success);

				redirect(base_url().'admin/successstory');

		    } 

		    else

		    {

		    	$this->session->set_flashdata('error',$error);

				redirect(base_url().'admin/successstory/add');

		    }

            

        } else {

            

            $this->load->view('admin/view_header',$data);

			$this->load->view('admin/view_successstory_add',$data);

			$this->load->view('admin/view_footer');

        }

		

	}





	public function edit($id)

	{

		

    	// If there is no successstory in this id, then redirect

    	$tot = $this->Model_successstory->successstory_check($id);

    	if(!$tot) {

    		redirect(base_url().'admin/successstory');

        	exit;

    	}

       	

       	$data['setting'] = $this->Model_common->get_setting_data();

       	$data['all_lang'] = $this->Model_common->all_lang();

		$error = '';

		$success = '';





		if(isset($_POST['form1'])) 

		{



			if(PROJECT_MODE == 0) {

				$this->session->set_flashdata('error',PROJECT_NOTIFICATION);

				redirect($_SERVER['HTTP_REFERER']);

			}





			$valid = 1;



			$this->form_validation->set_rules('name', 'Name', 'trim|required');

			$this->form_validation->set_rules('short_description', 'Short Description', 'trim|required');

			$this->form_validation->set_rules('description', 'Description', 'trim|required');



			if($this->form_validation->run() == FALSE) {

				$valid = 0;

                $error .= validation_errors();

            }



            $path = $_FILES['photo']['name'];

		    $path_tmp = $_FILES['photo']['tmp_name'];



		    if($path!='') {

		        $ext = pathinfo( $path, PATHINFO_EXTENSION );

		        $file_name = basename( $path, '.' . $ext );

		        $ext_check = $this->Model_common->extension_check_photo($ext);

		        if($ext_check == FALSE) {

		            $valid = 0;

		            $error .= 'You must have to upload jpg, jpeg, gif or png file for featured photo<br>';

		        }

		    }



		    

		    if($valid == 1) 

		    {

		    	$data['successstory'] = $this->Model_successstory->getData($id);



		    	if($path == '') {

		    		$form_data = array(

						'name'              => $_POST['name'],

						'short_description' => $_POST['short_description'],

						'description'       => $_POST['description'],

						'meta_title'        => $_POST['meta_title'],

						'meta_keyword'      => $_POST['meta_keyword'],

						'meta_description'  => $_POST['meta_description'],

						'lang_id'           => $_POST['lang_id']

		            );

		            $this->Model_successstory->update($id,$form_data);

				}

				else {

					unlink('./public/uploads/'.$data['successstory']['photo']);



					$final_name = 'successstory-'.$id.'.'.$ext;

		        	move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );



		        	$form_data = array(

						'name'              => $_POST['name'],

						'short_description' => $_POST['short_description'],

						'description'       => $_POST['description'],

						'photo'             => $final_name,

						'meta_title'        => $_POST['meta_title'],

						'meta_keyword'      => $_POST['meta_keyword'],

						'meta_description'  => $_POST['meta_description'],

						'lang_id'           => $_POST['lang_id']

		            );

		            $this->Model_successstory->update($id,$form_data);

				}

				$success = 'successstory is updated successfully';

				$this->session->set_flashdata('success',$success);

				redirect(base_url().'admin/successstory');

		    }

		    else

		    {

		    	$this->session->set_flashdata('error',$error);

				redirect(base_url().'admin/successstory/edit/'.$id);

		    }

           

		} else {

			$data['successstory'] = $this->Model_successstory->getData($id);

	       	$this->load->view('admin/view_header',$data);

			$this->load->view('admin/view_successstory_edit',$data);

			$this->load->view('admin/view_footer');

		}



	}





	public function delete($id) 

	{

		// If there is no successstory in this id, then redirect

    	$tot = $this->Model_successstory->successstory_check($id);

    	if(!$tot) {

    		redirect(base_url().'admin/successstory');

        	exit;

    	}



		if(PROJECT_MODE == 0) {

			$this->session->set_flashdata('error',PROJECT_NOTIFICATION);

			redirect($_SERVER['HTTP_REFERER']);

		}



        $data['successstory'] = $this->Model_successstory->getData($id);

        if($data['successstory']) {

            unlink('./public/uploads/'.$data['successstory']['photo']);

        }



        $this->Model_successstory->delete($id);

        $success = 'successstory is deleted successfully';

        $this->session->set_flashdata('success',$success);

        redirect(base_url().'admin/successstory');

    }



}