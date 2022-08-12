<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PostingController extends Controller
{
    use ResponseTrait;

    public function __construct()
    {

    }
    public function index()
    {
        return view('posting.index');
    }
    public function create()
    {
        return view('posting.create');
    }
    public function store(StoreRequest $request)
    {

        try {
            $arr = $request->validated();
            $arr['image'] = optional($request->file('image'))->store('post_image');

            Post::create($arr);

            return $this->successResponse(message:'Successfully Posted');


        } catch (\Throwable $e) {
            return $this->errorResponse($e->getMessage());
        }


    }
}
