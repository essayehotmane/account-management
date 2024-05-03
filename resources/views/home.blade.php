@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-3">
            <div class="col">
                <!-- Your content here -->
            </div>
            <div class="col-auto">
                <form action="{{ route('upload.csv') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="csv_file" accept=".csv">
                    <button class="btn btn-primary" type="submit">Upload CSV</button>
                </form>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Url</th>
                                <th scope="col">Username</th>
                                <th scope="col">Password</th>
                                <th scope="col">Subscription start</th>
                                <th scope="col">Subscription end</th>
                                <th scope="col">Status</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($accounts as $account)
                                @if (Carbon\Carbon::parse($account->end_date) > Carbon\Carbon::today())
                                    <tr class="">
                                    @else
                                    <tr class="table-active">
                                @endif
                                <td>{{ $account->url }}</td>
                                <td>{{ $account->username }}</td>
                                <td>{{ $account->password }}</td>
                                <td>{{ Carbon\Carbon::parse($account->start_date)->format('Y-m-d') }}</td>
                                <td>{{ Carbon\Carbon::parse($account->end_date)->format('Y-m-d') }}</td>
                                <td>
                                    @if ($account->user_id)
                                        <span class="text-success">Used</span>
                                    @else
                                        <span class="text-danger">Unused</span>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-link" type="submit">Show</button>
                                </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $accounts->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
