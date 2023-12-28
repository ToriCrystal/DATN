<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\View\View;
use App\Models\Products;
use App\Models\Author;

use Illuminate\Support\Facades\Hash;
use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\CategoryDetail;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{

    public function __construct()
    {

        $this->shareData();
    }

    public function shareData()
    {
        $newsPostCategory = CategoryPost::all();
        $topProducts = Products::where('isHot', 1)
            ->orderBy('views', 'desc')
            ->orderBy('likes', 'desc')
            ->take(4)
            ->get();
        $topAuthors = Author::withCount('products')
            ->orderByDesc('products_count')
            ->take(4)
            ->get();
        $category = Category::orderBy('created_at', 'desc')->withCount('products')->get();
        $products = Products::paginate(16);
        $totalCount = Products::count();
        $sumPro = Products::count();
        $categoryDetails = CategoryDetail::all();
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

        $wishlistItems = [];

        if (auth()->user()) {
            $user = User::find(auth()->user()->id);

            if ($user && isset($user->wishlist)) {
                $wishlist = json_decode($user->wishlist, true) ?: [];

                $wishlistItems = Products::whereIn('id', $wishlist)->get();
            }
        }

        $attributes = [];
        foreach ($products as $product) {
            $attributes[$product->id] = json_decode($product->attributes, true);
        }

        \View()->share([
            'category' => $category,
            'sumPro' => $sumPro,
            'groupedData' => $groupedData,
            'wishlistItems' => $wishlistItems,
            'totalCount' => $totalCount,
            'attributes' => $attributes,
            'products' => $products,
            'topProducts' => $topProducts,
            'topAuthors' => $topAuthors,
            'newsPostCategory' => $newsPostCategory,
        ]);
    }

    public function account()
    {

        $cart = session()->get('cart', []);

        if (auth()->user()) {
            $user = User::find(auth()->user()->id);

            if ($user && isset($user->wishlist)) {
                $wishlist = json_decode($user->wishlist, true) ?: [];

                // Flatten the nested array
                $flattenedWishlist = collect($wishlist)->flatten()->toArray();

                $wishlistItems = Products::whereIn('id', $flattenedWishlist)->get();
            }
        }
        return view('page.profile', compact('user', 'cart'));
    }

    public function update(ProfileUpdateRequest $request)
    {
        $user = Auth::user();
    
        $user->name = $request->input('name');
        $user->email = $request->input('email');
    
        if ($request->filled('password') && !Hash::check($request->input('password'), $user->password)) {
            return response()->json([
                'success' => false,
                'message' => 'Mật khẩu ban đầu không đúng.'
            ]);
        }
    
        if ($request->filled('password-update')) {
            $user->password = Hash::make($request->input('password-update'));
        }
    
        if ($request->hasFile('avatar')) {
            // Log information for debugging
    
            // if ($user->image) {
            //     Storage::disk('public')->delete($user->image);
            // }

            // $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $avatarPath = Cloudinary::upload($request->file('avatar')->getRealPath())->getSecurePath();
            
            $user->image = $avatarPath;
        }
    
        // Save changes to the database
        $user->save();
    
        return response()->json([
            'success' => true,
            'message' => 'Cập nhập thành công',
        ]);
    }
    
    // public function edit(Request $request): View
    // {
    //     $cart = session()->get('cart', []);

    //     $wishlistItems = [];

    //     if (auth()->user()) {
    //         $user = User::find(auth()->user()->id);

    //         if ($user && isset($user->wishlist)) {
    //             $wishlist = json_decode($user->wishlist, true) ?: [];

    //             // Flatten the nested array
    //             $flattenedWishlist = collect($wishlist)->flatten()->toArray();

    //             $wishlistItems = Products::whereIn('id', $flattenedWishlist)->get();
    //         }
    //     }
    //     $sumPro = Products::count();

    //     $categoryDetails = CategoryDetail::all();

    //     $groupedData = [];

    //     foreach ($categoryDetails as $detail) {
    //         $categorySlug = $detail->category_slug;
    //         $name = $detail->name;
    //         $item = $detail->item;

    //         if (!isset($groupedData[$categorySlug][$name])) {
    //             $groupedData[$categorySlug][$name] = [];
    //         }

    //         $groupedData[$categorySlug][$name][] = $item;
    //     }

    //     return view('page.profile', [
    //         'wishlistItems' => $wishlistItems,
    //         'user' => $request->user(),
    //     ], compact('sumPro', 'groupedData', 'wishlistItems', 'cart'));
    // }

    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     // Kiểm tra nếu người dùng đã điền mật khẩu mới
    //     if ($request->filled('password')) {
    //         $request->user()->password = bcrypt($request->input('password'));
    //     }

    //     // Kiểm tra nếu người dùng đã tải lên ảnh đại diện mới
    //     if ($request->hasFile('avatar')) {
    //         $imagePath = $request->file('avatar')->store('avatars'); // Lưu ảnh vào thư mục 'avatars'
    //         $request->user()->image = $imagePath;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }


    // public function destroy(Request $request): RedirectResponse
    // {
    //     $request->validateWithBag('userDeletion', [
    //         'password' => ['required', 'current_password'],
    //     ]);

    //     $user = $request->user();

    //     Auth::logout();

    //     $user->delete();

    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return Redirect::to('/');
    // }
}
