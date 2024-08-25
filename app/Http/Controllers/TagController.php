<?php

namespace App\Http\Controllers;

use App\Http\Resources\Tag\TagResource;
use App\Services\TagServices;
use App\Models\Tag;
use Illuminate\Http\Response;

class TagController extends Controller
{
    public function index()
    {
        return TagResource::collection(Tag::all())->resolve();
    }

    public function show(Tag $tag)
    {
        return TagResource::make($tag)->resolve();
    }

    public function store()
    {
        $data = [
            'id' => 6,
            'title' => 'new title'
        ];

        $tag = TagServices::create($data);
        return $tag;
    }

    public function update(Tag $tag): array
    {
//        $id = 2;
//
//        $tag = Tag::find($id);
//
//        $data = [
//            'title' => 'new new title'
//        ];
//
//        $tag->update($data);
//        return $tag;

        return TagServices::update($tag);
    }

    public function destroy()
    {
//        $id = 2;
//        $tag = Tag::find($id);
//        $tag->delete();
//        return response(
//            [
//                'message' => 'post deleted'
//            ],
//            Response::HTTP_OK
//        );

        TagServices::delete();
        return response(
            [
                'message' => 'tag deleted successfully'
            ],
            Response::HTTP_OK
        );
    }
}
