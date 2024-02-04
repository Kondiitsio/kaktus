<?php
namespace App\Http\Controllers;

use App\Models\Yhteystiedot;

class YhteystiedotController extends Controller
{
    public function index()
    {
        $yhteystiedot = Yhteystiedot::first();
        return view('yhteystiedot', ['yhteystiedot' => $yhteystiedot]);
    }
}
?>
