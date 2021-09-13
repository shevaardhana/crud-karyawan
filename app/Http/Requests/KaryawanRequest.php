<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KaryawanRequest extends FormRequest
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
            'mulai_kerja' => 'required|date',
            'posisi' => 'required',
            'nama' => 'required|max:255',
            'rekening' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'no_ktp' => 'required',
            'no_hp' => 'required',
        ];
    }
}
