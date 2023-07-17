<?php

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'published_at' => 'required|date',
            "type_id" => "exists:types,id",
            "technologies" => "exists:technologies,id",
            'image' => 'required|image|max:2048',
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
            'published_at.date' => 'the published_at must be a valid date',
            'type_id.exists' => 'the type must be a valid type',
            'technologies.exists' => 'the technologies must be a valid technologies',
            'image.required' => 'the image is required',
            'image.image' => 'the image must be a valid image',
            'image.max' => 'the image must be maximum 2048 kb',
        ];
    }
}
