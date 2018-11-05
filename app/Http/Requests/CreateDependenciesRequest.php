<?php

namespace App\Http\Requests;

use App\Dependencies;
use Illuminate\Foundation\Http\FormRequest;

class CreateDependenciesRequest extends FormRequest
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
            'name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es obligatorio'
        ];
    }

    public function createDependency()
    {
        $dependency = new Dependencies();

        $dependency->forceFill([
            'name' => $this->name,
        ]);

        $dependency->save();


    }
}
