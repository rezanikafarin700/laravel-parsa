<?php

namespace App\Http\Controllers;

use App\UserModel;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{


    public function index()
    {
//        $articles = DB::table('articles')->get();
//        return view('article.index',compact('articles'));
        $records = UserModel::paginate(5);
        return view('admin.user.index')->with('records', $records);

    }


    public function show($id)
    {
//        $article = DB::table('articles')->find($id);
//        return view('article.show', compact('article'));

    }

    public function create()
    {
        return view('article.create');
    }


    public function add()
    {
        return view('admin.user.add');
    }

    public function store(Request $request)
    {
//        DB::table('articles')->insert([
//            'title'=> $request->title,
//            'body'=> $request->body,
//            'source'=> $request->source,
//        ]);


        $request->validate([
            'name' => 'required|max:50',
            'family' => 'required|max:50',
            'mobile' => 'required|max:11',
            'password' => 'required|max:100',
            'address' => 'required|max:500',
        ]);

        $u = new UserModel();
        $u->name = $request->name;
        $u->family = $request->family;
        $u->mobile = $request->mobile;
        $u->password = $request->password;
        $u->address = $request->address;
        $u->save();
        return redirect()->action('UserController@add')->with('insert', true);

    }

    public function edit($id)
    {
//        $article = DB::table('articles')->find($id);
//        return view('article.edit',compact('article'));

        $record = UserModel::find($id);
        return view('admin.user.edit')->with('record', $record);

    }


    public function update(Request $request)
    {
//        DB::table('articles')->where('id',$id)->update([
//            'title'=>$request->title,
//            'body'=>$request->body,
//            'source'=>$request->source,
//        ]);
//        return redirect('article');


        $request->validate([
            'id' => 'required|exists:users,id',
            'name' => 'required|max:50',
            'family' => 'required|max:50',
            'mobile' => 'required|max:11',
            'password' => 'required|max:100',
            'address' => 'required|max:500',
        ]);

        $rec = UserModel::find($request->input('id'));
        $rec->name = $request->input('name');
        $rec->family = $request->input('family');
        $rec->mobile = $request->input('mobile');
        $rec->password = $request->input('password');
        $rec->address = $request->input('address');
        $rec->save();
        return redirect()->back()->with('update', true);
    }


    public function remove($id)
    {
        $record = UserModel::find($id);
        return view('admin.user.remove')->with('record',$record);
    }

    public function delete(Request $r)
    {

        $r->validate([
            'id' => 'required|exists:users,id'
        ]);

       $u =  UserModel::find($r->input('id'));
       $u->delete();
       return redirect()->action('UserController@index')->with('delete',true);


//        $rec = DB::table('users')->where($r->input('id'));
//        $rec->delete();
//        return back();


    }
}
