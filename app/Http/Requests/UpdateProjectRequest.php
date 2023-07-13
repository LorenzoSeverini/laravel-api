<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'image' => 'required|url',
            'link' => 'required|url',
            "type_id" => "exists:types,id",
            "technologies" => "exists:technologies,id"
        ];
    }
    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'title.required' => 'The title is required',
            'title.min' => 'the title must be minimum 5 chart',
            'title.max' => 'the title must be maximum 255 chart',
            'description.required' => 'The description is required',
            'description.min' => 'the description must be minimum 5 chart',
            'description.max' => 'the description must be maximum 500 chart',
            'image.url' => 'the image must be a valid url',
            'link.url' => 'the link must be a valid url',
        ];
    }
}
