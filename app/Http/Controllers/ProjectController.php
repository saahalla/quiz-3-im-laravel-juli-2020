<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function create(){
        return view('projects.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            "nama" => 'required|unique:projects',
            "deskripsi" => 'required',
            "tanggal_mulai" => 'required',
            "tanggal_deadline" => 'required',
            "status" => 'required'
        ]);

        $query = DB::table('projects')->insert([
            "nama" => $request["nama"],
            "deskripsi" => $request["deskripsi"],
            "tanggal_mulai" => $request["tanggal_mulai"],
            "tanggal_deadline" => $request["tanggal_deadline"],
            "status" => $request["status"]
        ]);

        return redirect('/proyek/')->with('success', 'Proyek berhasil di simpan');
    }
    public function index(){
        $projects = DB::table('projects')->get(); // select * from question
        // dd($projects);
        return view('projects.index', compact('projects'));
    }
    public function show($id){
        $project = DB::table('projects')->where('id', $id)->first();
        // dd($project);
        return view('projects.show', compact('project'));
    }
    public function edit($id){
        $project = DB::table('projects')->where('id', $id)->first();

        return view('projects.edit', compact('project'));
    }
    public function update($id, Request $request){
        $query = DB::table('projects')
                    ->where('id', $id)
                    ->update([
                        'nama' => $request['nama'],
                        'deskripsi' => $request['deskripsi'],
                        'tanggal_mulai' => $request['tanggal_mulai'],
                        'tanggal_deadline' => $request['tanggal_deadline'],
                        'status' => $request['status']
                    ]);


        return redirect('/proyek')->with('success', 'Berhasil update post!');
    }
    public function destroy($id){
        $query = DB::table('projects')
                    ->where('id', $id)
                    ->delete();
        return redirect('/proyek')->with('success', "Proyek berhasil di hapus!");
    } 
}
