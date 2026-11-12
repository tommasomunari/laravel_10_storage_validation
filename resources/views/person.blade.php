<x-layout>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-person">
        <form method="POST" action="{{route('submitPerson')}}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Cognome</label>
                <input type="text" name="surname" class="form-control" id="surname">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Età</label>
                <input type="number" name="age" class="form-control" id="age">
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Inserisci un'immagine</label>
                <input type="file" name="img" class="form-control" id="img">
            </div>
            
            <button type="submit" class="btn btn-primary">Invia i tuoi dati</button>
        </form>
    </div>
</x-layout>