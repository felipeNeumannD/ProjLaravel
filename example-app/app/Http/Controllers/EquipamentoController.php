<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipamento;

class EquipamentoController extends Controller
{

    
    public function index()//CADASTRO DE EQUIPAMENTOS
    {
        return view("cadastroEquip");
    }

    public function index2() //MODIFICA EQUIPAMENTOS
    {
        $equipamentos = Equipamento::all();
        return view("modificaEquip", compact('equipamentos'));
    }

    public function index3(Request $request) //ALTERA EQUIPAMENTOS
    {
        $id = $request->input('idModificar');
        $equipamento = Equipamento::findOrFail($id);
        $equipamento = Equipamento::where('id_equipamento','%'.$id.'%')->get();

        return view('alteraEquip', compact('equipamento'));

    }

    public function search(Request $request)
    {
        $pesquisa = $request->input("procura_equipamento");
        $equipamentos = Equipamento::where('descricao', 'like', '%' . $pesquisa . '%')->get();
        return view("modificaEquip", compact('equipamentos'));
    }
        
    public function delete(Request $request){
        $id = $request->input("guardado");
        $equipamento = Equipamento::findOrFail($id);
        $equipamento->delete();
        return redirect()->route('show/equip');
    }

    public function store(Request $request)
    {
        $equipamento = new Equipamento();
        $equipamento->descricao = $request->input("descricao");
        $equipamento->tipo = $request->input("tipo");
        $equipamento->data_compra = $request->input("data_compra");
        $equipamento->valor = $request->input("valor");

        $equipamento->save();

        return redirect()->route("show/equip");
    }


}
