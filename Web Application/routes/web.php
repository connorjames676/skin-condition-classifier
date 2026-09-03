<?php

// This file contains all possible route through the application.

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// These routes are only accessible to authenticated users
Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('user-password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');

    Volt::route('settings/two-factor', 'settings.two-factor')
        ->middleware(
            when(
                Features::canManageTwoFactorAuthentication()
                    && Features::optionEnabled(Features::twoFactorAuthentication(), 'confirmPassword'),
                ['password.confirm'],
                [],
            ),
        )
        ->name('two-factor.show');

    // This route is used to display the result of the prediction
    Route::get('result/{prediction}/{confidence}', function (string $prediction, string $confidence) {
        $views = [
            'Acne' => 'result.acne',
            'Bullous' => 'result.bullous',
            'Candidiasis' => 'result.candidiasis',
            'Eczema' => 'result.eczema',
            'Psoriasis' => 'result.psoriasis',
            'Rosacea' => 'result.rosacea',
            'Seborrh_Keratoses' => 'result.seborrheic-keratoses',
            'Warts' => 'result.warts',
        ];

        $view = $views[$prediction] ?? 'result.error';

        return view($view, [
            'prediction' => $prediction,
            'confidence' => $confidence,
        ]);
    })->name('result');
});
