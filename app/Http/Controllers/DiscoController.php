<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Disco;

class DiscoController extends Controller
{

    public function index()
    {
        return Disco::all();
    }



    public function store(Request $request)
    {
        $request->validate([
            'album' => 'required',
            'faixa' => 'required',
        ]);
        return Disco::create($request->all());
    }


    public function show(string $id)
    {
        return Disco::findOrfail($id);
    }



    public function update(Request $request, string $id)
    {
        $request->validate([
            'album' => 'required',
            'faixa' => 'required',
        ]);

        $disco = Disco::findOrFail($id);
        $disco->update($request->all());

        return $disco;
    }


    public function destroy(string $id)
    {
        $disco = Disco::findOrFail($id);
        $disco->delete();

        return response()->json(['message' => 'Disco deletado com sucesso']);
    }
}
