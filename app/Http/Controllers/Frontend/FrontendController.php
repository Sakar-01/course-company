<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Approval;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function sendmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message'  => 'min:10'
        ]);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );
        Mail::send('frontend/mail', $data, function ($msg) use ($data) {
            $msg->from($data['email']);
            $msg->to('admin@gmail.com');
            $msg->subject($data['subject']);
        });
        return redirect('/success')->with('status', "Your message has been sent. Thank you!");
    }
    public function success()
    {
        return view('frontend.success');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function career()
    {
        return view('frontend.career');
    }
  
    public function courses()
    {
        return view('frontend/course/courses');
    }
    public function singleCourse($slug)
    {
        if ($slug == 'javascript-course') {

            $all = $this->approveRes($slug);
            $user = $all['user'];
            $approvalstatus = $all['approvalstatus'];
            return view('frontend/course/javascript-course', compact('user', 'approvalstatus'));
        }
        if ($slug == 'web-design') {
            $all = $this->approveRes($slug);
            $user = $all['user'];
            $approvalstatus = $all['approvalstatus'];

            return view('frontend/course/web-design', compact('user', 'approvalstatus'));
        }
        if ($slug == 'frontend-frameworks') {
            $all = $this->approveRes($slug);
            $user = $all['user'];
            $approvalstatus = $all['approvalstatus'];
            return view('frontend/course/frontend-frameworks', compact('user', 'approvalstatus'));
        }
        if ($slug == 'user-interface') {
            $all = $this->approveRes($slug);
            $user = $all['user'];
            $approvalstatus = $all['approvalstatus'];
            return view('frontend/course/user-interface', compact('user', 'approvalstatus'));
        }
    }

    public function approveRes($slug)
    {
        $user = null;
        $approvalstatus = null;

        if (Auth::user()) {
            $user =  User::find(Auth::user()->id);

            if ($approvalstatus = Approval::where('user_id', $user->id)->where('slug', $slug)->first()) {
                $approvalstatus = Approval::where('slug', $slug)->where('user_id', $user->id)->first();
                if ($approvalstatus->status == 1) {
                    $approvalstatus = 'Approved';
                } else {
                    $approvalstatus = 'Admin Will Approve Your Request';
                }
            } else {
                $approvalstatus = 'Request Approval';
            }
        }
        return ['user' => $user, 'approvalstatus' => $approvalstatus];
    }



    // public function myAccount()
    // {
    //     $user =  User::find(Auth::user()->id);
    //     Approval::where('user_id', $user->id)->get();
    // }
}


// slug
// access
// user_id