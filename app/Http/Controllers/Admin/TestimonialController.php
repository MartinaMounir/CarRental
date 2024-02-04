<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Traits\Common;
use Illuminate\Http\RedirectResponse;
class TestimonialController extends Controller
{
    use Common;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::get();
        $messagess = Message::get()->where('read', 0);
        return view('Admin/testimonials', compact('testimonials','messagess'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {       $messagess = Message::get()->where('read', 0);
        return view('admin.addTestimonials',compact('messagess'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $messages = $this->messages();
        $data = $request->validate([
            'Name' =>'required|max:100|string',
            'Position' => 'required|max:100|string',
            'Content' => 'required|max:200|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048'
        ], $messages);
        $data['published'] = isset($data['published']) ? 0 : 1;
        $fileName = $this->uploadFile($request->image,'assets/image');
        $data['image'] = $fileName;
        Testimonial::create($data);
        return redirect('Admin/testimonials');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $testimonial = Testimonial::findOrFail($id);
        $messagess = Message::get()->where('read', 0);
        return view('admin.testimonialdetails', compact('testimonial','messagess'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $testimonial = Testimonial::findOrFail($id);
        $messagess = Message::get()->where('read', 0);
        return view('admin.editTestimonials', compact('testimonial','messagess'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): RedirectResponse
    {  $messages = $this->messages();
        $testimonial = Testimonial::find($id);
        $data = $request->validate([
            'Name' =>'required|max:100|string',
            'Position' => 'required|max:100|string',
            'Content' => 'required|max:200|string',
            'image' =>'sometimes', 'nullable', 'image', 'mimes:png,jpg,jpeg',
        ], $messages);
        $data['published'] = isset($data['published']) ? 0 : 1;
        if(isset($request->image)){
            $data['image'] = $this->uploadFile($request->image, 'assets\image');
        }
        Testimonial::where('id', $id)->update($data);
        return redirect('Admin/testimonials');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) : RedirectResponse
    {
        Testimonial::where('id', $id)->delete();
        return redirect('Admin/testimonials');
    }

    private function messages()
    {
        return [
            'Name.required'=> __('messages.NameRequired'),
            'Position.required'=> __('messages.PositionRequired'),
            'Content.required'=> __('messages.ContentRequired'),
            'image.required'=> __('messages.imageRequired'),

        ];
    }
}
