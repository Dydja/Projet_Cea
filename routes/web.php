<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\CompteController;
use App\Http\Controllers\Auth\CompteLoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SendController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\FacturesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
public function index() {
        $data['authenticated_user'] = Auth::user();
        if($data['authenticated_user']->level == 0) {
            echo "Admin";
        } elseif($data['authenticated_user']->level == 1) {
            echo "Employee";
        } else {
            echo "Security";
        }
    }
|
*/

/*Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');*/

Route::middleware(['middleware'=>'black.list'],function(){
     Auth::routes();
});

/*Route::get('/dashboard', function () {
    return view('espaces.index');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';

/*Route::get('/compte-user', function () {
    return view('admin.compte_user');
});*/

//CREATION DUN COMPTE USER AND GERANT AINSI QUE L'ADMIN
Route::get('/compte-user',[CompteController::class,'create'])->middleware('guest')->name('registre');
Route::post('/compte-user',[CompteController::class,'store'])->middleware('guest');

//ROUTE POUR SE LOGUER APRES L'INSCRIPTION
Route::get('/', [CompteLoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/', [CompteLoginController::class, 'store'])->middleware('guest');

/**
 * ROUTE POUR LA GESTION DE REDIRECTION DES USERS AND ADMIN AND MANAGER
 * Isadmin,customer.middle,manager SONT DES MIDDLEWARE QUE NOUS AVONS CREER
 * black.list EST UN MIDDLEWARE CREER POUR BLOQUER L'ACCES AUTRES PAGES
*/

Route::get('/admin',[AdminController::class,'index'])->middleware(['Isadmin','auth','black.list'])->name('admin.dashboard');
Route::get('/customer',[CustomerController::class,'index'])->middleware(['customer.middle','auth'])->name('customer.dashboard');
Route::get('/manager',[ManagerController::class,'index'])->middleware(['manager','auth'])->name('manager.dashboard');

/**
 * ROUTE POUR SEND FILE
 */
Route::get('/send',[SendController::class,'create'])->name('file');
Route::post('/send/file',[SendController::class,'store'])->name('traitement.document');

/**
 * ROUTE FOR FOLLOW REQUEST
 */
 Route::get('/customers/follow',[CustomerController::class,'create'])->name('customer.follow');

 /**
  * TRAITEMENT POUR L'ENVOIE DE FACTURES Au NIVEAU DU GERANT
  */
  Route::get('/manager/factures',[FacturesController::class,'create'])->name('factures');
  Route::post('/manager/factures',[FacturesController::class,'store'])->name('traitement.factures');

/**
 * ROUTE FOR LOGOUT
 */
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']) ->middleware('auth')->name('logout');

/**
 * ROUTE POUR LA RECEPTION DES FACTURES SUR LE DASHBOARD CLIENT
 */
Route::get('/customer/factures',[CustomerController::class,'facture'])->name('customer.factures');


/*Route::group(['prefix'=>'admin','middleware'=>['Isadmin','auth','black.list']],function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.dashboard');
});

Route::group(['prefix'=>'customer','middleware'=>['customer.middle','auth','black.list']],function(){
    Route::get('/admin',[CustomerController::class,'index'])->name('customer');
});

Route::group(['prefix'=>'manager','middleware'=>['manager','auth','black.list']],function(){
    Route::get('/admin',[MAController::class,'index'])->name('manager');
});*/






/*Route::get(['prefix'=>'admin','middleware'=>'auth'],function (){
    Route::get('dashbord',[AdminController::class,'index'])->name('admin.dasboard');
});

Route::get(['prefix'=>'customer','middleware'=>'auth'],function (){
  Route::get('dashbord',[UserController::class,'index'])->name('customer.dasboard');
});

Route::get(['prefix'=>'manager','middleware'=>'auth'],function (){
  Route::get('dashbord',[GerantController::class,'index'])->name('manager.dasboard');
});*/


/*Route::prefix('admin')->group(function () {

});*/
