<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $courses = Course::all();

        // Return the view with the list of courses
        return inertia('Course/CourseIndex', ['courses' => $courses]);
        // return Inertia::render('Course/CouseIndex');
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return Inertia::render('Course/CourseCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_name' => 'required|string|max:255',
            'course_description' => 'required|string',
            'course_code' => 'required|string|max:10',
        ]);

        // Create a new course
        Course::create($validated);
       

        // Redirect back to the course list with a success message
        return redirect()->route('course')->with('success', 'Course created successfully.');
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $courses = Course::all();
        return Inertia::render('Course/CourseShow');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        
        $courses = Course::all();
        return Inertia::render('Course/CourseEdit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
