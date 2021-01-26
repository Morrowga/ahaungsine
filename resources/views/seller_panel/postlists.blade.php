@extends('layouts.sellerpanel')

@section('content')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0" style="color: rgb(33,37,41) !important; font-family: 'PT Serif', serif !important;">Post Lists</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: rgb(33,37,41); font-family: 'PT Serif', serif !important;">Home</a></li>
            <li class="breadcrumb-item active" style="font-family: 'PT Serif', serif !important;">Posts</li>
            <li class="breadcrumb-item active" style="font-family: 'PT Serif', serif !important;">Your Posts</li>
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
                <div class="row">
                    <div class="col-md-4">
                        <div class="card post" style="border: 1px solid rgb(33,37,41);">
                            <div class="card-body">
                                <img class="img-fluid img-post mt-1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Mercedes-Benz_240D_W115_%281%29.JPG/800px-Mercedes-Benz_240D_W115_%281%29.JPG" alt="">
                                <h5 class="mt-3" style="font-weight:bold; font-family: 'PT Serif', serif; letter-spacing: 3px;">OLD CAR</h5>
                                <p style="font-family: 'PT Sans', sans-serif; opacity: 0.5; font-size: 14px;"><i class="fas fa-globe-africa mr-1" style="font-size: 11px;"></i>Yangon</p>
                                <p style="font-family: 'PT Sans', sans-serif; opacity: 0.5; font-size: 12px;"><i class="fas fa-clock mr-1" style="font-size: 11px;"></i>10 seconds ago</p>
                                <p style="font-family: 'PT Sans', sans-serif;"><i class="fas fa-dollar-sign mr-1" style="font-size: 16px; color: rgb(52, 176, 40);"></i>10,000,000 Kyats</p>
                                <p style="font-family: 'PT Sans', sans-serif;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est ipsam quis, enim deleniti consequuntur sequi </p>
                                <a href="#" class="face" style="text-decoration: none; color: rgb(0,0,2, 0.8); font-family: 'PT Sans', sans-serif;"><i class="fas fa-user mr-2" style="font-size: 19px; color: rgb(180,129,80);"></i>Facebook Profile</a>
                                <p  class="mt-1" style="font-family: 'PT Sans', sans-serif;"><i class="fas fa-phone-alt" style="font-size: 19px; color: rgb(52, 176, 40);"></i> +959795864194</p>
                                <a href="/home/postedit" class="btn btn-outline-danger edit-post ml-2" style="float: right;">EDIT</a>
                                <form action="">
                                    <button class="btn btn-outline-danger del-post" style="float: right;">DELETE</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


