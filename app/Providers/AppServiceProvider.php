<?php

namespace App\Providers;

use Livewire\Livewire;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Http\Livewire\ProjectArticleForm;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Livewire::component('project-article-form', ProjectArticleForm::class);
        Schema::defaultStringLength(255);

    }
}
