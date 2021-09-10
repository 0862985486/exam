{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="card card-custom">
  <div class="card-header flex-wrap border-0 pt-6 pb-0">
    <div class="card-title">
      <h3 class="card-label">รายการทั้งหมด
        <div class="text-muted pt-2 font-size-sm"></div>
      </h3>
    </div>
    <div class="card-toolbar">
      <!--begin::Button-->

      <!--end::Button-->
    </div>
  </div>
  <div class="card-body">
    <!--begin: Search Form-->
    <!--begin::Search Form-->
    <div class="mb-7">
      <div class="row align-items-center">
        <div class="col-lg-9 col-xl-8">
          <div class="row align-items-center">
            <div class="col-md-4 my-2 my-md-0">
              <div class="input-icon">
                <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                <span>
                  <i class="flaticon2-search-1 text-muted"></i>
                </span>
              </div>
            </div>
            <div class="col-md-4 my-2 my-md-0">
              <div class="d-flex align-items-center">
                <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                <select class="form-control" id="kt_datatable_search_status">
                  <option value="">All</option>
                  <option value="1">Active</option>
                  <option value="2">Inactive</option>
                </select>
              </div>
            </div>

          </div>
        </div>
        <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
          <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
        </div>
      </div>
    </div>
    <!--end::Search Form-->
    <!--end: Search Form-->
    <!--begin: Datatable-->
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
    @endif
    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
      <thead>
        <tr>
          <th title="Field #1">เลขบัญชี</th>
          <th title="Field #2">รายการ</th>
          <th title="Field #3">ช่องทาง</th>
          <th title="Field #4">จำนวน</th>
          <th title="Field #5"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($trasaction as $row)
        <tr>
        <td>{{$row->bank_id??null}}</td>
        <td>{{$row->transaction??null}}</td>
        <td>{{$row->channel??null}}</td>
        <td>{{$row->amount??null}}</td>

    @endforeach
      </tbody>
    </table>
    <!--end: Datatable-->
  </div>
</div>


@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')

<script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>

@endsection
