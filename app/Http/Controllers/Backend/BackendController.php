<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BackendController extends Controller
{
    /**
     * Instantiate a new UserController instance.
     */
    public function beforeFilter()
    {
        // Check master or provider base on login user
        view()->with('layout', 'layout.master');
        
        parent::beforeFilter();
    }
    
    /**
     * using middleware to check authentication
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
