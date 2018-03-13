@extends('admin.master')
@section('dascontent')
    <div class="col-lg-10" style="padding-top: 20px;">
    <div class="panel panel-default">
        <div class="panel-heading">
           Manage PortFolio Image
            <h2 style="text-align: center;color: red">{{Session::get('dttttttms')}}</h2>
            <h2 style="text-align: center;color: #3F3F3F">{{Session::get('updtedprtdetlsimg')}}</h2>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1;?>
                    @foreach($mprtIm as $it)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$it->title}}</td>
                        <td>{{$it->dscritn}}</td>
                        <td><img src="{{asset($it->pimg)}}" alt="{{$it->pimg}}" height="100px" width="100px"> </td>
                        <td>{{$it->pubStats == 1 ? 'Published' : 'Unpublished'}}</td>
                        <td>
                            <a href="{{url('/edit/port/')}}/{{$it->id}}"><span class="glyphicon glyphicon-edit"></span></a>
                            <a href="{{url('/delete/port')}}/{{$it->id}}"><span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>
@endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
    @endsection