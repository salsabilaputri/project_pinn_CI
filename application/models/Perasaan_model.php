<?php
class Perasaan_model extends CI_Model {

         public function __construct()
        {
                $this->load->database();
        }
		public function set_penasaran()
		{
			$this->load->helper('url');


			$data = array(
				'nama' => $this->input->post('nama'),
				'perasaan' => $this->input->post('perasaan')
			);
			
			return $data;
		}

}