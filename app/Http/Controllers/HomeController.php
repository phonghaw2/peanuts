<?php

namespace App\Http\Controllers;

use App\Enums\SystemCacheKeyEnum;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->model = Post::query();
    }
    public function index()
    {
        // $data = array();
        // if(Session::has)
        return view('home');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function office(request $request)
    {

        $selectedCity = $request->get('city');
        $selectedDistrict = $request->get('district');

        $query = $this->model->clone()
            ->latest()
            ->where('tore', 1 );

        if (!empty($selectedCity) && $selectedCity !== 'All') {
            $query->where('city', $selectedCity);
        }
        if (!empty($selectedDistrict) && $selectedDistrict !== 'All') {
            $query->where('District', $selectedDistrict);
        }


        $data = $query->paginate(8)
        ->appends([
            'city' => $selectedCity,
            'district' => $selectedDistrict,
        ]);


        $arrCity = cache()->remember(
            SystemCacheKeyEnum::POST_CITIES,
            86400 * 30,
            function () {
                $cities  = $this->model->clone()
                    ->distinct()
                    ->pluck('city')->toArray();

                return $cities;
            }
        );

        $dataDistrict =  $query
                    ->pluck('district')->toArray();

        return view('office',[
            'posts' => $data,
            'arrCity'  => $arrCity,
            'arrDistrict'  => $dataDistrict,
            'selectedCity' => $selectedCity,
            'selectedDistrict' => $selectedDistrict,
        ]); //append them cai filter nua~

    }
    public function apartment(request $request)
    {
        $selectedCity = $request->get('city');
        $selectedDistrict = $request->get('district');

        $query = $this->model->clone()
            ->latest()
            ->where('tore', 2 );

        if (!empty($selectedCity) && $selectedCity !== 'All') {
            $query->where('city', $selectedCity);
        }
        if (!empty($selectedDistrict) && $selectedDistrict !== 'All') {
            $query->where('District', $selectedDistrict);
        }


        $data = $query->paginate(8)
        ->appends([
            'city' => $selectedCity,
            'district' => $selectedDistrict,
        ]);


        $arrCity = cache()->remember(
            SystemCacheKeyEnum::POST_CITIES,
            86400 * 30,
            function () {
                $cities  = $this->model->clone()
                    ->distinct()
                    ->pluck('city')->toArray();

                return $cities;
            }
        );

        $dataDistrict =  $query
                    ->pluck('district')->toArray();


        return view('apartment',[
            'posts' => $data,
            'arrCity'  => $arrCity,
            'arrDistrict'  => $dataDistrict,
            'selectedCity' => $selectedCity,
            'selectedDistrict' => $selectedDistrict,
        ]); //append them cai filter nua~

    }
    public function test()
    {


    }

}
