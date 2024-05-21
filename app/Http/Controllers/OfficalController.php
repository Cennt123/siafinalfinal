<?php

namespace App\Http\Controllers;

use App\Models\Offical;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class OfficalController extends Controller
{
    public function index() {
        $officials = Offical::orderBy('id')->get();
        return view('officials', compact('officials'));

    }


    // function generateCSV() {
    //     $officials = Offical::orderBy('id')->get();

    //     $filename = '../storage/officials.csv';

    //     $file = fopen($filename, 'w+');

    //     foreach($officials as $off) {
    //         fputcsv($file, [
    //             $off->id,
    //             $off->position,
    //             $off->name,
    //             $off->email,
    //             $off->phone_number,
    //         ]);
    //     }
    // }


    public function create(){
        $officials = Offical::all();
        return view('create', compact('officials'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'position' => 'required',
            'name' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);



        Offical::create([
            'image' => $request->image,
            'position' => $request->position,
            'name' => $request->name,
            'description' => $request->description,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('officials')->with('success', 'Official added successfully');
    }

    public function edit($id)
    {
        $official = Offical::findOrFail($id);
        return view('edit', compact('official'));
    }

    public function update(Offical $official, Request $request)
    {
        $request->validate([
            'image' => 'required',
            'position' => 'required',
            'name' => 'required',
            'description' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);

        $official->update([
            'image' => $request->image,
            'position' => $request->position,
            'name' => $request->name,
            'description' => $request->description,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->route('officials')->with('success', 'Official updated successfully');
    }


    public function generateCSV() {
        $officials = Offical::orderBy('id')->get();

        $filename = 'officials.csv';

        $file = fopen('php://temp', 'w+');


        // fputcsv($file, ['ID', 'Position', 'Name', 'Email', 'Phone Number']);

        foreach($officials as $off) {
            fputcsv($file, [
                $off->id,
                $off->position,
                $off->name,
                $off->email,
                $off->phone_number,
            ]);
        }

        rewind($file);

        $response = response(stream_get_contents($file), 200, [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="' . $filename . '"',
        ]);

        fclose($file);

        return $response;
    }


    public function pdf(){
        $officials = Offical::orderBy('position')->get();
        $pdf = Pdf::loadView('official-list', compact('officials'));

        return $pdf->download('official-list.pdf');
    }


    public function importCsv(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',
        ]);

        $file = $request->file('csv_file');

        $csvData = array_map('str_getcsv', file($file));

        foreach ($csvData as $row) {
            $position = $row[0];
            $name = $row[1];
            $description = $row[2];
            $email = $row[3];
            $phone_number = $row[4];

            Offical::create([
                'position' => $position,
                'name' => $name,
                'description' => $description,
                'email' => $email,
                'phone_number' => $phone_number,
            ]);
        }

        return redirect()->route('officials')->with('success', 'Officals imported successfully.');
    }


    // public function show($id)
    // {
    //     $offical = Offical::findOrFail($id);
    //     return view('offical-show', compact('offical'));
    // }

    public function destroy($id)
    {
        $official = Offical::find($id);
        $official->delete();

        return redirect()->route('officials')->with('success', 'Official deleted successfully');
    }



}
