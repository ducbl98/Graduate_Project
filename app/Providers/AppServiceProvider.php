<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        Validator::extend('greater_than_field', function ($attribute, $value, $parameters, $validator) {
            $min_field = $parameters[0];
            $data = $validator->getData();
            $min_value = $data[$min_field];
            return $value > $min_value;
        });

        Validator::replacer('greater_than_field', function ($message, $attribute, $rule, $parameters) {
            return str_replace(':field', $parameters[0], $message);
        });

        Validator::extend('unique_technique_and_type', function ($attribute, $value, $parameters, $validator) {
            $count = DB::table('techniques')->where('name', $value)
                ->where('type_id', $parameters[0])
                ->count();

            return $count === 0;
        });

        Validator::extend('unique_technique_and_type_update', function ($attribute, $value, $parameters, $validator) {
            $count = DB::table('techniques')->where('name', $value)
                ->where('type_id', $parameters[0])
                ->where('id','<>',$parameters[1])
                ->count();

            return $count === 0;
        });

    }
}
