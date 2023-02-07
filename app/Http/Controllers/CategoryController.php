<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $courses;
    public function index()
    {
        return view('admin.category.index');
    }
    public function create(Request $request)
    {
        Category::newCategory($request);
        return redirect('/add/category')->with('message', 'successfully created');
    }
    public function manage()
    {
        return view('admin.category.manage', ['categories' => Category::all()]);
    }

    public function edit($id)
    {
        return view('admin.category.edit', ['category' => Category::find($id)]);
    }

    public function update(Request $request,$id)
    {
        Category::updateCategory($request, $id);
        return redirect('/manage/category')->with('message', 'Updated Successfully');
    }


    public function delete($id)
    {
        $this->courses = Course::where('category_id', $id)->get();
        if ($this->courses)
        {
            foreach ($this->courses as $course)
            {
                if ($course->status == 1)
                {
                    return redirect()->back()->with('message', 'Sorry..you can not delete this category');
                }
            }
        }
        Category::deleteCategory($id);
        Course::deleteCategoryCourse($id);
        return redirect('/manage/category')->with('message', 'Deleted Successfully');
    }
}
