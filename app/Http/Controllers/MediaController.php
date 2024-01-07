<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index($path = null)
    {

        // Determine the full path based on the provided parameter.
        $fullPath = $path ? 'public/' . $path : 'public';

        $fullPath == 'public' ? $files = Storage::files($fullPath) : $files = Storage::allFiles($fullPath);
        $directories = Storage::directories($fullPath);

        // Extract only the folder names from the full paths.
        $directoryNames = array_map('basename', $directories);

        // Return the view, passing in the files, folder names, and current path.
        return view('media', compact('files', 'directoryNames', 'path'));
    
    }

    public function delete($path)
    {
        dd('hello');
        // Verify that the file exists
        if (Storage::exists($path)) {
            // Delete the file
            $success = Storage::delete($path);
            // dd($success);
            // Redirect back to the media index
            return redirect()->route('media.index')->with('success', 'File deleted successfully.');
        }

        // If the file doesn't exist, redirect with an error message
        return redirect()->route('media.index')->with('error', 'File not found or could not be deleted.');
    }
}
