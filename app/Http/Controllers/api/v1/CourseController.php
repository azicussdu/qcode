<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
//use Illuminate\Http\JsonResponse; - for message like responses

class CourseController extends Controller
{
    public function index()
    {
        return JsonResource::collection(Course::paginate(10)); //better to do orderBy and paginate
    }

    public function store(Request $request)
    {
        //for admin
    }

    public function show($alias)
    {
        var_dump('was in show method');
        return new JsonResource(Course::findOrFail($alias)); // must take not with ID but with alias
    }

    public function update(Request $request, $id)
    {
        //for admin
    }

    public function destroy($id)
    {
        //for admin
    }
}
