@extends('admin.master')
@section('dascontent')
<h1 style="text-align: center;color:green">{{Session::get('saveservms')}}</h1>
    <div class="col-lg-6" style="padding-top: 50px;">
        {!! Form::open(['url'=>'/saveservicesDetails','method'=>'POST']) !!}
            <div class="form-group">
                <label>Add Services Details</label>
                <textarea class="form-control" rows="3" name="service"></textarea>
            </div>

            <div class="form-group">
                <label> Selects Publication Status </label>
                <select class="form-control" name="publicationservicestatus">
                    <option>-- Select Any --</option>
                    <option value="1">Published</option>
                    <option value="0">Unpublished</option>

                </select>
            </div>
<input type="submit" name="btn" value="Save Servises Details">

       {!! Form::close() !!}
    </div>
    @endsection