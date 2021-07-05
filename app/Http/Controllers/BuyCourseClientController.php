<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Client;
use App\ClientCourse;

class BuyCourseClientController extends Controller
{
    public function index($id)
    {
        $courses = Course::all();

        $client = Client::find($id);

        return view('courses.course', ['courses' => $courses, 'client' => $client]);
    }

    public function store(Request $request)
    {
        $client_id = $request->input('client_id');

        $course_id = $request->input('course_id');

        $client = Client::find($client_id);

        $hasCourse = $client->courses()->where('course_id', $course_id)->exists();

        if(!$hasCourse){

            $clientcourse_insert = ClientCourse::create([
                'client_id' => $request->input('client_id'),
                'course_id' => $request->input('course_id')
            ]);

            return redirect()->action('App\Http\Controllers\ClientsController@show', $client_id);
        }else {

            return redirect()->back()->with('error', 'This course has been purchased'); 

        }
    }
}
