<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Operation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;


/**
 * Created by PhpStorm.
 * User: drattak
 * Date: 06/10/16
 * Time: 00:37
 */

class OperationContributorController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('newoperationcontributor');
    }

    public function formulaire(){
        return view('newoperationcontributor');
    }

    /**
     * @param array $data
     * @return Operation
     */
    public function create(){

        return Operation::create([
            'message' => Input::get('message'),
            'state' => 'pending',

            'serviceid' => Auth::user()->device,
            'contributorid' => Auth::user()->id
        ]);
    }
}