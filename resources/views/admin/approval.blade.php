@extends('admin.admin_master')
@section('admin')
<div class="container-full">

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-12">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Approval Requests</h4>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="complex_header" class="table table-striped table-bordered display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>User Email</th>
                                        <th>Course Name</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($approval as $item)
                                    <tr>
                                        <td>
                                            @foreach($user as $item_user)
                                            @if($item_user->id == $item->user_id)
                                            {{$item_user->name}}
                                            @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($user as $item_user)
                                            @if($item_user->id == $item->user_id)
                                            {{$item_user->email}}
                                            @endif
                                            @endforeach
                                        </td>
                                        <td>{{$item->slug}} </td>
                                        <td>{{$item->status==0 ? 'Not Approved':'Approved'}}</td>
                                        <td>
                                            <a onclick="event.preventDefault();
                                                     document.getElementById(`{{'approval-form'.$item->id}}`).submit();" class="btn {{$item->status==0 ? 'btn-primary':'btn-danger'}}">
                                                {{$item->status==0 ? 'Approve':'UnApprove'}}
                                            </a>
                                            <form id="{{'approval-form'.$item->id}}" action="{{ url('approval/update/'.$item->id) }}" method="POST" class="d-none">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="status" value="{{$item->status==0?1:0}}">
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <!-- <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Not Approved</td>
                                        <td><a href="#" class="btn btn-primary">Approve</a></td>
                                    </tr>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Approved</td>
                                        <td><a href="#" class="btn btn-danger">Reject</a></td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>

@endsection