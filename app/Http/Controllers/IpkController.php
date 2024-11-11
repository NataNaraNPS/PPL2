<?php

namespace App\Http\Controllers;
use App\Models\Ipk;

use Illuminate\Http\Request;

class IpkController extends Controller
{
    // Define a method to fetch all records from the ipk table
    public function index()
    {
        // Fetch all records from the ipk table
        $ipkData = Ipk::all(['id_ipk', 'nim', 'semester', 'tahun', 'ips', 'ipk']);

        // Return data as JSON
        return response()->json($ipkData);
    }
}
