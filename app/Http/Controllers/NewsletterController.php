<?php

namespace App\Http\Controllers;

use App\Repositories\NewsletterRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    public function store(Request $request, NewsletterRepository $newsletter) {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:newsletters,email'
        ],
        [
            'email.required' => 'O Email é obrigatório',
            'email.email' => '',
            'email.unique' => 'Esse email já foi cadastrado',
        ]);

        if($validator->fails()) {
            return response()->json([
                'response' => 'erro',
                'message' => $validator->errors()->first('email')
            ], 200);
        }

        try {
            $newsletter->create($request->all());

            return response()->json([
                'response' => 'success',
                'message' => 'mensagem de cadastro bem sucedido.'
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'response' => 'erro',
                'message' => $e->getMessage()
            ], 200);
        }

    }
}
