@extends('admin.master')
@section('dascontent')
    <div class="col-md-6" style="margin: 0 auto;padding-top: 20px;padding-left: 100px;">
        <h2 style="text-align: center;color: green">{{Session::get('svnsg')}}</h2>
        {!! Form::open(['url'=>'/saveprtImage','method'=>'POST','files'=>'true']) !!}
        <div class="form-group">
            <label>Title</label>
            <input class="form-control" name="title">

        </div>
        <div class="form-group">
            <label>Description</label>
            {{--<input type="text" class="form-control" name="dscritn" >--}}
            <textarea class="form-control" name="dscritn" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label>File input</label>
            <input type="file" name="pimg">
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

@endsection