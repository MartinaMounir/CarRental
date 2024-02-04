<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $Testimonials = Testimonial::latest()->orderBy('created_at', 'desc')->get()->where('published', 1);
         $cars = Car::latest()->orderBy('created_at', 'desc')->get()->where('Active', 1);
        return view('home', compact('cars', 'Testimonials'));
    }
//    public function search(Request $request)
//    {
//        $search = $request->input('search');
//        $cars = Car::where('title', 'like', "%$search%")->get();
//        return view('home', ['cars' => $cars]);
//    }
    public function single(Request $request, int $id)
    {
        $carcategory = Category::with(['Car'])->get();
        $cars = Car::findOrFail($id);

        return view('single', compact('cars', 'carcategory'));
    }


    public function carlisting()
    {
        $cars = Car::simplePaginate(6);
        $Testimonials = Testimonial::latest()->orderBy('created_at', 'desc')->get()->where('published', 1);
        return view('listings', compact('cars','Testimonials'));
    }

    public function Testimonial()
    {
        $Testimonials = Testimonial::latest()->orderBy('created_at', 'desc')->get()->where('published', 1);
        return view('testimonial', compact('Testimonials'));
    }
}
