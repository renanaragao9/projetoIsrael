<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\GrupoMuscularController;
use App\Http\Controllers\GraficoController;
use App\Http\Controllers\ChamadoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes ==> TCC Trabalho de Conclusão de Curso Sistema 1 - Personal
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* 
    Prefixo para as rotas do painel administrativo
*/
Route::prefix('admin')->group(function(){
    
    /* 
        Seguindo a lista do Sidebar primeiramente vem o Painel de controle, ou seja a primeira rota a aparecer
        será a dashboard em seguida irá vim as rotas de Alunos -> Cadastro -> Tabelas -> Graficos e Chamados.
        Todas as rotas dentro do prefixo vão seguir esse padrão
    */
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    /*
        Rota de alunos, onde irá mostrar todos os alunos cadastrado sistema.
    */
    Route::get('alunos', [UserController::class, 'index'])->name('alunos');
    
    /*
        Rotas de cadastro, as rotas de cadastro vão seguir um padrão de como está organizado
        no site primeiro vem o cadastro do usuario em seguida do exercicio e depois o grupo muscular...
    */
    Route::get('cadastro-aluno', [UserController::class, 'register'])->name('cadastro-aluno');
    Route::get('cadastro-exercicio', [ExercicioController::class, 'register'])->name('cadastro-exercicio');
    Route::get('cadastro-grupo-muscular', [GrupoMuscularController::class, 'register'])->name('cadastro-gm');

    /*
        Rotas de tabelas, as rotas de tabelas vão seguir o mesmo padrão de como está organizado
        nas rotas de cadastro e no site, primeiro vem o cadastro do usuario em seguida do exercicio e 
        depois o grupo muscular...
    */
    Route::get('tabela-aluno', [UserController::class, 'table'])->name('tabela-aluno');
    Route::get('tabela-exercicio', [ExercicioController::class, 'table'])->name('tabela-exercicio');
    Route::get('tabela-grupo-muscular', [GrupoMuscularController::class, 'table'])->name('tabela-gm');

    /*
        Rota de graficos, onde irá mostrar todos os graficos de desempenho do site,
        alunos, e professor.
    */
    Route::get('graficos', [GraficoController::class, 'index'])->name('graficos');

    /*
        Rota de chamados, onde irá mostrar todos os chamados feito por alunos.
    */
    Route::get('chamados', [ChamadoController::class, 'index'])->name('chamados');
});