<?php

namespace App\Http\Controllers;

use App\Utils\Pay704Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $paymentDataPix = [
            'amount' => (1 * 100),
            'dueDate'=> Carbon::now()->format('Y-m-d'),
            'customer' => [
                'name' => "Jefferson Domingos",
                'documentNumber' => "61462200354",
                'email' =>  "jefferson@teste.com",
            ],
        ];
        $pay704 = new Pay704Service("34deed9a-8227-46e0-81e2-e46926f53c9f", "rO1428704Car001597635", false);
        $pay704 ->pixPayment($paymentDataPix);
        return view('home');
    }
}
