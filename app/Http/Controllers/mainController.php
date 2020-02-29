<?php

namespace App\Http\Controllers;
use App\User;
// use Request;
use Illuminate\Http\Request;
use \PDF;
class mainController extends Controller
{   
    public function api(){
        return User::all();
    }
    public function index(){
        return view('index');
    }
    public function academy()
    {
        return view('user.daftarkelas');
    }
    public function dashboard()
    {

        return view('user.dashboard');
    }
    //login 
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        if(!auth()->attempt(['email' =>$request->email,'password' =>$request->password])){
            return redirect('masuk');
        }
        return redirect('dashboard');
    }
    //method registrasi
    public function getRegister()
    {
        return view('register');
    }
    public function postRegister(Request $request)
    {
        //membuat falidasi
        $this->validate($request,[
            'name' => 'required|min:4|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'submit','0' => $request->design

                ]); 

        auth()->loginUsingId($user->id);

        return redirect('/edit');
    }

    public function logout(){
        auth()->logout();

        return redirect('home');
    }

    public function profile(){
        return view('user.profil');
    }

    public function edit()
    {
        return view('user.edit_profil');
    }

    public function postEdit(Request $request)
    {   

        $user = \Auth::user();  
        $user->name = $request->input('name');
        $user->no_tlp = $request->input('no_tlp');
        $user->alamat = $request->input('alamat');
        if($request->file('avatar')){
            if($user && file_exists(storage_path('app/public'.$user->image))){

                \Storage::delete('public/'.$user);

            }+

            $user->avatar = $request->input('avatar')->store('avatar','public');

        }
        $user->save();
        return redirect('profil')->with('status','Data sudah terupdet');

    }
    // design emthod
    public function design(){
        $user = \Auth::user(); 
        if($user->design == 1){
            return view('design1');
        }
        elseif($user->design == 20){
            return view('design2');
        }
        elseif($user->design == 30){
            return view('design3');
        }
        elseif($user->design == 40){
            return view('design4');
        }
        elseif($user->design == 50){
            return view('design5');
        }
        elseif($user->design == 60){
            return view('design6');
        }
        elseif($user->design == 70){
            return view('design7');
        }
        elseif($user->design == 80){
            return view('design8');
        }
        elseif($user->design == 90){
            return view('design9');
        }
        elseif($user->design == 100){
            return view('design10');
        }
        elseif($user->design == 999){
            return view('dashboard');
        }
    }
    public function design2(){
        return view('design2');
    }
    
    public function pelajaran(Request $request){

        $user = \Auth::user();  
        if($user->design == 1 ){
            $user->design = $request->input('lesson');
            $user->save();
        }
        elseif($user->design == 20){
            $user->design = $request->input('lesson');
        $user->save();
        }
        elseif($user->design == 30){
            $user->design = $request->input('lesson');
        $user->save();
        }
        elseif($user->design == 40){
            $user->design = $request->input('lesson');
        $user->save();
        }
        elseif($user->design == 50){
            $user->design = $request->input('lesson');
        $user->save();
        }
        elseif($user->design == 60){
            $user->design = $request->input('lesson');
        $user->save();
        }
        elseif($user->design == 70){
            $user->design = $request->input('lesson');
        $user->save();
        }
        elseif($user->design == 80){
            $user->design = $request->input('lesson');
        $user->save();
        }
        elseif($user->design == 90){
            $user->design = $request->input('lesson');
        $user->save();
        }
        elseif($user->design == 100){
            $user->design = $request->input('lesson');
        $user->save();
        }

        return redirect('design');
    }

    public function daftarkelas()
    {
        return view('user.daftarkelas');
    }
    public function tambahkelasdesign(Request $request)
    {
        $user = \Auth::user();  
        $user->design = $request->input('tambahdesign',(1));
        $user->save();
        return redirect('daftarkelas');
    }
    public function tambahkelasvideoediting(Request $request)
    {
        $user = \Auth::user();  
        $user->videoediting = $request->input('tambahvedeoediting',(1));
        $user->save();
        return redirect('daftarkelas');
    }
    public function tambahkelasphotograpy(Request $request)
    {
        $user = \Auth::user();  
        $user->photograpy = $request->input('tambahpotograpy',(1));
        $user->save();
        return redirect('daftarkelas');
    }

    // sertifikat dan cetak ke pdf
    public function sertifikat()
    {
        return view('user.design.sertifikatdesign');
    }
    public function cetak_pdf()
    {
        $user = \Auth::user(); 

        $pdf = PDF::loadview('sertifikat_pdf',$user);
        $pdf->setPaper('A4','landscape');

    	return $pdf->download('sertifikat-pdf');
    }

}
