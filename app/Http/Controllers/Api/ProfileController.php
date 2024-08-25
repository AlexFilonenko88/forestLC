<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Profile\StoreRequest;
use App\Http\Requests\Profile\UpdateRequest;
use App\Http\Resources\Profile\ProfileResource;
use App\Models\Profile;
use App\Services\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController
{
    public function index()
    {
        return ProfileResource::collection(Profile::all())->resolve();
    }

    public function show(Profile $profile)
    {
        return ProfileResource::make($profile)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $profile = ProfileService::create($data);
        return ProfileResource::make($profile)->resolve();
    }

    public function update(Profile $profile, UpdateRequest $request)
    {
        $data = $request->validated();
        $profile = ProfileService::update($profile, $data);
        return ProfileResource::make($profile)->resolve();
    }

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return ProfileService::delete($profile)->response(
            [
                'message' => 'deleted successfully'
            ],
            Response::HTTP_OK
        );
    }
}
