<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return Author::with('books')->get();
    }

    public function store(Request $request)
    {
        return Author::create($request->all());
    }

    public function show($id)
    {
        return Author::with('books')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());
        return $author;
    }

    public function destroy($id)
    {
        Author::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
