@extends('templates.welcome')

@section('content')
    <div class="container" id="core">

        <!-- bloc-1 -->
        <div class="bloc b-parallax bgc-white-smoke bg-vieux5 d-bloc" id="bloc-1">
            <div class="" id="connectinfo_title">
                <img src="img/LogoSmall%203.png" width="700px" />
            </div>
            <div class="container bloc-lg">

                <div class="row drag-obj">
                    <div class="col-sm-3">
                        <div class="text-center">
                            <span class="ion ion-ios-location icon-lg icon-round pressed-t icon-anti-flash-white"></span>
                        </div>
                        <h3 class="text-center mg-md text-w-sm tc-white lg-shadow">
                            <strong>Proximité</strong>
                        </h3>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-center">
                            <span class="ion ion-wrench icon-round icon-lg pressed-t icon-white"></span>
                        </div>
                        <h3 class="text-center mg-md text-w-sm tc-white lg-shadow">
                            <strong>Dépannage et Assistance</strong>
                        </h3>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-center">
                            <span class="ion ion-ios-gear icon-round icon-lg pressed-t icon-white"></span>
                        </div>
                        <h3 class="text-center mg-md text-w-sm tc-white lg-shadow">
                            <strong>Installation, Configuration</strong>
                        </h3>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-center">
                            <span class="ion ion-flash icon-round icon-lg pressed-t icon-white"></span>
                        </div>
                        <h3 class="mg-md text-center text-w-sm tc-white lg-shadow">
                            <strong>Restez connectés</strong>
                        </h3>
                    </div>
                </div>

                <div class="row voffset-md">
                    <form id="form_2121"  method="get" action="{{route('rechercheIntervenant')}}" novalidate>

                    <div class="col-sm-4">
                        <div class="btn-group btn-block">
                            <select href="#" class="btn dropdown-toggle  btn-block btn-sm btn-glossy btn-white"
                                    data-toggle="dropdown" aria-expanded="false" name="service">Sur quel appareil ?
                                <option class="a-btn a-block">Ordinateur</option>
                                <option class="a-btn a-block">Box / Internet</option>

                                <option class="a-btn a-block">Périphérique externe en wifi</option>
                                <option class="a-btn a-block">Smartphone</option>
                                <option class="a-btn a-block">Connectique</option>

                                <option class="a-btn a-block">Smart TV</option>

                                <option class="a-btn a-block">Cloud</option>

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control" required id="cdepostal" name="zipcode"
                                       data-validation-required-message="cdepostal is required."
                                       placeholder="Veuillez saisir votre code postal"/>
                            </div>
                    </div>

                    <div class="col-sm-4">
                        <a href="{{route('rechercheIntervenant')}}" class="btn  btn-success btn-block btn-white"><button type="submit" class="btn btn-primary" id="btn-recherche">Rechercher</button></a>
                    </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- bloc-1 END -->
        <div id="confidence">
            Ils nous ont fait confiance...
        </div>
        <!-- bloc-2 -->
        <div class="bloc bgc-anti-flash-white l-bloc" id="bloc-2">
            <div class="container bloc-lg">
                <div class="row">
                    <div class="col-sm-3">
                        <img src="img/charles.jpg" class="img-rd-md" width="200" height="200"/>
                        <h3 class="mg-md">
                            Francis Chapeau
                        </h3>
                        <p>
                            "Une plateforme vraiment utile qui à permis à moi et mon entourage de bénéficier d&rsquo;une
                            aide à moindre coût."
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/vincent.jpg" class="img-rd-md" width="200" height="200"/>
                        <h3 class="mg-md">
                            Claud Glace
                        </h3>
                        <p>
                            "J&rsquo;ai utilisé cette plateforme pour un problème informatique qui me touchait moi et
                            mes parents, je n&rsquo;ai maintenant plus de soucis et mon voisin m&rsquo;a expliqué
                            parfaitement comment résoudre à nouveau le soucis s&rsquo;il surevenait de nouveau !"
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/photo.JPG" class="img-rd-md" width="200" height="200"/>
                        <h3 class="mg-md">
                            Michel Michel
                        </h3>
                        <p>
                            "Un service rapide et efficace, de quoi gagner un temps fou" !
                        </p>
                    </div>
                    <div class="col-sm-3">
                        <img src="img/juan.jpeg" class="img-rd-md" width="200" height="200"/>
                        <h3 class="mg-md">
                            Jean Serien
                        </h3>
                        <p>
                            "Plus de doute, au moindre problème avec mon ordinateur, j&rsquo;utiliserai Connectinfo."
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- bloc-2 END -->

        <!-- ScrollToTop Button -->
        <a class="bloc-button btn btn-d scrollToTop" onclick="scrollToTarget('1')"><span
                    class="fa fa-chevron-up"></span></a>
        <!-- ScrollToTop Button END-->


        <!-- Footer - bloc-5 -->
        <div class="bloc bgc-pastel-blue l-bloc b-divider" id="bloc-5">
            <div class="container bloc-sm">
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class="mg-md">
                            Qui sommes nous ?
                        </h3><a href="index.html" class="a-btn a-block">Description de l'entreprise</a>
                    </div>
                    <div class="col-sm-4">
                        <h3 class="mg-md">
                            Nous suivre !
                        </h3><a href="index.html" class="a-btn a-block">Facebook</a><a href="index.html"
                                                                                       class="a-btn a-block">Twitter</a>
                    </div>
                    <div class="col-sm-4">
                        <h3 class="mg-md">
                            Nous contacter !
                        </h3>
                        <p>
                            01.02.03.04.05<br/>connectinfo@info.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer - bloc-5 END -->
    </div>
    </div>

    <style>
        #nav-bloc{
            background-color: transparent;
        }
    </style>
@endsection
