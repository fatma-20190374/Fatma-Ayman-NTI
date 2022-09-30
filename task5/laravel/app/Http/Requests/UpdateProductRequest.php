<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name_en'=>['required','between:2,512'],
            'name_ar'=>['required','between:2,512'],
            'image'=>['required','mimes:png,jpg,jpeg','max:1024'],
            'quantity'=>['nullable','integer','between:1,999'],
            'price'=>['required','numeric','between:1,99999.99'],
            'details_en'=>['required'],
            'details_ar'=>['required'],
            'code'=>['required','integer','digits:6','unique:products,code'.$this->id],
            'status'=>['nullable','in:1,0'],
            'subcategory_id'=>['required','integer','exists:subcategories,id'],
            'brand_id'=>['nullable','integer','exists:brands,id']
        ];
    }
}
