<!-- jQuery -->
<script src="{{ asset('asset/plugins/jquery/jquery.min.js') }}"></script>
@extends('admin.templates.partials.default')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row" id="form_list_mc">
            <div class="col-md-5">
                <h4 class="modal-title"><strong>Edit Tipe Box</strong> </h4>
                <hr>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li></li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="/admin/boxtype/update/{{ $boxtype->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Kode</label>
                                {{-- <div class="row"> --}}
                                {{-- <input type="text" class="form-control txt_line col-md-2" name="kode" id="kode" value="STN" readonly> --}}
                                <input type="text" class="form-control txt_line" name="kode" id="kode" value="{{ $boxtype->kode }}" readonly>
                                {{-- </div> --}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control txt_line" name="nama" id="nama" value="{{ $boxtype->nama }}">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Branch</label>
                                <input type="text" class="form-control txt_line" name="branch" id="branch" value="{{ $boxtype->branch }}">
                            </div>
                        </div>
                        <input type="hidden" class="form-control txt_line" name="lastUpdatedBy" id="lastUpdatedBy" value="{{ Auth::user()->name }}">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection