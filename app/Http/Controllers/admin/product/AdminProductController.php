<?php
namespace App\Http\Controllers\admin\product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Author;
use App\Models\Sellers;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\AuthorProduct;
use App\Models\TopicProduct;
use App\Models\Topic;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the 'admin' middleware instead of 'auth'
    }
    function allsp()
    {
        $product = Product::orderBy('created_at', 'desc')->paginate(10);
        $authors = Author::all();
        if (!$product) {
        }
        $categories = Category::all();
        return view('admin.product.allsp', [
            'product' => $product,
            'authors' => $authors,
            'categories' => $categories,
        ]);
    }
    public function onePro(string $slug)
    {
        $product = Product::where('product_slug', $slug)->with('authors')->with('categories')->withCount('authors')->withCount('categories')->first();
        if ($product) {
            return view('admin.product.onesp',compact('product'));
        }
        return view('admin.errors.404');
    }
    public function createPro()
    {
        $authors = Author::all();
        return view('admin.product.form', compact('authors'));
    }
    public function addPro(Request $request, $id=null)
    {
        $product = null;
        $attributes = [
            'Định dạng' => $request->bia,
            'Trang' => $request->trang,
            'Kích thước' => $request->kichthuoc,
            'Ngày xuất bản' => $request->ngayxb,
            'Nhà xuất bản' => $request->nhaxb,
            'Ngôn ngữ' => $request->nn,
            'Ghi chú minh họa' => $request->ghichu,
        ];
        $attributesJson = json_encode($attributes);
        $imagePath = null;
        if ($request->hasFile('product_image')) {
            // $imagePath = $request->product_image->store('upload/img', 'public');
            $imagePath = Cloudinary::upload($request->file('product_image')->getRealPath())->getSecurePath();
        }
        $slug = slug_pro($request->slug);
        $product = Product::create([
            'product_name' => $request->name,
            'author' => $request->author,
            'product_slug' => $slug,
            'price' => $request->price,
            'discount_price' => $request->discount_price,
            'product_image' => $imagePath,
            'isVisible' => $request->isVisible,
            'isHot' => $request->isHot,
            'remaining' => $request->remaining,
            'attributes' => $attributesJson,
            'product_description' => $request->description,
        ]);
        $product->authors()->attach($request->input('authors'));
        if ($product) {
            AuthorProduct::create([
                'product_id' => $product->id, 
                'author_id' => $request->author,
            ]);
            return redirect()->route('admin.allsp')->with('message', 'Sản phẩm đã được thêm thành công.');
        } else {
            return redirect()->route('admin.addPro')->with('error', 'Có lỗi xảy ra khi thêm sản phẩm.');
        }
    }
    public function editPro(string $slug)
    {
        $authors = Author::all();
        $product = Product::where('product_slug', $slug)->first();
        if ($product && $product->attributes) {
            $attributes = json_decode($product->attributes, true);
        } else {
            $attributes = [];
        }
        return view('admin.product.form', ['product' => $product, 'authors' => $authors, 'attributes' => $attributes]);
    }
    public function updatePro(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('admin.allsp')->with('error', 'Sản phẩm không tồn tại.');
        }
        $imagePath = $product->product_image;
        if ($request->hasFile('product_image')) {
            $imagePath = Cloudinary::upload($request->file('product_image')->getRealPath())->getSecurePath();
        }
        $product->product_slug = $request->slug;
        $product->product_name = $request->name;
        $product->author = $request->author;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->product_image = $imagePath;
        $product->isVisible = $request->isVisible;
        $product->isHot = $request->isHot;
        $product->remaining = $request->remaining;
        $attributes = [
            'Định dạng' => $request->bia,
            'Trang' => $request->trang,
            'Kích thước' => $request->kichthuoc,
            'Ngày xuất bản' => $request->ngayxb,
            'Nhà xuất bản' => $request->nhaxb,
            'Ngôn ngữ' => $request->nn,
            'Ghi chú minh họa' => $request->ghichu,
        ];
        $attributesJson = json_encode($attributes);
        $product->attributes = $attributesJson;
        $product->product_description = $request->description;
        $product->save();
        return redirect()->route('admin.allsp')->with('message', 'Sản phẩm đã được cập nhật thành công.');
    }
    function deletePro(int $id)
    {
        Product::where('id', $id)->delete();
    }
    public function destroy($id)
    {
        $pro = Product::withTrashed()->find($id);
        $pro->forceDelete();
    }
    public function editfun($id)
    {
        $Product = Product::find($id);
        $ds_chu_de = Topic::all();
        $ds_danhmuc = Category::all();
        $ds_tacgia = Author::all();
        $tacgia = AuthorProduct::where('products_id', '=', $id)->get();
        $arr_ncc = stdClassToArray($tacgia);
        $arr_tacgia = array();
        foreach ($arr_ncc as  $value) {
            $arr_tacgia[] = $value['author_id'];
        }
        $danhmuc = CategoryProduct::where('Products_id', '=', $id)->get();
        $arr_dm = stdClassToArray($danhmuc);
        $arr_danhmuc = array();
        foreach ($arr_dm as  $value) {
            $arr_danhmuc[] = $value['category_id'];
        }
        $chude_sp = TopicProduct::where('products_id', '=', $id)->get();
        $arr_cd = stdClassToArray($chude_sp);
        $arr_chu_de_sp = array();
        foreach ($arr_cd as  $value) {
            $arr_chu_de_sp[] = $value['chu_de_id'];
        }
        return view('admin.product.editfunction')
            ->with('Product', $Product)
            ->with('arr_danhmuc', $arr_danhmuc)
            ->with('ds_danhmuc', $ds_danhmuc)
            ->with('arr_tacgia', $arr_tacgia)
            ->with('ds_tacgia', $ds_tacgia)
            ->with('arr_chu_de', $arr_chu_de_sp)
            ->with('ds_chu_de', $ds_chu_de);
    }
    public function updateinfo(Request $request)
    {
        $product_id = $request->product_id;
        $arr_tacgia = isset($request->author_id) ? $request->author_id : array();
        AuthorProduct::where('product_id', '=', $product_id)->delete();
        foreach ($arr_tacgia as  $value) {
            $model = new AuthorProduct();
            $model->author_id = $value;
            $model->product_id = $product_id;
            $model->save();
        }
        $arr_danhmuc = isset($request->category_id) ? $request->category_id : array();
        CategoryProduct::where('Product_id', '=', $product_id)->delete();
        foreach ($arr_danhmuc as  $value) {
            $model = new CategoryProduct();
            $model->category_id = $value;
            $model->Product_id = $product_id;
            $model->save();
        }
        $arr_cd = isset($request->chu_de_id) ? $request->chu_de_id : array();
        TopicProduct::where('product_id', '=', $product_id)->delete();
        foreach ($arr_cd as  $value) {
            $model = new TopicProduct();
            $model->chu_de_id = $value;
            $model->product_id = $product_id;
            $model->save();
        }
        Session::flash('sussecs','Thành công');
        return redirect(route('admin.allsp'));
    }
    public function allspintrash() {
        $product = Product::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
        $authors = Author::all();
        if (!$product) {
        }
        $categories = Category::all();
        return view('admin.product.allspintrash', [
            'product' => $product,
            'authors' => $authors,
            'categories' => $categories,
            'isTrash' => true
        ]);
    }
    public function restore(int $id) {
        $pro = Product::withTrashed()->find($id);
        $pro->restore();
        return redirect()->back()->with('message', 'Sản phẩm đã được khôi phục thành công.');
    }
}
