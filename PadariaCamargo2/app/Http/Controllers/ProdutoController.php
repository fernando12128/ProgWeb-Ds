<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Venda;
use Illuminate\Support\Facades\DB;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        //$produto = Produto::all();
        $produto = DB::table('tbproduto')->orderBy('dtCadastro','desc')->get();
        
        
        return view('admProdutos', compact('produto'));            
    }
    public function index2()
    {        
        //$produto = Produto::all();
        $produto = DB::table('tbproduto')->orderBy('dtCadastro','desc')->get();
        return view('clienteProdutos', compact('produto'));
    }    
    public function indexApi()
    {
        $sql = "select * from tbProduto";
        $produtos = DB::select($sql);

        return $produtos;
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
        $produto = new Produto();

        $produto->produto = $request->txProduto;
        $produto->descrProduto = $request->txDescrProduto;
        $produto->valor = $request->txValor;
        $produto->dtCadastro = $request->txDataCadastro;
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $extension = $request->image->extension();
            $imageName = md5($request->image->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('img/produtos'), $imageName);
            $produto->foto = $imageName;
        }

        $produto->save();

        return redirect('/admProdutos');
    }
    public function storeApi(Request $request)
    {
        $produto = new Produto();

        $produto->produto = $request->input('txProduto');
        $produto->descrProduto = $request->input('txDescrProduto');
        $produto->valor = $request->input('txValor');
        $produto->dtCadastro = $request->input('txDataCadastro');

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $extension = $request->image->extension();
            $imageName = md5($request->image->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('img/produtos'), $imageName);
            $produto->foto = $imageName;
        }

        $produto->save();

        return Response::json([
            'message' => 'Produto criado com sucesso',
            'data' => $produto,
        ], 201); // 201 Created é um código de status comum para operações de criação bem-sucedidas
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $produto = Produto::where('idProduto', '=', $id)->get();        
        
        return view('produto-escolhido', compact("produto"));
        // return $produto;   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
    public function updateApi(Request $request, $id)
    {   
        $produto = Produto::where('idProduto',$id)->update([
            'produto' => $request->produto,
            'descrProduto' => $request->descricao,
            'valor'=> $request->valor            
        ]);
        
        return response()->json([
            'message'=> 'Dados alterados com sucesso',
            'code'=>200]);        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produto::where('idProduto',$id)->delete();
        return redirect('/admProdutos');
    }

    public function destroyApi(string $id)
    {
        Produto::where('idProduto',$id)->delete();
        
        return response()->json([
            'message'=> 'Dados excluídos com sucesso',
            'code'=>200]); 
    }


    public function download()
    {               
        $sql = 'select * from tbProduto';

        $queryJson = DB::select($sql);

        // Nome do arquivo CSV
        $filename = 'problemas.csv';

        // Cabeçalho do arquivo        
        $headers = [
            'Content-Type' => 'text/csv;charset=utf-8',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ];        

        //Cabeçalho        
        
        $file = fopen('php://output', 'w');

        fclose($file);

        // Gera o arquivo CSV
        $callback = function () use ($queryJson) {
            
        $file = fopen('php://output', 'w');

        //Cabeçalho
        $col1 = "ID";
        $col2 = "Produto";
        $col3 = mb_convert_encoding("Descrição","ISO-8859-1");
        $col4 = "Valor";
        $col5 = "Data de Cadastro";
        
        $escreve = fwrite($file, "$col1,$col2,$col3,$col4,$col5");
        
        
            foreach($queryJson as $d) {
                $data1 = $d->idProduto;
                $data2 = $d->produto;
                $data3 = $d->descrProduto;
                $data4 = $d->valor;
                $data5 = $d->dtCadastro;
                
               //$escreve = fwrite($file, "\n$data1;$data2;$data3;$data4;$data5");
               $escreve = fwrite($file, "\n$data1,$data2,$data3,$data4,$data5");
               
            }
            fclose($file);
        };

        // Retorna o arquivo CSV para download
        return Response::stream($callback, 200, $headers);
    }
}
