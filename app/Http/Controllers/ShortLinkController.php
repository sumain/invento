<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ShortLink;

class ShortLinkController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	public function __construct()
    {
        $this->middleware('auth');
    } 
     
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $shortLinks = ShortLink::latest()->get();
       // echo '<pre>';
       // print_r($shortLinks);
        return view('linksList', compact('shortLinks'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ShortLink $ShortLink)
    {
        $request->validate([
           'link' => 'required|url'
        ]);

        $input['link'] = $request->link;
        $input['code'] = rand(1,99);

        $ShortLink->link = $request->link;
        $ShortLink->code = rand(1,99);
		$ShortLink->save();
      

        return redirect('generated-link')
             ->with('success', 'Shorten Link Generated Successfully!');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shortenLink($code)
    {
        $find = ShortLink::where('code', $code)->first();

        return redirect($find->link);
    }
    /**
     * Shorter link generate form.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        return view('add');

    }

}
