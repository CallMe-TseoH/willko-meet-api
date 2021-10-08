<?php

namespace App\Http\Controllers;

use App\Http\Resources\ParcelResource;
use App\Models\Parcel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return ParcelResource::collection(Parcel::where("archived", false)->get());
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
     * @param Parcel $parcel
     * @return ParcelResource
     */
    public function show(Parcel $parcel): ParcelResource
    {
        return new ParcelResource($parcel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Parcel $parcel
     * @return JsonResponse
     */
    public function update(Request $request, Parcel $parcel): JsonResponse
    {
        if($parcel->update($request->all())){
            $parcel->refresh();
            return response()->json([
                "message" => "The " .$parcel->type. " has been marked as recovered.",
                "status" => true
            ], 200);
        } else {
            return response()->json([
                "message" => "The " .$parcel->type.  " has not been marked as recovered. An error has occurred.",
                "status" => false

            ], 201);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Parcel $parcel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parcel $parcel)
    {
        //
    }
}
