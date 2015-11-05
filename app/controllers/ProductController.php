<?php

class ProductController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function newForm()
    {
        return View::make('product/edit');
    }

    public function ajaxSave()
    {
        $json = file_get_contents("php://input");

        log::debug('showing the json string'.$json);
        $url = public_path()."/test.json";
        $url = urldecode($url);

        $file = fopen($url,'a');
//        fputs($file,PHP_EOL.'$inventory[].push('.$json.');');
        fwrite($file,$json);
        fclose($file);
    }
}
