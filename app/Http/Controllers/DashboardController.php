<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\CompanyController;
use App\Http\Services\IEXCloudService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function company(Request $request)
    {
        $symbol = $request->symbol;

        $companyController = new CompanyController(new IEXCloudService());
        
        $company = $companyController->show($symbol);
        $cotation = $companyController->quote($symbol);
        
        return view('dashboard', compact('company', 'cotation'));
    }
}
