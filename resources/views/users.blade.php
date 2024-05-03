@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <!-- Your content here -->
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" type="submit">Export CSV</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="row" scope="col">id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Device</th>
                                <th scope="col">App</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <th scope="row">{{ $user->id }}</th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->device }}</td>
                                    <td>{{ $user->app }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
