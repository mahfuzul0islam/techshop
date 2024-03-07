<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Str;

class CategoriController extends Controller
{
    public function ShowCategories()
    {
        $categories = Category::latest()->get();
        return view('backend.categories.category', compact('categories'));
    }
    public function AddCategory()
    {
        return view('backend.categories.addcategory');
    }
    public function StoreCategory(Request $request)
    {
        $category = new Category;
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/categoryimage'), $filename);
            $category['image'] = $filename;
        }

        $category->save();
        $notification = array(
            'message' => 'Category Added',
            'alert-type' => 'success'
        );
        return redirect()->route('show.categories')->with($notification);
    }
    public function EditCategory($id)
    {
        $category = Category::findorfail($id);
        return view('backend.categories.editcategory', compact('category'));
    }
    public function UpdateCategory(Request $request, $id)
    {

        $category = Category::where('id', $id)->first();
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/categoryimage/' . $category->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/categoryimage'), $filename);
            $category['image'] = $filename;
        }

        $category->save();
        $notification = array(
            'message' => 'Category updated',
            'alert-type' => 'success'
        );
        return redirect()->route('show.categories')->with($notification);
    }
    public function DeleteCategory($id)
    {
        Category::findorfail($id)->delete();
        $notification = array(
            'message' => 'Category Deleted',
            'alert-type' => 'danger'
        );
        return redirect()->route('show.categories')->with($notification);
    }

    // tags   

    public function ShowTags()
    {
        $tags = Tag::latest()->get();
        return view('backend.tags.tags', compact('tags'));
    }
    public function AddTags()
    {
        $categories = Category::all();
        return view('backend.tags.addtags', compact('categories'));
    }
    public function StoreTags(Request $request)
    {
        $tags = new Tag;
        $tags->title = $request->title;
        $tags->category_id = $request->category_id;
        $tags->slug = Str::slug($request->title);
        $tags->save();
        $notification = array(
            'message' => 'Tag Added',
            'alert-type' => 'success'
        );
        return redirect()->route('show.tags')->with($notification);
    }
    public function DeleteTags($id)
    {
        Tag::findorfail($id)->delete();
        $notification = array(
            'message' => 'Tag Deleted',
            'alert-type' => 'danger'
        );
        return redirect()->route('show.tags')->with($notification);
    }
}
