<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;
use App\Http\Resources\Tag\TagResource;
use App\Models\Tag;
use App\Services\TagServices;
use Illuminate\Http\Response;

class TagController
{
    public function index()
    {
        return TagResource::collection(Tag::all())->resolve();
    }

    public function show(Tag $tag)
    {
        return TagResource::make($tag)->resolve();
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $tag = TagServices::create($data);
        return TagResource::make($tag)->resolve();
    }

    public function update(Tag $tag, UpdateRequest $request)
    {
        $data = $request->validated();
        $tag = TagServices::update($tag, $data);
        return TagResource::make($tag)->resolve();
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return TagServices::delete($tag)->response(
            [
                'message' => 'post deleted'
            ],
            Response::HTTP_OK
        );
    }
}
