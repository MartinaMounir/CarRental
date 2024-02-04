<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use App\Models\Message;
use App\Traits\Common;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

  class CarController extends Controller
{
    use Common;

      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        $messagess = Message::get()->where('read', 0);
        return view('Admin/cars', compact('cars','messagess'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id', 'categoryName')->get();
        $messagess = Message::get()->where('read', 0);
        return view('admin.addCar', compact('categories','messagess'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $messages = $this->messages();
        $data = $request->validate([
            'title' => 'required|string',
            'Content' => 'required|max:500|string',
            'Luggage' => 'integer',
            'Doors' => 'integer',
            'Passengers' => 'integer',
            'Price' => 'integer',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048',
            'category_id' => ['required', 'int', 'exists:categories,id'],
        ], $messages);
        $category =$request->input('category_id');
        $categorys = Category::find($category);
        $category2 = Category::find('count');
        $data['Active'] = isset($data['Active']) ? 0 : 1;
        $fileName = $this->uploadFile($request->image,'assets/image');
        $data['image'] = $fileName;
        Car::create($data);

        return redirect('Admin/cars');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = Category::select('id', 'categoryName')->get();
        $messagess = Message::get()->where('read', 0);
        $cars = Car::findOrFail($id);
        return view('admin.cardetails', compact('cars','categories','messagess'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $categories = Category::select('id', 'categoryName')->get();
        $car = Car::findOrFail($id);
        $messagess = Message::get()->where('read', 0);
        return view('admin.editcar', compact('car','categories','messagess'));
    }

    /**
     * Update the specified resource in storage.
     */
      public function update(Request $request, int $id): RedirectResponse
      {  $messages = $this->messages();
          $car = Car::find($id);
          $data = $request->validate([
              'title' => ['required', 'string', 'max:100'],
              'Content' => ['required', 'string', 'max:500'],
              'Luggage' => ['required', 'int'],
              'Doors' => ['required', 'int'],
              'Passengers' => ['required', 'int'],
              'Price' => ['required', 'int'],
              'image' =>['sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg'],
              'category_id' =>['required', 'int', 'exists:categories,id'],
          ],$messages);
          $data['Active'] = isset($request->Active);
          if(isset($request->image)){
              $data['image'] = $this->uploadFile($request->image, 'assets\image');
          }
          Car::where('id', $id)->update($data);
          return redirect('Admin/cars');
      }

    /**
     * Remove the specified resource from storage.
     */
      public function destroy($id) : RedirectResponse
      {
          Car::where('id', $id)->delete();
          return redirect('Admin/cars');
      }

    private function messages()
    {
        return [
            'title.required'=> __('messages.titleRequired'),
            'Content.required'=> __('messages.ContentRequired'),
            'Luggage.required'=> __('messages.LuggageRequired'),
            'Doors.required'=> __('messages.DoorsRequired'),
            'Passengers.required'=> __('messages.PassengersRequired'),
            'Price.required'=> __('messages.PriceRequired'),
            'image.required'=> __('messages.imageRequired'),

        ];
    }
}
