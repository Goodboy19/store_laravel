<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_product_name'=>'requeried',
            'category_product_desc'=>'requeried',
            'category_product_status'=>'requeried',
            //
        ];
    }
    public function messages()
    {
        return [
            'category_product_name.requeried'=>'Vui lòng nhập tên danh mục',
            'category_product_desc.requeried'=>'Vui lòng nhập mô tả',
            'category_product_status.requeried'=>'Vui lòng chọn chế độ hiển thị',
            //
        ];
    }
}
