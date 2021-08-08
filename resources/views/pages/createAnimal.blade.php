@extends("template.index")
@section('content')
    <div class="container">
        <h1>Ajouter un animal</h1>

        <form action="animal/create" method="POST">
            @csrf
            <div class="mb-3">
                <label for="addAnimalInputName" class="form-label">Nom</label>
                <input type="text" name="nom" class="form-control" id="addAnimalInputName">
            </div>
            <div class="mb-3">
                <label for="addAnimalInputAge" class="form-label">Age</label>
                <input type="text" name="age" class="form-control" id="addAnimalInputAge">
            </div>
            <div class="mb-3">
                <select name="genre" class="form-select" aria-label="Default select example">
                    <option selected value="Male">Mâle</option>
                    <option value="Femelle">Femelle</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary text-white">Ajouter</button>
        </form>
    </div>
@endsection
