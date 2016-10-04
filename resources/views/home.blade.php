@extends('welcome')
@section('content')
    <div class="bloc bgc-anti-flash-white l-bloc" id="bloc-1">
        @include('templates.barre_recherche')
    </div>

    <div class="bloc bgc-white-smoke l-bloc" id="bloc-2">
        <div class="container bloc-lg">
            <div class="row">
                <div class="col-sm-3">
                    <div class="text-center">
                        <span class="ion ion-ios-location icon-round icon-md icon-feldgrau"></span>
                    </div>
                    <h3 class="text-center mg-md tc-feldgrau">
                        Proximité
                    </h3>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <span class="ion ion-wrench icon-round icon-md icon-feldgrau"></span>
                    </div>
                    <h3 class="text-center mg-md tc-feldgrau">
                        Dépannage et Assistance
                    </h3>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <span class="ion ion-ios-gear icon-round icon-md icon-feldgrau"></span>
                    </div>
                    <h3 class="text-center mg-md tc-feldgrau">
                        Installation, Configuration
                    </h3>
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <span class="ion ion-flash icon-round icon-md icon-feldgrau"></span>
                    </div>
                    <h3 class="text-center mg-md tc-feldgrau">
                        Restez connecté
                    </h3>
                </div>
            </div>
        </div>
    </div>
    <!-- bloc-2 END -->

    <!-- bloc-3 -->
    <div class="bloc bgc-anti-flash-white l-bloc" id="bloc-3">
        <div class="container bloc-lg">
            <div class="row">
                <div class="col-sm-3">
                    <img src="img/placeholder-image.png" class="img-responsive img-rd-md" />
                    <h3 class="mg-md">
                        Title goes here
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    </p>
                </div>
                <div class="col-sm-3">
                    <img src="img/placeholder-image.png" class="img-responsive img-rd-md" />
                    <h3 class="mg-md">
                        Title goes here
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    </p>
                </div>
                <div class="col-sm-3">
                    <img src="img/placeholder-image.png" class="img-responsive img-rd-md" />
                    <h3 class="mg-md">
                        Title goes here
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    </p>
                </div>
                <div class="col-sm-3">
                    <img src="img/placeholder-image.png" class="img-responsive img-rd-md" />
                    <h3 class="mg-md">
                        Title goes here
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection