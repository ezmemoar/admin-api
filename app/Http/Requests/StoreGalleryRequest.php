<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreGalleryRequest extends FormRequest
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

    public function getDbFormat(Request $request)
    {
        $data = [];

        foreach ($request as $val) {
            // $val->image->store

            $data[] = [
                "path" => "",
                "filename" => "",
                "title" => $val->title,
                "content" => $val->content,
                "type" => "",
                "size" => "",
            ];
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "*.image" => "required|file|mimes:png,jpg|max:2048",
            "*.title" => "required|string",
            "*.content" => "required|string",
        ];
    }
}
