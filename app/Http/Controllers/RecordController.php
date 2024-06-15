<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Record::create($request->all())){
            return 201;
        }else{
            return 400;
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Record $record)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Record $record)
    {
        //
    }


//    public function export()
//    {
//        $record = Record::all();
//        $csvFileName = 'records.csv';
//        $headers = [
//            'Content-Type' => 'text/csv',
//            'Content-Disposition' => 'attachment; filename="' . $csvFileName . '"',
//        ];
//
//        $handle = fopen('php://output', 'w');
//        fputcsv($handle, ['device_id', 'loc_name', 'loc_lat', 'loc_lon', 'fire_val', 'smoke_val', 'temp_val', 'hum_val', 'created_at']); // Add more headers as needed
//
//        foreach ($record as $a_record) {
//            fputcsv($handle, [$a_record->device_id, $a_record->loc_name, $a_record->loc_lat, $a_record->loc_lon, $a_record->fire_val, $a_record->smoke_val, $a_record->temp_val, $a_record->hum_val, $a_record->created_at]); // Add more fields as needed
//        }
//
//        fclose($handle);
//
//        return 201;
//    }


    public function export()
    {
        $records = Record::all();
        $csvFileName = 'records.csv';

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $csvFileName . '"',
        ];

        $callback = function() use ($records) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['device_id', 'humidity', 'temperature', 'heat_index', 'due_point', 'created_at']); // Add more headers as needed

            foreach ($records as $record) {
                fputcsv($handle, [$record->device_id, $record->humidity, $record->temperature, $record->heat_index, $record->due_point, $record->created_at]); // Add more fields as needed
            }

            fclose($handle);
        };

        return response()->stream($callback, 200, $headers);
    }





}
