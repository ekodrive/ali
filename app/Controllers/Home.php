<?php namespace App\Controllers;

class Home extends BaseController
{
    function __construct() {

    }
	public function index()
	{
        $uri= service('uri');
        $data['segment']=$uri->getPath();
	    $data['pageTitle']='HomePage';
		return view('home_view',$data);
	}

	//--------------------------------------------------------------------

}
