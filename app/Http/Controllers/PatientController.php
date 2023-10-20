<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function patient(){
        return view('patient');
    }

    public function information(){
        $patients = Patient::all();
        return view('information',['patients' => $patients]);
    }

    public function addPatient(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'DOB' => 'required|date',
            'contact_number' => 'required|string|max:20',
            'emergency_contact_number' => 'required|string|max:20',
            'allergies' => 'nullable|string|max:255',
            'medical_conditions' => 'nullable|string|max:255',
            'medications' => 'nullable|string|max:255',
            'height' => 'nullable|string|max:20',
            'weight' => 'nullable|string|max:20',
            'blood_pressure' => 'nullable|string|max:20',
            'physician_notes' => 'nullable|string|max:255',
            // Add validation rules for other fields here
        ]);

        $patient = new Patient($data);
        $patient->save();

        return back()->with('success', 'Patient information added successfully.');
    }

    public function destroy(Patient $patient)
{
    $patient->delete();

    return back()->with('success', 'Patient record deleted successfully.');
}

    public function edit(Patient $patient){
        return view('update',compact('patient'));
    }

    public function update(Request $request, Patient $patient)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'DOB' => 'required|date',
        'contact_number' => 'required|string|max:20',
        'emergency_contact_number' => 'required|string|max:20',
        'allergies' => 'nullable|string|max:255',
        'medical_conditions' => 'nullable|string|max:255',
        'medications' => 'nullable|string|max:255',
        'height' => 'nullable|string|max:20',
        'weight' => 'nullable|string|max:20',
        'blood_pressure' => 'nullable|string|max:20',
        'physician_notes' => 'nullable|string|max:255',
    ]);

    $patient->update($data);

    return back()->with('success', 'Patient information updated successfully.');
}

}
