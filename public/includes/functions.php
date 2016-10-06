<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: drattak
 * Date: 06/10/16
 * Time: 10:12
 */

function isContributor(){
    if(Auth::check()){
        $id = Auth::user()->id;
        if(DB::select('select * from contributor where userid = ' . $id)) return true;
        return false;
    }
    else return false;
}

function convertToDate($date)
{
    $time = strtotime($date);
    return date('y-m-d h:i',$time);
}

function getOperationsPerId($id){
    if(isContributor()) {
        $id = $id[0]->id;
        return (DB::select('select operation.id, operation.message, operation.state, operation.timestamp, operation.note, operation.prix from contributor join users on users.id = userid join operation on operation.contributorid = contributor.id where contributor.id = ' . $id));
    }
    else return (DB::select('select operation.id, operation.message, operation.state, operation.timestamp, operation.note, operation.prix from users join operation on operation.customer = users.id where users.id = ' . $id));
}