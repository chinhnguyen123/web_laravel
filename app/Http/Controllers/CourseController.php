<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $data = Course::query()->get();
        return view('course.index', [
            'data' => $data,
        ]);
    }


    public function create()
    {
        return view('course.create');

    }


    public function store(Request $request)
    {

        //dd($request->except('_token'));
        //can phai khai bao nhung thu co the dien duoc trong model, thi moi ko bi loi

        $object = new Course();
        $object->fill($request->except('_token'));
//        $object->name = $request->get('name');//cai nay thi minh se lay tung attribute 1
        $object->save();
//      echo 1;
        return redirect()->route('courses.index');

        //hoac viet theo kieu query buider

        //Course::create($request->except('_token'));
        //return redirect()->route('courses.index');

    }


    public function show(Course $course)
    {
        //
    }


    public function edit(Course $course)
    {
        return view('course.edit', [
            'each'=>$course,
            //////
        ]);
    }

    public function update(Request $request, Course $course)
    {
        // Course::query()->where('id', $course->id)->update(
        //     $request->except([
        //         '_token',
        //         '_method',
        //     ])
        // );
        // $course->update(
        //     $request->except([
        //         '_token',
        //         '_method',
        //     ])
        // );

        $course->fill($request->except('_token'));
        $course->save();

        return redirect()->route('courses.index');
    }


    public function destroy( Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index');
        //Course::destroy($course);

        // Course::where('id', $course->id)->delete();
    }
}
