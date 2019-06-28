<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function read()
    {
        $news = News::all();
        return view('admin.news.index',['news' => $news]);
    }
    public function store(Request $request)
    {
    	$this->validate($request,[
            'subject' => 'required',
            'description' => 'required',
            'created_by' => 'required'
    	]);

        news::create([
            'subject' => $request->subject,
            'description' => $request->description,
            'created_by' => $request->created_by
    	]);

    	return redirect('/admin/news/index');
    }
    // public function edit($id)
    // {
    // $pegawai = News::find($id);
    //     return view('admin.news.edit', ['news' => $news]);
    // }
    // public function update($id, Request $request)
    // {
    // $this->validate($request,[
	//    'subject' => 'required',
    //    'description' => 'required',
    //    'created_by' => 'required'
    // ]);
 
    // $pegawai = Pegawai::find($id);
    // $pegawai->nama = $request->nama;
    // $pegawai->alamat = $request->alamat;
    // $pegawai->save();
    // return redirect('/admin/news/index');
    // }
    public function delete($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('/admin/news/index');
    }
    public function readteacher()
    {
        $news = News::all();
        return view('/teacher/dashboard',['news' => $news]);
    }
    public function readstudent()
    {
        $news = News::all();
        return view('/student/dashboard',['news' => $news]);
    }
}
