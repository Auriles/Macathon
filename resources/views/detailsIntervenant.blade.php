@extends('templates.welcome_logo')
@section('content')
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Details

                </div>
                <div class="panel-body">
                    <h1>{{$intervenant->firstname}}</h1>
                    <iframe
                            height="450"
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyACluuOCSU6Sen1O6ht8eO_ZfqJZ5xVcog
    &q={{$intervenant->zipcode}}" allowfullscreen>
                    </iframe>
                    <br>
                    <Label> Note moyenne : </Label>
                    {{
                     round(\App\Contributor::getNoteMoyenne($intervenant->id),1)
                    }}
                    <form action="{{route('form')}}" method="get" id="form-detail" role="form">
                        <input type="hidden" name="cont_id" value="{{$intervenant->id}}">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" >Envoyer Message</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div class="col-xs-3 col-sm-5 col-md-5 col-lg-3">
            <a href="" class="thumbnail" >
                <img src="{{url('img').'/placeholder-image.png'}}" alt="">
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    @foreach($intervenant->message as $message)

                        <div>
                            - {{$message->message}}
                        </div>
                    @endforeach
                </div>
                <div class="panel-body">

                </div>
            </div>

        </div>
    </div>

@endsection