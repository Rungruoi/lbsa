<?php

namespace LIBRESSLtd\LBSA;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class LBSAServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		$this->publishes([
	        __DIR__.'/views' => base_path('resources/views/layouts'),
            __DIR__.'/public' => base_path('public'),
	    ], "lbsa");
        Blade::directive('box_open', function ($title) {
            return "<div class=\"jarviswidget\" id=\"wid-id-1\" data-widget-colorbutton=\"false\" data-widget-editbutton=\"false\" data-widget-custombutton=\"false\">
                    <header>
                        <span class=\"widget-icon\"> <i class=\"fa fa-edit\"></i> </span>
                        <h2><?php echo $title; ?></h2>
                    </header>";
        });
        Blade::directive('box_close', function ($title) {
            return "</div>";
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    	
    }
}
