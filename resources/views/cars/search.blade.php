@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-3 text-center">Search</h1>
            </div>

            <form action="/search" method="post">
                @csrf
                <div class="row my-5">
                    <div class="col-12 col-md-4">
                        <input type="text"
                          class="form-control"
                          placeholder="Name"
                          name="name"
                          value="{{ $name }}">
                    </div>
                    <div class="col-12 col-md-2">
                        <button class="btn btn-primary" type="submit" name="btn-search" value="search-btn">Search</button>
                    </div>
                </div>
            </form>

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

            {{-- {{ $cars }} --}}
        </div>
    </div>
    </div>
@endsection
