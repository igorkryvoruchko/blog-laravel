<?php

namespace App\Http\Controllers;

use App\Http\Exchange\Exchange;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function admin()
    {
        return view('admin');
    }

    public function exchange(\Symfony\Component\HttpFoundation\Request $request)
    {
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->request('GET', 'https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11');
        $json = $result->getBody();
        return $json;
    }
}
