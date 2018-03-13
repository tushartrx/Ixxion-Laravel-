@extends('admin.master')
@section('dascontent')
    <div class="row">
        <div class="col-lg-8" style="padding-top: 50px">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Testimonial's Detais Update

                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            {!! Form::open(['url'=>'/Updatetesdetisss','method'=>'POST','enctype'=>'Multipart/form-data','name'=>'tesupfrm']) !!}
                            <div class="form-group">
                                <label>Name</label>
                                <input type="hidden" name="id" value="{{$edittesdlt->id}}">
                                <input class="form-control" name="tesname" value="{{$edittesdlt->tesname}}">
                            </div>
                            <div class="form-group">
                                <label>Description</label>


                                <input class="form-control" value="{{$edittesdlt->tesdescription}}" name="tesdescription">
                            </div>

                            <div class="form-group">
                                <label>Select Image</label>
                                <input type="file" name="tesimage">
                                <img src="{{asset($edittesdlt->tesimage)}}" alt="{{$edittesdlt->tesimage}}" height="100" width="100">
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

    <script>
        document.forms['tesupfrm'].elements['publicationtesstatus'].value={{$edittesdlt->publicationtesstatus}}
    </script>
@endsection