<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Community;
use App\Http\Resources\CommunityResource;
use Illuminate\Support\Facades\Validator;

class CommunityController extends Controller
{
    public function index()
    {
        $communities = Community::all();
        return CommunityResource::collection($communities);
    }

    public function show($community_name)
    {
        $community = Community::where('community', $community_name)->first();

        if (!$community) {
            return response()->json(['error' => 'Community not found'], 404);
        }

        return new CommunityResource($community);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'community' => 'required|string|max:255',
            'profile_path' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $community = Community::create($request->all());
        return new CommunityResource($community);
    }

    public function update(Request $request, $community_name)
    {
        $community = Community::where('community', $community_name)->first();

        if (!$community) {
            return response()->json(['error' => 'Community not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'community' => 'required|string|max:255',
            'profile_path' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $community->update($request->all());
        return new CommunityResource($community);
    }

    public function destroy($community_name)
    {
        $community = Community::where('community', $community_name)->first();

        if (!$community) {
            return response()->json(['error' => 'Community not found'], 404);
        }

        $community->delete();
        return response()->json(['message' => 'Community deleted successfully']);
    }
}
