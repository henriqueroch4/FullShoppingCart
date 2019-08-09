<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client as Client;
use GuzzleHttp\Exception\RequestException;

class EntrarController extends Controller
{
    public function index()
    {
        return view('login.index');    
    }

    public function entrar(Request $request)
    {
        try
        {

            $params = [
                'email' => $request->input('email'),
                'password' => $request->input('password')
            ];

            $headers = [
                'Content-Type' => 'application/json'
            ];

            $client = new Client();
            $request = $client->request('POST', 'https://api.dooki.com.br/v2/auth/login', ['json' => $params, 'headers' => $headers]);

            $content = json_decode($request->getBody()->getContents(), true);

            // Obtem o token de acesso
            $token = $content['access_token'];

            echo "logado com sucesso";

        } catch ( RequestException $e )
        {
            die(sprintf("Ocorreu um erro: {$e->getMessage()}"));
        }
    
    }
}
