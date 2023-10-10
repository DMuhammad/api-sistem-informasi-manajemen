<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CorrosionResource;
use App\Models\Corrosion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CorrosionController extends Controller
{
    public function index()
    {
        $datas = Corrosion::all();

        return new CorrosionResource(true, 'List Data Corrosions', $datas);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'temperature'   =>  'required',
            'humidity'      =>  'required',
            'chemical_consentration'    =>  'required',
            'pH'    =>  'required',
            'amperage'  =>  'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $data = Corrosion::create($request->all());

        return new CorrosionResource(true, 'Data Berhasil Disimpan', $data);
    }
}
