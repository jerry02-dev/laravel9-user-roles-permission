@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div>
                <h2 class="title-1">Products</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success btn-sm" href="{{ route('products.create') }}"> Add Product</a>
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
                    <form>
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search Product" name="search" aria-label="Search" aria-describedby="basic-addon2" value="{{request('search')}}">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-outline-secondary"><span class="fa fa-search fa-sm"></span></button>
                            </div>
                        </div>
                    </form>
                    <br/>
                    <table class="table table-data2">
                        <thead style="background-color: black;">
                            <tr>
                                <th style="color:white">NO</th>
                                <th style="color:white">PRODUCT NAME</th>
                                <th style="color:white">DETAILS</th> 
                                <th style="color:white">DATE ADDED</th>
                                <th style="color:white">ADDED BY</th>                                    
                                <th style="color:white"></th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($products as $product)
                           <tr class="tr-shadow">
                                <td>{{ ++$i }}</td>
                                <td class="desc">{{ Helper::shout($product->name) }}</td>
                                <td>{{ $product->detail }}</td>
                                <td>{{ $product->created_at }}</td>
                                <td>{{ Helper::getAddedName($product->added_by)  }}</td>
                                <td>
                                   <div class="table-data-feature">
                                       <!--  <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a> -->
                                         <a class="item" href="{{ route('products.edit',$product->id) }}"><i class="zmdi zmdi-edit text-success"></i></a>
                                       {!! Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) !!}
                                            {!! Form::button('<i class="zmdi zmdi-delete text-danger"></i>', ['class' => 'item', 'type' => 'submit']) !!}
                                        {!! Form::close() !!}
                                   </div>
                                </td>
                            </tr>
                               <tr class="spacer"></tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br/>
                   <div class="d-flex justify-content-center">
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {

    });
</script>
@endpush

