<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller

{
	public function __construct()
    {
        $this->middleware('role:user');
    }
  public function index(){
  	return view('user.index');
  }
  public function Gallery()
   {
   	return view('user.gallery');
   }
   public function Contact_us()
   {
    return view('user.Contact');
    return redirect()->back();
   }
    public function register()
   {
    return view('user.register');
   }



 public function storepost(Request $request)
 {
  $validatedData = $request->validate([
        'name' => 'required||max: 100',
        'age' => 'required',
        'phone' => 'required||max: 20',
        'gender' => 'required',
        'dateofbirth' => 'required||max: 20',
        'religion' => 'required',
        'email' => 'required||max: 20',
        'occupation' => 'required',
        'country' => 'required||max: 20',
        'bloodgroup' => 'required',
        'hight' => 'required||max: 20',
        'address' => 'required',
        'image' => 'required | mimes:jpeg,jpg,png,PNG | max:100000',
       
    ]);
 $data = array();
 $data ['name']=$request->name;
 $data ['age']=$request->age;
$data ['phone']=$request->phone;
 $data ['gender']=$request->gender;
 $data ['dateofbirth']=$request->dateofbirth;
$data ['religion']=$request->religion;
 $data ['email']=$request->email;
 $data ['occupation']=$request->occupation;
$data ['country']=$request->country;
 $data ['bloodgroup']=$request->bloodgroup;
 $data ['hight']=$request->hight;
$data ['address']=$request->address;
   $image=$request->file('image');

  if ($image) {
    $image_name=hexdec(uniqid());
    $ext=strtolower($image->getClientOriginalExtension());
    $image_full_name=$image_name.'.'.$ext;
    $upload_path='public/fontend/image/';
    $image_url=$upload_path.$image_full_name;


    $success=$image->move($upload_path,$image_full_name);

            $data['image']=$image_url;

     DB::table('registers')->insert($data);

$notification=array(
      'massage'=>'successfully category insert',
      'alert-type'=>'success'

    );
    return Redirect()->back()->with($notification);
    
  }
  else
  {

    DB::table('registers')->insert($data);
    $notification=array(
      'massage'=>'successfully category insert',
      'alert-type'=>'success'

    );
    return Redirect()->back()->with($notification);
     }
    }


    public function ViewCategory()
  {
    $category =DB::table("registers")->get();
    //return response()->json($category );
    return view ('user.view_category', compact('category'));

  }
   public function search(Request $request)
{
  $search = $request->get('search');
   $member =DB::table('registers')->where('name','like','%'.$search.'%')->paginate(5);
  return view('admin.view_category',['category'=>$member]);


}

public function profile()
{
$result =DB::table("addmembers")->get();
    //return response()->json($category );
    return view('user.profile', compact('result'));
}
  




}
