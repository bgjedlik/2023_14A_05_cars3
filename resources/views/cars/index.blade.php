@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-3 text-center">Autók</h1>
        <div class="row">
            @foreach ($cars as $car)
                <div class="col-12 col-md-3 mb-3">
                    <div class="card h-100">
                        <img src="{{ $car->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $car->title }}</h5>
                            <p class="card-text">Start production: {{ $car->start_production }}</p>
                            <p class="card-text">Class: {{ $car->class }}</p>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
    {{-- {{$cars}} --}}
@endsection
