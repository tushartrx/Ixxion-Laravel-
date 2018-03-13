@extends('admin.master')
@section('dascontent')

    <div class="col-lg-6" style="padding-top: 50px;">
        {!! Form::open(['url'=>'/updateservicedetails','method'=>'POST','name'=>'updtservcdtls']) !!}
        <div class="form-group">
            <label>Add Services Details</label>

            <input type="text" class="form-control" name="service" value="{{$edetsrv->service}}">
            <input type="hidden" name="id" value="{{$edetsrv->id}}">
        </div>

        <div class="form-group">
            <label> Selects Publication Status </label>
            <select class="form-control" name="publicationservicestatus">
                <option>-- Select Any --</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>

            </select>
        </div>
        <input type="submit" name="btn" value="Update Servises Details">

        {!! Form::close() !!}
    </div>
<script>
    document.forms['updtservcdtls'].elements['publicationservicestatus'].value={{$edetsrv->publicationservicestatus}}
</script>
@endsection