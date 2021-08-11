<?php

namespace App\Http\Controllers\Admin;

use App\Interfaces\ImageInterface;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    protected $imageRepository;

    public function __construct(ImageInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function list(Request $request)
    {
        $title = "Product List";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $product = Product::paginate(10);
        return view('admin.product.list', compact('title', "admin", "logo", "product"));
    }


    public function AddProduct(Request $request)
    {

        $title = "Add Product";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $category = Category::where('level', 0)->where('parent', 0)->get();

        return view('admin.product.add', compact("category", "email", "logo", "admin", "title"));
    }

    public function AddNewProduct(Request $request)
    {
        $category_id = $request->cat_id;
        $product_name = $request->product_name;
        $quantity = $request->quantity;
        $unit = $request->unit;
        $price = $request->price;
        $description = $request->description;
        $short_description = $request->short_description ?? $request->desciption;
        $date = date('d-m-Y');
        $mrp = $request->mrp;

        $this->validate(
            $request,
            [
                'cat_id' => 'required',
                'product_name' => 'required',
                'product_image' => 'required|mimes:jpeg,png,jpg|max:1000',
                'quantity' => 'required',
                'unit' => 'required',
                'price' => 'required',
                'mrp' => 'required',
            ],
            [
                'cat_id.required' => 'Select category',
                'product_name.required' => 'Enter product name.',
                'product_image.required' => 'Choose product image.',
                'quantity.required' => 'Enter quantity.',
                'unit.required' => 'Choose unit.',
                'price.required' => 'Enter price.',
                'mrp.required' => 'Enter MRP.',
            ]
        );


        if ($request->hasFile('product_image')) {
            $filename = $this->imageRepository->store($request->product_image, Product::IMG_PATH);
            $product_image = Product::IMG_URL . $filename;
        } else {
            $category_image = 'N/A';
        }

        $insertproduct = Product::query()
            ->insertGetId([
                'cat_id' => $category_id,
                'product_name' => $product_name,
                'product_image' => $product_image,


            ]);

        if ($insertproduct) {
            DB::table('product_varient')
                ->insert([
                    'product_id' => $insertproduct,
                    'quantity' => $quantity,
                    'varient_image' => $product_image,
                    'unit' => $unit,
                    'price' => $price,
                    'mrp' => $mrp,
                    'description' => $description,
                    'short_description' => is_null($short_description) ? 'null' : $short_description,
                ]);
            return redirect()->back()->withSuccess('Product Added Successfully');
        } else {
            return redirect()->back()->withErrors("Something Wents Wrong");
        }

    }

    public function EditProduct(Request $request)
    {
        $product_id = $request->product_id;
        $title = "Edit Product";
        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $product = Product::query()
            ->where('product_id', $product_id)
            ->first();


        return view('admin.product.edit', compact("email", "admin", "logo", "title", "product"));
    }

    public function UpdateProduct(Request $request)
    {
        $product_id = $request->product_id;
        $product_name = $request->product_name;
        $date = date('d-m-Y');
        $product_image = $request->product_image;


        $this->validate(
            $request,
            [

                'product_name' => 'required',
            ],
            [
                'product_name.required' => 'Enter product name.',
            ]
        );

        $getProduct = Product::query()
            ->where('product_id', $product_id)
            ->first();

        $image = $getProduct->product_image;

        if ($request->hasFile('product_image')) {
            $filename = $this->imageRepository->store($request->product_image, Product::IMG_PATH);
            $product_image = Product::IMG_URL . $filename;
        } else {
            $product_image = $image;
        }
        $insertproduct = Product::query()
            ->where('product_id', $product_id)
            ->update([
                'product_name' => $product_name,
                'product_image' => $product_image,

            ]);

        if ($insertproduct) {
            return redirect()->back()->withSuccess('Product Updated Successfully');
        } else {
            return redirect()->back()->withErrors("Something Wents Wrong");
        }
    }


    public function DeleteProduct(Request $request)
    {
        $product_id = $request->product_id;

        $delete = Product::query()->where('product_id', $request->product_id)->delete();
        if ($delete) {
            $delete = DB::table('product_varient')->where('product_id', $request->product_id)->delete();

            return redirect()->back()->withSuccess('Deleted Successfully');
        } else {
            return redirect()->back()->withErrors('Unsuccessfull Delete');
        }
    }

}
