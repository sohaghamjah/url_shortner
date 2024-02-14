<?php

namespace App\Http\Controllers;

use App\Models\GenerateUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class GenerateUrlController extends Controller
{
    /**
     * URL index page show
     *
     * @method GET
     * @return Illuminate\Http\Request Response
    */

    public function index()
    {
        $breadcrumb = ['Dashboard' => route('user.dashboard'), 'All Url' => ''];
        $title = 'Manage Url';
        $urls = GenerateUrl::latest()->where('user_id', Auth::id())->get();
        return view('user.sections.manage-url.index', compact('breadcrumb', 'urls', 'title'));
    }

    /**
     * Form page show
     *
     * @method GET
     * @return Illuminate\Http\Request Response
     */
    public function create()
    {
        $breadcrumb = ['Dashboard' => route('user.dashboard'), 'Manage URL' => route('user.urls.index'), 'Create' => ''];
        $title = 'Create Url';
        return view('user.sections.manage-url.form', compact('breadcrumb','title'));
    }

     /**
     * Url Store
     *
     * @method POST
     * @param @return Illuminate\Http\Request $request
     * @return Illuminate\Http\Request Response
     */

     public function store(Request $request)
     {
 
         $validator = Validator::make($request->all(), [
             'title'        => 'required|max:120|string',
             'original_url' => 'required|max:450|string',
         ]);
 
         if($validator->fails()){
             return back()->withErrors($validator)->withInput();
         }
 
        $validated = $validator->validated();
        $validated['user_id'] = Auth::user()->id;
        $validated['short_url'] = generateUniqueString('generate_urls','short_url',5);

        try {
            GenerateUrl::updateOrCreate(['short_url' => $request->target], $validated);
            return redirect()->route('user.urls.index')->with(['success' => ['Url Updated Successful']]);
        } catch (\Exception $e) {
             return back()->with(['error' => [SOMETHING_WRONG]]);
        }
 
    }


    /**
     * Url Edit
     *
     * @method GET
     * @return Illuminate\Http\Request Response
     */
    public function edit($short_url)
    {
        $title = "Edit URL";
        $breadcrumb = ['Dashboard' => route('user.dashboard'), 'Manage URL' => route('user.urls.index'), 'Edit' => ''];
        $url = GenerateUrl::where('short_url',$short_url)->first();
        return view('user.sections.manage-url.form', compact('breadcrumb', 'url', 'title'));
    }


     /**
     * Role Delete
     *
     * @method DELETE
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Request Response
     */
    public function delete(Request $request){

        $validator = Validator::make($request->all(),[
            'target' => 'required',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator)->withInput();
        }

        $validated = $validator->validated();
       
        try {
            GenerateUrl::find($validated['target'])->delete();
        } catch (\Exception $th) {
            return back()->with(['error' => ['Something Went Wrong, Please Try Again']]);
        }

        return redirect()->route('user.urls.index')->with(['success' => ['Url Deleted Successful']]);
    }


    public function shareShortUrl($short_url){
        $url = GenerateUrl::where('short_url',$short_url)->first();

        $url->increment('click_count');

        return redirect($url->original_url);
    }
 
}
