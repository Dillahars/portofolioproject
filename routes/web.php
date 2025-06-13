<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

use App\Models\Experience;

Route::get('/', function () {
    $projects = \App\Models\Project::all();
    $experiences = Experience::all();
    return view('home', ['nama'=> 'Rakha Abdillah Nugraha', 'projects' => $projects, 'experiences' => $experiences]);
})->name('home');

Route::get('/about', function () {
    return view('about', ['nama'=> 'Rakha Abdillah Nugraha']);
})->name('about');

use App\Models\Project;

Route::get('/projects', function () {
    $projects = Project::all();
    return view('project', compact('projects'));
})->name('project');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');


use App\Http\Controllers\Admin\ExperienceController;

Route::get('/experience', [ExperienceController::class, 'publicIndex'])->name('experience');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('experience', \App\Http\Controllers\Admin\ExperienceController::class);
    Route::resource('projects', \App\Http\Controllers\Admin\ProjectsController::class);
    Route::resource('contact', \App\Http\Controllers\Admin\ContactController::class);

    // Dummy routes to fix missing category-expense routes error
    Route::post('category-expense', function () {
        return redirect()->back()->with('error', 'Category Expense feature is not implemented yet.');
    })->name('category-expense.store');

    Route::put('category-expense/{id}', function ($id) {
        return redirect()->back()->with('error', 'Category Expense feature is not implemented yet.');
    })->name('category-expense.update');

    Route::delete('category-expense/{id}', function ($id) {
        return redirect()->back()->with('error', 'Category Expense feature is not implemented yet.');
    })->name('category-expense.destroy');
});
