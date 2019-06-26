<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function read()
    {
        $news = News::all();
        return view('/admin/add-announcement',['news' => $news]);
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

    	return redirect('/admin/addannouncement');
    }
    public function edit ($id)
    {
        $news = News::find($id);
        return view('/admin/add-announcement',['news' => $news]);
    }
    public function delete($id)
    {
        $news = News::find($id);
        $news->delete();
        return redirect('/admin/addannouncement');
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
