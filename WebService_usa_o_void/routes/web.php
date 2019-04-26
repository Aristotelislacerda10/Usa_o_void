<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Route::get ('/login', ['as' => 'site.login','uses'=>'Site\LoginController@index']);
Route::get ('/login/sair', ['as' => 'site.login.sair','uses'=>'Site\LoginController@sair']);
Route::post ('/login/entrar', ['as' => 'site.login.entrar','uses'=>'Site\LoginController@entrar']);

Route::get ('/contato/{id?}', ['uses'=>'ContatoController@index']);

Route::post ('/contato', ['uses'=>'ContatoController@criar']);
Route::put ('/contato', ['uses'=>'ContatoController@editar']);

//Route::group(['middleware'=>'auth'], function(){

    Route::get ('/', ['as' => 'site.home','uses'=>'Site\HomeController@index']);


    Route::get ('/admin/cursos', ['as' => 'admin.cursos','uses'=>'Admin\CursoController@index']);
    Route::get ('/admin/cursos/adicionar', ['as' => 'admin.cursos.adicionar','uses'=>'Admin\CursoController@adicionar']);
    Route::post ('/admin/cursos/salvar', ['as' => 'admin.cursos.salvar','uses'=>'Admin\CursoController@salvar']);
    Route::get ('/admin/cursos/editar/{id}', ['as' => 'admin.cursos.editar','uses'=>'Admin\CursoController@editar']);
    Route::put ('/admin/cursos/atualizar/{id}', ['as' => 'admin.cursos.atualizar','uses'=>'Admin\CursoController@atualizar']);
    Route::get ('/admin/cursos/deletar/{id}', ['as' => 'admin.cursos.deletar','uses'=>'Admin\CursoController@deletar']);

    /*------------------------------------------CLIENTES------------------------------------*/
    Route::get ('/admin/clientes/consultaCliente', ['as' => 'admin.clientes.consultacliente','uses'=>'Admin\ClienteController@consultacliente']);
    Route::get ('/admin/clientes/_formCliente', ['as' => 'admin.clientes._formCliente','uses'=>'Admin\ClienteController@adicionar']);
    Route::post ('/admin/clientes/salvar', ['as' => 'admin.clientes.salvar','uses'=>'Admin\ClienteController@salvar']);
    Route::get ('/admin/clientes/_formEditar/{id}', ['as' => 'admin.clientes._formEditar','uses'=>'Admin\ClienteController@editar']);
    Route::put ('/admin/clientes/atualizar/{id}', ['as' => 'admin.clientes.atualizar','uses'=>'Admin\ClienteController@atualizar']);
    Route::get ('/admin/clientes/deletar/{id}', ['as' => 'admin.clientes.deletar','uses'=>'Admin\ClienteController@deletar']);
    Route::post ('/cliente/busca', ['uses'=>'Admin\ClienteController@BuscaCliente']);

    /*-----------------------------------------FORNECEDOR-----------------------------------*/
    Route::get ('/admin/fornecedor/consultaFornecedor', ['as' => 'admin.fornecedor.consultaFornecedor','uses'=>'Admin\FornecedorController@consultafornecedor']);
    Route::get ('/admin/fornecedor/deletar/{id}', ['as' => 'admin.fornecedor.deletar','uses'=>'Admin\FornecedorController@deletar']);
    Route::get ('/admin/fornecedor/_formFornecedor', ['as' => 'admin.fornecedor._formFornecedor','uses'=>'Admin\FornecedorController@adicionar']);
    Route::post ('/admin/fornecedor/salvar', ['as' => 'admin.fornecedor.salvar','uses'=>'Admin\FornecedorController@salvar']);

    /*-----------------------------------------VENDEDOR-----------------------------------*/
    Route::get ('/admin/vendedor/consultaVendedor', ['as' => 'admin.vendedor.consultaVendedor','uses'=>'Admin\VendedorController@consultavendedor']);
    Route::get ('/admin/vendedor/deletar/{id}', ['as' => 'admin.vendedor.deletar','uses'=>'Admin\VendedorController@deletar']);
    Route::get ('/admin/vendedor/_formVendedor', ['as' => 'admin.vendedor._formVendedor','uses'=>'Admin\VendedorController@adicionar']);
    Route::post ('/admin/vendedor/salvar', ['as' => 'admin.vendedor.salvar','uses'=>'Admin\VendedorController@salvar']);

    /*-----------------------------------------PRODUTO-----------------------------------*/
    Route::get ('/admin/produto/consultaProduto', ['as' => 'admin.produto.consultaProduto','uses'=>'Admin\ProdutoController@consultaproduto']);
    Route::get ('/admin/produto/deletar/{id}', ['as' => 'admin.produto.deletar','uses'=>'Admin\ProdutoController@deletar']);
    Route::get ('/admin/produto/_formProduto', ['as' => 'admin.produto._formProduto','uses'=>'Admin\ProdutoController@adicionar']);
    Route::post ('/admin/produto/salvar', ['as' => 'admin.produto.salvar','uses'=>'Admin\ProdutoController@salvar']);
    Route::get ('/fornecedor/autocompleteSearch/{texto}', ['uses'=>'Admin\ProdutoController@autocompleteSearch']);
    Route::post ('/produto/busca', ['uses'=>'Admin\ProdutoController@BuscaProduto']);
    Route::post ('/fornecedor/featch', 'Admin\ProdutoController@featch')->name('fornecedor.featch');

    /*-----------------------------------------EMITENTE-----------------------------------*/
    Route::get ('/admin/Emitente/dadosEmitente', ['as' => 'admin.emitente.dadosemitente','uses'=>'Admin\EmitenteController@dadosEmitente']);


    /*-----------------------------------------NOTA FISCAL-----------------------------------*/
    Route::get ('/admin/nfe/consultaNotaFiscal', ['as' => 'admin.nfe.consultanotafiscal','uses'=>'Admin\NfeController@consultanotafiscal']);
    Route::get ('/admin/nfe/_formNotaFiscal', ['as' => 'admin.nfe._formNotaFiscal','uses'=>'Admin\NfeController@nova_nota_fiscal']);

    /*-----------------------------------------WEBSERVICE-----------------------------------*/
    Route::get ('/cliente/{id?}', ['uses'=>'WebService\ClienteController@buscaCliente']);
    Route::get ('/vendedor/{id?}', ['uses'=>'WebService\VendedorController@buscaVendedor']);
    Route::get ('/fornecedor/{id?}', ['uses'=>'WebService\FornecedorController@buscaFornecedor']);
    Route::get ('/produto/{id?}', ['uses'=>'WebService\ProdutoController@buscaProduto']);
    Route::get ('/produto/{id?}', ['uses'=>'WebService\ProdutoController@qtdProduto']);

//});

