@extends('layouts.site_seller')
@section('style_sheet')
@endsection
@section('css')
@endsection
@section('content')
    <div class="container con_steps">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div class="plans">
                    <label class="plan basic-plan" for="basic">
                        <input checked type="radio" name="plan" id="basic" />

                        <div class="plan-content">
                            <div class="plan-details">
                                <span>Commercial Record</span>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <section class="wizard-section">
            <div class="row no-gutters">

                <div class="col-lg-12 col-md-12">
                    <div class="form-wizard">
                        <form action="" method="post" role="form">
                            <div class="form-wizard-header">
                                <ul class="list-unstyled form-wizard-steps clearfix">
                                    <li class="active"><span>1</span>
                                        <h6>Record Data</h6>
                                    </li>
                                    <li><span>2</span>
                                        <h6>Registration owner data</h6>
                                    </li>
                                    <li><span>3</span>
                                        <h6>Store Information</h6>
                                    </li>
                                    <li><span>4</span>
                                        <h6>Financial Information</h6>
                                    </li>
                                    <li><span>5</span>
                                        <h6>Contact & Address</h6>
                                    </li>

                                </ul>
                            </div>
                            <fieldset class="wizard-fieldset show">
                                <!-- <h5>Record Data</h5> -->
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" id="tname">
                                    <label for="tname" class="wizard-form-text-label">Trade Name*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" id="lname">
                                    <label for="lname" class="wizard-form-text-label">Commercial Registration
                                        No*</label>
                                    <div class="wizard-form-error"></div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" id="zcode">
                                    <label for="zcode" class="wizard-form-text-label">Record Release Date*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset">
                                <!-- <h5>Account Information</h5> -->
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" id="fname">
                                    <label for="fname" class="wizard-form-text-label">Full Name*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control wizard-required" id="id_no">
                                    <label for="id_no" class="wizard-form-text-label">ID Number*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control wizard-required" style="text-align:end"
                                        id="DOB">
                                    <label for="DOB" class="wizard-form-text-label">DOB*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group">
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

                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset">
                                <div class="form-group">
                                    <input type="text" class="form-control wizard-required" id="sname">
                                    <label for="sname" class="wizard-form-text-label">Store Name*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <!-- <div class="form-group form-control">
                                        <select class="selectpicker wizard-required" data-live-search="true" required>
                                            <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
                                            <option data-tokens="mustard">Burger, Shake and a Smile</option>
                                            <option data-tokens="frosting">Sugar, Spice and all things nice</option>
                                        </select>
                                    </div> -->


                                <div class="form-group">
                                    <textarea type="text" rows="4" class="form-control wizard-required" id="sdes"></textarea>
                                    <label for="sdes" class="wizard-form-text-label">Store Description*</label>
                                    <div class="wizard-form-error"></div>
                                </div>
                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset">
                                <!-- <h5>Bank Information</h5> -->
                                <div class="row row_steps" style="margin:auto">
                                    <div class="col-lg-6 p-0">
                                        <div class="form-group" style="width:100%">
                                            <input type="text" class="form-control wizard-required" id="bname">
                                            <label for="bname" class="wizard-form-text-label">Bank account holder
                                                name*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="form-group" style="width:100%">
                                            <input type="text" class="form-control wizard-required" id="iban">
                                            <label for="iban" class="wizard-form-text-label">Iban No.*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <div class="mb-4">
                                        <label>Please attach a file for:</label>
                                        <div class="file-input">
                                            <input type="file" name="file-input" id="file-input"
                                                class="file-input__input" />
                                            <label class="file-input__label" for="file-input">
                                                <img src="images/Frame.png">
                                                <span class="text-dark">Commercial register, national ID copy, personal
                                                    photo, IBAN photo</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
                                </div>
                            </fieldset>
                            <fieldset class="wizard-fieldset">
                                <!-- <h5>Payment Information</h5> -->

                                <div class="row row_steps" style="margin:auto">
                                    <div class="col-lg-6 p-0">
                                        <div class="form-group" style="width:100%">
                                            <input type="text" class="form-control wizard-required" id="mobile">
                                            <label for="mobile" class="wizard-form-text-label">Mobile*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="form-group" style="width:100%">
                                            <input type="text" class="form-control wizard-required" id="email">
                                            <label for="email" class="wizard-form-text-label">Email*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row_steps" style="margin:auto">
                                    <div class="col-lg-6 p-0">
                                        <div class="form-group" style="width:100%">
                                            <input type="text" class="form-control wizard-required" id="city">
                                            <label for="city" class="wizard-form-text-label">City*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="form-group" style="width:100%">
                                            <input type="text" class="form-control wizard-required" id="street">
                                            <label for="street" class="wizard-form-text-label">Street*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row_steps" style="margin:auto">
                                    <div class="col-lg-6 p-0">
                                        <div class="form-group" style="width:100%">
                                            <input type="text" class="form-control wizard-required" id="Postal code">
                                            <label for="Postal code" class="wizard-form-text-label">Postal code*</label>
                                            <div class="wizard-form-error"></div>
                                        </div>
                                    </div>

                                </div>

                                <div class="form-group clearfix">
                                    <a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
                                    <a href="javascript:;" class="form-wizard-submit float-right">Submit</a>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </section>
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
