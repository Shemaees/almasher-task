<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('front.home', compact('categories'));
    }

    public function filter(Request $request)
    {
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
        return response()->json($courses->get());
    }
}
