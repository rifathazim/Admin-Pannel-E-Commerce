@extends('layouts.adminLayout.admin_design')
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
</head>
<body>

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="{{ url('\admin\dashboard') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Admin</a> <a href="#" class="current">Settings</a> </div>
        <h1>Update Password</h1>
    </div>
    @if(Session::has('flash_message_error'))

        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{!!session('flash_message_error')!!}</strong>
        </div>
    @endif

    @if(Session::has('flash_message_success'))

        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{!!session('flash_message_success')!!}</strong>
        </div>
    @endif
    <div class="container-fluid"><hr>

        <div class="row-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Password Update</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <form class="form-horizontal" method="post" action="{{url('/admin/update-pwd')}}" name="password_validate" id="password_validate" novalidate="novalidate"> {{ csrf_field() }}
                                <div class="control-group">
                                    <label class="control-label">Current Password</label>
                                    <div class="controls">
                                        <input type="password" name="current_pwd" id="current_pwd" />
                                        <span id="chkPwd"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">New Password</label>
                                    <div class="controls">
                                        <input type="password" name="new_pwd" id="new_pwd" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Confirm password</label>
                                    <div class="controls">
                                        <input type="password" name="confirm_pwd" id="confirm_pwd" />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Update Password" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

@endsection
