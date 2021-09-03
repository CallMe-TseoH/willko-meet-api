<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProtectedRoomResource;
use App\Http\Resources\RoomResource;
use App\Models\Room;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return ProtectedRoomResource::collection(Room::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $room = Room::firstWhere("code", $request->code);
        if($room!=null){
            return response()->json([
                "message"=>"The ".$room->name." has been loaded.",
                "status"=>true,
                "room"=> new RoomResource($room),
            ], 200);
        }else{
            return  response()->json([
                "message"=>"We aren't found a room that match with the sent code",
                "status"=>false,
            ], 201);
        }
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Room $room
     * @return ProtectedRoomResource
     */
    public function show(Room $room): ProtectedRoomResource
    {
        return new ProtectedRoomResource($room);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Room $room
     * @return JsonResponse
     */
    public function update(Request $request, Room $room): JsonResponse
    {
        $updated = $room->update($request->all());
        if($updated){
            $roomUpdated = Room::firstWhere("code", $room->code);
            return response()->json([
                "message"=>"This room has been updated.",
                "status"=>true,
                "room"=> new RoomResource($roomUpdated),
            ], 200);
        }else{
            return  response()->json([
                "message"=>"This room has not been updated.",
                "status"=>false,
            ], 201);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Room $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
