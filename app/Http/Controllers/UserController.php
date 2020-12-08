<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = new User;

        if($request->busca != null){
            $users = User::where('codigo_vigia','LIKE',"%{$request->busca}%")->paginate(10);
        }
        /*
        if ($request->tipo != null && $request->tipo == 'Nome'){

            $users = User::where('name','LIKE',"%{$request->busca}%")->paginate(10);   

        }else if($request->tipo != null && $request->tipo == 'CodigoPessoa'){

            $users = User::where('codpes','LIKE',"%{$request->busca}%")->paginate(10);
        
        }else if($request->tipo != null && $request->tipo == 'CodigoVigia'){

            $users = User::where('codigo_vigia','LIKE',"%{$request->busca}%")->paginate(10);

        }          
            */
        else {

            $users = User::paginate(10);
        }      

                /*
        
        if ($request->buscar != null && $request->tipobusca = 'nome'){

            $users = User::where('name','LIKE',"%{$request->buscar}%")->paginate(10);  
        }

        if($request->buscar != null && $request->tipobusca = 'codigopessoa'){

            $users = User::where('codpes',"LIKE","%{$request->buscar}%")->paginate(10);
        }

        if($request->buscar != null && $request->tipobusca = 'codigovigia'){

            $users = User::where('codigo_vigia',"LIKE","%{$request->busca}%")->paginate(10);
        } 
        
        */  
        


        /*
        
        if ($request->busca != null && $request->tipobusca != 'Nome'){

            $users = User::where('name',"LIKE","%{$request->busca}%")->paginate(10);   

        }else if($request->busca != null && $request->tipobusca == 'Codigo_Pessoa'){

            $users = User::where('codpes',"LIKE","%{$request->busca}%")->paginate(10);
        
        }else if($request->busca != null && $request->tipobusca == 'Codigo_Vigia'){

            $users = User::where('codigo_vigia',"LIKE","%{$request->busca}%")->paginate(10);

        } 
        
        */


        return view('users.index')->with([
            'users' => $users,
            'user' => new User
        ]); 

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create')->with('user', new User);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);

        return redirect('/users/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {
        $validated = $request->validated();
        $user->update($validated);

        return redirect("/users/$user->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('/users/');
    }
}