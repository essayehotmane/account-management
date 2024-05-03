<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);

        // Process the CSV file and insert data into the database
        $path = $request->file('csv_file')->getRealPath();
        $data = array_map('str_getcsv', file($path));

        foreach ($data as $row) {
            $testAcount = explode(';', $row[0]);
            Account::create([
                'url'        => $testAcount[0],
                'username'   => $testAcount[1],
                'password'   => $testAcount[2],
                'start_date' => Carbon::today(),
                'end_date'   => Carbon::today()->addDay(),
            ]);
        }

        return redirect()->back()->with('success', 'CSV file uploaded and data inserted successfully.');
    }
}
