<?php

namespace App\Http\Controllers\api;

use File;
use Exception;
use App\Models\User;
use App\Models\Setting;
use App\Models\settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ScriptController extends Controller
{
    public function callPythonScript(Request $request)
    {
        // ... (rest of your code)
        $request->validate([
            "image" => "required",
        ]);
        $settings = Setting::first();
        $path = 'temp';
        $imagePath = $request->file('image')->storeAs($path, '1.png', 'public');
        $imagePath = Storage::url($imagePath);
        // Define Python path and script path
        $python_path = 'C:\\Users\\digit\\AppData\\Local\\Programs\\Python\\Python312\\python.exe';
        $script_path = 'C:\\xampp\\htdocs\\eduspace1\\imageRec.py';

        // Pass data as argument (modify based on Python script)
        //$data1 = 3;
        // Assuming script expects an integer
        //$var = escapeshellarg($data);
        $command = $python_path . ' ' . $script_path . ' ' . escapeshellarg($settings->counter);
        // $settings->counter++;
        // $settings->save();
        try {
            $output = shell_exec($command);
            $result = json_decode($output, true);
            File::delete(public_path($imagePath));
            if (User::where('plate', $this->extract_alphanumeric($result))->where('is_active', true)->exists()) {
                return response()->json([
                    'message' => 'User is registered and active in the system ',
                    'result' => true
                ]);
            } else {
                return response()->json([
                    'message' => 'User is inactive or doesn\'t exist',
                    'result' => false
                ], 404);
            }
        } catch (Exception $e) {
            // Handle errors appropriately (e.g., log error, return error response)
            return response()->json(['message' => 'Error executing Python script'], 500);
        }
    }
    function extract_alphanumeric($string)
    {
        return preg_replace('/[^a-zA-Z0-9]/', '', $string);
    }


}
