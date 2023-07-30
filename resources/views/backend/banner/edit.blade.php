
@extends('backend.layout.master')
@section('title','Loại phòng')
@section('content')
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg>
                    </a></li>
                <li class="active">Banner</li>
            </ol>
        </div>
        <!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý Banner</h1>
            </div>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-5">
                                <form action="{{route('getbanner',['id'=>$banneredit->id])}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="hinh_anh" id="">
                                        <img src="{{$banneredit->banner ? Storage::url($banneredit->banner):""}}" width="40%">
                                        @error('hinh_anh')
                                        <div class="alert bg-danger" role="alert">
                                            <svg class="glyph stroked cancel">
                                                <use xlink:href="#stroked-cancel"></use>
                                            </svg>
                                            {{$message}}<a href="#" class="pull-right"><span
                                                    class="glyphicon glyphicon-remove"></span></a>
                                        </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Sửa Banner</button>
                                </form>
                            </div>
                            @include('backend.banner.list',compact('banner'))
                        </div>
                    </div>
                </div>
            </div>
            <!--/.col-->


        </div>
        <!--/.row-->
    </div>
@endsection
