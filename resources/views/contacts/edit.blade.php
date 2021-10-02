@extends('contacts.layout')

@section('title', 'Bijwerken')

@section('contacts-content')
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Bijwerken Contact ID: {{ $contact->id }}</h2>
        </div> 
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('contacts.index') }}" title="Terug naar overzicht">Terug naar overzicht</a>
            <a class="btn btn-info" href="{{ route('contacts.show',$contact->id) }}" title="Contact details">
                <span class="material-icons">view_list</span>
            </a>
        </div>       
    </div>
</div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oeps!</strong> Er is een probleem met gegevensinvoer.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form action="{{ route('contacts.update',$contact->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Naam:</strong>
                <input type="text" name="naam" value="{{ $contact->naam }}" class="form-control" placeholder="Naam">
            </div>
            <div class="form-group">
                <strong>Adres:</strong>
                <input type="text" name="adres" value="{{ $contact->adres }}" class="form-control" placeholder="Adres">
            </div>
            <div class="form-group">
                <strong>Postcode:</strong>
                <input type="text" name="postcode" value="{{ $contact->postcode }}" class="form-control" placeholder="Postcode">
            </div>
            <div class="form-group">
                <strong>Gemeente:</strong>
                <input type="text" name="gemeente" value="{{ $contact->gemeente }}" class="form-control" placeholder="Gemeente">
            </div>
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" value="{{ $contact->email }}" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
                <strong>Telefoon:</strong>
                <input type="text" name="telefoon" value="{{ $contact->telefoon }}" class="form-control" placeholder="Telefoon">
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary" title="Contact bijwerken">Submit</button>
    </div>
    </div>

</form>

@endsection