<?php

namespace App\Services;

use App\Models\Profile;

class ProfileService
{

    public static function create(array $data): Profile
    {
        return Profile::create($data);
    }

    public static function update(Profile $profile, array $data): Profile
    {
        return $profile->update($data);
    }

    public static function delete($id): Profile
    {
        $profile = Profile::find($id);

        return $profile->delete();
    }
}
