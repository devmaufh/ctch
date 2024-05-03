<?php

namespace App\Http\Controllers;

use App\Models\AreaType;
use Illuminate\Http\Request;


class DocumentTypeController extends Controller
{
    //
    public function index(Request $request)
    {
        $documentTypes = AreaType::query();

        if ($request->has('code') && $request != null) {
            $documentTypes = $documentTypes
                ->orWhere('code', 'like', '%' . $request->code . '%');
        }
        if ($request->has('name') && $request != null) {
            $documentTypes = $documentTypes
                ->orWhere('name', 'like', '%' . $request->name . '%');
        }

        $documentTypes = $documentTypes->paginate(5);

        /*$documentTypes=AreaType::query()
            ->where('code','=',$request->code)
            ->where('name','=',$request->name)
            ->paginate(10);*/

        return view('document-type.index')->with('documentTypes', $documentTypes);
        //dd($request);
    }

    public function show(AreaType $documentTypes)
    {
        //$documentTypes=AreaType::find($id);
        return view('document-type.show')->with('documentTypes', $documentTypes);
    }

    public function create()
    {
        return view('document-type.create');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => ['required', 'string'],
            'code' => ['required', 'integer'],
            'id_usuario' => ['required', 'integer']
        ];
        $this->validate($request, $rules);

        $documentTypes = new AreaType();
        $documentTypes->code = $request->code;
        $documentTypes->name = $request->name;
        $documentTypes->id_usuario = $request->id_usuario;

        $documentTypes->save();
        //dd($documentTypes);
        return redirect()->to('document-type.show' . $documentTypes->id);
    }

    public function edit(AreaType $documentTypes)
    {
        //$documentTypes=AreaType::find($id);
        return view('document-type.edit')->with('documentTypes', $documentTypes);

    }

    public function update(Request $request, AreaType $documentTypes)
    {
        //$documentTypes=AreaType::find($id);

        $rules = [
            'name' => ['required', 'string'],
            'code' => ['required', 'integer'],
            'id_usuario' => ['required', 'integer']
        ];

        $this->validate($request, $rules);
        $documentTypes->code = $request->code;
        $documentTypes->name = $request->name;
        $documentTypes->id_usuario = $request->id_usuario;

        $documentTypes->save();
        return redirect()->route('document-type.show', $documentTypes);
        dd($request->toArray(), $id);
    }

    public function destroy(AreaType $documentTypes)
    {
        $documentTypes->delete();
        return redirect()->route('document-type.index');
    }
}
