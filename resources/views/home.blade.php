@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('ALL RECORDS') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Device ID</th>
                                <th scope="col">Humidity</th>
                                <th scope="col">Temperature</th>
                                <th scope="col">Heat Index</th>
                                <th scope="col">Due Point</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($records as $a_record)
                            <tr>
                                <th scope="row">{{ $a_record->id }}</th>
                                <td>{{ $a_record->device_id }}</td>
                                <td>{{ $a_record->humidity }}</td>
                                <td>{{ $a_record->temperature }}</td>
                                <td>{{ $a_record->heat_index }}</td>
                                <td>{{ $a_record->due_point }}</td>
                                <!-- <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">view</button>
                                        <button type="button" class="btn btn-success">process</button>
                                        <button type="button" class="btn btn-danger">archive</button>
                                    </div>
                                </td> -->
                            </tr>
                            @endforeach

                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection






