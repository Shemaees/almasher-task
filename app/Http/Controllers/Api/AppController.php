<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ApiController;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Tymon\JWTAuth\Exceptions\JWTException;


class AppController extends ApiController
{
    public function categories()
    {
        try {
            return  $this->returnJsonResponse('success',Category::where('active', 1)->paginate(10));
        }
        catch (JWTException $e)
        {
            return $this->returnJsonResponse('there is something wrong. please, try again later', [],FALSE, Response::HTTP_BAD_REQUEST);
        }
    }

    public function coursesInCategory(Category $category)
    {
        try {
            return  $this->returnJsonResponse('success',$category->courses);
        }
        catch (JWTException $e)
        {
            return $this->returnJsonResponse('there is something wrong. please, try again later', [],FALSE, Response::HTTP_BAD_REQUEST);
        }
    }

    public function courses()
    {
        try {
            return  $this->returnJsonResponse('success',Course::where('active', 1)->paginate(10));
        }
        catch (JWTException $e)
        {
            return $this->returnJsonResponse('there is something wrong. please, try again later', [],FALSE, Response::HTTP_BAD_REQUEST);
        }
    }

    public function filterCourses(Request $request)
    {

        try {
            $courses = Course::where('active', 1);
            if (isset($request->category ) && $request->category !== NULL)
                $courses->whereIn('category_id', $request->category);
            if (isset($request->rating ) && $request->rating !== NULL)
                $courses->where('rating', '=', $request->rating);
            if (isset($request->levels ) && $request->levels !== NULL)
                $courses->whereIn('levels', $request->levels);
            if (isset($request->hours ) && $request->hours !== NULL)
            {
                if ($request->hours == '>200')
                    $courses->where('hours', '>', 200);
                else
                    $courses->where('hours', '<', 200);
            }
            if (isset($request->sort ) && $request->sort !== NULL)
            {
                if ($request->sort == 'Newest')
                    $courses->orderBy('created_at','DESC');
                elseif ($request->sort == 'top views')
                    $courses->orderBy('views', 'DESC');
                elseif ($request->sort == 'z-a')
                    $courses->orderBy('name','DESC');
                elseif ($request->sort == 'a-z')
                    $courses->orderBy('name', 'ASC');
            }

            return $this->returnJsonResponse('success', $courses->paginate(10));
        }
        catch (JWTException $e)
        {
            return $this->returnJsonResponse('there is something wrong. please, try again later', [],FALSE, Response::HTTP_BAD_REQUEST);
        }
    }

    public function course(Course $course)
    {
        try {
            return $this->returnJsonResponse('success', $course);
        }
        catch (JWTException $e)
        {
            return $this->returnJsonResponse('there is something wrong. please, try again later', [],FALSE, Response::HTTP_BAD_REQUEST);
        }
    }
}
