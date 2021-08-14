<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formfield;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function formfield(Request $requet)
    {
            $dummyFields = 	[
                ['name' => 'name', 'label' => 'first name'],
                ['name' => 'surname', 'label' => 'surname'],
                ['name' => 'email', 'label' => 'email'],
                ['name' => 'telephone', 'label' => 'telephone']
            ];

            echo json_encode($dummyFields);
    }




}
