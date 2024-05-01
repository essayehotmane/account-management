@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <!-- Your content here -->
            </div>
            <div class="col-auto">
                <!-- Button aligned to the right -->
                <button type="button" class="btn btn-primary">Upload CSV</button>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Request at</th>
                                <th scope="col">Subscription start</th>
                                <th scope="col">Subscription end</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td>Otto</td>
                                <td>Otto</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
