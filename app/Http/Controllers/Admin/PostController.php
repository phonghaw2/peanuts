<?php

namespace App\Http\Controllers\Admin;

use App\Enums\PostToreEnum;
use App\Enums\PostTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ResponseTrait;
use App\Imports\PostImport;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\Post\StoreRequest;

class PostController extends Controller
{
    //\
    use ResponseTrait;

    private object $model;
    public function __construct()
    {
        $types = PostTypeEnum::asArray();
        $tores = PostToreEnum::asArray();
        $this->model = Post::query();
        $this->table = (new Post())->getTable();

        View::share('title', ucwords($this->table));
        View::share('table', $this->table);
        view()->share([
            'types' => $types,
            'tores' => $tores,
        ]);

    }
    public function index(request $request)
    {
        $selectedType = $request->get('type');
        $selectedTore = $request->get('tore');

        return view('admin.posts.index',[
            'selectedType' => $selectedType,
            'selectedTore' => $selectedTore,
        ]);
    }
    public function create()
    {
        return view('admin.posts.create');
    }

    public function importCsv(Request $request)
    {
        try {
            Excel::import(new PostImport, $request->file('file'));

            return $this->successResponse();
        } catch (\Throwable $th) {
            return $this->errorResponse();
        }

    }

    public function store(StoreRequest $request)
    {
        try {
            Post::create($request->validated());
            
            return $this->successResponse(message:'Successfully Posted');


        } catch (\Throwable $th) {
            return $this->errorResponse();
        }


    }
}
