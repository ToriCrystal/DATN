<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Category;
use App\Models\CategoryDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Stripe\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $category = Category::all();

        $sumPro = Products::count();
        // $groupedData = CategoryDetail::select('category_slug', 'name', 'item')
        // ->orderBy('name')  // Sắp xếp theo name để nhóm các name giống nhau
        // ->get()
        // ->groupBy('name');  // Nhóm theo name

        $categoryDetails = CategoryDetail::all();

        // Nhóm dữ liệu theo category_slug và name
        $groupedData = [];
        foreach ($categoryDetails as $detail) {
            $categorySlug = $detail->category_slug;
            $name = $detail->name;
            $item = $detail->item;

            if (!isset($groupedData[$categorySlug][$name])) {
                $groupedData[$categorySlug][$name] = [];
            }

            $groupedData[$categorySlug][$name][] = $item;
        }

        \View::share(['category' => $category, 'sumPro' => $sumPro, 'groupedData' => $groupedData]);
    }

    public function index()
    {
        $product = Products::where('isHot', 1)->take(12)->get();
        return view('page.index', compact('product'));
    }

    public function product()
    {
        $products = Products::paginate(12);
        return view('page.product', compact('products'))->with('i', (request()->input('page', 1) - 1) * 12);
    }


}
