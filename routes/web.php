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
         Route::get('/professor/index','Vistas\ViewController@professorIndex');
         Route::get('/turma/index','Vistas\ViewController@turmaIndex');
         Route::get('/escola/index','EscolaController@menu');
         Route::get('/usuarios/index','AdminUserController@menu');
         Route::get('/home','HomeController@index')->name('home');
         Route::get('/unavailable','HomeController@indisponivel')->name('indisponivel');
         Route::resource('/aluno/alunolistagem','AlunosController');
         Route::resource('/aluno/alunoedit', 'AlunosController');
         Route::resource('/aluno/alunodelete', 'AlunosController');
         Route::resource('/aluno/alunocadastro','AlunosController');
         Route::resource('/professor/professorcadastro','ProfessorController');
         Route::resource('/turma/turmacadastro','TurmaController');
         Route::resource('/escola/escolacadastro','EscolaController');
         Route::resource('/area/areacadastro','areaController');
         Route::resource('/admin/usuarios', 'AdminUserController');
         Route::resource('/admin/usuariocadastro', 'AdminUserController');


    //});
    //Route::group(['middleware' => 'admin'], function () {

    //rotas para o professor



    //rotas para  a turma



    //Rotas da escola




        //admin rotes

    //Route::get('turma/turmacadastro/','area@index');






    //rotas das regras para o admin
    //Route::get('regras/index','viewsController@regrasindex');
    //Route::resource('/regras/cadastrar','RegrasController');



//});




Auth::routes();

