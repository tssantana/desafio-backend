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

    public function getQuote(string $symbol, string $field = null)
    {
        $path = '/stock/?/quote';
        
        if($field)
        {
            $path = '/stock/?/quote/?';
        }

        $path = Str::replaceArray('?', [$symbol, $field], $path);
        
        $response = Http::withoutVerifying()->acceptJson()->get($this->_uri . $path, [
            'token' => $this->_token
        ]);
        
        return $response;
    }

    public function getCompany(string $symbol)
    {
        $path = '/stock/?/company';

        $path = Str::replaceArray('?', [$symbol], $path);
        
        $response = Http::withoutVerifying()->acceptJson()->get($this->_uri . $path, [
            'token' => $this->_token
        ]);
        
        return $response;
    }
}