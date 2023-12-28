<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;
use App\Models\Sellers;
use App\Models\Category;
use App\Models\ChuDe;
use App\Models\Author;
use App\Models\CategoryProduct;
use App\Models\AuthorProduct;
use App\Models\ChudeProduct;
use Illuminate\Support\Facades\App;

class SellerController extends Controller
{

    public function __construct()
    {
        $dataAll = App::make('App\Http\Controllers\ProductController');
        $dataAll->shareData();
    }

    public function seller_register()
    {
        return view('seller.seller-register');
    }

    public function submitRegistration(Request $request)
    {
        $user = Auth::user();

        if (!$user->seller) {
            $seller = Sellers::create([
                'user_id' => $user->id,
                'name' => $request->input('shopName'),
                'attributes' => json_encode([
                    'fullName' => $request->input('fullName'),
                    'address' => $request->input('address'),
                    'phoneNumber' => $request->input('phoneNumber'),
                    'deliveryOptions' => $request->input('deliveryOptions', []),
                ]),
            ]);

            $seller->update(['status' => 1]);
            return redirect()->route('seller.index')->with('success', 'Đăng ký thành công!');
        }

        return redirect()->route('index');
    }

    public function index()
    {
        return view('seller.index');
    }

    public function shopSeller ($id_seller) {
        $listProduct = Sellers::find($id_seller)->paginate(10);
        return view('seller.shop-seller', compact('listProduct'));
    }

    public function product()
    {
        $seller = Auth::user()->seller;

        // Lấy tất cả sản phẩm của người bán
        $products = $seller->products;

        return view('seller.product.product', compact('products'));
    }

    public function productDetail($productSlug)
    {
        $product = Products::where('product_slug', $productSlug)->first();

        if (!$product) {
            abort(404, 'Sản phẩm không tồn tại');
        }

        // Lấy danh mục của sản phẩm
        $categories = $product->categories;

        return view('seller.product.detail-product', compact('product', 'categories'));
    }

    public function productAdd()
    {

        return view('seller.product.add-product');
    }

    public function productAddConfirm(Request $request, $id = null)
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
        // Xử lý upload hình ảnh sản phẩm
        $imagePath = null;
        if ($request->hasFile('product_image')) {
            $imagePath = $request->product_image->store('upload/img', 'public');
        }

        // Tạo slug sử dụng hàm custom của bạn
        $slug = slug_pro($request->slug);

        // Tạo sản phẩm
        $product = Products::create([
            'product_name' => $request->name,
            'author' => $request->author,
            'product_slug' => $slug,
            'price' => $request->price,
            'product_image' => $imagePath,
            'isVisible' => $request->isVisible,
            'isHot' => $request->isHot,
            'remaining' => $request->remaining,
            'attributes' => $attributesJson,
            'product_description' => $request->description,
            'seller_id' => $request->seller
        ]);
        $product->authors()->attach($request->input('authors'));
        if ($product) {
            // Tạo AuthorProduct với product_id
            AuthorProduct::create([
                'product_id' => $product->id, // Sử dụng ID tự động của sản phẩm
                'author_id' => $request->author,
            ]);
            // $product->authors()->attach($request->authors);
            return redirect()->route('seller.index')->with('success', 'Sản phẩm đã được thêm thành công.');
        } else {
            return redirect()->route('seller.product.add-product')->with('error', 'Có lỗi xảy ra khi thêm sản phẩm.');
        }
        // return redirect()->route('admin.allsp')->with('success', 'Sản phẩm đã được thêm thành công.');
    }
}
