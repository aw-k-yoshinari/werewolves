<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @property mixed player_id
 */
class AbilityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * roomIdをセッションとクッキーで比較
     * @return bool
     */
    public function authorize()
    {
        if ($this->session()->get('roomId') != $this->cookie('roomId')) {
            return false;
        }
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
            'player_id' => 'required',
        ];
    }
}
