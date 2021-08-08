@extends("template.index")
@section('content')
    <div class="container">
        <h1>Profile animal</h1>
        <p><strong>Id: </strong>{{ $animal->id }}</p>
        <p><strong>Nom: </strong>{{ $animal->nom }}</p>
        <p><strong>Age: </strong>{{ $animal->age }}</p>
        <p><strong>Genre: </strong>{{ $animal->genre }}</p>
        <a class="btn btn-success text-white mb-3" href="/animal/{{ $animal->id }}/edit">Editer</a>
        <form action="/animal/{{ $animal->id }}/delete" method="POST">
            @csrf
            @method("DELETE")
            <input class="btn btn-danger text-white" type="submit" value="X">
        </form>
    </div>
@endsection
