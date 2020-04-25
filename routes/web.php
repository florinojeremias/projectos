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





  //  Route::group(['middleware' => 'teacher'], function () {

        //rotas do aluno
         Route::any('alunos/pesquisa','AlunosController@search')->name('alunos.search');
         Route::get('/aluno/alunorelatorio/{id}','AlunosController@relatorio');
         Route::get('/aluno/index','Vistas\Aluno\AlunoController@AlunoIndex');
         Route::resource('/aluno/alunolistagem','AlunosController');
         Route::resource('/aluno/alunoedit', 'AlunosController');
         Route::resource('/aluno/alunodelete', 'AlunosController');
         Route::resource('/aluno/alunocadastro','AlunosController');

    //});
    //Route::group(['middleware' => 'admin'], function () {

    //rotas para o professor
    Route::get('/professor/index','Vistas\ViewController@professorIndex');
    Route::resource('/professor/professorcadastro','ProfessorController');

    //rotas para  a turma
    Route::get('/turma/index','Vistas\ViewController@turmaIndex');
    Route::resource('/turma/turmacadastro','TurmaController');

    //Rotas da escola
    Route::resource('/escola/escolacadastro','EscolaController');
    Route::get('/escola/index','EscolaController@menu');
    Route::resource('/area/areacadastro','areaController');

        //admin rotes

    //Route::get('turma/turmacadastro/','area@index');
    Route::resource('/admin/usuarios', 'AdminUserController');
    Route::resource('/admin/usuariocadastro', 'AdminUserController');
    Route::get('/usuarios/index','AdminUserController@menu');




    //rotas das regras para o admin
    //Route::get('regras/index','viewsController@regrasindex');
    //Route::resource('/regras/cadastrar','RegrasController');



//});

Route::get('/home','HomeController@index')->name('home');
Route::get('/unavailable','HomeController@indisponivel')->name('indisponivel');


Auth::routes();

