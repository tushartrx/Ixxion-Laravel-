@extends('admin.master')
@section('dascontent')
    <div class="col-md-6" style="margin: 0 auto;padding-top: 20px;padding-left: 100px;">

        {!! Form::open(['url'=>'/updatetemdles','method'=>'POST','enctype'=>'Multipart/form-data','name'=>'updtetemdltsfrm']) !!}
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="id" value="{{$edttmdets->id}}">
            <input class="form-control" name="name"  value="{{$edttmdets->name}}">

        </div>
        <div class="form-group">
            <label>Desenation</label>
            <input type="text" class="form-control" name="desination" value="{{$edttmdets->desination}}">
        </div>

        <div class="form-group">
            <label>File input</label>
            <input type="file" name="image">
            <img src="{{asset($edttmdets->image)}}" alt="{{$edttmdets->image}}" height="100px" width="100px">
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
    <script>
        document.forms['updtetemdltsfrm'].elements['publicationstatusy'].value={{$edttmdets->publicationstatusy}}
    </script>
@endsection