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
        ], "lbsa_update");
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/layouts'),
            __DIR__.'/example' => base_path('resources/views/example'),
            __DIR__.'/public' => base_path('public'),
        ], "lbsa_init");
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
        Blade::directive('modal_open', function ($title, $id = "Default") {
            return "<div class=\"modal fade\" id=\"<?php echo $id; ?>\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">
                                        &times;
                                    </button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel\"><?php echo $title; ?></h4>
                                </div>";
        });
        Blade::directive('modal_close', function ($title) {
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
