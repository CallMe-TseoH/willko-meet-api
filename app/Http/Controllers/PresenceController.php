<?php

namespace App\Http\Controllers;

use App\Http\Resources\PresenceResource;
use App\Models\EnterExitData;
use App\Models\Presence;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class PresenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return PresenceResource::collection(Presence::where("archived", false)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        if(EnterExitData::create($request->all())){
            return response()->json([
                "message" => $request-> isEnter? "Your entry has been saved.": "Your output has been recorded.",
                "status" => true
            ], 200);
        } else {
            return response()->json([
                "message" => $request-> isEnter? "Your entry has not been saved. An error has occurred.": "Your output has not been recorded. An error has occurred.",
                "status" => false

            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Presence $presence
     * @return PresenceResource
     */
    public function show(Presence $presence): PresenceResource
    {
        return new PresenceResource($presence);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Presence $presence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presence $presence)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Presence $presence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presence $presence)
    {
        //
    }
}
