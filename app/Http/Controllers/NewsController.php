<?php

namespace App\Http\Controllers;

use App\Mail\NewContactMessageFromE;
use App\Mail\NewContactMessageFromENews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsController extends Controller
{
    //
    public function index()
    {
        $url = 'http://newsapi.org/v2/top-headlines?country=ng&apiKey=8b9d3bd2ad284883aee797f9048cb4d1';
        $getContents = file_get_contents($url, true);
        $decodeData = json_decode($getContents, true);
        // dd($decodeData);
        return view('welcome')->with(['data' => $decodeData, 'title' => 'Top Headline' . ' ' . 'Articles']);
    }
    public function category($category)
    {
        $url = 'http://newsapi.org/v2/top-headlines?country=ng&category=' . $category . '&apiKey=8b9d3bd2ad284883aee797f9048cb4d1';
        $getContents = file_get_contents($url, true);
        $decodeData = json_decode($getContents, true);
        // dd($decodeData);
        return view('welcome')->with(['data' => $decodeData, 'title' => $category . ' ' . 'Articles']);
    }
    public function contact(Request $request)
    {
        $data =    $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);
        return new NewContactMessageFromENews($data);
        Mail::to('njokusunnyojo@gmail.com')->send(new NewContactMessageFromENews($data));
        return redirect()->back()->with('success', 'Message Sent !!!');
    }
}
