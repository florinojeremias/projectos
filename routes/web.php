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


//passando parametros nas rotas
//defenindo que somente usuarios logados podem acessar esse link
 Route::get('/teste2/{id}', 'Views_controller\Sitecontroller@controle')->middleware('auth');



Auth::routes();

Route::resource('/escola/escolacadastro','EscolaController')->middleware('auth');
Route::resource('/area/areacadastro','areaController')->middleware('auth');
Route::resource('/aluno/alunocadastro','AlunosController')->middleware('auth');
Route::resource('/professor/professorcadastro','ProfessorController');
//rota para mostrar a lista na view
//Route::get('/turma/turmacadastroo','TurmaController@getEscolas');
Route::get('/aluno/alunorelatorio/{id}','AlunosController@relatorio');
Route::resource('/turma/turmacadastro','TurmaController');
Route::resource('/aluno/alunolistagem','AlunosController');
Route::resource('/aluno/alunoedit', 'AlunosController');

//Route::get('turma/turmacadastro/','area@index');
Route::resource('/admin/usuarios', 'AdminUserController');
Route::resource('/admin/usuariocadastro', 'AdminUserController');
Route::get('/turma/index','Vistas\ViewController@turmaIndex');
Route::get('/professor/index','Vistas\ViewController@professorIndex');
Route::get('/home','HomeController@index')->name('home');
Route::get('/aluno/index','Vistas\Aluno\AlunoController@AlunoIndex')->middleware('auth');
