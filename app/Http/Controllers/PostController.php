<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\CheckSlugRequest;
use App\Http\Requests\Post\GenerateSlugRequest;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use ResponseTrait;
    private object $model;

    public function __construct()
    {
        $this->model = Post::query();


    }
    public function index(request $request): JsonResponse
    {
        $selectedTore = $request->get('tore');
        $selectedType = $request->get('type');


        $query = $this->model->clone()
                ->latest()  ;

        if (!empty($selectedTore) && $selectedTore !== '0' ) {
            $query->where('tore', $selectedTore);
        }
        if (!empty($selectedType) && $selectedType !== '0') {
            $query->where('type', $selectedType);
        }
        $data = $query->paginate(10)
            ->appends([
                'role' => $selectedTore,
                'city' => $selectedType,
            ]);


        // $data = $this->model->paginate(10);
        //     // ->append([
        //     //     'type_name',
        //     //     'tore_name',
        //     //     'status_name',
        //     // ]);
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

    public function show(Request $request) : JsonResponse
    {
        $id = $request->id;
        $post = $this->model
                ->findOrFail($id);

        return $this->successResponse($post);
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
