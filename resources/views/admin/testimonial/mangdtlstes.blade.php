@extends('admin.master')
@section('dascontent')
    <div class="col-lg-10" style="padding-top: 20px">
        <div class="panel panel-default">
            <div class="panel-heading">
               Manage Testimonial
                <h1 style="text-align: center;color: red">{{Session::get('delttesmsg')}}</h1>
                <h1 style="text-align: center;color: #3c763d">{{Session::get('updttesdltsmsg')}}</h1>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($mangtes as $mnts)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$mnts->tesname}}</td>
                            <td>{{$mnts->tesdescription}}</td>
                            <td><img src="{{asset($mnts->tesimage)}}" alt="{{$mnts->tesimage}}" height="100px" width="100px"></td>
                            <td>{{$mnts->publicationtesstatus == 1 ?'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{url('/edit/testimonial/')}}/{{$mnts->id}}"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{url('/delete/testimonial/')}}/{{$mnts->id}}"><span class="glyphicon glyphicon-trash"></span></a>
                            </td>
                        </tr>@endforeach
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