<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Request;
use App\Models\User;
use Illuminate\Http\Request as HttpRequest;

class RequestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $requests = Request::query()
            ->with('user')
            ->paginate(50);

        return view('Requests', ['requests' => $requests]);
    }

    public function createRequest(HttpRequest $httpRequest)
    {
        $rules = [
            'email'   => 'required',
            'phone'   => 'required',
            'device'  => 'required',
            'app'     => 'required',
            'message' => 'sometimes',
        ];

        $validator = validator($httpRequest->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $validatedData = $httpRequest->validate($rules);

        // Create a new user
        $user = User::create([
            'email'  => $validatedData['email'],
            'phone'  => $validatedData['phone'],
            'device' => $validatedData['device'],
            'app'    => $validatedData['app'],
        ]);

        // Create a new request
        $request = Request::create([
            'user_id' => $user->id
        ]);

        if ($user && $request) {
            return response()->json([
                'success' => 'ok',
                'message' => 'Request created successfully'
            ], 201);
        }
    }
}
