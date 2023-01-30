<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichas = Ficha::join('programs','programs.id','=','fichas.program_id')
            ->get(['programs.nombre','fichas.number_ficha']);
        // $students = User::where('role','aprendiz')->get();
        return view("auth.listFicha")->with("fichas", $fichas);
    }

    public function docShow()
    {
        // try {
        //     $fecha = now('America/Bogota');
        //     $name = "ALBERT";
        //     $template = new \PhpOffice\PhpWord\TemplateProcessor('storage/template_documents/template_call_of_attention.docx');
        //     $template->setValue('fecha',$fecha->format('jS F'));
        //     $template->setValue('nombreAprendiz','Albert Stive Ospina Avendaño');
        //     $template->setValue('programaDeFormacion','ADSI');
        //     $template->setValue('ficha','2465880');
        //     $template->setValue('motivo','Bajo rendimiento');
        //     $template->setValue('nombreInstructor','Tatiana Lizeh Cabrera Vargas');

        //     $tempFile = tempnam(sys_get_temp_dir(), 'PHPWord');
        //     $template->saveAs($tempFile);

        //     $header = [
        //         "Content-Type: application/octet-stream",
        //     ];

        //     return response()->download($tempFile, "Llamado_atencion_".$name.".docx", $header)->deleteFileAfterSend(true) ;
        //   } catch (\PhpOffice\PhpWord\Exception\Exception $e) {
        //     return $e;
        //   }
    }

    public function showCallOfAttentionForm(Request $request, $id)
    {
        $student = User::where('id',$id)->get();
        return view("auth.generateDocument")->with("student",$student);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $fecha = now('America/Bogota');
            $nameAprendiz = strtoupper(implode($request->only('fullname_aprendiz')));
            $numberDocumentAprendiz = strtoupper(implode($request->only('document_number')));
            $programaFormacion = strtoupper(implode($request->only('name_program'))); 
            $ficha = implode($request->only('number_ficha')); 
            $nameInstructor = strtoupper(implode($request->only('fullname_instructor')));

            $template = new \PhpOffice\PhpWord\TemplateProcessor('storage/template_documents/template_call_of_attention.docx');
            $template->setValue('fecha',$fecha->format('jS F'));
            $template->setValue('nombreAprendiz', $nameAprendiz);
            $template->setValue('programaDeFormacion',$programaFormacion);
            $template->setValue('ficha',$ficha);
            $template->setValue('motivo','BAJO RENDIMIENTO');
            $template->setValue('nombreInstructor',$nameInstructor);
            $template->setValue('numeroDocumento',$numberDocumentAprendiz);

            $tempFile = tempnam(sys_get_temp_dir(), 'PHPWord');
            $template->saveAs($tempFile);

            $header = [
                "Content-Type: application/octet-stream",
            ];
            Alert::success('Novedad Creada Exitosamente','El equipo técnico se hara cargo lo más pronto posible.');
            return response()->download($tempFile, "Llamado_atencion_".$nameAprendiz.".docx", $header)->deleteFileAfterSend(true) ;
          } catch (\PhpOffice\PhpWord\Exception\Exception $e) {

            return $e;
          }
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
