<?php

namespace App\Http\Controllers;
use App\Http\Resources\v2\in\v2\out\MeetingResource;
use App\Http\Resources\v2\in\v2\out\ProtectedMeetingResource;
use App\Models\Meeting;
use App\Models\Room;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return ProtectedMeetingResource::collection(Meeting::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $meeting = Meeting::create($request->all());
        if($meeting != null){
            $json = json_decode($request->guests);
            foreach ($json as $guest){
                $meeting->id->guests()->attach($guest);
            }
            return response()->json([
                "message"=>"Meeting has been created.",
            "status"=>true,
                "meeting"=> new MeetingResource($meeting)
            ], 200);
        } else{
            return response()->json([
                "message"=>"Meeting has been created.",
                "status"=>false,
            ], 201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Meeting $meeting
     * @return MeetingResource
     */
    public function show(Meeting $meeting): MeetingResource
    {
       return new MeetingResource($meeting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Meeting $meeting
     * @return JsonResponse
     */
    public function update(Request $request, Meeting $meeting): JsonResponse
    {
        if($meeting->update($request->all())){
            return response()->json([
                "message"=>"Meeting has been updated.",
                "status"=>true,
                "meeting"=> new MeetingResource(Meeting::find($request->id))
            ], 200);
        } else{
            return response()->json([
                "message"=>"Meeting has not been updated.",
                "status"=>false,
            ], 201);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Meeting $meeting
     * @return JsonResponse
     */
    public function destroy(Meeting $meeting): JsonResponse
    {
        if($meeting->delete()){
            return response()->json([
                "message"=>"Meeting has been deleted.",
                "status"=>true,
            ], 200);
        } else{
            return response()->json([
                "message"=>"Meeting has not been deleted.",
                "status"=>false,
            ], 201);
        }
    }
}
