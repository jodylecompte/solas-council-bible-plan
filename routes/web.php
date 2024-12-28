<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\PlanController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'authUser' => Auth::user()
    ]);
});

Route::post('/plan/mark-complete', [PlanController::class, 'markDayComplete']);

Route::post('/start-plan', [PlanController::class, 'startPlan'])->name('start-plan');

Route::get('/about', function () {
    return Inertia::render('About');
})->middleware([])->name('about');

// Route::get('/demo', function () {
//     return Inertia::render('Demo');
// })->middleware(['auth', 'verified'])->name('demo');

Route::get('/plan', [PlanController::class, 'planDashboard'])
    ->name('plan.dashboard')
    ->middleware('auth');

Route::post('/start-plan', [PlanController::class, 'startPlan'])->name('plan.start');

Route::get('/plan/{day}', [PlanController::class, 'show'])
    ->where('day', '[1-9][0-9]{0,2}')
    ->name('plan.show')
    ->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
