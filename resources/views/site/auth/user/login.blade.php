@extends('layouts.site')
@section('style_sheet')
@endsection
@section('css')
@endsection
@section('content')
    <div
        style="background-image: url('{{ asset('site/assets/images/bg_sign_user.png') }}'); background-size:cover; height:550px;">
        <div class=" con_steps p-5">
            <section class="wizard-section">
                <div class="row no-gutters">
                    <div class="col-lg-12 col-md-12">
                        <div class="form-wizard sign_up_steps">
                            <form action="" method="post" role="form" class="mx-5">
                                <fieldset class="wizard-fieldset show">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-wizard-header mt-4 mb-4">
                                                <h4>Welcome !</h4>
                                                <small>Don't have an account ?
                                                    <span>Subscribe Now</span></small>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control wizard-required" id="email">
                                                <label for="email" class="wizard-form-text-label">Email*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control wizard-required" id="password">
                                                <label for="password" class="wizard-form-text-label">Password*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="Remmber">
                                                        <label class="form-check-label" for="Remmber">Remember</label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-forget">
                                                    <a href="#">Forget Password?</a>
                                                </div>
                                            </div>



                                            <div class="form-group clearfix mt-5">
                                                <a href="" class="form-wizard-previous-btn float-right">Login</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-center d_media">
                                            <img src="{{ asset('site/assets/images/mobile.png') }}" alt="" />
                                        </div>
                                    </div>
                                </fieldset>


                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@section('js')
@endsection
