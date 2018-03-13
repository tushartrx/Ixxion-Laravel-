@extends('admin.master')
@section('dascontent')
    <h1 style="text-align: center;color: red;">{{Session::get('dlmsg')}}</h1>
    <h1 style="text-align: center;color: #3d8b3d;">{{Session::get('uptemdetls')}}</h1>

    <div class="col-lg-12" style="padding-top: 40px">
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Sr No</th>
                            <th>Name</th>
                            <th>Desination</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @foreach($teamimg as $tmim)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$tmim->name}}</td>
                                <td>{{$tmim->desination}}</td>
                                <td><img src="{{asset($tmim->image)}}" alt="{{$tmim->image}}" height="100px" width="100px" "></td>
                                <td>{{$tmim->publicationstatusy ==1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{url('/edit/temmenber/')}}/{{$tmim->id}}"><span class="glyphicon glyphicon-edit"></span></a>
                                    <a href="{{url('/delete/temmenber/')}}/{{$tmim->id}}"><span class="glyphicon glyphicon-trash"></span></a>
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