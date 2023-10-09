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
            <div class="col-12 col-md-10">
                @if (count($cars) != 0)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Start production</th>
                                <th>Class</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($cars as $car)
                                <tr>
                                    <td>{{ $car->title }}</td>
                                    <td>{{ $car->start_production }}</td>
                                    <td>{{ $car->class }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="alert alert-warning col-md-3" role="alert">
                        No data!
                    </div>
                @endif
            </div>
        </div>
    </div>
    {{-- {{$years}} --}}

@endsection
