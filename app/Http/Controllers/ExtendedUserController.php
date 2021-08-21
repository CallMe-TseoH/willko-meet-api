<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExtendedUserResource;
use App\Models\Connexion;
use App\Models\Device;
use App\Models\ExtendedUser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isFalse;

class ExtendedUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return string
     */
    public function index(): string
    {
       return ExtendedUser::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return ExtendedUserResource
     */
    public function store(Request $request) :ExtendedUserResource
    {
        $userData =ExtendedUser::firstWhere("uuid",$request->id);
        if($userData->devices->isEmpty()){
            Device::create($request->all());
            $userData->refresh();

        }elseif(collect($userData->devices)->firstWhere("appId",$request->appId)==null){
            Device::create($request->all());
            $userData->refresh();
        }
        return new ExtendedUserResource($userData);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ExtendedUser  $extendedUser
     * @return Response
     */
    public function show(ExtendedUser $extendedUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\ExtendedUser  $extendedUser
     * @return Response
     */
    public function update(Request $request, ExtendedUser $extendedUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExtendedUser  $extendedUser
     * @return Response
     */
    public function destroy(ExtendedUser $extendedUser)
    {
        //
    }
}
