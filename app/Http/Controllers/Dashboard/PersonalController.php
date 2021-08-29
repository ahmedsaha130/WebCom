<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class PersonalController extends Controller
{




    public function update_info( Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|string',

           ]);

        $id  = Auth::user()->id;

              $user = User::find($id);

               $user->name  = $request->name ;
               $user->email  = $request->email ;

                if($request->file !=null){
               $user_image  =$request->file('image');
               $file_name = $user->name.time().'.'.$user_image->extension();
               $user_image->move('image\image_admin',$file_name);
               $user->image = $file_name;
                }
               $user->save();


               return redirect()->back()->with('success','تمت عملية تحديث المعلومات بنجاح');
            // return response()->json([
            //     'status'=> true,
            //     'msg'=> "تم التحديث ",]);
    }

    public function change_pass( Request $request)
    {
        $this->validate($request, [

            'oldpassword' => 'required',
            'password'=>'required|confirmed',

            ]);



        $hashedPassword = Auth::user()->password;

           if (Hash::check($request->oldpassword , $hashedPassword )) {

             if (!Hash::check($request->password , $hashedPassword)) {

                  $users =User::find(Auth::user()->id);
                  $users->password = bcrypt($request->password);
                  User::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));

                   return redirect()->back()->with('success','password updated successfully');
                // return response()->json([
                //     'status'=> true,
                //     'msg'=> "password updated successfully",]);
                }

                else{
                    return redirect()->back()->with('error','new password can not be the old password!');
                    // return response()->json([
                    //     'status'=> true,
                    //     'msg'=> "new password can not be the old password! ",]);
                    }

               }

              else{

                return redirect()->back()->with('error','old password doesnt matched');

                // return response()->json([
                //     'status'=> true,
                //     'msg'=> "old password doesnt matched",]);
              }

    }
}
