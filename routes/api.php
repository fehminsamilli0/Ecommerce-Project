<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ExpenseController;
use App\Http\Controllers\Api\SalaryController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\PosController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\OrderController;

use Illuminate\Support\Facades\Route;

Route::group([

'middleware' => 'api',
'prefix' => 'auth'

], function ($router) {

Route::post('login', [AuthController::class, 'login']);
Route::post('signup', [AuthController::class, 'signup']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::post('me', [AuthController::class, 'me']);

});

Route::apiResource('/employee', EmployeeController::class);
Route::apiResource('/supplier', SupplierController::class);
Route::apiResource('/category', CategoryController::class);
Route::apiResource('/product', ProductController::class);
Route::apiResource('/expense', ExpenseController::class);
Route::apiResource('/customer', CustomerController::class);


Route::post('/salary/paid/{id}', [SalaryController::class, 'Paid']);
Route::get('/salary', [SalaryController::class, 'AllSalary']);
Route::get('/salary/view/{id}', [SalaryController::class, 'ViewSalary']);
Route::get('/salary/edit/{id}', [SalaryController::class, 'EditSalary']);
Route::post('/salary/update/{id}', [SalaryController::class, 'SalaryUpdate']);


Route::post('/stock/update/{id}', [ProductController::class, 'StockUpdate']);
Route::get('/getting/product/{id}', [PosController::class, 'GetProduct']);

// Add to Cart Route

Route::get('/addToCart/{id}', [CartController::class, 'AddToCart']);
Route::get('/cart/product', [CartController::class, 'CartProduct']);

Route::get('/remove/cart/{id}', [CartController::class, 'RemoveCart']);


Route::get('/increment/{id}', [CartController::class, 'increment']);
Route::get('/decrement/{id}', [CartController::class, 'decrement']);

Route::get('/vats', [CartController::class, 'vats']);
Route::post('/orderdone', [PosController::class, 'OrderDone']);

//Order Route
Route::get('/orders', [OrderController::class, 'TodayOrder']);

Route::get('/order/details/{id}', [OrderController::class, 'OrderDetails']);
Route::get('/orderdetails/{id}', [OrderController::class, 'OrderDetailsAll']);

Route::post('/search/order', [PosController::class, 'SearchOrderDate']);


// Admin Dashboard Route
Route::get('/today/sell', [PosController::class, 'TodaySell']);
Route::get('/today/income', [PosController::class, 'TodayIncome']);
Route::get('/today/due', [PosController::class, 'TodayDue']);
Route::get('/today/expense', [PosController::class, 'TodayExpense']);
Route::get('/today/stockout', [PosController::class, 'StockOut']);


// Route::apiResource('/employee',App\Http\Controllers\Api\EmployeeController::class);

