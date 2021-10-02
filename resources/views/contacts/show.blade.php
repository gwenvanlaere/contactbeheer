@extends('contacts.layout')

@section('title', 'Contact detail')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Details Contact ID: {{ $contact->id }}</h2>
        </div>
        <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST" class="float-right">
            <a class="btn btn-success" href="{{ route('contacts.index') }}" title="Terug naar overzicht">Terug naar overzicht</a>
            <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}" title="Contact bijwerken">
                <span class="material-icons">edit</span>
            </a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" title="Contact verwijderen">
                <span class="material-icons">delete</span>
            </button>
        </form>
    </div>
</div>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Adres</th>
        <th>Postcode</th>
        <th>Gemeente</th>
        <th>Email</th>        
        <th>Telefoon</th>        
        <th>Laatst bewerkt</th> 
    </tr>    
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->naam }}</td>
        <td>{{ $contact->adres }}</td>
        <td>{{ $contact->postcode }}</td>
        <td>{{ $contact->gemeente }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->telefoon }}</td>
        <td>{{ $contact->updated_at }}</td>        
    </tr>    

</table>

@endsection