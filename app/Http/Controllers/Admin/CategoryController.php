<?php

namespace App\Http\Controllers\Admin;

use App\Interfaces\ImageInterface;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    protected $imageRepository;

    public function __construct(ImageInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function list(Request $request)
    {
        $title = "Category List";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();

        $category = Category::query()
            ->leftJoin('categories as catt', 'categories.parent', '=', 'catt.cat_id')
            ->select('categories.*', 'catt.title as tttt')
            ->paginate(10);

        return view('admin.category.list', compact('title', "admin", "logo", "category"));
    }

    public function AddCategory(Request $request)
    {

        $title = "Add Category";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $category = DB::table('categories')
            ->where('level', 0)
            ->orWhere('level', 1)
            ->get();
        return view('admin.category.add', compact("category", "email", "logo", "admin", "title"));
    }

    public function AddNewCategory(Request $request)
    {
        $parent_id = $request->parent_id;
        $category_name = $request->cat_name;
        $status = 1;
        $slug = str_replace("/[^a-zA-Z]+/", '-', $category_name);
        $desc = $request->desc;
        if ($desc == NULL) {
            $desc = $category_name;
        }
        $category = DB::table('categories')
            ->where('cat_id', $parent_id)
            ->first();

        if ($status == "") {
            $status = 0;
        }

        if ($category) {
            if ($parent_id == $category->cat_id) {
                if ($category->level == 0) {
                    $level = 1;
                } elseif ($category->level == 1) {
                    $level = 2;
                }
            }
        } else {
            $level = 0;
        }


        $this->validate(
            $request,
            [
                'cat_name' => 'required',
                //'cat_image' => 'required|mimes:jpeg,png,jpg|max:400',
            ],
            [
                'cat_name.required' => 'Enter category name.',
                //'cat_image.required' => 'Choose category image.',
            ]
        );

        if ($request->hasFile('cat_image')) {
            $filename = $this->imageRepository->store($request->cat_image, Category::IMG_PATH);
            $category_image = Category::IMG_URL . $filename;
        } else {
            $category_image = $category->image;
        }

        $insertCategory = DB::table('categories')
            ->insert([
                'parent' => $parent_id,
                'title' => $category_name,
                'slug' => $slug,
                'level' => $level,
                'image' => $category_image,
                'status' => $status,
                'description' => $desc

            ]);

        if ($insertCategory) {
            return redirect()->route('catlist')->with('success', 'Category Added Successfully');
        } else {
            return redirect()->back()->withErrors("Something Wents Wrong");
        }

    }

    public function EditCategory(Request $request)
    {
        $categories = DB::table('categories')
            ->where('level', 0)
            ->orWhere('level', 1)
            ->where('cat_id', '!=', $request->category_id)
            ->get();
        $cat = Category::query()->where('cat_id', $request->category_id)->first();

        return view('admin.category.edit', compact("categories", 'cat'));
    }

    public function UpdateCategory(Request $request)
    {
        $category_id = $request->category_id;
        $parent_id = $request->parent_id;
        $category_name = $request->cat_name;
        $status = 1;
        $slug = str_replace("/[^a-zA-Z]+/", '-', $category_name);
        $desc = $request->desc;
        if ($desc == NULL) {
            $desc = $category_name;
        }
        $category = DB::table('categories')
            ->where('cat_id', $parent_id)
            ->first();

        if ($status == "") {
            $status = 0;
        }

        if ($category) {
            if ($parent_id == $category->cat_id) {
                if ($category->level == 0) {
                    $level = 1;
                } elseif ($category->level == 1) {
                    $level = 2;
                }
            }
        } else {
            $level = 0;
        }


        $this->validate(
            $request,
            [
                'cat_name' => 'required',
            ],
            [
                'cat_name.required' => 'Enter category name.',
            ]
        );

        $getCategory = DB::table('categories')
            ->where('cat_id', $category_id)
            ->first();

        $image = $getCategory->image;

        if ($request->hasFile('cat_image')) {
            $filename = $this->imageRepository->store($request->cat_image, Category::IMG_PATH);
            $category_image = Category::IMG_URL . $filename;
        } else {
            $category_image = $image;
        }

        $insertCategory = DB::table('categories')
            ->where('cat_id', $category_id)
            ->update([
                'parent' => $parent_id,
                'title' => $category_name,
                'slug' => $slug,
                'level' => $level,
                'image' => $category_image,
                'status' => $status,
                'description' => $desc

            ]);

        if ($insertCategory) {
            return redirect()->route('catlist')->with('success', 'Category Added Successfully');
        } else {
            return redirect()->back()->withErrors("Something Wents Wrong");
        }
    }


    public function DeleteCategory(Request $request)
    {
        $category_id = $request->category_id;

        $delete = DB::table('categories')->where('cat_id', $request->category_id)->delete();
        if ($delete) {
            return redirect()->back()->withSuccess('Deleted Successfully');
        } else {
            return redirect()->back()->withErrors('Unsuccessfull Delete');
        }
    }

}
