<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Brand;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $brand = Brand::all();
       return view('admin.brand.index')->with('brand', $brand);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.brand.tambah_brand');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insert(Request $request)
    {

       $brand = new Brand;

       $brand->nama_brand = $request->input('nama_brand');
       $brand->slug = $request->input('slug');

       $brand->save();
     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     {
        $brand = DB::table('brand')->where('id',$id)->get();
        return view('admin.brand.edit_brand', compact('brand'));
    }

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
        $brand = Brand::find($id);    
        $brand->update(
            $request->all());
        return redirect('/admin/brand')->with('sukses', 'Data Berhasil Update');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        $brand = Brand::where('id',$id)->delete();
        return redirect('admin/brand')->with('sukses', 'Data Berhasil Dihapus');
        //
    }

    // public function dataTable()
    // {
    //    $model = Brand::query();
    //     return DataTables::of($model)
    //         ->addColumn('action', function ($model) {
    //             return view('layouts._action', [
    //                 'model' => $model,
    //                 'url_show' => route('user.show', $model->id),
    //                 'url_edit' => route('user.edit', $model->id),
    //                 'url_destroy' => route('user.destroy', $model->id)
    //             ]);
    //         })
    //         ->addIndexColumn()
    //         ->rawColumns(['action'])
    //         ->make(true);


    // }

    

    // public function apiBrand(Request $request){
    //     $brand = Brand::all();

    //     return Datatables::of($brand)

    //     ->addColumn('action', function($brand){
    //                     return '<a href="#" class="btn btn-info btn-xs"> <i class=" glyphicon glyphicon-eye-open"></i>Show</a>'.
    //                     '<a oneclick="editForm('. $brand->$id.')" class="btn btn-info btn-xs"> <i class=" glyphicon glyphicon-edit"></i>Edit</a>'.
    //                     '<a oneclick="deleteData('. $brand->$id.')" class="btn btn-danger btn-xs"> <i class=" glyphicon glyphicon-trash"></i>Delete</a>';
    //                     })
                        
    //                     ->make(true);

    //                      return view('admin.brand.index');
    // }
}