@extends('templates.welcome_logo')

@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ route('msgcontact') }}">
        <h1 id="createdemande">Créer une demande</h1>

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
        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
            <label for="date" class="col-md-4 control-label">Date</label>

            <div class="col-md-6">
                <input id="date" type="text" class="form-control" name="date"
                          value="{{ old('date') }}" required autofocus/>

                @if ($errors->has('date'))
                    <span class="help-block">
                            <strong>{{ $errors->first('date') }}</strong>
                        </span>
                @endif
            </div>
            <input type="hidden" name="contributor_id" value="{{$id}}">
        </div>



        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Envoyer
                </button>
            </div>
        </div>
    </form>
@endsection