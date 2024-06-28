<?php

namespace App\Http\Controllers;

use App\Models\ConfigurationPayment;
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

        $adquire = ConfigurationPayment::where('adquires', '704Pay')
        ->where('active', true)
        ->where('type', env("APP_ENV", "local")?false:true)
        ->firstOrFail();
        
        $idAdquire = env("APP_ENV", "local")?$adquire->id_homologation:$adquire->id_production;
        $secretAdquire = env("APP_ENV", "local")?$adquire->secret_homologation:$adquire->secret_production;
        $urlAdquire = env("APP_ENV", "local")?$adquire->url_homologation:$adquire->url_production;
        

        $paymentDataPix = [
            'amount' => (1 * 100),
            'dueDate' => Carbon::now()->format('Y-m-d'),
            'customer' => [
                'name' => "Jefferson Domingos",
                'documentNumber' => "61462200354",
                'email' =>  "jefferson@teste.com",
            ],
        ];
        $pay704 = new Pay704Service($idAdquire, $secretAdquire, $urlAdquire, );
        $pay704->pixPayment($paymentDataPix);
        return view('home');

        // $paymentData = [
        //     'amount' => (1 * 100),
        //     'payment' => [
        //         'type' => 'credit',
        //         'installments' => 1,
        //         'capture' => false,
        //         'delayed_split' => false,
        //         'card' => [
        //             'holder' => "Jefferson Domingos",
        //             'number' => "123456789",
        //             'expiry_month' => "05/25",
        //             'expiry_year' => "2026",
        //             'brand' => "MasterCard",
        //             'cvv' => "123",
        //         ],
        //     ],
        //     'customer' => [
        //         'name' => "Jefferson Domingos",
        //         'document' => "12345678",
        //         'email' =>  "jefferson@teste.com",
        //     ],
        // ];
        // $pay704 = new Pay704Service("34deed9a-8227-46e0-81e2-e46926f53c9f", "rO1428704Car001597635", false);
        // $pay704->creditPayment($paymentData);
        // return view('home');
    }
}
