<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyRequest;
use App\Http\Resources\CompanyResource;
use App\Models\Company;

/**
 * @OA\Tag(
 *     name="Company",
 *     description="All about your companies.",
 * )
 */
class CompanyController extends Controller
{
    /**
     * @OA\Get(
     *      path="/company",
     *      operationId="index",
     *      tags={"Company"},
     *      summary="Retrieve the list of company",
     *      description="Retrieve the list of company",
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

        if($saved)
        {
            return new CompanyResource($company);
        }

        abort(500, "Could not save resource at this time.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Company  $company
     * @return \App\Http\Resources\CompanyResource
     */
    public function show(Company $company)
    {
        return new CompanyResource($company);
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

        if($saved)
        {
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

        if($deleted)
        {
            return new CompanyResource($company);
        }

        abort(500, "Could not save resource at this time.");
    }
}
