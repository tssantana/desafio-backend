<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Api\CompanyController;
use App\Http\Requests\CompanyRequest;
use App\Http\Services\IEXCloudService;

class DashboardController extends Controller
{
    public function company(CompanyRequest $request)
    {
        $symbol = $request->symbol;

        $companyController = new CompanyController(new IEXCloudService());

        $company = $companyController->show($symbol);
        $cotation = $companyController->quote($symbol);
        $error = null;

        if (!isset($cotation->latestPrice)){
            $company = null;
            $cotation = null;
            $error = 'Não foi possível encontrar o symbol informado.';
        };

        return redirect()
            ->route('dashboard')
            ->with(compact('company', 'cotation'))
            ->withErrors(['notFound' => $error]);
    }
}
