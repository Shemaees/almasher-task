<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\StoreCourseRequest;
use App\Http\Requests\Update\UpdateCourseRequest;
use App\Models\Category;
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
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.courses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCourseRequest $request)
    {
        try {
            if (!$request->has('active')) {
                $request->request->add(['active'=>0]);
            }

            $course = new Course();
            $course->name = $request->name;
            $course->category_id = $request->category;
            $course->description = $request->description;
            $course->hours = $request->hours;
            $course->levels = $request->levels;
            $course->active = $request->active;

            if ($course->save())
            {
                notify()->success('Course created successfully');
                return redirect()->route('courses.index');
            }
            else
            {
                notify()->warning('there is something wrong');
                return redirect()->back();
            }
        }
        catch (\Exception $e)
        {
            notify()->error('there is something wrong. please, try again later');
            return redirect()->route('courses.index');
        }
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
    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('admin.courses.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCourseRequest $request, Course $course)
    {
        try {
            if (!$request->has('active')) {
                $request->request->add(['active'=>0]);
            }

            $course->name = $request->name;
            $course->category_id = $request->category;
            $course->description = $request->description;
            $course->hours = $request->hours;
            $course->levels = $request->levels;
            $course->active = $request->active;

            if ($course->update())
            {
                notify()->success('Course created successfully');
                return redirect()->route('courses.index');
            }
            else
            {
                notify()->warning('there is something wrong');
                return redirect()->back();
            }
        }
        catch (\Exception $e)
        {
            notify()->error('there is something wrong. please, try again later');
            return redirect()->route('courses.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        try {
            if ($course->delete())
            {
                notify()->success('course deleted successfully');
                return redirect()->route('courses.index');
            }
            else
            {
                notify()->warning('there is something wrong');
                return redirect()->back();
            }
        }
        catch (\Exception $e)
        {
            notify()->error('there is something wrong. please, try again later');
            return redirect()->route('courses.index');
        }
    }

    public function trashed()
    {
        $courses = Course::onlyTrashed()->get();
        return view('admin.courses.trashed', compact('courses'));
    }
}
