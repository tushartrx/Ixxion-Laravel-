@extends('admin.master')
@section('dascontent')

    <div class="row">
        <div class="col-lg-8" style="padding-top: 50px;">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Client Section
                    <h1 style="text-align: center;color:green">{{Session::get('saveclientdetails')}}</h1>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                           {!! Form::open(['url'=>'/saveclientdetails','method'=>'POST','files'=>'true']) !!}

                                <div class="form-group">
                                    <label>Client Image</label>
                                    <input type="file" name="clientimg">
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

    @endsection