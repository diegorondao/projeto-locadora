<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NavegacaoController extends Controller
{

	/**
	 * public/controlar
	 * será exibido a mensagem abaixo.
	 */
	public function index()
	{
		return view('index') ;
		
	}
	public function contato()
	{
		return view('contato') ;
		
	}
	public function reviews()
	{
		return view('reviews') ;
		
	}
	public function admin()
	{
		return view('admin.index') ;
		
	}

	/**
	 *Codigo para criar Controller Completo da classe escolhida.
	 *Code: php artisan make:controller TesteController
	 * 
	 */
}
