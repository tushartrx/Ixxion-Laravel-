@extends('admin.master')
@section('dascontent')

    <div class="col-lg-10" style="padding-top:20px">
        <h1 style="text-align: center;color:green">{{Session::get('savabms')}}</h1>
        {!! Form::open(['url'=>'/saveabout','method'=>'POST']) !!}
            <div class="form-group">

            <div class="form-group">
                <label>About </label>
                <textarea class="form-control" rows="3" name="about"></textarea>
            </div>
            <div class="form-group" >
                <label>Selects Status</label>
                <select class="form-control" name="publicationaboutstatus" class="col-md-6">
                    <option>Selece Any</option>
                    <option value="1">Published</option>
                    <option value="0">Unpublished</option>

                </select>
            </div>

           <input type="submit" name="btn" class="btn btn-success">
        {!! Form::close() !!}
    </div>
    @endsection