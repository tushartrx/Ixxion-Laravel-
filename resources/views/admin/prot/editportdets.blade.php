@extends('admin.master')
@section('dascontent')
    <div class="col-md-6" style="margin: 0 auto;padding-top: 20px;padding-left: 100px;">

        {!! Form::open(['url'=>'/updateportdetls','method'=>'POST','enctype'=>'Multipart/form-data','name'=>'porupdtdtls']) !!}
        <div class="form-group">
            <label>Title</label>
            <input type="hidden" name="id" value="{{$editportdetls->id}}">
            <input class="form-control" name="title" value="{{$editportdetls->title}}">

        </div>
        <div class="form-group">
            <label>Description</label>
            {{--<input type="text" class="form-control" name="dscritn" >--}}

            <input type="text" class="form-control" name="dscritn" value="{{$editportdetls->dscritn}}">
        </div>

        <div class="form-group">
            <label>File input</label>
            <input type="file" name="pimg">
            <img src="{{asset($editportdetls->pimg)}}" alt="{{$editportdetls->pimg}}" height="100px" width="100px">
        </div>

        <div class="form-group">
            <label>Select Status</label>
            <select class="form-control" name="pubStats">
                <option>--Selece Any--</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>

            </select>
        </div>
        <br>
        <input type="submit" name="btn" class="btn btn-success" value="Upload Images">

        {!! Form::close() !!}
    </div>
    <script>
        document.forms['porupdtdtls'].elements['pubStats'].value={{$editportdetls->pubStats}}
    </script>
@endsection