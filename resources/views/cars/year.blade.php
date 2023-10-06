@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center">Search by Year</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-2">
                <form action="/year" method="post">
                    @csrf
                    <select class="form-select" name="year">
                        @foreach ($years as $year)
                            <option value="{{ $year->start_production }}">{{ $year->start_production }}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn btn-primary w-100 my-3">Search</button>
                </form>
            </div>
            <div class="col-12 col-md-10"></div>
        </div>
    </div>
    {{-- {{$years}} --}}
@endsection
