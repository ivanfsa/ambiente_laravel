<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;
use Session;
use Illuminate\Support\Facades\DB;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tarefas = Tarefas::orderBy('id','desc');
        
        $tarefas = DB::table('tarefas')
                ->orderBy('id', 'desc')
                ->get();

        return view('home', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'novaTarefa' => 'required|min:5|max:255',
            ]);
        $tarefa = new Tarefa;
        $tarefa->descricao = $request->novaTarefa;
        $tarefa->save();
        Session::flash('successo', 'Nova tarefa cadastrada com sucesso!');
        return redirect()->route('tarefa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarefa = Tarefa::find($id);
        return view('tarefas.edit')->with('tarefaEditar', $tarefa);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'updatedDescricaoTarefa' => 'required|min:5|max:255',
            ]);
        $tarefa = Tarefa::find($id);
        $tarefa->descricao = $request->updatedDescricaoTarefa;
        $tarefa->save();
        Session::flash('successo', 'Tarefa #' . $id . ' alterada com successo.');
        return redirect()->route('tarefa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tarefa = Tarefa::find($id);
        $tarefa->delete();
        Session::flash('successo', 'Tarefa #' . $id . ' excluída com successo.');
        return redirect()->route('tarefa.index');
    }
}
