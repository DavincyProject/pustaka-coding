<?php

class biodata extends CI_Controller
{
    public function biodataku()
    {
        $this->load->view('biodata');
    }
	
	public function penjumlahan($nilai1, $nilai2)
	{
		echo $this->Model_aritmatika->penjumlahan($nilai1, $nilai2);
	}
}
