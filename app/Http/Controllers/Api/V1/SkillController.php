<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\V1\SkillCollection;
use App\Http\Resources\V1\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;

// untuk proses validasi di dalam rest full api
use Illuminate\Support\Facades\Validator;

class SkillController extends Controller
{
    public function index()
    {
        // return response()->json("Skill Index");

        // nampilin semua
        return SkillResource::collection(Skill::all());

        //proses membagi konten
        // return SkillResource::collection(Skill::paginate(1));

        // return new SkillCollection(Skill::paginate(1));
    }

    public function show(Skill $skill)
    {
        // return $skill;
        return new SkillResource($skill);
    }

    public function store(StoreSkillRequest $request)
    {
        Skill::create($request->validated());
        return response()->json("Skill Created");
    }


    public function update(StoreSkillRequest $request, Skill $skill)
    {
        $skill->update($request->validated());
        return response()->json("Skill Updated");
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->json("Skill Deleted");
    }



}
