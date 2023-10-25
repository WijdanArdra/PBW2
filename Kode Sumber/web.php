<?php
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/user', [UserController::class, 'index'])->name('user.daftarPengguna');
    Route::get('/userRegistration', [UserController::class, 'create'])->name('user.registrasi');
    Route::post('/userStore', [UserController::class, 'store'])->name('user.storePengguna');
    Route::get('/userView/{user}', [UserController::class, 'show'])->name('user.infoPengguna');
    Route::get('/userEdit/{user}', [UserController::class, 'edit'])->name('user.editPengguna');
    Route::post('/userUpdate', [UserController::class, 'update'])->name('user.updatePengguna');

    Route::get('/koleksi', [CollectionController::class, 'index'])->name('koleksi.daftarKoleksi');
    Route::get('/koleksiTambah', [CollectionController::class, 'create'])->name('koleksi.registrasi');
    Route::post('/koleksiStore', [CollectionController::class, 'store'])->name('koleksi.storeKoleksi');
    Route::get('/koleksiView/{collection}', [CollectionController::class, 'show'])->name('koleksi.infoKoleksi');
    Route::get('/koleksiEdit/{collection}', [CollectionController::class, 'edit'])->name('koleksi.editKoleksi');
    Route::PUT('/koleksiUpdate', [CollectionController::class, 'update'])->name('koleksi.updateKoleksi');

});

require __DIR__.'/auth.php';

// Wijdan Ardra Fulvian 6706223137 46-04