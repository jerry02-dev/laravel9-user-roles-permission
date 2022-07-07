@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Supplier</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary btn-sm" href="{{ route('suppliers.index') }}"> Back </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Something went wrong.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('suppliers.store') }}" method="POST">
    	@csrf

         <div class="row">
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Name:</strong>
		            <input type="text" name="name" class="form-control" placeholder="Name">
		        </div>
		    </div>
		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Address:</strong>
		            <textarea class="form-control" style="height:150px" name="address" placeholder="Address"></textarea>
		        </div>
		    </div>
              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Contact:</strong>
                    <textarea class="form-control" style="height:150px" name="contact" placeholder="Contact"></textarea>
                </div>
            </div>
		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
		    </div>
		</div>

    </form>
@endsection