@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <!-- Your content here -->
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Test account</th>
                                <th scope="col">Requested at</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($requests as $request)
                                <tr>
                                    <td>{{ $request->user->email }}</td>
                                    <td>{{ $request->user->phone }}</td>
                                    @if ($request->email_sent)
                                        <td><span class="text-success">Sent
                                                <sub>{{ $request->email_sent_at }}</sub></span></td>
                                    @else
                                        <td><span class="text-danger">Not yet</span></td>
                                    @endif
                                    <td>{{ $request->created_at }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $requests->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
