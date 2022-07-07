@extends('layouts.app')

@section('content')

  <div class="row justify-content-center">
	   <div class="col-lg-12">
	            <div class="pull-left">
	                <h2 class="title-1">Profile</h2>
	            </div>   

	   </div>
     <br/>
</div>

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> Something went wrong.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="container bootstrap snippet">

    <div class="row">

  		<div class="col-sm-3"><!--left col-->
              
          <br/>
          
          <ul class="list-group">
          <div class="text-left">
        <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png"  class="img-thumbnail" alt="avatar">
      </div></hr><br>
            <!-- <li class="list-group-item text-muted">{{ $user->name }} <i class="fa fa-dashboard fa-1x"></i></li> --><!-- 
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li> -->
          </ul> 
               
          <div class="panel panel-default">
       
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
									

                	{!! Form::model($user, ['method' => 'PATCH','route' => ['profile.update', $user->id]]) !!}
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Name</h4></label>
                               {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Email</h4></label>
                              {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Username</h4></label>
                              {!! Form::text('username', null, array('placeholder' => 'Username','class' => 'form-control')) !!}
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Password</h4></label>
                             {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Confirm Password</h4></label>
                             {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                          </div>
                      </div>

                      @role('Administrator')
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Role</h4></label>
                               {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control')) !!}
                          </div>
                      </div>
                      @endrole
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
                            </div>
                      </div>
              	{!! Form::close() !!}
              
              <hr>

        </div><!--/col-9-->
    </div><!--/row-->
</div>

@endsection