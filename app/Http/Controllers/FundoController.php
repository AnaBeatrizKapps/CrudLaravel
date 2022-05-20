<?php

namespace App\Http\Controllers;

use App\Http\Requests\FundoRequest;
use App\Models\Models\ModelFundo;
use App\Exports\FundoExport;
use Maatwebsite\Excel\Facades\Excel;

class FundoController extends Controller
{
    private $objFundo;

    public function __construct()
    {
        $this->objFundo = new ModelFundo();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fundo=ModelFundo::all()->sortBy('codigo_fundo'); //por padrão é ordenado pelo código do fundo
        return view('index',compact('fundo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $fundo=ModelFundo::all();
        // return view('create',compact('fundo'));
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FundoRequest $request)
    {
        $cad=$this->objFundo->create([
            $now = date('Y-m-d H:i'),

            'nome_fundo'=>$request->nome_fundo,
            'qtd_integrantes'=>$request->qtd_integrantes,
            'data_hora_cadastro'=>$now,
            'status'=>$request->status,
        ]);
        if($cad){
            return redirect('fundo');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $codigo_fundo
     * @return \Illuminate\Http\Response
     */
    public function show($codigo_fundo)
    {
        $fundo=ModelFundo::find($codigo_fundo);
        return view('show',compact('fundo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo_fundo)
    {
        $fundo=ModelFundo::find($codigo_fundo);
        return view('create',compact('fundo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FundoRequest $request, $codigo_fundo)
    {
        $now = date('Y-m-d H:i');
        ModelFundo::where(['codigo_fundo'=>$codigo_fundo])->update([
            'nome_fundo'=>$request->nome_fundo,
            'qtd_integrantes'=>$request->qtd_integrantes,
            'data_hora_cadastro'=>$now,
            'status'=>$request->status
        ]);
        return redirect('fundo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($codigo_fundo)
    {
        $del=ModelFundo::destroy($codigo_fundo);
        return($del)?"sim":"não";
    }

    public function export() 
    {
        return Excel::download(new FundoExport, 'export_fundos.xlsx');
    }
}
