<?php
namespace App\Traits;

use App\Menu;

trait PageHeaderTrait {

	public function headerPageName($route_name)
	{
        if(!is_null($route_name)){
            // DB::enableQueryLog();
            // dd(DB::getQueryLog());
            $menuDescription = Menu::where('rota', $route_name)->get()->first();

            $headerText = "<h1>".$menuDescription->nome."<small>".$menuDescription->descricao."</small></h1>";

            return $headerText;
        }
	}

}