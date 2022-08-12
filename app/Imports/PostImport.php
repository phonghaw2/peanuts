<?php

namespace App\Imports;

use App\Enums\PostStatusEnum;
use App\Models\Post;
use App\Models\User;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PostImport implements ToArray, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function array(array $array)
    {
        foreach ($array as $each)
        $address = $each['address']; //column name
        $price = $each['price'];
        $district = $each['district'];
        $phone = $each['phone'];
        $tore = $each['tore'];

        Post::create([

            'title' => $address,
            'district' => $district,
            'city' => 'nhapcity',
            'country' => 'Việt Nam',
            'price' => $price,
            'mobile_phone' => $phone,
            'status' => PostStatusEnum::APPROVE,
            'tore' => $tore,

        ]);
    }
}
