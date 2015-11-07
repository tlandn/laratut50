<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about() {
        //$name = "adsfadsf  dfsadsfd";

        //return view('pages.about')->with('name',$name );

        $data = [];
        $data['firstname'] = 'John';
        $data['lastname'] = 'efgh';

        return view('pages.about',  $data );
    }

}
