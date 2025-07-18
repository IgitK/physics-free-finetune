<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index()
    {
        $resources = Resource::all();
        return view('app.resources', compact('resources'));
    }


    public function uploadResource(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'file' => 'required|file|mimes:pdf',
            'category' => 'required|in:past_paper,model_paper,tutorial',
        ]);

        $filepath = null;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $request['category'] . time() . '.' . $file->getClientOriginalExtension();
            $filepath = $file->storeAs($request['category'], $fileName, 'public');
        }

        unset($data['file']);
        $data['filePath'] = $filepath;

        Resource::create($data);

        return redirect()->back()->with('success', 'Resources Uploaded Successfully');
    }

    public function deleteResource($id)
    {
        $resource = Resource::findOrFail($id);

        $resource->delete();

        return redirect()->back()->with('success', 'Resources Deleted Successfully');
    }
    public function downloadFile($id)
    {
        $resource = Resource::findOrFail($id);

        $filePath = storage_path('app/public/' . $resource->filePath);
        $fileName = $resource->title . '.' . pathinfo($filePath, PATHINFO_EXTENSION);

        if (file_exists($filePath)) {
            return response()->download($filePath, $fileName);
        }

        return redirect()->back()->with('error', 'File not found.');
    }
}
