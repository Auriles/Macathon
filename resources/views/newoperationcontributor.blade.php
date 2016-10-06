@extends('templates.welcome')

@section('content')
    <style>form {
            margin-top: 120px;
        }

        #contentformdiv {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-image: url('img/bgoperation.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        };
        label {
            color: #FFF;
        }

        </style>
    <div id="contentformdiv">

        <form class="form-horizontal" role="form" method="POST" action="{{ route('msgcontact') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('service') ? ' has-error' : '' }}">
                <label for="service" class="col-md-4 control-label">Appareil </label>

                <div class="col-md-6">
                    <select id="service" name="service" class="form-control" required autofocus>
                        <option value="1">Ordinateur</option>
                        <option value="2">Cloud</option>
                        <option value="3">Box</option>
                        <option value="4">Périphérique wifi</option>
                        <option value="5">Smartphone</option>
                        <option value="6">Connectique</option>
                        <option value="7">Smart TV</option>
                    </select>

                    @if ($errors->has('service'))
                        <span class="help-block">
                            <strong>{{ $errors->first('service') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                <label for="message" class="col-md-4 control-label">Message</label>

                <div class="col-md-6">
                <textarea id="message" type="text" rows="10" class="form-control" name="message"
                          value="{{ old('message') }}" required autofocus></textarea>

                    @if ($errors->has('message'))
                        <span class="help-block">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                <label for="price" class="col-md-4 control-label">Prix demandé</label>

                <div class="col-md-6">
                    <input id="price" type="number" placeholder="Prix en Euros(€)" class="form-control" name="price"
                           value="{{ old('price') }}" required autofocus>

                    @if ($errors->has('price'))
                        <span class="help-block">
                            <strong>{{ $errors->first('price') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Envoyer
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection