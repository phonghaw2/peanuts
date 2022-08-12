<?php

namespace App\Http\Requests\Post;

use App\Enums\PostToreEnum;
use App\Enums\PostTypeEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {

        $rules = [
            'title' => [
                'bail',
                'required',
                'string',
                'max:100',
            ],
            'price'=> [
                'bail',
                'required',
                'numeric',
            ],
            'area'=> [
                'bail',
                'required',
                'numeric',
            ],
            'type'=> [
                'required',
                Rule::in(PostTypeEnum::getValues()),
            ],
            'tore' => [
                'required',
                Rule::in(PostToreEnum::getValues()),
            ],
            'address'=> [
                'bail',
                'required',
                'string',
                'max:150',
            ],
            'district'=>[
                'bail',
                'required',
                'string',
                'max:150',
            ],
            'city' => [
                'bail',
                'required',
                'string',
                'max:50',
            ],
            'slug' => [
                'bail',
                'required',
                'string',
                'max:250',
            ],
            'mobile_phone' => [
                'bail',
                'required',
                'numeric',
                'digits_between:10,11',
            ],
            'office_phone' => [
                'bail',
                'nullable',
                'numeric',
            ],
            'description' => [
                'bail',
                'required',
                'max:500',
            ],
            'end_date' =>[
                'bail',
                'nullable',
                'date',
                'after_or_equal:start_date',
            ],
            'image' => [
                'nullable',
                'file',
                'image',
                'max:5000',
            ],
        ];

        $rules['start_date'] = [
            'date',
        ];
        if(!empty($this->end_date)){
            $rules['start_date'][] = 'before:end_date';
        };
        if($this->tore == 2){
            $rules['bedroom'] = [
                'bail',
                'required',
                'numeric',
            ];
            $rules['wc'] = [
                'bail',
                'required',
                'numeric',
            ];

        };

        return $rules;
    }
    public function messages()
    {
        return [
            'string' => 'The field must be a string',
            'title.max:100' => 'Your title is too long! (Maximum is 100 character)',
            'description.max:500' => 'Your description is too long! (Maximum is 500 character)',
            'end_date.date' => 'Please enter the correct format (End date) ',
            'end_date.after_or_equal:start_date' => 'Are u okay ?  (End date must be after Start date) ',
        ];
    }
}
