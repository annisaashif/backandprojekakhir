<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tempat;
use Illuminate\Support\Facades\Validator;  //baris yg ditambahkan

class TempatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $user['listUser'] = Tempat::all();
        return view('tempat')->with($user);
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

     //   $validator = Validator::make($request->all(), [
        //    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan Anda
       // ]);

      //  if ($validator->fails()) {
     //       return redirect()->back()->withErrors($validator)->withInput();
      //  }

      //  $fileName = '';
      //  if ($request->hasFile('image')) {
         //   $file = str_replace(' ', '', $request->file('image')->getClientOriginalName());
         //   $fileName = date('mYdHs') . rand(1, 999) . '_' . $file;
          //  $request->file('image')->storeAs('public/tempat', $fileName);
     //   }
        

      //  $tempat = new Tempat();
      //  $tempat->field1 = $request->input('field1'); // Ganti field1 dengan nama field yang benar
      //  $tempat->field2 = $request->input('field2'); // Ganti field2 dengan nama field yang benar
      //  $tempat->image = $fileName;
        // Setel nilai atribut lainnya sesuai dengan kebutuhan Anda

       // $tempat->save();

      //  return redirect('tempat');
    
        $fileName = '';
        if($request->image->getClientOriginalName()){
            $file = str_replace(' ', '', $request->image->getClientOriginalName());
            $fileName = date('mYdHs').rand(1,999).'_'.$file;
            $request->image->storeAs('public/tempat', $fileName);
       }
      //  dd($request->all());die();
        $user = Tempat::create(array_merge($request->all(), [
           'image' => $fileName
        ]));
          return redirect('tempat');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
