@extends('contacts.layout')

@section('title', 'Aanmaken')

@section('contacts-content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Nieuw Contact</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('contacts.index') }}" title="Terug naar overzicht">Terug naar overzicht</a>
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

<form action="{{ route('contacts.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Naam:</strong>
                <input type="text" name="naam" class="form-control" placeholder="Naam">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Adres:</strong>
                <input type="text" name="adres" class="form-control" placeholder="Adres">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Postcode:</strong>
                <input type="text" name="postcode" class="form-control" placeholder="Postcode">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gemeente:</strong>
                <input type="text" name="gemeente" class="form-control" placeholder="Gemeente">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Telefoon:</strong>
                <input type="text" name="telefoon" class="form-control" placeholder="Telefoon">
            </div>
        </div>        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary" title="Contact aanmaken">Submit</button>
        </div>
    </div>

</form>
@endsection