<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Approval;
use App\Models\User;

class ApprovalController extends Controller
{
    public function index()
    {
        $approval =  Approval::all();
        $user =  User::all();
        return view('admin.approval', compact('approval', 'user'));
    }
    public function update(Request $request, $id)
    {
        $approval =  Approval::find($id);

        $approval->status = $request->input('status');
        $approval->update();
        return redirect('admin/approval')->with('status', "approval updated");
    }
}
