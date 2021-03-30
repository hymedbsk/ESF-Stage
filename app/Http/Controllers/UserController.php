<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
Use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view("user.list",compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user.add");   
    }

    public function editPassword($id){

        $user = User::findOrFail($id);

        return view("user.password",compact("user"));

    }

    public function storePassword(Request $request, $id){

        $request->validate([
            'new_password' => ['required'],
            'new_confirm_password' => ['same:new_password'],
        ]);

        User::find($id)->update(['password'=> Hash::make($request->new_password)]);
        return redirect('user/'.$id.'/edit');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        User::create([
            'nom' => $request['name'],
            'prenom' =>$request['prenom'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('user/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view("user.edit",compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->nom = $request->input('nom');
        $users->prenom = $request->input('prenom');
        $users->email = $request->input('email');
        $users->save();
        return redirect(route('user.list'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect('user/list');
    }
}
