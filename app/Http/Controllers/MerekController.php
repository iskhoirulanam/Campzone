<?php

namespace App\Http\Controllers;

use App\Merek;
use Illuminate\Http\Request;
use DataTables;

class MerekController extends Controller
{
    public function index(Request $request)
    {
        $merek = Merek::latest()->get();

        if ($request->ajax()) {
            return Datatables::of($merek)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                   $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-info btn-sm edit-post"><i class="far fa-edit"></i> Edit</a>';
                            $btn .= '&nbsp;&nbsp;';
                            $btn .= '<button type="button" name="delete" data-id="'.$row->id.'" class="delete btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</button>';     
                            return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.merek.index', compact('merek'));
    }

    /**
     * Store/update resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Merek::updateOrCreate([
            'id' => $request->merek_id
        ],[
            'name_merek' => $request->name_merek,
            'slug' => $request->slug
        ]);

        // return response
        $response = [
            'success' => true,
            'message' => 'Merek saved successfully.',
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function show(Merek $merek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $merek = Merek::find($id);
        return response()->json($merek);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merek $merek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Merek  $merek
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merek $merek)
    {
       
        $merek->delete();

        // return response
        $response = [
            'success' => true,
            'message' => 'Merek deleted successfully.',
        ];
        return response()->json($response, 200);
    
    }
}