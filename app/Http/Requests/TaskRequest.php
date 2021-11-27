<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskRequest extends FormRequest
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
        return [
            'task' =>['required'],
            'user'=>['required']
        ];
    }
//function mengubah validasi pesan dan mengembalikan nilai input terakhir
    public function messages(){
        return[
        'required'=>'isian :attribute harus di isi',
        'user.required'=>'nama pengguna harus di isi'//khusukan untuk name user
        ];
      
    }
}
