<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
		$var ='[[1, 5],<br>[9, -7],<br>[0, 8],<br>[6, 3],<br>[4, 11],<br>[14, 0],<br>[8, 1],<br>[4, 9]]';
		echo $var.'<br><br>';
		
		$array =[[1, 5],[9, -7],[0, 8],[6, 3],[4, 11],[14, 0],[8, 1],[4, 9]];

		$targetValue =9;
		$pair_index = $this->searchPair($array,$targetValue);
		echo 'Out Put:- '.$pair_index;
		
	}
	private function searchPair($array,$targetValue){
		$index =[];
		foreach($array as $key =>$value){
			$index_value   = array_sum($value);
			if($index_value == $targetValue){
				$index[]   = $key;
			}
		}
		return implode(', ',$index);
	}
	
	public function arrayIndex(){
		$var ='[[1, 5],[9, -7],[0, 8],[6, 3],[4, 11],[14, 0],[8, 1],[4, 9]]';
		
		$data['var'] = $var;
		$array =[[1, 5],[9, -7],[0, 8],[6, 3],[4, 11],[14, 0],[8, 1],[4, 9]];

		$targetValue =9;
		$pair_index = $this->searchPair($array,$targetValue);
		$data['pair'] = $pair_index;
		return view('task',$data);
	}
}
