<?php
namespace App\Http\Controllers\admin\category;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Author;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
class AdminCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin'); // Use the 'admin' middleware instead of 'auth'
    }
    public function alldm()
    {
        $categories = Category::orderBy('created_at', 'desc')->withCount('products')->paginate(10);
        return view('admin.category.alldm', ['categories' => $categories]);
    }
    public function onedm(string $slug)
    {
        $category = Category::where('category_slug', $slug)->first();
        if (!is_null($category)) {
            $products = $category->products()->with('authors')->paginate(10);
            return view('admin.category.allspbydm', [
                'category' => $category,
                'products' => $products,
            ]);
        }
        return view('admin.errors.404');
    }
    public function createdm()
    {
        return view('admin.category.form');
    }
    public function adddm(CategoryRequest $request)
    {
        $slug = checkIfSlugExisted($request->slug);
        Category::create([
            'category_name' => $request->name,
            'category_slug' => $slug,
            'isVisible' => $request->isVisible,
        ]);
        return redirect()->route('admin.alldm')->with('message', 'Bạn đã tạo danh mục mới thành công');
    }
    public function editdm(string $slug)
    {
        $category = Category::where('category_slug', $slug)->first();
        return view('admin.category.form', ['category' => $category]);
    }
    public function updatedm(CategoryRequest $request, $category_id)
    {
        $slug = checkIfSlugExisted($request->slug, $category_id);
        Category::where('id', $category_id)->update([
            'category_name' => $request->name,
            'category_slug' => $slug,
            'isVisible' => $request->isVisible,
        ]);
        return redirect()->route('admin.alldm')->with('message', 'Bạn đã cập nhật danh mục "' . $request->name . '" thành công');
    }
    public function deletedm(int $id)
    {
        $category = Category::where('id', $id)->withCount('products')->first();
        if ($category->products_count > 0) {
            return response()->json(['error' => 'Danh mục hiện tại đang còn sản phẩm, vui lòng xóa sản phẩm khỏi danh mục trước.'], 400);
        }
        Category::where('id', $id)->delete();
        return response()->json(['success' => 'Danh mục xóa thành công'], 200);
    }
    public function alldmintrash()
    {
        $category = Category::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);
        return view('admin.category.alldmintrash', [
            'categories' => $category
        ]);
    }
    public function restore($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->restore();
        return redirect()->back()->with('message', 'Danh mục đã được khôi phục thành công.');
    }
    public function destroy($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->forceDelete();
        return redirect()->back()->with('message', 'Danh mục đã bị xóa vĩnh viễn.');
    }
}
