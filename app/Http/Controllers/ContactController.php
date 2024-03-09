<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Stores;

class ContactController extends Controller
{
    public function index()
    {
        // Fetch the first Yhteystiedot
        $store = Store::first();

        // Fetch all stores with their associated contact info
        $stores = Stores::with('contactInfo')->get();

        // Pass both to the view
        return view('contact', ['store' => $store, 'stores' => $stores]);
    }
}
?>
