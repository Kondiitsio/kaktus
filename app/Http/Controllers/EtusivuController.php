<?php
namespace App\Http\Controllers;

use App\Models\Etusivu;

class EtusivuController extends Controller
{
    public function index()
    {
        $etusivu = Etusivu::first();
        return view('etusivu', ['etusivu' => $etusivu]);
    }
}
?>
