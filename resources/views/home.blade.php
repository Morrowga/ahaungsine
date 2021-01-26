@extends('layouts.sellerpanel')

@section('content')
<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor m-b-0 m-t-0" style="color: rgb(33,37,41) !important; font-family: 'PT Serif', serif !important;">Dashboard</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)" style="color: rgb(33,37,41); font-family: 'PT Serif', serif !important;">Home</a></li>
            <li class="breadcrumb-item active" style="font-family: 'PT Serif', serif !important;">Dashboard</li>
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
                <div class="col-md-4">
                    <div class="card" style="border-radius: 0%; box-shadow: 2px 2px 10px rgb(33,37,41); background-color: rgb(204,154,101); border: 2px solid rgb(33,37,41, 0.4);">
                        <div class="card-body">
                            <h2 style="font-family: 'PT Serif', serif !important; color: rgb(33,37,41, 0.9); letter-spacing: 1px; font-weight: bold;">CREATE POST <a href="/home/postcreate" class="btn btn-info start" style="background-color:rgb(33,37,41); border-color: rgb(33,37,41); border-radius: 0%; box-shadow: 2px 2px 5px rgb(33,37,41);">START</a></h2>
                            <i class="far fa-edit fa-8x" style="color: rgb(33,37,41, 0.1);"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection
