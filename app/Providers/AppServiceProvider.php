<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use View;
use DB;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        View::composer('teacher.include.sidebar',function ($view){
            $teacherId = Auth::guard('teacher')->user()->id;
            $teacherCourse = DB::select("select * from teacher_courses where teacherid = '$teacherId'");
            $view->with('teacherCourses',$teacherCourse);

        });


        View::composer('FontEnd.Include.pageheader',function ($view){
            $batch = DB::select("select * from batches order by id desc");
            $view->with('batches',$batch);


        });


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register('Hesto\MultiAuth\MultiAuthServiceProvider');
        }
    }
}
