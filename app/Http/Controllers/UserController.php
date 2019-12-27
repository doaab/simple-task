<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:super_admin']);
    }

    /*
     * return view page
     */
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /*
     *
     */
    public function edit($id){

        /*
         *
        $category = Category::find($id);
        return view('category.edit')->with('category',$category);
         */
        $user = User::find($id);
        return view('users.edite')->with('user' , $user);
        //return view('users.edite', compact('user'));
    }
    /*
     *    public function update(Request $request, $id)
    {
        //$this->validate($request, [
            "title"    => "required",
            "content"  => "required",
        ]);
        $categoy = Category::find($id);
        $categoy->category = $request->category;
        $categoy->save();
        return redirect()->route('categories');
    }
     */
    public function update(Request $request ,$id){

        $user = User::where('id',$id)->first();
        $this->validate($request,[
            'name' => 'required',
            'roles' => 'required|array|min:1',
        ]);

        $requestData = $request->except('email');
        $user->save();
        $user->syncRoles($request->roles);

        return redirect()->route('users.index');
    }
}
