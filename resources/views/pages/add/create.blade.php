{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

<div class="card card-custom card-sticky" id="kt_page_sticky_card">
  <!--begin::Form-->
  <div class="card-header">
    <div class="card-title">
      <h3 class="card-label">
        รายการฝาก
    </div>
    <div class="card-toolbar">

      <div class="btn-group">
        <button type="submit" id="save_form" class="btn btn-primary font-weight-bolder">
          <i class="ki ki-check icon-sm"></i>
          บันทึก
        </button>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form class="form" id="kt_form" action="{{ route('add.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="row">
        <div class="col-xl-2"></div>
        <div class="col-xl-8">
          @if ($errors->any())
          <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif

          <div class="my-5">
            <h3 class=" text-dark font-weight-bold mb-10"></h3>
            <div class="form-group row">
              <label class="col-3">เลขที่บัญชี</label>
              <div class="col-9">
              <select class="form-control form-control-solid" name="bank_id" required>
                  <option value="">เลือกบัญชี</option>
                  @foreach($bank as $row)
                  <option value="{{$row->id}}">{{$row->bank_id}}</option>
                  @endforeach
              </select>
              </div>
            </div>
          </div>

          <div class="my-5">
            <h3 class=" text-dark font-weight-bold mb-10"></h3>
            <div class="form-group row">
              <label class="col-3">จำนวนเงิน</label>
              <div class="col-9">
              <input class="form-control form-control-solid" name="amount" type="text" value="" required />
              </div>
            </div>
          </div>



          <div class="separator separator-dashed my-10"></div>

        </div>
        <div class="col-xl-2"></div>
        <!--end::Form-->
    </form>
  </div>


</div>

</div>


@endsection

{{-- Scripts Section --}}
@section('scripts')
<script>
  $(document).ready(function() {
    $('.select2').select2();
    $('#save_form').on('click', function() {
      // window.location = "/purchase-order";
      $('#kt_form').submit();
    });
  });
  var avatar1 = new KTImageInput('kt_image_1');
</script>
@endsection
