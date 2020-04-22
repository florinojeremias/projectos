<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Vistas\ViewController@homepage');





    Route::group(['middleware' => 'teacher'], function () {

        //rotas do aluno
         Route::any('alunos/pesquisa','AlunosController@search')->name('alunos.search');
         Route::get('/aluno/alunorelatorio/{id}','AlunosController@relatorio');
         Route::resource('/aluno/alunolistagem','AlunosController');
         Route::resource('/aluno/alunoedit', 'AlunosController');
         Route::resource('/aluno/alunodelete', 'AlunosController');
         Route::resource('/aluno/alunocadastro','AlunosController');
         Route::get('/aluno/index','Vistas\Aluno\AlunoController@AlunoIndex');

    });
    Route::group(['middleware' => 'admin'], function () {

    //rotas para o professor
    Route::resource('/professor/professorcadastro','ProfessorController');
    Route::get('/professor/index','Vistas\ViewController@professorIndex');

    //rotas para  a turma
    Route::resource('/turma/turmacadastro','TurmaController');
    Route::get('/turma/index','Vistas\ViewController@turmaIndex');
    //Rotas da escola
    Route::resource('/escola/escolacadastro','EscolaController');
    Route::resource('/area/areacadastro','areaController');

        //admin rotes
    Route::resource('regras/regrascadastro','RegrasController');

    //Route::get('turma/turmacadastro/','area@index');
    Route::resource('/admin/usuarios', 'AdminUserController');
    Route::resource('/admin/usuariocadastro', 'AdminUserController');





    //rotas das regras para o admin
    //Route::get('regras/index','viewsController@regrasindex');
    //Route::resource('/regras/cadastrar','RegrasController');
    Route::get('/registar','Auth\RegisterController@index')->name('registar');


});
Route::get('/unavailable',function(){
    return view('errors.419');
})->name('indisponivel');
Route::get('/home','HomeController@index')->name('home');



Auth::routes();

