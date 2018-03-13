@extends('admin.master')
@section('dascontent')

    <div class="col-lg-10" style="padding-top:20px ;">
        <div class="panel panel-default">
            <div class="panel-heading">
              Manage Services
    <h1 style="text-align: center;color: red">{{Session::get('sercdltmrsg')}}</h1>
    <h1 style="text-align: center;color: red">{{Session::get('updtsrvmsg')}}</h1>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Services Details</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($mngsrc as $mngsv)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$mngsv->service}}</td>
                            <td>{{$mngsv->publicationservicestatus == 1 ? 'Published' : 'Unpublished'}}</td>
                            <td>
                                <a href="{{url('/edit/services/')}}/{{$mngsv->id}}"><span class="glyphicon glyphicon-edit" </a>
                                <a href="{{url('/delete/services/')}}/{{$mngsv->id}}"><span class="glyphicon glyphicon-trash" </a>
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