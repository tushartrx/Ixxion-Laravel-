@extends('admin.master')
@section('dascontent')

    <div class="col-lg-10" style="padding-top: 20px">
        <div class="panel panel-default">
            <div class="panel-heading">
                Manag About
                <h1 style="text-align: center;color:red">{{Session::get('delabmsg')}}</h1>
                <h1 style="text-align: center;color:#00ff2e">{{Session::get('updatabmsg')}}</h1>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>About Details</th>
                            <th>Publication status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($mngabout as $mnab)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$mnab->about}}</td>
                            <td>{{$mnab->publicationaboutstatus == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{url('/edit/about/')}}/{{$mnab->id}}"><span class="glyphicon glyphicon-edit"></span></a>
                                <a href="{{url('/delete/about/')}}/{{$mnab->id}}"><span class="glyphicon glyphicon-trash"></span></a>
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