<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uclass extends MY_Controller {
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_uclass');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->get_setting_data();

		$data['uclass'] = $this->Model_uclass->show();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/view_uclass',$data);
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
				$next_id = $this->Model_uclass->get_auto_increment_id();
				foreach ($next_id as $row) {
		            $ai_id = $row['Auto_increment'];
		        }

		        $final_name = 'uclass-'.$ai_id.'.'.$ext;
		        move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        $form_data = array(
					'name'              => $_POST['name'],
					'short_description' => $_POST['short_description'],
					'description'       => $_POST['description'],
					'photo'             => $final_name,
					'lang_id'           => $_POST['lang_id']
	            );
	            $this->Model_uclass->add($form_data);

		        $success = 'Classe is added successfully!';
		        $this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/uclass');
		    } 
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/uclass/add');
		    }
            
        } else {
            
            $this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_uclass_add',$data);
			$this->load->view('admin/view_footer');
        }
		
	}


	public function edit($id)
	{
		
    	// If there is no service in this id, then redirect
    	$tot = $this->Model_uclass->uclass_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/uclass');
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
		    	$data['uclass'] = $this->Model_uclass->getData($id);

		    	if($path == '') {
		    		$form_data = array(
						'name'              => $_POST['name'],
						'short_description' => $_POST['short_description'],
						'description'       => $_POST['description'],
						'lang_id'           => $_POST['lang_id']
		            );
		            $this->Model_uclass->update($id,$form_data);
				}
				else {
					unlink('./public/uploads/'.$data['uclass']['photo']);

					$final_name = 'uclass-'.$id.'.'.$ext;
		        	move_uploaded_file( $path_tmp, './public/uploads/'.$final_name );

		        	$form_data = array(
						'name'              => $_POST['name'],
						'short_description' => $_POST['short_description'],
						'description'       => $_POST['description'],
						'photo'             => $final_name,
						'lang_id'           => $_POST['lang_id']
		            );
		            $this->Model_uclass->update($id,$form_data);
				}
				$success = 'Class is updated successfully';
				$this->session->set_flashdata('success',$success);
				redirect(base_url().'admin/uclass');
		    }
		    else
		    {
		    	$this->session->set_flashdata('error',$error);
				redirect(base_url().'admin/uclass/edit/'.$id);
		    }
           
		} else {
			$data['uclass'] = $this->Model_uclass->getData($id);
	       	$this->load->view('admin/view_header',$data);
			$this->load->view('admin/view_uclass_edit',$data);
			$this->load->view('admin/view_footer');
		}

	}


	public function delete($id) 
	{
		// If there is no service in this id, then redirect
    	$tot = $this->Model_uclass->uclass_check($id);
    	if(!$tot) {
    		redirect(base_url().'admin/uclass');
        	exit;
    	}

		if(PROJECT_MODE == 0) {
			$this->session->set_flashdata('error',PROJECT_NOTIFICATION);
			redirect($_SERVER['HTTP_REFERER']);
		}

        $data['uclass'] = $this->Model_uclass->getData($id);
        if($data['uclass']) {
            unlink('./public/uploads/'.$data['uclass']['photo']);
        }

        $this->Model_uclass->delete($id);
        $success = 'Class is deleted successfully';
        $this->session->set_flashdata('success',$success);
        redirect(base_url().'admin/uclass');
    }

}