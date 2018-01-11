<?php
Class Ajax_process extends CI_Controller{
	function search_urusan()
	{
		$keyword = $this->uri->segment(3);
		$data = $this->db->get('dien002')->result();
		$arr = [];
		foreach ($data as $row) {
			$arr['query'] = $keyword;
			$arr['suggestions'][] = array(
				'value' => $row->dien002_02,
				// 'urusan_id' => $row->
			);
		}
		echo json_encode($arr);
	}
}
