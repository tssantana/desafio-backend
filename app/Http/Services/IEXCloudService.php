<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class IEXCloudService
{ 
    private $_uri;
    private $_token;

    public function __construct()
    {
        $this->_uri = env('IEXCLOUD_URL');
        $this->_token = env('IEXCLOUD_TOKEN');
    }

    public function getQuote(string $stock, string $field = null)
    {
        $path = '/stock/?/quote';
        
        if($field)
        {
            $path = '/stock/?/quote/?';
        }

        $path = Str::replaceArray('?', [$stock, $field], $path);
        
        $response = Http::acceptJson()->get($this->_uri . $path, [
            'token' => $this->_token
        ]);
        
        return $response;
    }

    public function getCompany(string $stock)
    {
        $path = '/stock/?/company';

        $path = Str::replaceArray('?', [$stock], $path);
        
        $response = Http::acceptJson()->get($this->_uri . $path, [
            'token' => $this->_token
        ]);
        
        return $response;
    }
}