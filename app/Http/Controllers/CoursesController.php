<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();

        return view('admin.index', ['courses' => $courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course' => 'required|string|unique:courses',
            'lessons' => 'required|integer',
            'professor' => 'required|string'
        ]);

        $course = Course::create([
            'course' => $request->input('course'),
            'lessons' => $request->input('lessons'),
            'professor' => $request->input('professor')
        ]);

        return redirect('/courses');
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

        $course = Course::find($id);

        return view('admin.edit')->with('course', $course);
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

        $request->validate([
            'course' => 'required|string',
            'lessons' => 'required|integer',
            'professor' => 'required|string'
        ]);

        $course = Course::where('id', $id)
            ->update([
                'course' => $request->input('course'),
                'lessons' => $request->input('lessons'),
                'professor' => $request->input('professor')
        ]);

        return redirect('/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $courses = Course::find($id);

        $courses->delete();

        return redirect('/courses');
    }
}
