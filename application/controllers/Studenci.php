<?php

class Studenci extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Studenci_model');
    }

    /*
     * Listing of studenci
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE;
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;

        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('studenci/index?');
        $config['total_rows'] = $this->Studenci_model->get_all_studenci_count();
        $this->pagination->initialize($config);

        $data['studenci'] = $this->Studenci_model->get_all_studenci($params);

        $data['_view'] = 'studenci/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new studenci
     */
    function add()
    {
        if(isset($_POST) && count($_POST) > 0)
        {
            $params = array(
				'nazwa_pliku' => $this->input->post('nazwa_pliku'),
				'sciezka' => $this->input->post('sciezka'),
				'rozmiar' => $this->input->post('rozmiar'),
				'typ' => $this->input->post('typ'),
            );

            $studenci_id = $this->Studenci_model->add_studenci($params);
            redirect('studenci/index');
        }
        else
        {
            $data['_view'] = 'studenci/add';
            $this->load->view('layouts/main',$data);
        }
    }

    /*
     * Editing a studenci
     */
    function edit($id)
    {
        // check if the studenci exists before trying to edit it
        $data['studenci'] = $this->Studenci_model->get_studenci($id);

        if(isset($data['studenci']['id']))
        {
            if(isset($_POST) && count($_POST) > 0)
            {
                $params = array(
					'nazwa_pliku' => $this->input->post('nazwa_pliku'),
					'sciezka' => $this->input->post('sciezka'),
					'rozmiar' => $this->input->post('rozmiar'),
					'typ' => $this->input->post('typ'),
                );

                $this->Studenci_model->update_studenci($id,$params);
                redirect('studenci/index');
            }
            else
            {
                $data['_view'] = 'studenci/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The studenci you are trying to edit does not exist.');
    }

    /*
     * Deleting studenci
     */
    function remove($id)
    {
        $studenci = $this->Studenci_model->get_studenci($id);

        // check if the studenci exists before trying to delete it
        if(isset($studenci['id']))
        {
            $this->Studenci_model->delete_studenci($id);
            redirect('studenci/index');
        }
        else
            show_error('The studenci you are trying to delete does not exist.');
    }

}
