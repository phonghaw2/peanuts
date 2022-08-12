<?php

namespace App\Models;

use App\Enums\PostStatusEnum;
use App\Enums\PostToreEnum;
use App\Enums\PostTypeEnum;
use App\Enums\SystemCacheKeyEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = [
        'title',
        'type',
        'tore',
        'district',
        'city',
        'country',
        'price',
        'address',
        'mobile_phone',
        'office_phone',
        'status',
        'bedroom',
        'wc',
        'area',
        'description',
        'created_at',
        'start_date',
        'end_date',
        'slug',
        'image',
    ];
    public function file()
    {
        return $this->belongsTo(File::class);
    }
    protected static function booted()
    {
        static::creating(static function ($user) {
            $user->user_id = auth()->user()->id;
            // $user->user_id = 1;
        });
        static::saved(static function ($object) {
            $city    = $object->city;
            $arrayCity = [];
            $arrCity = cache()->remember(
                SystemCacheKeyEnum::POST_CITIES,
                86400 * 30,
                function () use ($arrayCity){
                    $cities  = Post::query()
                        ->distinct()
                        ->pluck('city')->toArray();
                    foreach ($cities as $city) {
                        $arrayCity[] = $city;
                    }

                    return $arrayCity;
                }
            );

            if(!$arrCity->contains($city)){
                $arrCity[] = $city;
            }

            cache()->put(SystemCacheKeyEnum::POST_CITIES, $arrCity);
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getTypeNameAttribute()
    {
        return PostTypeEnum::getKey($this->type);
    }

    public function getToreNameAttribute()
    {
        return PostToreEnum::getKey($this->tore);
    }

    public function getStatusNameAttribute()
    {
        return PostStatusEnum::getKey($this->status);
    }


}
