<?php  use Illuminate\Support\Facades\Auth;use Illuminate\Support\Facades\DB; ?>

@extends('templates.welcome_logo')

@section('content')
    {{require_once ('includes/functions.php')}}
    @if(Auth::check())
        <?php $user = Auth::user() ?>
        <!-- Navigation Bloc END -->
        <style>
            .li-top {
                color: midnightblue !important;
            }

            .li-top:hover {
                color: black !important;
            }
        </style>
        <!-- bloc-5 -->
        <div class="bloc bgc-white-smoke l-bloc" id="bloc-5">
            <div class="container bloc-lg">
                <div class="row">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="mg-clear text-center">
                                    Mes Informations
                                </h3>
                            </div>
                            <div class="panel-body">
                                <form id="form_2264" class="form-profile" novalidate>
                                    <div class="form-group">
                                        <label>
                                            Nom
                                        </label>
                                        <input disabled class="form-control" id="input_1187" required
                                               value="{{Auth::user()->name}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Prénom
                                        </label>
                                        <input disabled class="form-control" id="input_1803" required
                                               value="{{Auth::user()->firstname}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Adresse
                                        </label>
                                        <input disabled class="form-control" id="input_1023" required
                                               value="{{Auth::user()->address}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Ville
                                        </label>
                                        <input disabled class="form-control" id="input_1571" required
                                               value="{{Auth::user()->city}}"/>
                                    </div>
                                    <div class="form-group">
                                        <label>
                                            Code postal
                                        </label>
                                        <input disabled class="form-control" id="input_798" required
                                               value="{{Auth::user()->zipcode}}"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="panel">
                            <div class="panel-heading">
                                <img src="img/placeholder-user.png" class="img-circle" width="100" height="100"/>
                            </div>
                            <div class="panel-body">
                                <form id="form_1041" class="form-profile" novalidate>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="4" cols="50" id="description"
                                                  data-validation-required-message="description is required."
                                                  placeholder="Veuillez saisir une description de vous que les autres utilisateurs pourront voir"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>



        <?php
        $cont = new \App\Contributor();
        if (isContributor()) {
            $id = $cont->getContributorId();
        } else $id = Auth::user()->id;
        echo("<div class='panel'>
            <div class='panel-heading'>
                <h3 class='mg-clear text-center'>
                    Mes deux dernières prestations
                </h3>
            </div>");
        for($i = 0; $i < 2; $i++) {
            $operation = getOperationsPerId($id)[$i];
            echo("<div class='panel-body'>
                <div class='row'>
                    <div class='col-sm-3'>
                        <div class='panel'>
                            <div class='panel-body'>
                                <p class='text-center'>
                                    Prestation n°$operation->id
                                </p>
                                <div class='divider-h'>
                                    <span class='divider'></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-3'>
                        <div class='panel'>
                            <div class='panel-body'>
                                <p class='text-center'>
                                    Créée le $operation->timestamp
                                </p>
                                <div class='divider-h'>
                                    <span class='divider'></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-3'>
                        <div class='panel'>
                            <div class='panel-body'>
                                <p class='text-center'>");
            if (!$operation->note) echo "Non noté";
            echo("</p>
                                <div class='divider-h'>
                                    <span class='divider'></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='col-sm-3'>
                        <div class='panel'>
                            <div class='panel-body'>
                                <p class='text-center'>
                                    $operation->prix €
                                </p>
                                <div class='divider-h'>
                                    <span class='divider'></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='divider-h'>
                    <span class='divider'></span>
                </div>
                <form id='form_2180' class='form-profile' novalidate>
                    <div class='form-group'>
                                        <textarea class='form-control' rows='4' cols='50' placeholder='Description'
                                                  id='textarea_2026' disabled>$operation->message</textarea>
                    </div>
                </form>
            ");
        }


        echo("</div>
        </div>")
        ?>


    @endif;
@endsection;