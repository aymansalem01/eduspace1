<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Support\Env;

class ChatController extends Controller
{
    public function handleMessage(Request $request)
    {
        // Validate request data
        $request->validate([
            'text' => 'required|string',
        ]);

        // Get the text from the request
        $text = $request->input('text');

        // Initialize the Gemini client
        $key = env('API_KEY');
        $client = new Client($key);

        // Generate the response using Gemini API
        $response = $client->geminiPro()->generateContent(
            new TextPart("Give me a concise answer in 2 lines max about: " . $text)
        );

        // Extract text from the response
        $responseText = $response->text();

        // Return the response as plain text
        return response($responseText);
    }
}
