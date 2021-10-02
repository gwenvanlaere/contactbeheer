@extends('contacts.layout')

@section('title', 'List')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="float-left">
            <h2>Contacten</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('contacts.create') }}">Nieuw contact aanmaken</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Naam</th>
        <th>Email</th>        
        <th>Telefoon</th>        
        <th width="280px">Acties</th>
    </tr>
    @foreach ($contacts as $contact)
    <tr>
        <td>{{ $contact->id }}</td>
        <td>{{ $contact->naam }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->telefoon }}</td>
        <td>
            <form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('contacts.show',$contact->id) }}" title="Contact details">
                    <span class="material-icons">view_list</span>
                </a>
                <a class="btn btn-primary" href="{{ route('contacts.edit',$contact->id) }}" title="Contact bewerken">
                    <span class="material-icons">edit</span>
                </a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" title="Contact verwijderen">
                    <span class="material-icons">delete</span>
                </button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
{{ $contacts->links() }}

@endsection