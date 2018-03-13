@extends('admin.master')
@section('dascontent')

    <div class="row">
        <div class="col-lg-8" style="padding-top: 50px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Client Section

                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::open(['url'=>'/UpdateClientdetails','method'=>'POST','enctype'=>'Multipart/form-data','name'=>'upcldetls']) !!}

                            <div class="form-group">
                                <label>Client Image</label>
                                <input type="hidden" name="id" value="{{$edtclintstls->id}}">
                                <input type="file" name="clientimg">
                                <img src="{{asset($edtclintstls->clientimg)}}" alt="{{$edtclintstls->clientimg}}" height="100" width="100">
                            </div>
                            <div class="form-group">
                                <label>Selects Status</label>
                                <select class="form-control" name="publicationclientstatus">
                                    <option>Select Any</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>

                            <input type="submit" name="btn" class="btn btn-success" value="Save Client">


                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    document.forms['upcldetls'].elements['publicationclientstatus'].value={{$edtclintstls->publicationclientstatus}}
</script>
@endsection