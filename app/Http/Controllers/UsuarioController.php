<?php

namespace Locadora\Http\Controllers;

use Illuminate\Http\Request;
use Locadora\Http\Requests;
use Locadora\Http\Controllers\Controller;
use Locadora\User;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class UsuarioController extends Controller
{	
	/*
	public function __construct(){
		$this->middleware('auth');
		$this->middleware('admin');
		$this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
	}

	*/
	public function find(Route $route){
		$this->user = User::find($route->getParameter('usuario'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
	    	$users = User::paginate(5);
		return view('usuario.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
		public function store(Request $request)
	{	
		User::create($request->all());

		Session::flash('message','Registro Gravado com Sucesso !! ');
		return Redirect::to('/usuario');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return view('usuario.edit',['user'=>$user]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$user = User::find($id);
		$user -> fill($request ->all());
		$user ->save();
		
		//mensagem que será apresentando via Session
		Session::flash('message','Registro Atualizado com Sucesso !!');
		
		//rediciona para a Usuários
		return Redirect::to('/usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);
		Session::flash('message','Usuario Deletado Corretamente');
		return Redirect::to('/usuario');
	}
}
