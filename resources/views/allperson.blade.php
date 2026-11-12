<x-layout>
    
    <div class="cards-custom">
        @foreach($persons as $person)
        <div class="card card-custom" style="width: 18rem;">
            <img class="img-card" src="{{Storage::url($person['img'])}}" class="card-img-top" alt="immagine">
            <div class="card-body">
                <h5 class="card-title">{{$person['name']}}</h5>
                <h5 class="card-subtitle mb-2 text-body-secondary">{{$person['surname']}}</h5>
                <h5 class="card-text">{{$person['age']}}</h5>
            </div>
        </div>
        @endforeach
    </div>
    
    
</x-layout>
