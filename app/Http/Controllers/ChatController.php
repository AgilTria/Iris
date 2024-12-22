<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class ChatController extends Controller
{
    /**
     * @param Request $request
     * @return string
     */
    public function sendQuestion(Request $request)
    {
        // Validasi input dari user
        $request->validate([
            'question' => 'required|string|max:255',
        ]);

        $client = new Client();

        try {
            // Kirim permintaan ke API Flowise
            $response = $client->post('http://localhost:3000/api/v1/prediction/292dbcca-872d-47f4-9f3d-6b15160ea6e6', [
                'json' => [
                    'question' => $request->input('question'),
                ],
            ]);

            // Decode respons dari Flowise
            $responseBody = json_decode($response->getBody(), true);

            // Kembalikan respons ke frontend
            return response()->json([
                'status' => 'success',
                'answer' => $responseBody['answer'] ?? 'No answer available',
            ]);

        } catch (\Exception $e) {
            // Handle error
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to connect to Flowise',
                'error' => $e->getMessage(),
            ]);
        }
    }
}