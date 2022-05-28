<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Http\Services\IEXCloudService;
use App\Models\Company;
use App\Models\Cotation;
use Illuminate\Support\Facades\Log;

/**
 * @OA\Tag(
 *     name="Company",
 *     description="Tudo sobre as suas empresas.",
 * )
 */
class CompanyController extends Controller
{
    private $_http;

    public function __construct(IEXCloudService $service)
    {
        $this->_http = $service;
    }

    /**
     * @OA\Get(
     *      path="/company",
     *      operationId="index",
     *      tags={"Company"},
     *      summary="Recupera todas as companhias cadastradas.",
     *      description="Recupera uma lista com todas as companhias já cadastradas.",
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(
     *                ref="#/components/schemas/CompanyResponse"
     *              )
     *          )
     *       ),
     *       @OA\Response(response=400, description="Bad request"),
     *     )
     * 
     * 
     * @return \App\Http\Resources\CompanyResource
     */
    public function index()
    {
        $companies = Company::with('cotations')->get();

        return CompanyResource::collection($companies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CompanyRequest  $request
     * @return \App\Http\Resources\CompanyResource
     */
    public function store(CompanyRequest $request)
    {
        $data = $request->all();

        $company = new Company($data);

        $saved = $company->save($data);

        if ($saved) {
            return new CompanyResource($company);
        }

        abort(500, "Could not save resource at this time.");
    }

    /**
     * @OA\Get(
     *      path="/company/{company}",
     *      operationId="show",
     *      tags={"Company"},
     *      summary="Recupera a companhia informada.",
     *      description="Recupera as informações da companhia solicitada.",
     *      @OA\Parameter(
     *          name="company",
     *          description="Símbolo da companhia",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(
     *                ref="#/components/schemas/CompanyResponse"
     *              )
     *          )
     *       ),
     *       @OA\Response(response=400, description="Bad request"),
     *     )
     * 
     * @param  string  $company
     * @return \App\Http\Resources\CompanyResource
     */
    public function show(string $company)
    {
        $model = Company::find($company);

        if (!$model) {

            $response = $this->_http->getCompany($company);
            if ($response->ok()) {
                $data = $response->json();

                $model = new Company($data);

                $saved = $model->save();

                if (!$saved) {
                    abort(500, "Could not save resource at this time.");
                }
            }
        }

        return new CompanyResource($model);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CompanyRequest  $request
     * @param  \App\Models\Company  $company
     * @return \App\Http\Resources\CompanyResource
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $data = $request->all();

        $company->fill($data);
        $saved = $company->save($data);

        if ($saved) {
            return new CompanyResource($company);
        }

        abort(500, "Could not save resource at this time.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Company  $company
     * @return \App\Http\Resources\CompanyResource
     */
    public function destroy(Company $company)
    {
        $deleted = $company->delete();

        if ($deleted) {
            return new CompanyResource($company);
        }

        abort(500, "Could not save resource at this time.");
    }

    /**
     * @OA\Get(
     *      path="/company/{company}/quote",
     *      operationId="quote",
     *      tags={"Company"},
     *      summary="Recupera a cotação atual da empresa.",
     *      description="Recupera a cotação atual da empresa com atraso de 15 minutos.",
     *      @OA\Parameter(
     *          name="company",
     *          description="Símbolo da companhia",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="string"
     *          )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="OK",
     *          @OA\JsonContent(
     *              type="array",
     *              @OA\Items(
     *                ref="#/components/schemas/CompanyResponse"
     *              )
     *          )
     *       ),
     *       @OA\Response(response=400, description="Bad request"),
     *     )
     */
    public function quote(string $company, string $field = null)
    {
        $model = Cotation::find($company);

        if (!$model) {

            $response = $this->_http->getQuote($company);

            if ($response->ok()) {
                $data = $response->json();

                Log::info($data);

                $model = new Cotation($data);

                $saved = $model->save();

                if (!$saved) {
                    abort(500, "Could not save resource at this time.");
                }
            }
        }

        return new CompanyResource($model);
    }
}
