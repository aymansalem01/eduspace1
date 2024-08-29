<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GeminiAPI\Client;
use GeminiAPI\Resources\Parts\TextPart;

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
        $client = new Client("AIzaSyAiB_XaWi7SqcE2jT17evPTuDLj4a5ihr4");

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
