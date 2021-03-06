<?php

namespace App\Http\Requests;

use App\Actus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreActusRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('actus_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'title'   => [
                'required',
            ],
            'content' => [
                'required',
            ],
            'cover'   => [
                'required',
            ],
        ];
    }
}
