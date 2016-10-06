<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Contributor extends Model
{
    protected $fillable = ['userid','device', 'experience'];

    public $timestamps = false;



    protected $table = 'contributor';

    public function getInfo()
    {
        return DB::table('users')
            ->join('contributor', 'users.id', '=', 'contributor.userid')
            ->select('pseudo', 'password', 'name', 'firstname', 'email');
    }

    public function getAllListe($service, $zip){
        return DB::select('select * from contributor join users on users.id = contributor.userid join service on contributor.device = service.id  where zipcode= '. $zip . ' and choices= "'. $service . '"' );
    }

    public function getListeContributor($service){
        return DB::table('users')
            ->join('contributor', 'users.id', '=', 'contributor.userid')
            ->join('operation','contributor.id','=','operation.contributorid')
            ->select('*')
            ->where('contributor.device','=',$service);
    }
    public function getListeByArrondissement($arrondissement){
        return DB::table('users')
            ->join('contributor', 'users.id', '=', 'contributor.userid')
            ->join('operation','contributor.id','=','operation.contributorid')
            ->select('*')
            ->where('users.zipcode','=',$arrondissement);
    }
    public function getInfosById($id){
        return DB::table('users')
            ->join('contributor', 'users.id', '=', 'contributor.userid')
            ->select('*')
            ->where('contributor.userid','=',$id);
    }
    public static function getNoteMoyenne($id){
        return DB::table('contributor')
            ->join('operation','contributor.id','=','operation.contributorid')
            ->where('contributor.id','=',$id)
            ->select('operation.note')->avg('operation.note');
    }

    public function getCommentaires ($id){
        return DB::table('avis')
            ->where('avis.contributorid','=',$id)
            ->select('avis.message');
    }

    function getContributorId(){
        $id = Auth::user()->id;
        return DB::select('select contributor.id from contributor join users on contributor.userid = users.id where users.id = ' . $id );
    }

}
