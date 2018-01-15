<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library('upload');
                // chmod("/assets/uploads/", 0777);
        }

        public function index() 
        {
                $this->load->view('houseOverview/upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {

                // $image_path = realpath(APPPATH . '../assets/uploads/housepictures');

                $config['upload_path'] =  'upload1/';
                $config['overwrite'] = TRUE;
                $config['allowed_types'] = 'jpg|jpeg|gif|png';
                $config['max_size'] = 20000;

                $config['is-dir'] = is_dir('./upload1');
                $config['test'] = is_writable('./upload1');
                var_dump($config);

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                        {
                           
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('houseOverview/upload_form', $error);

                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('houseOverview/upload_success', $data);
                }


        }
}
?>