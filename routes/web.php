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

use App\Models\Aluno;
use App\Models\Professor;
use App\User;

Route::get('/', 'Vistas\ViewController@homepage');





  //  Route::group(['middleware' => 'teacher'], function () {
        Route::get('/master',function(){
            return view('layouts.master');
        });
        //rotas do aluno
         Route::get('/aluno/index','Vistas\Aluno\AlunoController@AlunoIndex');
         Route::get('/aluno/cadastro','AlunosController@create')->name('alunocadastro.create');
         Route::get('/aluno/listagem','AlunosController@index')->name('alunolistagem.index');
         Route::get('/aluno/edit/{id}','AlunosController@edit')->name('alunoedit.edit');
         Route::get('/aluno/alunorelatorio/{id}','AlunosController@relatorio');
         Route::any('alunos/pesquisa','AlunosController@search')->name('alunos.search');
         Route::post('/aluno/gravar','AlunosController@store')->name('alunocadastro.store');
         Route::put('/aluno/actualizar/{id}','AlunosController@update')->name('alunocadastro.update');
         //Route::delete('aluno/apagar/{id}','');







            //Rotas do Professor
         Route::get('/professor/index','Vistas\ViewController@professorIndex');
         Route::get('/professor/cadastro','ProfessorController@create')->name('professorcadasro.create');
         Route::post('/professoxr/gravar','ProfessorController@store')->name('professorcadastro.store');


         // Rotas para da escola
         Route::get('/escola/index','EscolaController@menu');
         Route::get('/escola/cadastro','EscolaController@create')->name('escolacadastro.create');
         Route::post('/escola/cadastro','EscolaController@store')->name('escolacadastro.store');

        //Rotas da turma
        Route::get('/turma/index','Vistas\ViewController@turmaIndex');
        Route::get('/turma/cadastro','TurmaController@create')->name('turmacadastro.create');
        Route::post('/turma/gravar','TurmaController@store')->name('turmacadastro.store');

        //Rotas da Area
        Route::get('/area/cadastro','areaController@create')->name('areacadastro.create');
        Route::post('/area/gravar','areaController@store')->name('areacadastro.store');


         Route::get('/usuarios/index','AdminUserController@menu');
         Route::get('/home','HomeController@index')->name('home');
         Route::get('/unavailable','HomeController@indisponivel')->name('indisponivel');


         Route::resource('/aluno/alunodelete', 'AlunosController');
         //falta apagar essa rota



        //rotas do adim
       // Route::get('/admin/usuariocadastro/');
         Route::get('/admin/usuarios', 'AdminUserController@index');
         Route::get('/admin/regras','AdminUserController@create')->name('createuser');
         Route::post('/admin/cadastrar','AdminUserController@store')->name('user.store');
        // Route::resource('/admin/usuariocadastro', 'AdminUserController');


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

