<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProyectoRequest extends FormRequest
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

      $photos = count($this->input('image'));
      foreach(range(0, $photos) as $index) {
          $rules['image.' . $index] = 'image|mimes:jpeg,png';
      }

      return $rules;

    }
}
