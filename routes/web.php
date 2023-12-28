<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\admin\vouchers\VoucherController;
use App\Http\Controllers\admin\author\AdminAuthorController;
use App\Http\Controllers\admin\category\AdminCategoryController;
use App\Http\Controllers\admin\comment\AdminCommentController;
use App\Http\Controllers\admin\product\AdminProductController;
use App\Http\Controllers\admin\order\AdminOrderController;
use App\Http\Controllers\admin\event\AdminEventController;
use App\Http\Controllers\admin\user\UserController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\admin\contact\AdminContactController;
use App\Http\Controllers\admin\statistic\AdminStatisticController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminReviewController;
use App\Http\Controllers\LoginFacebookController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShippingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\QuanTriTinController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\client\checkout\CheckoutController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\LoginGoogleController;
use App\Http\Controllers\Seller\SellerController;

// use App\Http\Controllers\CartController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(LoginFacebookController::class)->group(function () {
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback', 'handleFacebookCallback');
});

Route::post('/remove-from-wishlist', [ProductController::class, 'removeFromWishlist'])->name('remove-from-wishlist');

Route::post('/submit-review', [ProductController::class, 'submitReview'])->name('submit.review');


Route::get('/', [ProductController::class, 'index'])->name('index');
Route::get('/product-news', [ProductController::class, 'newsProduct'])->name('newsProduct');
Route::get('/category/{idBrain}', [ProductController::class, 'category'])->name('category');
Route::get('/product', [ProductController::class, 'product'])->name('product');
Route::get('/product/{slug}', [ProductController::class, 'productFillter'])->name('productFillter');
Route::get('/blog', [ProductController::class, 'blog']);
Route::get('/askanswer', [ProductController::class, 'askanswer']);
Route::get('/detail/{slug}', [ProductController::class, 'detail'])->name('detail');
Route::get('/contact', [ProductController::class, 'contactus']);
Route::get('/term-of-use', [ProductController::class, 'TermsofUse']);
Route::get('/search', [ProductController::class, 'search']);

Route::get('/shop/{seller_id}', [SellerController::class, 'shopSeller'])->name('viewShop');

Route::match(['get', 'post'], '/add-to-cart/{id}', [OrdersController::class, 'addToCart'])->name('add-to-cart');

Route::get('/addwishlist/{id_sp}', [ProductController::class, 'addWishlist'])->name('addWishlist');
Route::get('/count-wishlist', [ProductController::class, 'countWishlist']);
Route::get('/get-wishlist', [ProductController::class, 'getWishlist']);
Route::post('/removeCartItem', [OrdersController::class, 'removeCartItem'])->name('removeCartItem');

Route::post('/update-cart', [OrdersController::class, 'updateCart'])->name('updateCart');

Route::get('/promotional', [ProductController::class, 'showPromotionalProducts'])->name('promote');
Route::get('/donhang', [ProductController::class, 'donhang'])->name('donhang');
Route::post('/findOrder', [OrdersController::class, 'findOrder'])->name('findOrder');
Route::get('/donhang/{order_code}', [OrdersController::class, 'cancelOrder'])->name('cancelOrder');

//news user
Route::get('/news', [PostController::class, 'news']);
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/news/detail/{id}', [PostController::class, 'newsDetail'])->name('newsDetail');
Route::get('/news/category/{category_slug}', [PostController::class, 'newsCategoryShow'])->name('newsCategoryShow');
Route::get('/news/previous/{id}', [PostController::class, 'newsProvious'])->name('newsCategoryPrevious');
Route::get('/news/next/{id}', [PostController::class, 'newsNext'])->name('newsCategoryNext');
Route::post('/news/comment', [PostController::class, 'newsCommentStore'])->name('newsCommentStore');
Route::post('/news/update-view-count/{id}', [PostController::class, 'updateNewsViewCount'])->name('updateNewsViewCount');
Route::post('/contact/submit', [ProductController::class, 'submitContact'])->name('contactSubmit');
Route::get('/cart', [ProductController::class, 'cart'])->name('cart');

// checkout
Route::get('/checkout', [CheckoutController::class, 'viewCheckOut'])->name('viewCheckOut');
Route::post('/confirm-checkout/{order_code}', [CheckoutController::class, 'confirmCheckout'])->name('confirmCheckout');



Route::post('/calculateShippingFee', [ShippingController::class, 'calculateShippingFee']);

Route::get('/order-detail', [CheckoutController::class, 'orderDetail'])->name('orderDetail');
Route::get('/poll-new-orders', [CheckoutController::class, 'pollNewOrders'])->name('pollNewOrders');

Route::get('/products', [ProductController::class, 'showProducts'])->name('products.filter-price');

// stripe checkout
Route::post('/stripe/checkout', [CheckoutController::class, 'stripeCheckout'])->name('stripe.checkout');
Route::get('/stripe/success', [CheckoutController::class, 'stripeSuccess'])->name('stripe.checkout.success');
Route::get('/stripe/cancel', [CheckoutController::class, 'stripeCancel'])->name('stripe.checkout.cancel');
Route::get('author/{author_id}', [ProductController::class, 'author'])->name('author');
Route::get('/goodreviews', [ProductController::class, 'goodreviews']);
// Trong web.php
// Route::get('/get-new-orders', [CheckoutController::class, 'getNewOrders'])->name('getNewOrders');




// đơn hàng
Route::get('/order-detail/{order_code}', [ProductController::class, 'viewOrderDetail'])->name('viewOrderDetail');
Route::middleware(['auth:admin'])->prefix('/admin')->group(function () {
    Route::delete('/admin/contact/{id}', [AdminContactController::class, 'destroy'])->name('admin.contact.destroy');
    Route::get('/contact', [AdminContactController::class, 'index'])->name('admin.contact');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/category', [AdminCategoryController::class, 'alldm'])->name('admin.alldm');
    Route::get('admin/category/trash', [AdminCategoryController::class, 'alldmintrash'])->name('admin.alldm.trash');
    Route::get('admin/category/{slug}', [AdminCategoryController::class, 'onedm'])->name('admin.onedm');
    Route::get('/category/add', [AdminCategoryController::class, 'createdm'])->name('admin.createdm');
    Route::post('/adddm', [AdminCategoryController::class, 'adddm'])->name('admin.adddm');
    Route::post('/admin/category/trash/restore/{id}', [AdminCategoryController::class, 'restore'])->name('admin.dm.restore');
    Route::delete('/admin/category/trash/destroy/{id}', [AdminCategoryController::class, 'destroy'])->name('admin.dm.destroy');
    Route::get('/category/edit/{slug}', [AdminCategoryController::class, 'editdm'])->name('admin.editdm');
    Route::put('/updatedm/{id}', [AdminCategoryController::class, 'updatedm'])->name('admin.updatedm');
    Route::delete('/deletedm/{id}', [AdminCategoryController::class, 'deletedm'])->name('admin.deletedm');
    Route::post('/mark-as-completed/{id}', [AdminContactController::class, 'markAsCompleted'])
        ->name('admin.contact.markAsCompleted');

    Route::controller(AdminCommentController::class)->group(function () {
        Route::get('/comment/posts', 'allblpost')->name('admin.allblpost');
        Route::get('/comment/sanpham', 'allblpro')->name('admin.allblpro');
        // Route::get('/comment/{id}', 'onebl')->name('admin.onebl');
        Route::patch('/comment/product/update/{id}', 'toggleStatusPro')->name('admin.updateblpro');
        Route::patch('/comment/post/update/{id}', 'toggleStatusPost')->name('admin.updateblpost');
    });

    Route::controller(AdminAuthorController::class)->group(function () {
        Route::get('/author', 'alltg')->name('admin.alltg');
        Route::get('/author/trash', 'alltgInTrash')->name('admin.alltg.trash');
        Route::get('/author/add', 'addtg')->name('admin.addtg');
        Route::get('/author/{id}', 'onetg')->name('admin.onetg');
        Route::post('/author/store', 'createtg')->name('admin.createtg');
        Route::get('/author/edit/{id}', 'edittg')->name('admin.edittg');
        Route::put('/author/edit/{id}', 'updatetg')->name('admin.updatetg');
        Route::delete('/author/delete/{id}', 'deletetg')->name('admin.deletetg');
        Route::delete('/author/destroy/{id}', 'destroytg')->name('admin.destroytg');
        Route::post('/author/restore/{id}', 'restoretg')->name('admin.restoretg');
    });

    Route::get('/product', [AdminProductController::class, 'allsp'])->name('admin.allsp');
    Route::get('/product/trash', [AdminProductController::class, 'allspintrash'])->name('admin.allspintrash');

    Route::get('/product/editfun/{id}', [AdminProductController::class, 'editfun'])->name('admin.editfun');
    Route::post('/product/updateinfo', [AdminProductController::class, 'updateinfo'])->name('admin.updateinfo');


    Route::get('/product/add', [AdminProductController::class, 'createPro'])->name('admin.createPro');
    Route::get('/product/{slug}', [AdminProductController::class, 'onePro'])->name('admin.onePro');
    Route::post('/addPro', [AdminProductController::class, 'addPro'])->name('admin.addPro');

    Route::get('/product/edit/{slug}', [AdminProductController::class, 'editPro'])->name('admin.editPro');
    Route::put('/updatePro/{id}', [AdminProductController::class, 'updatePro'])->name('admin.updatePro');

    Route::delete('/delete/{id}', [AdminProductController::class, 'deletePro'])->name('admin.delete');
    Route::delete('/product/destroy/{id}', [AdminProductController::class, 'destroy'])->name('admin.destroy');
    Route::post('/product/restore/{id}', [AdminProductController::class, 'restore'])->name('admin.restoreProduct');

    // event
    Route::get('/eventmanager', [AdminEventController::class, 'eventManager'])->name('admin.event');
    Route::get('/event/add', [AdminEventController::class, 'createEvent'])->name('admin.createEvent');
    Route::post('/event/addEvent', [AdminEventController::class, 'addEvent'])->name('admin.addEvent');
    Route::get('/event/editEvent/{id}', [AdminEventController::class, 'editEvent'])->name('admin.editEvent');
    Route::put('/event/updateEvent/{id}', [AdminEventController::class, 'updateEvent'])->name('admin.updateEvent');
    Route::get('/event/delete/{id}', [AdminEventController::class, 'deleteEvent'])->name('admin.deleteEvent');


    Route::get('/restore', [AdminController::class, 'restore'])->name('admin.restore');


    Route::post('/thaydoitrangthai', [AdminOrderController::class, 'thayDoiTrangThai']);
    Route::get('/order/allorder', [AdminOrderController::class, 'donhang'])->name('admin.allorder');
    Route::get('/order/orderItem/{id}', [AdminOrderController::class, 'orderItem'])->name('admin.orderItem');

    // routes/web.php
    Route::get('/user/allus', [UserController::class, 'allus'])->name('admin.allus');

    Route::get('/user/editus/{id}', [UserController::class, 'editus'])->name('admin.editus');
    Route::get('/user/editad/{id}', [UserController::class, 'editad'])->name('admin.editad');
    Route::post('/user/editad/{id}', [UserController::class, 'updatead']);
    Route::post('/user/editus/{id}', [UserController::class, 'updateus']);

    Route::get('/user/add', [UserController::class, 'createacc'])->name('admin.createacc');
    Route::post('/addus', [UserController::class, 'addus'])->name('admin.addus');
    Route::post('/addad', [UserController::class, 'addad'])->name('admin.addad');


    Route::delete('/deleteus/{id}', [UserController::class, 'deleteus'])->name('admin.deleteus');
    Route::delete('/deletead/{id}', [UserController::class, 'deletead'])->name('admin.deletead');


    Route::get('/user/restore_us', [UserController::class, 'restore_us'])->name('admin.restore_us');

    Route::get('/article', [AdminPostController::class, 'newsarticle'])->name('admin.news');
    Route::get('/article/trash', [AdminPostController::class, 'newsarticleTrash'])->name('admin.news.trash');
    Route::post('/newsarticle/trash/restore/{id}', [AdminPostController::class, 'restore'])->name('admin.news.restorePost');
    Route::delete('/newsarticle/trash/destroy/{id}', [AdminPostController::class, 'destroy'])->name('admin.news.destroyPost');
    Route::get('/newsarticle/create', [AdminPostController::class, 'newsarticlecreate'])->name('admin.newsarticlecreate');
    Route::post('/newsarticle/store', [AdminPostController::class, 'newsarticlestore'])->name('admin.store');
    Route::get('/newsarticle/{id}', [AdminPostController::class, 'newsarticledetails'])->name('admin.detailsnewsarticle');
    Route::get('/newsarticle/edit/{id}', [AdminPostController::class, 'newsarticleedit'])->name('admin.newsarticleedit');
    Route::post('/newsarticle/update/{id}', [AdminPostController::class, 'newsarticlesupdate'])->name('admin.newsarticlesupdate');
    Route::delete('/newsarticle/delete/{id}', [AdminPostController::class, 'newsarticledelete'])->name('admin.newsarticledelete');

    Route::post('/upload-image', [AdminPostController::class, 'uploadImage'])->name('upload-image');



    Route::get('/new', [AdminPostController::class, 'newsCategory'])->name('admin.newsCategory');
    Route::get('/newscategory/trash', [AdminPostController::class, 'newsCategoryInTrash'])->name('admin.newsCategory.trash');
    Route::get('/newscategory/create', [AdminPostController::class, 'newsCategoryCreate'])->name('admin.newsCategoryCreate');
    Route::post('/newscategory/store', [AdminPostController::class, 'newsCategoryStore'])->name('admin.newsCategoryStore');
    Route::get('/newscategory/edit/{id}', [AdminPostController::class, 'newsCategoryEdit'])->name('admin.newsCategoryEdit');
    Route::post('/newscategory/update/{id}', [AdminPostController::class, 'newsCategoryUpdate'])->name('admin.newsCategoryUpdate');
    Route::delete('/newscategory/delete/{id}', [AdminPostController::class, 'newsCategoryDelete'])->name('admin.newsCategoryDelete');
    Route::delete('/newscategory/destroy/{id}', [AdminPostController::class, 'newsCategoryDestroy'])->name('admin.newsCategoryDestroy');
    Route::post('/newscategory/restore/{id}', [AdminPostController::class, 'newsCategoryRestore'])->name('admin.newsCategoryRestore');


    //    voucher
    Route::get('/reviews', [AdminReviewController::class, 'index'])->name('admin.review');
    Route::delete('/reviews/{id}', [AdminReviewController::class, 'destroy'])->name('reviews.destroy');
    Route::patch('/reviews/{id}/update-status', [AdminReviewController::class, 'updateStatus'])
        ->name('reviews.updateStatus');
    // Show all vouchers
    Route::get('/allvouchers', [VoucherController::class, 'index'])->name('admin.allvoucher');

    // Show the form to add a new voucher
    Route::get('/allvoucher/addvoucher', [VoucherController::class, 'create'])->name('admin.addVoucher');

    // Store a new voucher
    Route::post('/addvoucher', [VoucherController::class, 'store'])->name('admin.storeVoucher');

    // Show the form to edit an existing voucher
    Route::get('/allvoucher/editvouchers/{voucher}', [VoucherController::class, 'edit'])->name('admin.editVoucher');

    // Update an existing voucher
    Route::put('/updatevoucher/{voucher}', [VoucherController::class, 'update'])->name('admin.updateVoucher');

    // Delete an existing voucher
    Route::delete('/deletevoucher/{voucher}', [VoucherController::class, 'destroy'])->name('admin.deleteVoucher');
    Route::get('/getDataByDate', [AdminStatisticController::class, 'getDataByDate'])->name('getDataByDate');
    Route::get('/statistics', [AdminStatisticController::class, 'statistics'])->name('admin.statistics');
    Route::post('/admin/logout', [AdminLoginController::class, 'destroy'])->name('admin.logout');
});

Route::get('/calculate-statistics', [AdminStatisticController::class, 'calculateStatistics']);
Route::post('/apply-coupon', [OrdersController::class, 'applyCoupon'])->name('applyCoupon');

Route::post('/back-to-cart', [OrdersController::class, 'backToCartFromCheckout'])->name('back.to.cart');

Route::get('/clear-discount-info', [OrdersController::class, 'clearDiscountInfo'])->name('clear.discount.info');



// api
Route::get('/address', [AddressController::class, 'getProvinces']);
Route::get('/get-districts/{provinceCode}', [AddressController::class, 'getDistricts']);
// routes/web.php
// Định nghĩa route để xử lý thông báo








Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Auth::routes(['verify' => true]);

Route::middleware('auth')->group(function () {
    // Route::get('/add-to-wishlist/{user_id}/{product_id}', [ProductController::class, 'addToWishlist'])
    //     ->name('add-to-wishlist');

    Route::post('/add-to-wishlist', [ProductController::class, 'addToWishlist'])->name('add-to-wishlist');
    Route::get('/profile', [ProfileController::class, 'account'])->name('profile.account');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('auth/google', [LoginGoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginGoogleController::class, 'handleGoogleCallback']);

Route::post('login', [AuthenticatedSessionController::class, 'store']);


Route::post('/check-email', [RegisteredUserController::class, 'checkEmail']);

Route::get('/vision-mission', [ProductController::class, 'vision']);




Route::post('/submit-seller-form', [SellerController::class, 'handleFormSubmission']);
Route::get('/seller/register/{id}', [SellerController::class, 'seller_register'])->name('seller-register');
Route::post('/submit-seller-registration', [SellerController::class, 'submitRegistration'])->name('seller.register');




Route::get('/seller/dashboard', [SellerController::class, 'index'])->name('seller.index');
Route::get('/seller/product', [SellerController::class, 'product'])->name('seller.product.product');
Route::get('/seller/product/detail/{productSlug}', [SellerController::class, 'productDetail'])->name('seller.product.product-detail');
Route::get('/seller/product/add-product', [SellerController::class, 'productAdd'])->name('seller.product.productAdd');
Route::post('/seller/product/add-product-confirm', [SellerController::class, 'productAddConfirm'])->name('seller.product.productAddConfirm');




Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login.form');
Route::post('/admin/login', [AdminLoginController::class, 'login_store'])->name('admin.login');







Route::get('/quantri', [QuanTriTinController::class, 'index'])->middleware('auth', 'Quantri');
require __DIR__ . '/auth.php';
