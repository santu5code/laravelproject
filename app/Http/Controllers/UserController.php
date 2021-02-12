<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\User;


class UserController extends Controller
{
  public function index(){

    // $data=[
    //   'name'=>'tara',
    //   'email'=>'tara@email.com',
    //   'password'=>'meropassword',
    // ];
    // User::create($data);
    // $user = new User();
    // $user->id=66;
    // $user->name ='goble';
    // $user ->email ='gobin@home.com';
    // $user ->password=bcrypt('meropass');
    // $user ->save();
    // User::where ('id',55)->update(['name'=>'mylord']);
   // User::where('id',66)->delete();
    $user = User::all();
    return $user;
    //DB::insert('insert into users (id, name, email, password) values (?, ?, ?, ?)', [11, 'Dayle', 'dayle@gmail.com','pass']);
   //DB::update('update users set email = ? where id = 11', ['daylesale@gmail.com']);  
  //DB::delete('delete from users where id = ?', [7]);
   //$users= DB::select('select * from users ') ; 
    // return $users;
   return view('home');
  }
}
