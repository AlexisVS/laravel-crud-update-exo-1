@extends("template.index")
@section('content')
    <div class="container">

        <h1>Tous les animaux</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Age</th>
                    <th scope="col">Genre</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($animals as $animal)
                    <tr>
                        <th scope="row">{{ $animal->id }}</th>
                        <td>{{ $animal->nom }}</td>
                        <td>{{ $animal->age }}</td>
                        <td>{{ $animal->genre }}</td>
                        <td class="d-flex">
                            <form action="/animal/{{ $animal->id }}/delete" method="POST">
                                @csrf
                                @method("DELETE")
                                <input class="btn btn-danger text-white" type="submit" value="X">
                            </form>
                            <a class="ms-3 btn btn-primary text-white" href="/animal/{{ $animal->id }}">Voir l'animale</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
