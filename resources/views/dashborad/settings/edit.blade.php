@extends('layouts.dashborad')
@section('css')
<style>
    .file-upload {
        background-color: #ffffff;
        /* width: 600px; */
        margin: 0 auto;
        padding: 20px;
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #FEC53A;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #FEC53A;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #FEC53A;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        border: 4px dashed #FEC53A;
        position: relative;
    }

    /* .image-dropping,
    .image-upload-wrap:hover {
    background-color: #FEC53A;
    border: 4px dashed #ffffff;
    } */

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #FEC53A;
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 200px;
        max-width: 200px;
        margin: auto;
        padding: 20px;
    }

    .remove-image {
        width: 200px;
        margin: 0;
        color: #fff;
        background: #cd4535;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #b02818;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .remove-image:hover {
        background: #c13b2a;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }
</style>
@endsection
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-left mb-0">{{__('common.settings')}}</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/home')}}">{{__('common.home')}}</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#">{{__('common.settings')}}</a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            @if (count($errors) > 0)
            <ul style="border: 1px solid #e02222; background-color: white">
                @foreach ($errors->all() as $error)
                <li style="color: #e02222; margin: 15px">{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            @if (session('error'))
            <ul style="border: 1px solid #e02222; background-color: white">
                <li style="color: #e02222; margin: 15px">{{ $error }}</li>
            </ul>
            @endif
            @if (session('status'))
            <ul style="border: 1px solid #01b070; background-color: white; border-radius: 5px;">
                <li style="color: #01b070; margin: 15px">{{ session('status')  }}</li>
            </ul>
            @endif
        </div>
        <div class="content-body">
            <!-- Basic Horizontal form layout section start -->
            <section id="basic-horizontal-layouts">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="card">
                            <!-- <div class="card-header">
                                    <h4 class="card-title">Horizontal Form</h4>
                                </div> -->
                            <div class="card-body">
                                <form class="form form-horizontal" method="post" action="{{url(app()->getLocale().'/settings')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label> {{__('common.upload_logo')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="col-12" style="margin:auto">
                                                        <div class="form-group">
                                                            <div class="file-upload">
                                                                <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">{{__('common.uploadImage')}}</button>

                                                                <div class="image-upload-wrap">
                                                                    <input class="file-upload-input" name="logo" type='file' onchange="readURL(this);" accept="image/*" />
                                                                    <div class="drag-text">
                                                                        <h3>{{__('common.Drag and drop a file or select add Image')}}</h3>
                                                                    </div>
                                                                </div>
                                                                <div class="file-upload-content">
                                                                    <img class="file-upload-image" src="#" alt="your image" />
                                                                    <div class="image-title-wrap">
                                                                        <button type="button" onclick="removeUpload()" class="remove-image">{{__('common.remove')}} <span class="image-title">{{__('common.Uploaded Image')}}</span></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group row">
                                                <div class="col-sm-2 col-form-label">
                                                    <label for="customFile"> {{__('common.upload_icon')}}</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <div class="custom-file">
                                                        <input type="file" name="icon" class="custom-file-input" id="customFile" />
                                                        <label class="custom-file-label" for="customFile">{{__('common.upload_image')}}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 offset-sm-0">
                                        <button type="submit" id="btn-bg" class="btn btn-primary mr-1">{{__('common.save')}}</button>
                                        <button type="reset" class="btn btn-outline-secondary">{{__('common.reset')}}</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        <!-- Basic Horizontal form layout section end -->

    </div>
</div>
</div>
<!-- END: Content-->
@endsection
@section('js')
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
</script>
@endsection