@extends('admin.master')
@section('dascontent')

    <div class="col-lg-10" style="padding-top: 20px;">
        <div class="panel panel-default">
            <div class="panel-heading">
            Manag Client
                <h1 style="text-align: center;color:red">{{Session::get('deletclntmsg')}}</h1>
                <h1 style="text-align: center;color:#2b542c">{{Session::get('uldtclntmsg')}}</h1>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Client Image</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($mangclient as $cldtls )
                        <tr>
                            <td>{{$i++}}</td>
                            <td><img src="{{asset($cldtls->clientimg)}}" alt="{{$cldtls->clientimg}}" height="100px" width="100px"></td>
                            <td>{{$cldtls->publicationclientstatus == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{url('/edit/client/')}}/{{$cldtls->id}}"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{url('/delete/client/')}}/{{$cldtls->id}}"><span class="glyphicon glyphicon-trash"></span></a>
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