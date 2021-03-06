<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SaleOrderControllers\SaleOrderPostController;
use App\Http\Controllers\SaleOrderControllers\SaleOrderPutController;
use App\Http\Controllers\SaleOrderControllers\SaleOrderDeleteController;
use App\Http\Controllers\SaleOrderControllers\SaleOrderGetController;
use App\Http\Controllers\SaleOrderControllers\SaleOrderAllGetController;


use Src\PurchaseInvoice\Infrastructure\Controller\PurchaseInvoiceAllGetController;
use Src\PurchaseInvoice\Infrastructure\Controller\PurchaseInvoiceGetController;
use Src\PurchaseInvoice\Infrastructure\Controller\PurchaseInvoicePostController;
use Src\PurchaseInvoice\Infrastructure\Controller\PurchaseInvoiceDeleteController;
use Src\PurchaseInvoice\Infrastructure\Controller\PurchaseInvoicePutController;


use App\Http\Controllers\PurchaseOrderController\PurchaseOrderCreateController;
use App\Http\Controllers\PurchaseOrderController\PurchaseOrderReadController;
use App\Http\Controllers\PurchaseOrderController\PurchaseOrderReadOneController;
use App\Http\Controllers\PurchaseOrderController\PurchaseOrderUpdateController;
use App\Http\Controllers\PurchaseOrderController\PurchaseOrderDeleteController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/request_order_api', \App\Http\Controllers\RequestOrderController::class);

Route::get('sale_order', SaleOrderAllGetController::class);

Route::post('sale_order', SaleOrderPostController::class);

Route::get('sale_order/{id}', SaleOrderGetController::class);

Route::put('sale_order/{id}', SaleOrderPutController::class);

Route::delete('sale_order/{id}', SaleOrderDeleteController::class);

//Route::apiResource('purchaseOrder', \App\Http\Controllers\PurchaseOrderController::class);


/*Facturas de Compra*/


Route::get('purchaseInvoice', PurchaseInvoiceAllGetController::class);
Route::get('purchaseInvoice/{id}', PurchaseInvoiceGetController::class);
Route::post('purchaseInvoice', PurchaseInvoicePostController::class);
Route::delete('purchaseInvoice/{id}', PurchaseInvoiceDeleteController::class);
Route::put('purchaseInvoice/{id}', PurchaseInvoicePutController::class);





//Purchase Order
Route::get('purchaseOrder', PurchaseOrderReadController::class);
Route::get('purchaseOrder/{id}', PurchaseOrderReadOneController::class);
Route::post('purchaseOrder', PurchaseOrderCreateController::class);
Route::put('purchaseOrder', PurchaseOrderUpdateController::class);
Route::delete('purchaseOrder/{id}', PurchaseOrderDeleteController::class);

