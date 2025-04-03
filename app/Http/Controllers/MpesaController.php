<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MpesaService;

class MpesaController extends Controller
{
    protected $mpesaService;

    public function __construct(MpesaService $mpesaService)
    {
        $this->mpesaService = $mpesaService;
    }

    public function initiateStkPush(Request $request)
    {
        $request->validate([
            'phone' => 'required|regex:/^2547[0-9]{8}$/',
            'amount' => 'required|numeric|min:1',
            'reference' => 'required|string'
        ]);

        $response = $this->mpesaService->stkPush(
            $request->phone,
            $request->amount,
            $request->reference
        );

        return response()->json($response);
    }
}
