<?php

namespace App\Http\Controllers\Admin;

use App\Interfaces\ImageInterface;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class VarientController extends Controller
{
    protected $imageRepository;

    public function __construct(ImageInterface $imageRepository)
    {
        $this->imageRepository = $imageRepository;
    }

    public function varient(Request $request)
    {
        $id = $request->id;
        $p = Product::query()
            ->where('product_id', $id)
            ->first();

        $title = $p->product_name . " Varient";

        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $variants = ProductVariant::query()->where('product_id', $id)
            ->paginate(10);
        $currency = DB::table('currency')
            ->select('currency_sign')
            ->get();
        return view('admin.product.varient.show_varient', compact("email", "variants", "admin", "currency", "id", 'title', 'logo'));
    }

    public function Addproduct(Request $request)
    {
        $id = $request->id;
        $p = Product::query()
            ->where('product_id', $id)
            ->first();

        $title = $p->product_name . " Varient Addition";

        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $product = DB::table('product_varient')
            ->where('product_id', $id)
            ->get();
        $currency = DB::table('currency')
            ->select('currency_sign')
            ->get();


        // echo $id;
        return view('admin.product.varient.addvarient', compact("email", "admin", "id", 'title', 'logo'));
    }


    public function AddNewproduct(Request $request)
    {

        $id = $request->id;
        $mrp = $request->mrp;
        $price = $request->price;
        $unit = $request->unit;
        $quantity = $request->quantity;
        $description = $request->description;
        $short_description = $request->short_description;
        $date = date('d-m-Y');
        $created_at = date('d-m-Y h:i a');


        $this->validate(
            $request,
            [
                'mrp' => 'required',
                'description' => 'required',
                'quantity' => 'required',
                'unit' => 'required',
                'price' => 'required',
                'varient_image' => 'required|mimes:jpeg,png,jpg|max:1000',
            ],
            [
                'mrp.required' => 'enter mrp',
                'description.required' => 'enter description about product',
                'mrp.required' => 'enter product MRP',
                'varient_image.required' => 'select an image',
                'quantity.required' => 'enter quantity',
                'unit.required' => 'enter unit'
            ]
        );

        if ($request->hasFile('varient_image')) {
            $filename = $this->imageRepository->store($request->varient_image, ProductVariant::IMG_PATH);
            $image = ProductVariant::IMG_URL . $filename;
        } else {
            $image = 'N/A';
        }


        $insert = DB::table('product_varient')
            ->insert([
                'product_id' => $id,
                'mrp' => $mrp,
                'price' => $price,
                'varient_image' => $image,
                'unit' => $unit,
                'quantity' => $quantity,
                'description' => $description,
                'short_description' => $short_description ?? $description
            ]);
        if ($insert) {
            return redirect()->back()->withSuccess('Successfully Added');
        } else {
            return redirect()->back()->withErrors('something went wrong');
        }

    }

    public function Editproduct(Request $request)
    {

        $id = $request->id;

        $email = Session::get('bamaAdmin');
        $admin = DB::table('admins')
            ->where('email', $email)
            ->first();
        $logo = DB::table('tbl_web_setting')
            ->where('set_id', '1')
            ->first();
        $variant = ProductVariant::query()
            ->where('varient_id', $id)
            ->first();

        $p = Product::query()
            ->where('product_id', $variant->product_id)
            ->first();
        $title = $p->product_name . " Varient Update";

        return view('admin.product.varient.editvarient', compact("email", "admin", "variant", "id", 'title', 'logo'));
    }

    public function Updateproduct(Request $request)
    {

        $product_id = $request->id;
        $id = $request->id;
        $mrp = $request->mrp;
        $price = $request->price;
        $unit = $request->unit;
        $quantity = $request->quantity;
        $description = $request->description;
        $short_description = $request->short_description;
        $date = date('d-m-Y');
        $created_at = date('d-m-Y h:i a');
        $varient_image = $request->varient_image;

        $getImage = DB::table('product_varient')
            ->where('varient_id', $product_id)
            ->first();

        $image = $getImage->varient_image;

        if ($request->hasFile('varient_image')) {
            if (file_exists($image)) {
                unlink($image);
            }
            $filename = $this->imageRepository->store($request->varient_image, ProductVariant::IMG_PATH);
            $varient_image = ProductVariant::IMG_URL . $filename;
        } else {
            $varient_image = $image;
        }

        $varient_update = DB::table('product_varient')
            ->where('varient_id', $product_id)
            ->update(['mrp' => $mrp, 'price' => $price, 'varient_image' => $varient_image,
                'unit' => $unit, 'quantity' => $quantity,
                'description' => $description,'short_description'=>$short_description]);

        if ($varient_update) {

            return redirect()->back()->withSuccess('Updated Successfully');
        } else {
            return redirect()->back()->withErrors("Something Wents Wrong.");
        }
    }

    public function deleteproduct(Request $request)
    {
        $varient_id = $request->id;

        $getfile = DB::table('product_varient')
            ->where('varient_id', $varient_id)
            ->first();

        $product_image = $getfile->varient_image;

        $delete = DB::table('product_varient')->where('varient_id', $request->id)->delete();
        if ($delete) {

            if (file_exists($product_image)) {
                unlink($product_image);
            }

            return redirect()->back()->withSuccess('Deleted Successfully');

        } else {
            return redirect()->back()->withErrors('Unsuccessfull Delete');
        }

    }


}
