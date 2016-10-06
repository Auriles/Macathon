<?php

namespace App\Http\Controllers;

use App\Contributor;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Input;

class Recherche extends Controller
{
    public function rechercheIntervenantGet(Request $request){

        $serv = Input::get('service');
        $arrondissement = Input::get('zipcode');
        $contrib = new Contributor();
        $listeAll = $contrib->getAllListe($serv,$arrondissement);


        $note = $contrib->getNoteMoyenne(1);
        $note = round($note,1);
        

        /*if($serv != null)
        {

            $listeAll = $listeAll->whereIn(('device'),$contrib->getListeContributor($serv)->pluck('contributor.device')->all());
        }
        if($arrondissement != null){
            $listeAll = $listeAll->whereIn(('zipcode'),$contrib->getListeByArrondissement($arrondissement)->pluck('contributor.zipcode')->all());
        }*/

        return view('listeIntervenants')->with('intervenants',$listeAll);

    }
    public function rechercheDetails($id){
        $contrib = new Contributor();
        $infos = $contrib->getInfosById($id)->get();
        $message = $contrib->getCommentaires($id)->get();
        $infos = $infos->all()[0];
        $infos->message = $message;
        return view('detailsIntervenant')->with('intervenant',$infos);
    }
}
