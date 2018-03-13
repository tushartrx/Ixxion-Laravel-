@extends('admin.master')
@section('dascontent')
    <div class="col-md-6" style="margin: 0 auto;padding-top: 20px;padding-left: 100px;">
        <h2 style="text-align: center;color: green">{{Session::get('message')}}</h2>
        {!! Form::open(['url'=>'/saveteamimage','method'=>'POST','files'=>'true']) !!}
        <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="name">

        </div>
        <div class="form-group">
            <label>Desenation</label>
            <input type="text" class="form-control" name="desination" >
        </div>

        <div class="form-group">
            <label>File input</label>
            <input type="file" name="image">
        </div>

        <div class="form-group">
            <label>Select Status</label>
            <select class="form-control" name="publicationstatusy">
                <option>--Selece Any--</option>
                <option value="1">Published</option>
                <option value="0">Unpublished</option>

            </select>
        </div>
        <br>
        <input type="submit" name="btn" class="btn btn-success" value="Save Team Details ">

        {!! Form::close() !!}
    </div>

@endsection