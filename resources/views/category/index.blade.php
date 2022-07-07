@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div>
                <h2 class="title-1">Category</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success btn-sm" href="{{ route('category.create') }}"> Add Category</a>
                 <!--   <button type="button" class="btn btn-primary btn-circle btn-xl">Blue</button> -->
            </div>
            <br/>
            <br/>
        </div>
    </div>


@if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>{{ $message }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
    </div>
@endif

 @if(session()->has('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error: </strong>{{session()->get('error')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>
    
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive table-responsive-data2">
               
                <br/>
                   
                <br/>
                   <div class="d-flex justify-content-center">
                       
                   </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@push('scripts')

@endpush

