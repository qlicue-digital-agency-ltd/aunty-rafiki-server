<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function getAppointments(Request $request)
    {

        $appointments = Appointment::orderBy('id', 'DESC')->get();

        $filteredAppointments = $appointments->reject(function ($appointment, $index) use ($request) {

            return $appointment->user_id != $request->user_id;
        })->values();

        return response()->json(['appointments' =>  $filteredAppointments], 200, [], JSON_NUMERIC_CHECK);
    }


    public function getAppointment($appointmentId)
    {
        $appointment = Appointment::find($appointmentId);

        if (!$appointment) return response()->json(['error' => 'Appointment Not Found'], 404);

        return response()->json(['appointment' => $appointment], 200);
    }

    public function postAppointment(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'profession' => 'required',
            'date' => 'required',
            'time' => 'required',
            'user_id' => 'required',
            'sync_to_calendar' => 'required'
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $appointment = new   Appointment();

        $appointment->name = $request->name;
        $appointment->profession = $request->profession;
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->sync_to_calendar = $request->sync_to_calendar;
        $appointment->additional_notes = $request->additional_notes;
        $appointment->user_id = $request->user_id;

        $appointment->save();

        return response()->json(['appointment' => $appointment], 201, [], JSON_NUMERIC_CHECK);
    }

    public function putAppointment(Request $request, $appointmentId)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'profession' => 'required',
            'date' => 'required',
            'time' => 'required',
            'sync_to_calendar' => 'required',
            'additional_notes' => 'required'
        ]);


        if ($validator->fails()) {

            return response()->json(['errors' => $validator->errors()]);
        }

        $appointment = Appointment::find($appointmentId);

        if (!$appointment) return response()->json(['error' => 'Appointment Not Found'], 404);


        $appointment->update([
            'name' =>  $request->name,
            'profession' =>  $request->profession,
            'date' =>  $request->date,
            'time' =>  $request->time,
            'sync_to_calendar' =>  $request->sync_to_calendar,
            'additional_notes' =>  $request->additional_notes,
        ]);

        return response()->json(['appointment' => $appointment], 201);
    }

    public function deleteAppointment($appointmentId)
    {
        $appointment = Appointment::find($appointmentId);

        if (!$appointment) return response()->json(['error' => 'Appointment Not Found'], 404);
        $appointment->delete();

        return response()->json(['appointment' => 'Appointment deleted successfully'], 201);
    }
}
