<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\User;
use App\Orden;

use DB;

class SelectComposer{
	public function compose(View $view){
		$sugeridos = User::where('acceso','=',0)
				->orwhere('acceso','=',1)
				->get();
		$usuarios = User::all();

		$view
			->with('usuarios',$usuarios)
			->with('sugeridos',$sugeridos);
	}
}