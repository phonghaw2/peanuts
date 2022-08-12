<?php

use App\Enums\SystemCacheKeyEnum;
use App\Models\Post;


// if (!function_exists('getAndCachePostCities')) {
//     function getAndCachePostCities(): array
//     {
//         return cache()->remember(
//             SystemCacheKeyEnum::POST_CITIES,
//             86400 * 30,
//             function () {
//                 $cities  = Post::query()
//                     ->pluck('city')->toArray();
//                 $arrCity = [];
//                 foreach ($cities as $city) {
//                     if (empty($city)) {
//                         continue;
//                     }
//                     $arr = explode(', ', $city);
//                     foreach ($arr as $item) {
//                         if ($arrCity->contains($item)) {
//                             continue;
//                         }
//                         $arrCity[] = $item;
//                     }
//                 }

//                 return $arrCity->toArray();
//             }
//         );
//     }
// }
