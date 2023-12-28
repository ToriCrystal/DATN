<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Products;
use App\Models\Category;
use App\Models\CategoryDetail;
class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function __construct()
    {
        $category = Category::all();

        \View::share('category', $category);
    }
    public function edit(Request $request): View
    {
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


        return view('profile.edit', [
            'user' => $request->user(),
        ],compact('sumPro','groupedData'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
