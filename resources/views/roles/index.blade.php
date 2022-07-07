@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div>
                <h2 class="title-1">Role Management </h2>
            </div>
            <div class="pull-right">
            @can('role-create')
                <a class="btn btn-success" href="{{ route('roles.create') }}"> Create Role</a>

             <!--   <button type="button" class="btn btn-primary btn-circle btn-xl">Blue</button> -->
                @endcan
            </div>
            <br/>
            <br/>
        </div>
    </div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive table-responsive-data2">
                                <table class="table table-data2">
                                    <thead >
                                        <tr>
                                            <th>NO</th>
                                            <th>NAME</th>
                                            <th>TYPE</th>
                                            <th>PERMISSION</th>                                          
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          @foreach ($roles as $key => $role)
                                        <tr class="tr-shadow">
                                           <td>{{ ++$count }}</td>
                                            <td class="desc">{{ $role->name }}</td>
                                             <td><span class="status--process">{{ $role->guard_name }}</span></td>
                                             <td>
                                                  {{ implode(', ', $role->permissions->pluck('name')->toArray()) }}
                                              </td>
                                            <td>
                                                <div class="table-data-feature">
                                                   <!-- <a class="item" href="{{ route('roles.show',$role->id) }}"> <i class="zmdi zmdi-info text-primary"></i></a> -->

                                                    @can('role-edit')
                                                        <a class="item" href="{{ route('roles.edit',$role->id) }}"><i class="zmdi zmdi-edit text-success"></i></a>
                                                    @endcan
                                                    @can('role-delete')
                                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                            {!! Form::button('<i class="zmdi zmdi-delete text-danger"></i>', ['class' => 'item', 'type' => 'submit']) !!}
                                                        {!! Form::close() !!}
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="spacer"></tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    {!! $roles->render() !!}
</div>
</div>
@endsection
@push('scripts')
  <script>
        $(function () {
            $('#role-table').DataTable({
                processing: true,
                serverSide: false,
                scrollY:  "400px",
                scrollX:  false,
                responsive: true,
                scrollCollapse: true,
                columnDefs: [
                    { width: '2%', targets: 0 }
                ],
                fixedColumns: true
            });
        });

    </script>

@endpush

