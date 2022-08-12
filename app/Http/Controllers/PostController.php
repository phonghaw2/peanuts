<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\CheckSlugRequest;
use App\Http\Requests\Post\GenerateSlugRequest;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\JsonResponse;


class PostController extends Controller
{
    use ResponseTrait;
    private object $model;

    public function __construct()
    {
        $this->model = Post::query();


    }
    public function index(): JsonResponse
    {
        $data = $this->model->paginate(10);
            // ->append([
            //     'type_name',
            //     'tore_name',
            //     'status_name',
            // ]);
        foreach ($data as $each) {
            $each->type = $each->type_name;
            $each->tore = $each->tore_name;
            $each->status = $each->status_name;
        }
        $arr['data'] = $data->getCollection();
        $arr['pagination'] = $data->linkCollection();
        $arr['currentPage'] = $data->currentPage();
        $arr['lastPage'] = $data->lastPage();

        return $this->successResponse($arr);

    }
    public function generateSlug(GenerateSlugRequest $request)
    {
        try {
            $makeSlug = $request->get('makeSlug');
            $slug = SlugService::createSlug(Post::class, 'slug', $makeSlug);

            return $this->successResponse($slug);
        } catch (\Throwable $th) {
            //throw $th;
            return $this->errorResponse();
        }
    }
    public function checkSlug(CheckSlugRequest $request)
    {
        return $this->successResponse();
    }

}
