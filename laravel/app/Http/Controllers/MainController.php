<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller{
    public function index(Request $request) {
        $series = [
            'Grey\'s Anatomy',
            'Lost',
            'Agents of SHIELD'
        ];

        return view('main.index', [
            'series' => $series
        ]);
    }

    public function signup(Request $request) {

        return view('main.signup', []);
    }
}

?>
