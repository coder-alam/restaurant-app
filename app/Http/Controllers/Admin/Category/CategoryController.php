<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class CategoryController extends Controller {
    public function index(): Response {
        Inertia::setRootView('admin');
        $categories = Category::all();
        return Inertia::render('Admin/Category/CategoryIndex', ['categories' => $categories]);
    }


    public function create(): Response {
        Inertia::setRootView('admin');
        return Inertia::render('Admin/Category/Create');
    }

    // Category Store method
    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
            'slug' => 'required|string|max:255',
            'image' => 'required|mimes:jpg,png,webp|max:800',
//            'meta_title' => 'required|string|max:255',
//            'meta_keywords' => 'required|string|max:255',
//            'meta_description' => 'required|string|max:255',
//            'meta_image' => 'required|mimes:jpg,png,webp|max:800',
            'status' => 'required',

        ]);
        $upload_file = $request->file('image');
        $file_extension = $upload_file->getClientOriginalExtension();

        $meta_image = $request->file('meta_image');
        $meta_image_extension = $meta_image->getClientOriginalExtension();


        $file_name = Str::lower(str_replace([' ', '.'], ['-', '-'], $request->name)) . "-" . time() . '.' . $file_extension;
        $image_path = $request->file('image')->storeAs('public/uploads/category', $file_name);


        $meta_image_file_name = Str::lower(str_replace([' ', '.'], ['-', '-'], $request->meta_title)) . "-" . time() . '.' . $meta_image_extension;

        $meta_image_path = $request->file('meta_image')->storeAs('public/uploads/category', $meta_image_file_name);

        $result = Category::insert([
            'name' => $request->name,
            'slug' => $request->slug,
            'image' => $file_name,
            'meta_title' => $request->meta_title,
            'meta_keywords' => $request->meta_keywords,
            'meta_description' => $request->meta_description,
            'meta_image' => $meta_image_file_name,
            'status' => $request->status,
            'created_at' => Carbon::now(),
        ]);
        if ($result == true) {
            return to_route('product.category.index')->with('success', 'Category created successfully.');

        } else {
            return back()->with('failed', 'Category Created Failed!');
        }
    }
}
