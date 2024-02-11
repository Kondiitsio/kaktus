<?php

namespace App\Http\Controllers;

use App\Models\Yhteystiedot;
use App\Models\Store;

class YhteystiedotController extends Controller
{
    public function index()
    {
        // Fetch the first Yhteystiedot
        $yhteystiedot = Yhteystiedot::first();

        // Fetch all stores with their associated contact info
        $stores = Store::with('contactInfo')->get();

        // Pass both to the view
        return view('yhteystiedot', ['yhteystiedot' => $yhteystiedot, 'stores' => $stores]);
    }
}
?>
