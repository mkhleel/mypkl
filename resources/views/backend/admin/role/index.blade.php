@extends('backend.layouts.master')

@section('title', 'Daftar Role')

@section('breadcrumb')
  <li><a href="{{ route('dashboard.admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
  <li>Dashboard</li>
  <li class="{{ set_active('role.index') }}">Role</li>
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12 col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          @include('backend.layouts.flash')
          <h3 class="box-title">DAFTAR ROLE</h3>
          <div class="pull-right">
            <a href="{{ route('role.create') }}" class="btn btn-sm btn-primary">
              <i class="fa fa-plus"></i>&nbsp;Tambah Role
            </a>
          </div>
        </div>
        <div class="box-body no-padding">
          {!! $html->table(['class' => 'table table-striped table-bordered table-hover', 'id' => 'example']) !!}
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  {!! $html->scripts() !!}
@endsection
