<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store\StoreCategoryRequest;
use App\Http\Requests\Update\UpdateCategoryRequest;
use App\Models\Admin;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        try {
            if (!$request->has('active')) {
                $request->request->add(['active'=>0]);
            }

            $category = new Category();
            $category->name = $request->name;
            $category->active = $request->active;

            if ($category->save())
            {
                notify()->success('category created successfully');
                return redirect()->route('categories.index');
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
            return redirect()->route('categories.index');
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
    public function edit(Category $category)
    {
        return  view('admin.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        try {
            if (!$request->has('active')) {
                $request->request->add(['active'=>0]);
            }

            $category->name = $request->name;
            $category->active = $request->active;
            if ($category->update())
            {
                notify()->success('category updated successfully');
                return redirect()->route('categories.index');
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
            return redirect()->route('categories.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            if ($category->delete())
            {
                notify()->success('category deleted successfully');
                return redirect()->route('categories.index');
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
            return redirect()->route('categories.index');
        }
    }
}
