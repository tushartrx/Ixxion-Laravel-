@extends('admin.master')
@section('dascontent')

    <div class="col-lg-10" style="padding-top:20px">

        {!! Form::open(['url'=>'/updateabout','method'=>'POST','name'=>'aboutupdt']) !!}
        <div class="form-group">

            <div class="form-group">
                <label>About </label>

                <input type="text" class="form-control" value="{{$edtabout->about}}" name="about">
                <input type="hidden" value="{{$edtabout->id}}" name="id">
            </div>
            <div class="form-group" >
                <label>Selects Status</label>
                <select class="form-control" name="publicationaboutstatus" class="col-md-6">
                    <option>Selece Any</option>
                    <option value="1">Published</option>
                    <option value="0">Unpublished</option>

                </select>
            </div>

            <input type="submit" name="btn" class="btn btn-success" value="update About">
            {!! Form::close() !!}
        </div>
        <script>
            document.forms['aboutupdt'].elements['publicationaboutstatus'].value={{$edtabout->publicationaboutstatus}}
        </script>
@endsection