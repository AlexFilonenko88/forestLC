<?php

namespace App\Http\Controllers;

use App\Http\Resources\Profile\ProfileResource;
use App\Models\Profile;
use App\Services\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileContriller
{
    public function index()
    {
        return ProfileResource::collection(Profile::all())->resolve();
    }

    public function show(Profile $profile)
    {
        return ProfileResource::make($profile)->resolve();
    }

    public function store($profile)
    {
        return ProfileService::create($profile);
    }

    public function update(int $profile): array
    {
        return ProfileService::update($profile);
    }

    public function destroy($profile)
    {
        ProfileService::delete($profile);
        return response(
            [
                'message' => 'deleted successfully'
            ],
            Response::HTTP_OK
        );
    }
}
