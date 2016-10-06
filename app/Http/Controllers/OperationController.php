<?php


namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Operation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;



/**
 * Created by PhpStorm.
 * User: drattak
 * Date: 05/10/16
 * Time: 13:16
 */
require_once('includes/functions.php');
class OperationController extends Controller{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('create_operation');
    }

    public function formulaire(){
        $get = $_GET['cont_id'];
        return view('newoperation')->with('id',$get);
    }

    /**
     * @param array $data
     * @return Operation
     */
    public function create(){
        Operation::create([
            'serviceid' => Input::get('service'),
            'message' => Input::get('message'),
            'state' => 'pending',
            'timestamp' => convertToDate(Input::get('date')),
            'contributorid' => Input::get('contributor_id'),
            'customer'=> Auth::user()->id,
            'prix' => 10
        ]);
        return view('/profile');
    }


}