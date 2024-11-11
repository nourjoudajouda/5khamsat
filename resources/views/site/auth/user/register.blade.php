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
                                        <div class="col-lg-6 col-12">
                                            <div class="form-wizard-header mt-4 mb-4">
                                                <h4>Welcome !</h4>
                                                <small>Do you already have an account ?
                                                    <span>sign in</span></small>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control wizard-required" id="fname">
                                                <label for="fname" class="wizard-form-text-label">First Name*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control wizard-required" id="lname">
                                                <label for="lname" class="wizard-form-text-label">Last Name*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="form-group ">
                                                Gender:
                                                <div class="wizard-form-radio">
                                                    <input name="radio-name" id="radio1" type="radio">
                                                    <label for="radio1">Male</label>
                                                </div>
                                                <div class="wizard-form-radio">
                                                    <input name="radio-name" id="radio2" type="radio">
                                                    <label for="radio2">Female</label>
                                                </div>
                                            </div>


                                            <div class="form-group clearfix mt-5">
                                                <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-center d_media">
                                            <img src="{{ asset('site/assets/images/mobile.png') }}" alt="" />
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="wizard-fieldset">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-wizard-header mt-4 mb-4">
                                                <h4>Welcome !</h4>
                                                <small>Do you already have an account ?
                                                    <span>sign in</span></small>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control wizard-required" id="mobile">
                                                <label for="mobile" class="wizard-form-text-label">Mobile*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control wizard-required" id="email">
                                                <label for="email" class="wizard-form-text-label">Email*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control wizard-required" id="password">
                                                <label for="password" class="wizard-form-text-label">Password*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>
                                            <div class="form-group clearfix mt-5">
                                                <a href="javascript:;"
                                                    class="form-wizard-previous-btn float-left">Previous</a>
                                                <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-center d_media">
                                            <img src="{{ asset('site/assets/images/mobile.png') }}" alt="" />
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="wizard-fieldset">
                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <div class="form-wizard-header mt-4 mb-4">
                                                <h4>Welcome !</h4>
                                                <small>Do you already have an account ?
                                                    <span>sign in</span></small>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control wizard-required"
                                                    id="Your Address">
                                                <label for="Your Address" class="wizard-form-text-label">Your
                                                    Address*</label>
                                                <div class="wizard-form-error"></div>
                                            </div>

                                            <div class="form-group clearfix mt-5">
                                                <a href="javascript:;"
                                                    class="form-wizard-previous-btn float-left">Previous</a>
                                                <a href="javascript:;" class="form-wizard-submit float-right">Submit</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 text-center d_media">
                                            <iframe class="map"
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1855.4004562649789!2d39.17290115826746!3d21.554638596429015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d1d1c501f807%3A0x1dcf06a8b4c902eb!2sBrand+Details!5e0!3m2!1sen!2ssa!4v1538652890926"
                                                width="100%" height="430" frameborder="0" allowfullscreen=""
                                                style=""></iframe>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta2/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('site/assets/js/steps.js') }}"></script>
@endsection
