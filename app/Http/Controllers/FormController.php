<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;


class FormController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->only(['sname','name', 'lname', 'gender','bdate','phone','snils','document','dserial','dnumber']);

        $patient = Patient::create([
            "sname"=>$data['sname'],
            "name"=>$data["name"],
            "lname"=>$data["lname"],
            "gender"=>$data["gender"],
            "bdate"=>$data["bdate"],
            "phone"=>$data["phone"],
            "snils"=>$data["snils"],
            "document"=>$data["document"],
            "dserial"=>$data["dserial"],
            "dnumber"=>$data["dnumber"],
        ]);

        if($patient){
            return redirect()->back();
        }
    }

    public function showPatients()
    {
        $patient = Patient::all()->where('archive', 0);

        if(!$patient){

            return response()->json([
                "status" => false,
                "message" => "Пациенты не найдены"
            ]);
        }

        return response()->json([
            "status" => true,
            "patients" => $patient
        ]);

    }

    public function updateArchive($id)
    {
        $patient = Patient::find($id);
        $archive = $patient->archive->where ('archive', 0);
        if($archive == 1){
            Patient::find($id)->increment('archive');
        }
        
    }


}
