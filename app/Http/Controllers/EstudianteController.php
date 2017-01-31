<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = null){
           if($id == null){
               return Estudiante::orderBy('id','asc')->get();
           } else{
               return $this->show($id);
           }    
    

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
        $student = new Estudiante;
        $student->nombre  =$request->input('studentName');
        $student->fecha_nacimiento= $request->input('studentDate');
        $student->direccion = $request->input('studentAddress');
        $student->grado = $request->input('grade');
        $student->user_id = $request->input('studentUserId');
        $student->save();
        return 'Estudiante creado correctamente con el id'.' '.$student->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Estudiante::find($id);
        
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
        $student = Estudiante::find($id);
        $student->nombre  =$request->input('studentName');
        $student->fecha_nacimiento= $request->input('studentDate');
        $student->direccion = $request->input('studentAddress');
        $student->grado = $request->input('grade');
        $student->save();
        return 'Estudiante actualizado correctamente con el id'.' '.$student->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Estudiante::find($id)->delete();
        return 'Estudiante eliminado correctamente';
    }
}
