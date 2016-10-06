@extends('templates.welcome_logo')
@section('content')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-lg-offset-2">
                @forelse($intervenants as $intervenant)
                    <article class="row">
                        <div class="col-xs-3 col-sm-5 col-md-5 col-lg-3">
                            <a href="" class="thumbnail">
                                <img src="{{url('img').'/placeholder-image.png'}}" alt="">
                            </a>
                        </div>
                        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-3">

                            <h2>{{$intervenant->firstname}}</h2>
                            <p>{{$intervenant->zipcode}}</p>

                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-2 col-lg-offset-1">

                            <div class="control verticalLine">
                                <Label> Note Moyenne : </Label>
                                {{

                                    round(\App\Contributor::getNoteMoyenne($intervenant->id),1)
                                }}
                            </div>
                            <a class="btn btn-success btn-sm " href="{{url('/liste/'.$intervenant->userid)}}">
                                Details</a>
                        </div>

                    </article>
                @empty
                    <div class="well">
                        <h4>Aucun hébergement correspond à ces critères</h4>
                    </div>

                @endforelse
            </div>
        </div>
    </div>

@endsection