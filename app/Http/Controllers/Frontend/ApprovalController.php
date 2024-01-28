<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Approval;
use Illuminate\Support\Facades\Auth;

class ApprovalController extends Controller
{

    public function sendApproval(Request $request)
    {
        $user =  User::find(Auth::user()->id);

        $approval = new Approval();
        $approval->user_id =  $user->id;
        $approval->slug = $request->input('course_slug');
        $approval->status = '0';
        $approval->save();
        return redirect('/courses')->with('status', "Thank you!! Your request has been sent for approval");;
    }
}
