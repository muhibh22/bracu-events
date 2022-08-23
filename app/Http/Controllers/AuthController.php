<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use App\Models\clubs;
use App\Models\admins;
use App\Models\departments;
use App\Models\events;
use App\Models\rooms;
use App\Models\participants;
use App\Models\feedback;
use App\Models\contact;
use App\Models\room_request;
use App\Models\st_request;
use App\Models\oca;
use App\Models\st;

use Illuminate\Support\Facades\Hash;
class AuthController extends Controller
{
    function login()
    {
        return view('frontend.student_login');
    }
    function check(Request $request){
        $request->validate([
            'student_id' => 'required',
            'password' => 'required'
        ]);
        $userinfo= student::where('student_id', '=', $request->student_id)->first();
        if(!$userinfo){
            return back()->with('fail', 'We do not recognize your id');
        }
        else{
            if($request->password == $userinfo->password){
                $request-> session()->put('LoggedUser', $userinfo->student_id);
                return redirect('/studentdashboard');
            }
            else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
    function clublogin(){
        return view('frontend.clublogin');
    }

    function clubcheck(Request $request){
        $request->validate([
            'club_mail' => 'required',
            'club_password' => 'required'
        ]);
        $userinfo= clubs::where('club_mail', '=', $request->club_mail)->first();
        if(!$userinfo){
            return back()->with('fail', 'We do not recognize your email');
        }
        else{
            if($request->club_password == $userinfo->club_password){
                $request-> session()->put('LoggedUser', $userinfo->id);
                return redirect('clubdashboard');
            }
            else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }

    function adminlogin(){
        return view('frontend.adminlogin');
    }
    function ocalogin(){
        return view('frontend.ocalogin');
    }


    function admincheck(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $userinfo= admins::where('email', '=', $request->email)->first();
        if(!$userinfo){
            return back()->with('fail', 'We do not recognize your email');
        }
        else{
            if($request->password == $userinfo->password){
                $request-> session()->put('LoggedUser', $userinfo->id);
                return redirect('/admindashboard');
            }
            else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
    function ocalogin_check(Request $request){
        $request->validate([
            'oca_mail' => 'required',
            'oca_password' => 'required'
        ]);
        $userinfo= oca::where('oca_mail', '=', $request->oca_mail)->first();
        if(!$userinfo){
            return back()->with('fail', 'We do not recognize your email');
        }
        else{
            if($request->oca_password == $userinfo->oca_password){
                $request-> session()->put('LoggedUser', $userinfo->oca_mail);
                return redirect('/ocadashboard');
            }
            else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
    function departmentlogin(){
        return view('frontend.departmentlogin');
    }
    function departmentcheck(Request $request){
        $request->validate([
            'dept_mail' => 'required',
            'dept_password' => 'required'
        ]);
        $userinfo= departments::where('dept_mail', '=', $request->dept_mail)->first();
        if(!$userinfo){
            return back()->with('fail', 'We do not recognize your email');
        }
        else{
            if($request->dept_password == $userinfo->dept_password){
                $request-> session()->put('LoggedUser', $userinfo->dept_mail);
                return redirect('/department_dashboard');
            }
            else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }

    function dept_logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/departmentlogin');
        }
    }
    function clup_logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/clublogin');
        }
    }
    function oca_logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/ocalogin');
        }
    }
        function club_logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/clublogin');
        }
    }
    function contact(){
        return view('frontend.contact');
    }
    function contact_store(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'subject'=>'required',
            'message'=> 'required'
        ]);
        $c=new contact;
        $c->name=$request['name'];
        $c->email=$request['email'];
        $c->subject=$request['subject'];
        $c->message=$request['message'];
        $save=$c->save();
        if($save){
            return back()->with('success', 'Message sent');
        }
        else{
            return back()->with('fail', 'Something went wrong');
        } 

    }

    // dashboard
    function st_dash(){
        $data=['LoggedUserInfo'=>student::where('student_id', '=', session('LoggedUser'))->first()];
        $events= events::all();
        $eventdata=compact('events');
        return view('student.dashboard', $data, $eventdata);
    }
    function st_logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/studentlogin');
        }
    }
    function dept_event_create(){
        $data=['LoggedUserInfo'=>departments::where('dept_mail', '=', session('LoggedUser'))->first()];
        return view('department.eventcreate', $data);
    }
    function participate(){
        return view('student.participate');
    }
    function participate_store(Request $request){
        $request->validate([
            'event_name'=> 'required',
            'student_id'=> 'required',
        ]);
        $p=new participants;
        $p->event_name=$request['event_name'];
        $p->student_id=$request['student_id'];
        $save=$p->save();
        if($save){
            return back()->with('success', 'participated');
        }
        else{
            return back()->with('fail', 'Something went wrong');
        } 

    }
    function feedback(){
        return view('student.feedback');
    }
    function feedback_store(Request $request){
        $request->validate([
            'event_name'=> 'required',
            'feedback'=> 'required',
        ]);
        $f=new feedback;
        $f->event_name=$request['event_name'];
        $f->feedback=$request['feedback'];
        $save=$f->save();
        if($save){
            return back()->with('success', 'Feedback Provided');
        }
        else{
            return back()->with('fail', 'Something went wrong');
        } 

    }
    function roomstatus(){
        $data=['LoggedUserInfo'=>student::where('student_id', '=', session('LoggedUser'))->first()];
        $rooms= rooms::all();
        $roomdata=compact('rooms');
        return view('student.room_status', $data,$roomdata);
        
    }

    //department Dashboard
    function department_dashboard(){
        $data=['LoggedUserInfo'=>departments::where('dept_mail', '=', session('LoggedUser'))->first()];
        $events= events::all();
        $eventdata=compact('events');
        return view('department.department_dashboard', $data, $eventdata);
    }
    function audi_request(){
        $rooms= rooms::all();
        $roomdata=compact('rooms');
        return view('department.audi_request', $roomdata);
    }
    function audi_request_store(Request $request){
        $request->validate([
            'request_maker'=> 'required'
        ]);
        $c=new room_request;
        $c->room_name=10101;
        $c->request_maker=$request['request_maker'];
        $save=$c->save();
        if($save){
            return back()->with('success', 'Request Made');
        }
        else{
            return back()->with('fail', 'Something went wrong');
        } 

    }
    function transport(){
        return view('department.transport');
    }
    function transport_store(Request $request){
        $request->validate([
            'request_by'=> 'required'
        ]);
        $c=new st_request;
        $c->type=1;
        $c->request_by=$request['request_by'];
        $save=$c->save();
        if($save){
            return back()->with('success', 'Request Made');
        }
        else{
            return back()->with('fail', 'Something went wrong');
        } 
    }
    function dept_room(){
        $rooms= rooms::all();
        $roomdata=compact('rooms');
        return view('department.dept_room', $roomdata);
    }
    function dept_room_store(Request $request){
        $request->validate([
            'room_name'=> 'required'
        ]);
        $c=rooms::find($request['room_name']);
        $c->room_status=1;
        $save=$c->save();
        if($save){
            return back()->with('success', 'Room taken');
        }
        else{
            return back()->with('fail', 'Something went wrong');
        } 

    }
    // OCA
    function ocadashboard(){
        $data=['LoggedUserInfo'=>oca::where('oca_mail', '=', session('LoggedUser'))->first()];
        $events= events::all();
        $eventdata=compact('events');
        return view('oca.ocadashboard', $data, $eventdata);
    }

    Function oca_sound(){
        $data=['LoggedUserInfo'=>oca::where('oca_mail', '=', session('LoggedUser'))->first()];
        $sts= st_request::all();
        $stdata=compact('sts');
        return view('oca.oca_sound', $data, $stdata);
    }
    function oca_sound_delete($id){
        $req=st_request::find($id);
        $req->delete();

        return redirect()->back();

    }
    function oca_sound_add($id){
        $req=st_request::find($id);
        $st=st::find($req->type);
        $st->taken_by=$req->request_by;
        $st->status=1;
        $st->save();
        $req->delete();
        $save=$st->save();

        if($save){
            return back()->with('success', 'Event Request Accepted');
        }
        else{
            return back()->with('fail', 'Something went wrong'); 
        }

    }
    Function oca_transport(){
        $data=['LoggedUserInfo'=>oca::where('oca_mail', '=', session('LoggedUser'))->first()];
        $sts= st_request::all();
        $stdata=compact('sts');
        return view('oca.oca_transport', $data, $stdata);
    }
    function oca_transport_delete($id){
        $req=st_request::find($id);
        $req->delete();

        return redirect()->back();

    }
    function oca_transport_add($id){
        $req=st_request::find($id);
        $st=st::find($req->type);
        $st->taken_by=$req->request_by;
        $st->status=1;
        $st->save();
        $req->delete();
        $save=$st->save();

        if($save){
            return back()->with('success', 'Event Request Accepted');
        }
        else{
            return back()->with('fail', 'Something went wrong'); 
        }

    }
    function oca_st(){
        $data=['LoggedUserInfo'=>oca::where('oca_mail', '=', session('LoggedUser'))->first()];
        $sts= st::all();
        $stdata=compact('sts');
        return view('oca.oca_st', $data, $stdata);
    }
    function oca_st_delete($id){
        $req=st::find($id);
        $req->status=0;
        $req->taken_by="";
        $req->save();

        return redirect()->back();

    }
    function message_delete($id){
        $req=contact::find($id)->delete();

        return redirect()->back();

    }
    function message(){
        $data=['LoggedUserInfo'=>oca::where('oca_mail', '=', session('LoggedUser'))->first()];
        $contacts= contact::all();
        $contactdata=compact('contacts');
        return view('oca.oca_messages', $data, $contactdata);
    }
    function oca_rooms(){
        $data=['LoggedUserInfo'=>oca::where('oca_mail', '=', session('LoggedUser'))->first()];
        $room_reqs= room_request::all();
        $room_reqdata=compact('room_reqs');
        return view('oca.oca_room', $data, $room_reqdata);
    }
    function oca_rooms_delete($id){
        $req=room_request::find($id);
        $req->delete();

        return redirect()->back();

    }
    function oca_rooms_add($id){
        $req=room_request::find($id);
        $rooms=rooms::find($req->room_name);
        $rooms->room_status=1;
        $save=$rooms->save();
        $req->delete();

        if($save){
            return back()->with('success', 'Event Request Accepted');
        }
        else{
            return back()->with('fail', 'Something went wrong'); 
        }
    }

    //Admin Dashboard
    function admin_dash(){
        $data=['LoggedUserInfo'=>admins::where('email', '=', session('LoggedUser'))->first()];
        $events= events::all();
        $eventdata=compact('events');
        return view('admin_folder.admindashboard', $data, $eventdata);
    }
        //Admin Dashboard
        function admin_request(){
            $data=['LoggedUserInfo'=>admins::where('email', '=', session('LoggedUser'))->first()];
            $events= events::all();
            $eventdata=compact('events');
            return view('admin_folder.admin_request', $data, $eventdata);
        }
        function admin_request_delete($id){
            $event=events::find($id);
            $room=rooms::find($event->venue);
            $room->room_status=0;
            $room->save();
            $event->delete();

            return redirect()->back();

        }
        function admin_request_add($id){
            $event=events::find($id);
            $event->status=1;
            $event->accept=1;
            $save=$event->save();
            $room=rooms::find($event->venue);
            $room->room_status=1;
            $save=$room->save();
            
            if($save){
                return back()->with('success', 'Event Request Accepted');
            }
            else{
                return back()->with('fail', 'Something went wrong'); 
            }

        }

        function feedback_list(){
            $feedbacks= feedback::all();
            $feedbackdata=compact('feedbacks');
            return view('admin_folder.feedback_list', $feedbackdata);
        }

        //club
        function clubdashboard(){
            $data=['LoggedUserInfo'=>clubs::where('club_mail', '=', session('LoggedUser'))->first()];
            $events= events::all();
            $eventdata=compact('events');
            return view('club.club', $data, $eventdata);
        }
        function club_event(){
            $rooms= rooms::all();
            $roomdata=compact('rooms');
            return view('Club.request_event', $roomdata);
        }
        function club_event_store(Request $request){
            $request->validate([
                'name'=> 'required',
                'guest'=> 'required',
                'organiser'=>'required',
                'time'=> 'required',
                'image'=> 'required',
                'venue'=> 'required',
                'description'=> 'required'
            ]);
            $image= $request->image;
            if($image){
                $extension= $image->getClientOriginalExtension();
                $imageName= time(). '.' .$extension;
                $image->move(public_path('/images/posts'),$imageName );
            }
            $room= rooms::find($request['venue']);
            if($room->room_status==0){
                $s=new events();
                $s->name=$request['name'];
                $s->guest=$request['guest'];
                $s->organiser=$request['organiser'];
                $s->time=$request['time'];
                $s->image=$imageName;
                $s->venue=$request['venue'];
                $s->description=$request['description'];
                $s->status=0;
                $s->accept=0;
                $room->room_status=1;
                $room->save();
                $save=$s->save();
                if($save){
                    return back()->with('success', 'New Department event created');
                }
                else{
                    return back()->with('fail', 'Something went wrong'); 
                }
            }
            else{
                return back()->with('fail', 'Room is not empty');
            }
        }
        function club_room(){
            $rooms= rooms::all();
            $roomdata=compact('rooms');
            return view('club.club_room', $roomdata);
        }
        function club_room_store(Request $request){
            $request->validate([
                'room_name'=> 'required'
            ]);
            $c=new room_request();
            $c->room_name=$request['room_name'];
            $c->request_maker=$request['request_maker'];
            $save=$c->save();
            if($save){
                return back()->with('success', 'Request made');
            }
            else{
                return back()->with('fail', 'Something went wrong');
            } 
        }
    function club_sound(){
        return view('club.club_sound');
    }
    function club_sound_store(Request $request){
        $request->validate([
            'request_by'=> 'required'
        ]);
        $c=new st_request;
        $c->type=2;
        $c->request_by=$request['request_by'];
        $save=$c->save();
        if($save){
            return back()->with('success', 'Request Made');
        }
        else{
            return back()->with('fail', 'Something went wrong');
        } 
    }

    //Event Creation
    function dept_event_store(Request $request){
        $request->validate([
            'name'=> 'required',
            'guest'=> 'required',
            'organiser'=>'required',
            'time'=> 'required',
            'image'=> 'required',
            'venue'=> 'required',
            'description'=> 'required'
        ]);
        $image= $request->image;
        if($image){
            $extension= $image->getClientOriginalExtension();
            $imageName= time(). '.' .$extension;
            $image->move(public_path('/images/posts'),$imageName );
        }
        $room= rooms::find($request['venue']);
        if($room->room_status==0){
            $s=new events();
            $s->name=$request['name'];
            $s->guest=$request['guest'];
            $s->organiser=$request['organiser'];
            $s->time=$request['time'];
            $s->image=$imageName;
            $s->venue=$request['venue'];
            $s->description=$request['description'];
            $s->status=1;
            $s->accept=1;
            $room->room_status=1;
            $room->save();
            $save=$s->save();
            if($save){
                return back()->with('success', 'New Department event created');
            }
            else{
                return back()->with('fail', 'Something went wrong'); 
            }
        }
        else{
            return back()->with('fail', 'Room is not empty');
        }
    }
    function University_Event(){
        $rooms= rooms::all();
        $roomdata=compact('rooms');
        return view('admin_folder.admin_event', $roomdata);
    }
    function event(){
        $events= events::all();
        $eventdata=compact('events');
        return view('frontend.main_event',$eventdata);
    }
    function about(){
        return view('frontend.about');
    }
}
