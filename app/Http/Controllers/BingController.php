<?php
  
namespace App\Http\Controllers;
   
use App\Models\Bing;
use Request;
  
class BingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bings = Bing::latest()->paginate(7);
    
        return view('bing.index',compact('bings'))
            ->with('i', (request()->input('page', 1) - 1) * 7);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bing.create');
    }
    
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $bing = new Bing;
        $bing->employerid = Request::input('employerid');
        $bing->firstname  = Request::input('firstname');
        $bing->lastname = Request::input('lastname');
        $bing->email = Request::input('email');
        $bing->phone = Request::input('phone');
        $bing->role = Request::input('role');
        $bing->username = Request::input('username');
        $bing->password = Request::input('password');
        $bing->saread = Request::input('saread');
        $bing->sawrite = Request::input('sawrite');
        $bing->sadelete = Request::input('sadelete');
        $bing->aread = Request::input('aread');
        $bing->awrite = Request::input('awrite');
        $bing->adelete = Request::input('adelete');
        $bing->eread = Request::input('eread');
        $bing->ewrite = Request::input('ewrite');
        $bing->edelete = Request::input('edelete');
        $bing->save();
        return redirect()->route('bing.index');
    }
     
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function show()
    {
        return view('bing.show'); // next:- page name created with next.blade.php 
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bing  $bing
     * @return \Illuminate\Http\Response
     */
    public function edit(Bing $bing)
    {
        return view('bing.edit',compact('bing'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bing  $bing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bing $bing)
    {
        $request->validate([
            'employerid' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'username' => 'required',
            'password' => 'required',
            'saread' => 'required',
            'sawrite' => 'required',
            'sadelete' => 'required',
            'aread' => 'required',
            'awrite' => 'required',
            'adelete' => 'required',
            'eread' => 'required',
            'ewrite' => 'required',
            'edelete' => 'required',
        ]);
    
        $bing->update($request->all());
    
        return redirect()->route('bing.index')
                        ->with('success','bing updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bing  $bing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bing $bing)
    {
        $bing->delete();
    
        return redirect()->route('bing.index')
                        ->with('success','bing deleted successfully');
    }
}