<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

// use Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		return view( 'welcome' );
    }

	/**
	 * Root Path Method
	 * @return \Illuminate\Http\Response
	 */
    public function rootPath()
    {
        // if( Auth::check() )
            // return Redirect::to( 'home' );
        return view( 'welcome' );
    }
}
