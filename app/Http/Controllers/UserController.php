<?php

namespace App\Http\Controllers;
use App\Http\Requests\UserFormRequest;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //primero cg¿heque sei el usuario ingreso login
   public function __construct(){
       $this->middleware('auth');
   }

    //mostrar un alista de registros
    public function index(Request $request)
    {
       
       
       if($request){
        $query = trim($request->get('search'));
           $users= User::where('name','LIKE', '%'. $query .'%')
           ->orderBy('id','asc')
           ->paginate(5);
        //->paginate(5); PAGINACION DE LOS LISTADS O ->simplePaginate

           return view('usuarios.index', ['users' => $users, 'search'=>$query]);
       }
       
       
        //mostrar un alista de registros
        //$user = User::all();
        // $user es el array de toso los datos traidos 

        //return view('usuarios.index',['users'=>$user]);
    }

    


     //mostrar formulario para crear un nuevo refistro
    public function create()
    {
        return view ('usuarios.create');
    }

   

     //almacenar los registro recien creados en la base de datos
    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->name= request('name');
        $usuario->email= request('email');
        $usuario->password= request('password');
        $usuario->save();
        return redirect('/usuarios');

    }

   

     //metodo un registro espesicifco
    public function show($id)
    {
        //
        return view('usuarios.show',['user' => User::findOrFail($id)]);
    }

    

     //muestra el formulario con los datos a editar con un registro espesifico
    public function edit($id)
    {
        //llega de index.blade y envia edit.blade 
        //la consulta mientras cumple el id
        return view('usuarios.edit',['user' => User::findOrFail($id)]);
    }

    

     //actualizar un registro o muchos en la BD
    public function update(UserFormRequest $request, $id)
    {
        //
        $usuario =  User::findOrFail($id);
        // $usuario es la consulta cuando cumple id
        $usuario->name= $request->get('name');
        $usuario->email= $request->get('email');
        

        $usuario->update();

        return redirect('/usuarios');

    }

  

     //eliminar registrados BD
    public function destroy($id)
    {
        //
        $usuario = User::findOrFail($id);
        $usuario->delete();
        return  redirect('/usuarios');
    }
}
