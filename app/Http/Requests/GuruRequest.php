<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuruRequest extends FormRequest
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
            'nipg'=>'required|numeric|unique:gurus',
            'no_telepon'=>'required|numeric|unique:gurus',
            'email'=>'required|unique:gurus'
        ];
    }

    public function message()
    {
        return [
            'nipg.required'=>'NIPG Wajib Di isi',
            'nipg.numeric'=>'NIPG Tidak Boleh Memakai Huruf',
            'no_telepon.required'=>'No Telepon Wajib Di isi',
            'no_telepon.numeric'=>'No Telepon Tidak Boleh Memakai Huruf',
            'email'=>'Email Ini Telah Dipakai'
        ];
    }
}
