<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::get();
        $messagess = Message::get()->where('read', 0);
        return view('admin.categories', compact('categories', 'messagess'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $messagess = Message::get()->where('read', 0);
        return view('admin.addCategory', compact('messagess'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $messages = $this->messages();
        $data = $request->validate([
            'categoryName' => 'required|max:100|string',
        ], $messages);
        Category::create($data);
        return redirect('Admin/category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $category = Category::findOrFail($id);
        $messagess = Message::get()->where('read', 0);
        return view('admin.categorydetails', compact('category', 'messagess'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::findOrFail($id);
        $messagess = Message::get()->where('read', 0);
        return view('admin.editCategory', compact('categories', 'messagess'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): RedirectResponse
    {
        $messages = $this->messages();
        $categories = Category::find($id);
        $data = $request->validate([
            'categoryName' => 'required|max:100|string',
        ], $messages);
        Category::where('id', $id)->update($data);
        return redirect('Admin/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            Category::where('id', $id)->delete();
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'It is not possible to delete because there are cars in the category',
            ]);
        }
        return redirect()->back()->with('message', 'category is completely deleted');
    }

    private function messages()
    {
        return [
            'categoryName.required' => __('messages.categoryNameRequired'),
        ];
    }
}
