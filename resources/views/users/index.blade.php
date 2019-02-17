@extends('layouts.backend')
@section('content')
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">{!! trans('admin.menu.users') !!}</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">App</li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a class="link-fx" href="">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item">{!! trans('admin.menu.users') !!}</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <div class="block">
        <div class="block-header">
            <h3 class="block-title">Lista de usuarios</h3>
            <div class="block-options">
                <button type="button" class="btn-block-option">
                    <i class="si si-settings"></i>
                </button>
                <a class="btn-block-option" style="margin-top: 25px" href="{!! route('users.create') !!}">Add New</a>
            </div>
        </div>
        <div class="block-content">
            {{-- <h1 class="pull-left">{!! trans('admin.menu.users') !!}</h1> --}}
            @include('flash::message')

            <div class="clearfix"></div>

            <div class="table-responsive">
                @include('users.table')
            </div>
        </div>
    </div>
</div>
<!-- END Page Content -->
@endsection
