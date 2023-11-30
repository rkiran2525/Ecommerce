<?php

use App\Http\Controllers\AddressesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\DiscountsController;
use App\Http\Controllers\OrderitemsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\PaymentsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ParentsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => '/roles', 'as' => 'roles',], function () {
    Route::post('/index', [RolesController::class, 'index'])->name('index');
});

Route::group(['prefix' => '/address', 'as' => 'address',], function () {
    Route::post('/index', [AddressesController::class, 'index'])->name('index');
});

Route::group(['prefix' => '/brands', 'as' => 'brands',], function () {
    Route::post('/index', [BrandsController::class, 'index'])->name('index');
});

Route::group(['prefix' => '/carts', 'as' => 'carts',], function () {
    Route::post('/index', [CartsController::class, 'index'])->name('index');
});

Route::group(['prefix' => '/discounts', 'as' => 'discounts',], function () {
    Route::post('/index', [DiscountsController::class, 'index'])->name('index');
});

Route::group(['prefix' => '/orderitems', 'as' => 'orderitems',], function () {
    Route::post('/index', [OrderitemsController::class, 'index'])->name('index');
});

Route::group(['prefix' => '/orders', 'as' => 'orders',], function () {
    Route::post('/index', [OrdersController::class, 'index'])->name('index');
});

Route::group(['prefix' => '/payments', 'as' => 'payments',], function () {
    Route::post('/index', [PaymentsController::class, 'index'])->name('index');
});

Route::group(['prefix' => '/products', 'as' => 'products',], function () {
    Route::post('/index', [ProductsController::class, 'index'])->name('index');
});

Route::group(['prefix' => '/reviews', 'as' => 'reviews',], function () {
    Route::post('/index', [ReviewsController::class, 'index'])->name('index');
});

Route::group([
    'prefix' => '/users', 'as' => 'users',
], function () {
    Route::post('/index', [UsersController::class, 'index'])->name('index');
});

Route::group([
    'prefix' => '/categories', 'as' => 'categories',
], function () {
    Route::post('/index', [CategoriesController::class, 'index'])->name('index');
});

Route::group(['prefix' => '/parents', 'as' => 'parents',], function () {
    Route::post('/index', [ParentsController::class, 'index'])->name('index');
});






// Route::post("add-address",[AddressesController::class,'addAddresses']);
// Route::post("update-address",[AddressesController::class,'updateAddress']);
// Route::post("list-address",[AddressesController::class,'listAddress']);
// Route::post("delete-address",[AddressesController::class,'deleteAddress']);

// Route::post("addbrands",[BrandsController::class,'addBrands']);
// Route::post("updatebrands",[BrandsController::class,'updateBrands']);
// Route::post("listbrands",[BrandsController::class,'listBrands']);
// Route::post("deletebrands",[BrandsController::class,'deleteBrands']);

// Route::post("addCarts",[CartsController::class,'addCarts']);
// Route::post("updateCarts",[CartsController::class,'updateCarts']);
// Route::post("listCarts",[CartsController::class,'listCarts']);
// Route::post("list",[CartsController::class,'listCarts']);
// Route::post("delete",[CartsController::class,'deleteCarts']);

// Route::post("addDiscounts",[DiscountsController::class,'addDiscounts']);
// Route::post("updateDiscounts",[DiscountsController::class,'updateDiscounts']);
// Route::post("listDiscounts",[DiscountsController::class,'listDiscounts']);
// Route::post("deleteDiscounts",[DiscountsController::class,'deleteDiscounts']);

// Route::post("addOrderitems",[OrderitemsController::class,'addOrderitems']);
// Route::post("updateOrderitems",[OrderitemsController::class,'updateOrderitems']);
// Route::post("listOrderitems",[OrderitemsController::class,'listOrderitems']);
// Route::post("deleteOrderitems",[OrderitemsController::class,'deleteOrderitems']);

// Route::post("addorder",[OrdersController::class,'addOrders']);
// Route::post("updateorder",[OrdersController::class,'updateOrders']);
// Route::post("listorder",[OrdersController::class,'listOrders']);
// Route::post("deleteorder",[OrdersController::class,'deleteOrders']);

// Route::post("addPayments",[PaymentsController::class,'addPayments']);
// Route::post("updatePayments",[PaymentsController::class,'updatePayments']);
// Route::post("listPayments",[PaymentsController::class,'listPayments']);
// Route::post("deletePayments",[PaymentsController::class,'deletePayments']);

// Route::post("addProducts",[ProductsController::class,'addProducts']);
// Route::post("updateProducts",[ProductsController::class,'updateProducts']);
// Route::post("listProducts",[ProductsController::class,'listProducts']);
// Route::post("deleteProducts",[ProductsController::class,'deleteProducts']);

// Route::post("addReviews",[ReviewsController::class,'addReviews']);
// Route::post("updateReviews",[ReviewsController::class,'updateReviews']);
// Route::post("listReviews",[ReviewsController::class,'listReviews']);
// Route::post("delete",[ReviewsController::class,'deleteReviews']);

// Route::post("addRoles",[RolesController::class,'addRoles']);
// Route::post("updateRoles",[RolesController::class,'updateRoles']);
// Route::post("listRoles",[RolesController::class,'listRoles']);
// Route::post("deleteRoles",[RolesController::class,'deleteRoles']);

// Route::post("addUsers",[UsersController::class,'addUsers']);
// Route::post("updateUsers",[UsersController::class,'updateUsers']);
// Route::post("listUsers",[UsersController::class,'listUsers']);
// Route::post("deleteUsers",[UsersController::class,'deleteUsers']);

// Route::post("addCategories",[CategoriesController::class,'addCategories']);
// Route::post("updateCategories",[CategoriesController::class,'updateCategories']);
// Route::post("listCategories",[CategoriesController::class,'listCategories']);
// Route::post("deleteCategories",[CategoriesController::class,'deleteCategories']);

// Route::post("addParents",[ParentsController::class,'addParents']);
// Route::post("updateParents",[ParentsController::class,'updateParents']);
// Route::post("listParents",[ParentsController::class,'listParents']);
// Route::post("deleteParents",[ParentsController::class,'deleteParents']);
