@extends("template.index")
@section('content')
    <div class="container">
        <h1>Editer l'animal</h1>

        <form action="/animal/{{ $animal->id }}/update" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="addAnimalInputName" class="form-label">{{ $animal->nom }}</label>
                <input type="text" name="nom" value="{{ $animal->nom }}" class="form-control" id="addAnimalInputName">
            </div>
            <div class="mb-3">
                <label for="addAnimalInputAge" class="form-label">{{ $animal->age }}</label>
                <input type="text" name="age" value="{{ $animal->age }}" class="form-control" id="addAnimalInputAge">
            </div>
            <div class="mb-3">
                <select name="genre" value="{{ $animal->genre }}" class="form-select" aria-label="Default select example">
                    <option value="Male">Mâle</option>
                    <option value="Femelle">Femelle</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary text-white">Editer</button>
        </form>
    </div>
@endsection
