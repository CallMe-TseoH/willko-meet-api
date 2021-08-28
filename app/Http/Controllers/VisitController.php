<?php

namespace App\Http\Controllers;

use App\Http\Resources\VisitResource;
use App\Models\Visit;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return VisitResource::collection(Visit::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Visit $visit
     * @return VisitResource
     */
    public function show(Visit $visit): VisitResource
    {
        return new VisitResource($visit);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Visit $visit
     * @return JsonResponse
     */
    public function update(Request $request, Visit $visit): JsonResponse
    {
        if ($visit->update($request->all())) {
            return response()->json([
                "message" => "The visit has been updated.",
                "status" => true
            ], 200);
        } else {
            return response()->json([
                "message" => "The visit has not been updated. An error has occurred.",
                "status" => false
            ], 201);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Visit $visit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visit $visit)
    {
        //
    }
}
