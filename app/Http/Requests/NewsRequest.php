<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $postId = $this->route()->parameter('id');
        return [
            'txtTitle' => 'required|unique:news,title,'.$postId,
            
            'txtSource' => 'required',
            'txtDes' => 'required',
            'txtContent' => 'required'
        ];
    }

     public function messages()
    {
        return [
            'txtName.required' => 'Bạn chưa nhập tiêu đề bài viết',
            'txtName.unique' => 'Tiêu đề bài viết đã tồn tại',
            
            'txtDes.required' => 'Bạn chưa nhập mô tả',
            'txtSource.required' => 'Bạn chưa nhập nguồn trang',
            'txtContent.required' => 'Bạn chưa nhập nội dung'
        ];
    }
}
