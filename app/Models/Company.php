<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{ 
    use HasFactory;

    protected $table = "companies";

    public $incrementing = false;    

    protected $primaryKey = "symbol";
    
    protected $fillable = [
        "symbol",
        "companyName",
        "exchange",
        "industry",
        "website",
        "description",
        "CEO",
        "securityName",
        "issueType",
        "sector",
        "primarySicCode",
        "employees",
        "tags",
        "address",
        "address2",
        "state",
        "city",
        "zip",
        "country",
        "phone",
    ];

    protected $casts = [
        "symbol" => 'string',
        "companyName" => 'string',
        "exchange" => 'string',
        "industry" => 'string',
        "website" => 'string',
        "description" => 'string',
        "CEO" => 'string',
        "securityName" => 'string',
        "issueType" => 'string',
        "sector" => 'string',
        "primarySicCode" => 'integer',
        "employees" => 'integer',
        "tags" => 'array',
        "address" => 'string',
        "address2" => 'string',
        "state" => 'string',
        "city" => 'string',
        "zip" => 'string',
        "country" => 'string',
        "phone" => 'string',
    ];

    public function cotations()
    {
        return $this->hasMany(Cotation::class, 'symbol', 'symbol');
    }
}
