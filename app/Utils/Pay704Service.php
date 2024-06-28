<?php

namespace App\Utils;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class Pay704Service {

    protected $url;
    protected $id;
    protected $secret;
    protected $type;

    public function __construct(string $id, string $secret, bool $type=true) {

        $this->id = $id;
        $this->secret = $secret;
        $this->type = $type;
        
        if ($type) {
            $this->url = env('API_URL_704PAY_PROD');
        
        } else {
            $this->url = "https://704pay-api.dev.704apps.com.br/";
        }
        
    }

 public function pixPayment($paymentData = [])
    {
        
        try {
            if (empty($paymentData) || empty($this->id) || empty($this->secret)) {
                throw new \Exception('Error processing payment. Please try again.');
            }
            
            $response = Http::withHeaders(
                [
                    "Accept" => "application/json",
                    "Content-Type" => "application/json",
                    "id"=> $this->id,
                    "secret"=> $this->secret,

                ]
            )->post($this->url . 'v1/payment/sales/pix', $paymentData);
            $payment = json_decode($response->body(), true);
                    

            Log::info('WEBPAGUE success: ' . json_encode($payment));
            
            return $payment['response'];


        } catch (\Exception $e) {
            \dd($e);
            Log::info('WEBPAGUE exception : ' . json_encode($e));
            throw  new \Exception('Erro ao processar pagamento, tente novamente');
        }
    }

    public function creditPayment($paymentData = [])
    {
        try {
            if (empty($paymentData) || empty($this->id) || empty($this->secret)) {
                throw new \Exception('Error processing payment. Please try again.');
            }
            

            $response = Http::withHeaders(
                [
                    "Accept" => "application/json",
                    "Content-Type" => "application/json",
                    "header" => "ContentType application/json",
                    "id"=> $this->id,
                    "secret"=> $this->secret,

                ]
            )->post($this->url . 'v1/payment/sales/', $paymentData);
            $payment = json_decode($response->body(), true);
                    

            Log::info('WEBPAGUE success: ' . json_encode($payment));

            $this->validateArrayResponse($payment);
        

            return $payment['response']['uuid'];


        } catch (\Exception $e) {
            Log::info('WEBPAGUE exception : ' . json_encode($e));
            throw  new \Exception('Erro ao processar pagamento, tente novamente');
        }
    }

    private function validateArrayResponse(?array $payment)
    {
        if (empty($payment) || ($payment['status'] !== true && empty($payment['response']))) {
            throw new \Exception('Erro ao processar pagamento, tente novamente');
        }
    }


}

?>