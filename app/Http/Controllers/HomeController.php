<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\View\View;
use App\Models\Registration;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function IndexPage():View{
        $featurEvents = Event::where('type','Feature')->inRandomOrder()->latest()->take(4)->get();
        $recentEvents = Event::where('type','Recent')->inRandomOrder()->latest()->paginate(6);
        return view('frontend.pages.index-page',compact('featurEvents','recentEvents'));
    }

    public function PostPage($id){

        $post=Event::find($id);
        $raletedEvents = Event::where('type','Recent')->where('categorie_id',$post->categorie_id)->inRandomOrder()->take(3)->get();
        return view('frontend.pages.post-page',compact('post','raletedEvents'));
    }
    
    public function EventRegistration(Request $request)
{
    $request->validate([
        'name' => 'required',
        'mobile' => 'required',
        'email' => 'required|email',
        'event_id' => 'required|exists:events,id',
        'remark' => 'nullable'
    ]);

    try {
        $event = Event::findOrFail($request->event_id);
        
        $registration = Registration::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'remark' => $request->remark,
            'event_id' => $request->event_id,
            'user_id' => auth()->id(),
            'date' => now()->format('Y-m-d') // Add this line to set the current date
        ]);

        return redirect()->back()->with('success', 'Registration successful!');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Registration failed. Please try again.');
    }
}
}
