<?php

namespace App\Http\Controllers;

use App\Http\Resources\DeviceResource;
use App\Models\Device;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        return DeviceResource::collection(Device::all());
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
     * @param Device $device
     * @return DeviceResource
     */
    public function show(Device $device): DeviceResource
    {
        return new DeviceResource($device);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Device $device
     * @return JsonResponse
     */
    public function update(Request $request, Device $device): JsonResponse
    {
        if($device->update($request->all())){
            return response()->json([
                "message" => "Settings has been updated.",
                "status" => true,
                "device"=> new DeviceResource(Device::find(1))
            ], 200);
        }else{
            return response()->json([
                "message" => "Settings has not been updated.",
                "status" => true
            ], 201);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Device $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        //
    }
}
