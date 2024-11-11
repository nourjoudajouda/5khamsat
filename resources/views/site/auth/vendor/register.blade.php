@extends('layouts.site_seller')
@section('style_sheet')
@endsection
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="container con_sign">
                    <h4 class="text-center mt-2  mt-4 mb-5">Choose Your Entity</h4>
                    <div class="plans">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <label class="plan basic-plan" for="basic">
                                    <input checked type="radio" name="plan" id="basic" />
                                    <div class="plan-content">

                                        <div class="plan-details">
                                            <span>Commercial Record</span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="plan complete-plan" for="complete">
                                    <input type="radio" id="complete" name="plan" />
                                    <div class="plan-content">

                                        <div class="plan-details">
                                            <span>Free Work</span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="plan complete-plan" for="Identity">
                                    <input type="radio" id="Identity" name="plan" />
                                    <div class="plan-content">

                                        <div class="plan-details">
                                            <span>National Identity</span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <button class="btn btn_site">Register now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 pt-5 d_media">
                <div class="container p-5 text-center">
                    <img src="{{ asset('site/assets/images/image_bg.png') }}" width="75%" height="75%" alt="">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
