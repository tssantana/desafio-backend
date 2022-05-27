<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CotationRequest;
use App\Http\Resources\CotationResource;
use App\Models\Cotation;

class CotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \App\Http\Resources\CotationResource
     */
    public function index()
    {
        $cotations = Cotation::all();

        return CotationResource::collection($cotations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\CotationRequest  $request
     * @return \App\Http\Resources\CotationResource
     */
    public function store(CotationRequest $request)
    {
        $data = $request->all();

        $cotation = new Cotation($data);

        $saved = $cotation->save();

        if($saved)
        {
            return new CotationResource($cotation);
        }
        
        abort(500, "Could not save resource at this time.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cotation  $cotation
     * @return \App\Http\Resources\CotationResource
     */
    public function show(Cotation $cotation)
    {
        return new CotationResource($cotation);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\CotationRequest  $request
     * @param  \App\Models\Cotation  $cotation
     * @return \App\Http\Resources\CotationResource
     */
    public function update(CotationRequest $request, Cotation $cotation)
    {
        $data = $request->all();

        $cotation->fill($data);
        
        $saved = $cotation->save();

        if($saved)
        {
            return new CotationResource($cotation);
        }
        
        abort(500, "Could not save resource at this time.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cotation  $cotation
     * @return \App\Http\Resources\CotationResource
     */
    public function destroy(Cotation $cotation)
    {
        $deleted = $cotation->delete();

        if($deleted)
        {
            return new CotationResource($cotation);
        }

        abort(500, "Could not save resource at this time.");
    }
}
