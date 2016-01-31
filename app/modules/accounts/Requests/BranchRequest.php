<?php
/**
 * Created by PhpStorm.
 * User: etsb
 * Date: 1/25/16
 * Time: 1:46 PM
 */

namespace App\Http\Requests;
use App\Http\Requests\Request;



class BranchRequest extends Request
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
            'code' => 'required|max:64',
            'title' => 'required|max:64',
            'currency_id' => 'required|max:10',
            'exchange_rate' => 'required',
            'status' => 'required'
        ];
    }
}