<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\GenericModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Auth;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    function __construct()
    {
        $this->Generic_model = new GenericModel;
    }
    use AuthenticatesUsers;

    public function index(){
        // $admin = new dmin;
        // return $admin = Admin::find(1);
        // print_r($data['admin']);
        // die();
        echo view('admin.home');
    }

    public function login(Request $request){

        $rules = array(
            'email'    => 'required',
            'password' => 'required|min:5|max:20',
        );
        $validator = Validator::make($request->all(), $rules);
        
        if($validator->fails()){
            
            return redirect()->back()->withErrors($validator->errors())->withInput();;

        }
        else{

            $credentials = $request->only('email','password');
            
            if(Auth::guard('admin')->attempt($credentials,$request->remember)){

                $user = Admin::where('email',$request->email)->first();
                
                Auth::guard('admin')->login($user);
                
                return redirect()->route('admin.home');
            }
            
            return redirect()->route('admin.login')->with('error','Email or Password is incorrect.');
        }
        
        

    }

    // public function logout(){
        
    //     $guards = array_keys(config('auth.guards'));
    //     dd($guards);
    //     if(Auth::guard('admin')->check()){

    //         Auth::guard('admin')->logout();
    //         return redirect()->route('admin.login')->with('success','Successfully logout!');
    //     }
    //     else{
    //         return redirect()->route('admin.home')->with('success','Successfully logout!');
    //     }
    // }

    // Override function from AuthenticatesUsers

    public function logout(Request $request)
    {
        $this->guard()->logout();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }

    /**
     * The user has logged out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    protected function loggedOut(Request $request)
    {
        return redirect()->route('admin.login');
    }

    protected function authenticated(Request $request, $user){
        return redirect()->route('admin.home');
    }

    protected function guard(){
        return Auth::guard('admin');
    }
    // Override function from AuthenticatesUsers

    public function addAdmin()
    {
        $data['records'] = DB::table('admins')->where('is_deleted',0)->get();
        return view('admin/register_admin',$data);
    }
    public function insertAdmin(Request $request)
    {
        $request->validate([
        'role' => 'required',
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
        'password' => ['required', 'string'],
        ]);


        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['password'] = Hash::make($request->input('password'));
        $role = $request->input('role');
        if($role =='admin'){
            $data['role'] = 2;
        }
        elseif($role =='data-entry'){
            $data['role'] = 3;
        }
     
        $data['status'] = $request->input('status');
        $data['is_deleted'] = '0';
        $data['created_at'] = now();//strtotime(date('Y-m-d'));
        $data['created_by'] = Auth::id();
      
        $added = $this->Generic_model->insertGetId('admins',$data);
        if(!empty($added))
        {
         
            return redirect('admin/view-admins')->with('success', 'Data added successfully!');
        }
            
    }

    public function view_admins()
    {
        // ->whereDate('created_at','>=','2022-02-01')->whereDate('created_at','<=','2022-02-11')
        $data['records'] = DB::table('admins')->where('is_deleted',0)->get();
        return view('admin/view_admin',$data);
    }

    function edit_admin($id)
    {
        $data['record'] = (array)DB::table('admins')->where(array('is_deleted'=>0,'id'=>$id))->first();
       
        //echo "<pre>";print_r($data);die;
        return view('admin/register_admin',$data);

    }

    function update_admin(Request $request)
    {
        $request->validate([
        'role' => 'required',
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'email', 'max:255'],
        //'password' => ['required', 'string'],
        ]);

        $id = $request->input('id');
        $data['name'] = $request->input('name');
        $data['email'] = $request->input('email');
        $data['password'] = Hash::make($request->input('password'));
        $role = $request->input('role');
        if($role =='admin'){
            $data['role'] = 2;
        }
        elseif($role =='data-entry'){
            $data['role'] = 3;
        }
     
        $data['status'] = $request->input('status');

        
        $data['is_deleted'] = '0';
        $data['updated_at'] = now();//strtotime(date('Y-m-d'));
        $data['modified_by'] = Auth::id();
        
        $this->Generic_model->updateRecord('admins',$data,array('id'=>$id));
        
        return redirect('admin/view-admins')->with('success', 'Data updated successfully');
    }

    function delete_admin($id)
    {
        $data['is_deleted'] = '1';
        $data['deleted_at'] = now();//strtotime(date('Y-m-d'));
        $data['deleted_by'] = Auth::id();
        DB::table('admins')->where('id',$id)->update($data);
        return redirect('admin/view-admins')->with('success', 'Data is successfully Deleted');
    }


}
