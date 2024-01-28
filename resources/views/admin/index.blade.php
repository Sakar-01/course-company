@extends('admin.admin_master')
@section('admin')
<div class="container-full">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <h1>Welcome to Dashboard</h1>
        </div>



        <section class="content">
            <div class="row">

                <div class="col-12">
                    <div class="box">
                        <div class="box-header">
                            <h4 class="box-title">Check Approval Requests</h4>
                        </div>
                        <div class="box-body">
                            <a href="{{url('admin/approval')}}" class="bg-primary p-3" style="color:#fff; border-radius:20px">Approval Requests</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- /.content -->
</div>

@endsection