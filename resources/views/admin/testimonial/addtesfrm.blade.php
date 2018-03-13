@extends('admin.master')
@section('dascontent')
    <div class="row">
        <div class="col-lg-8" style="padding-top: 50px">
            <div class="panel panel-default">
                <div class="panel-heading">
                   Testimonial's Detais
                    <h1 style="text-align: center;color:green">{{Session::get('Tesdetailssv')}}</h1>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::open(['url'=>'/savetesdetais','method'=>'POST','files'=>'true']) !!}
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" name="tesname">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="tesdescription" rows="3"></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Select Image</label>
                                    <input type="file" name="tesimage">
                                </div>

                                <div class="form-group">
                                    <label>Selects Status</label>
                                    <select class="form-control" name="publicationtesstatus">
                                        <option>Select Any</option>
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>

                                    </select>
                                </div>

                                <input type="submit" name="btn" class="btn btn-success" value="Submit Testimonial">

                          {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection