<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
       
        return view('admin.adminhome');
    }
    public function getmembers()
    {
        $mem = DB::table('members')->get();
        return $mem;
    }
    public function deletemember($id)
    {
        DB::table('members')->where('id',$id)->delete();
        return response()->json('users deleted');

    }
    public function addmembers(Request $request)
    {
     DB::table('members')->insert(['name'=> $request->name,
      'age'=>$request->age]);
      return array('status'=>"success");
    }
    
    public function flatview()
    {
        return view('admin.flats');
    }
    public function getflats()
    {
        $fla = DB::table('flats')->get();
        return $fla;
    }
    public function addflats(Request $request)
    {
        $checker= DB::table('flats')
        ->where('floor_no',$request->floor_no)
        ->first();
        if (is_null($checker)) {
            
            DB::table('flats')->insert(['floor_no'=> $request->floor_no,
            'tot_flat'=>$request->tot_flat]);
            return true;
         }
         else
         {
           return false;
         }
    /* DB::table('flats')->insert(['floor_no'=> $request->floor_no,
      'tot_flat'=>$request->tot_flat]);
      return array('status'=>"success");*/
    }
    public function deleteflat($fid)
    {
        $flno = DB::table('flats')->select('floor_no')
        ->where('fid','=', $fid)
        ->first();
        DB::table('members')->where('floorno',$flno->floor_no)->delete();
        DB::table('flats')->where('fid',$fid)->delete();
        
        return response()->json('users and floors all deleted');

    }
    public function updateflats(Request $request)
    {
     DB::table('flats')
     ->where('fid',$request->fid)
     ->update(['floor_no'=> $request->floor_no,
      'tot_flat'=>$request->tot_flat]);
      return array('fid'=>$request->fid,'floor_no'=> $request->floor_no,
      'tot_flat'=>$request->tot_flat);
     
    }
    public function managefamily()
    {
        return view('admin.managefamily');
    }
    public function getfloordetails($fid)
    {
        $flo = DB::table('flats')
        ->where('floor_no',$fid)
        ->get();
        return $flo;
    }
    public function createMember(Request $request)
    {
    $image = $request->file('file');

    $new_name = rand() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('member_images'), $new_name);
    $form_data = array(
        'name'       =>   $request->mname,
        'age'        =>   $request->mage,
        'cno'        =>   $request->mcno,
        'image'      =>   $new_name,
        'floorno'    =>   $request->floorno,
        'flat_no'    =>   $request->flatno,
        'profession' =>   $request->mprof,
        'gender'     =>   $request->gender,
        'email'      =>   $request->em
    );
    DB::table('members')->insert($form_data);
    return $request->mname;
}
public function getfamilymembers($flono,$flano)
    {
        $mem = DB::table('members')
        ->where('floorno',$flono)
        ->where('flat_no',$flano)
        ->get();
        return $mem;
        //return array("flono"=>$flono,"flano"=>$flano);
    }
    public function updatemembers(Request $request)
    {
    
        $image = $request->file('file');
        if($image != ''){
            $new_name = $request->id.$request->name.rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('member_images'), $new_name);
            $form_data = array(
                'name'       =>   $request->name,
                'age'        =>   $request->age,
                'cno'        =>   $request->cno,
                'image'      =>   $new_name,
                'profession' =>   $request->profession,
                'gender'     =>   $request->gender,
                'email'      =>   $request->email
            );
            DB::table('members')->where('id',$request->id)->update($form_data);
            return  $request->id;

        }
        else{
            $form_data = array(
                'name'       =>   $request->name,
                'age'        =>   $request->age,
                'cno'        =>   $request->cno,
                'profession' =>   $request->profession,
                'gender'     =>   $request->gender,
                'email'      =>   $request->email
            );
            DB::table('members')->where('id',$request->id)->update($form_data);
            return  $request->id;

        }
       
       
     
    }
   
}
