<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
  public function rules():array
  {
    return[
        'post.title'=>'required|string|maz:100',
        'post.body'=>'required|string|maz:4000',
    ];
  }  
}
