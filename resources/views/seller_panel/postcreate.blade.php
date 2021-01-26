@extends('layouts.sellerpanel')

@section('content')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0" style="color: rgb(33,37,41) !important; font-family: 'PT Serif', serif !important;">Create Post</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: rgb(33,37,41); font-family: 'PT Serif', serif !important;">Home</a></li>
            <li class="breadcrumb-item active" style="font-family: 'PT Serif', serif !important;">Posts</li>
            <li class="breadcrumb-item active" style="font-family: 'PT Serif', serif !important;">Create Post</li>
        </ol>
    </div>
</div>
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="" class="form-material">
                    <div class="row">
                        <div class="col-md-6 first-6"  style="border-right: 1px solid rgb(33,37,41,0.2);">
                            <div class="form-group mt-2">
                                <label class="post-form-label">POST TITLE</label>
                                <input type="text" class="form-control form-control-line" value="" name="post_title" placeholder="Enter Title">
                            </div>
                            <div class="form-group mt-2">
                                <label class="post-form-label">FILE UPLOAD</label>
                                <div class="dropify-wrapper"><div class="dropify-message"><span class="file-icon"></span> <p style="text-align:center; font-weight:bold; font-family: 'PT Sans', sans-serif !important;">Click for Image Upload</p><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" name="item-image" id="input-file-now" class="dropify"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message" style="text-align:center !important;">Drag and drop or click to replace</p></div></div></div></div>
                            </div>
                            <div class="form-group mt-2">
                                <label class="post-form-label">LOCATION</label>
                                <select class="select2 select2-hidden-accessible" name="location" style="width: 100%" tabindex="-1" aria-hidden="true">
                                    <option>SELECT CITY</option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mt-2">
                                <label class="post-form-label">PRICE</label>
                                <input type="number" class="form-control form-control-line" id="number" value="" name="post_price" placeholder="Enter Price">
                            </div>
                            <div class="form-group mt-2">
                            <label class="post-form-label">DESCRIPTION</label>
                                <textarea class="form-control" name="description" rows="4"></textarea>
                            </div>
                            <div class="form-group mt-2">
                                <label class="post-form-label">FACEBOOK LINK</label>
                                <span class="badge badge-pill badge-warning" style="color: #000;font-family: 'PT Sans', sans-serif;">Don't need to fill but you can change this</span>
                                <input type="text" class="form-control form-control-line" value="" name="facebook_link" value="">
                            </div>
                            <div class="form-group mt-2">
                                <label class="post-form-label">PHONE NUMBER</label>
                                <span class="badge badge-pill badge-warning" style="color: #000;font-family: 'PT Sans', sans-serif;">Don't need to fill but you can change this</span>
                                <input type="text" class="form-control form-control-line" value="" name="phone_number" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="button" class="btn btn-outline-dark post-btn" style="float: right;">
                            POST
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
    }
</style>
@endsection


