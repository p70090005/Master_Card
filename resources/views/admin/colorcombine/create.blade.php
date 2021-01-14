@extends('admin.templates.partials.default')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" />
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="row" id="form_list_mc">
            <div class="col-md-9">
                <h4 class="modal-title">Tambah Color Combine</h4>
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
                
                <form action="/admin/colorcombine/store" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" class="form-control txt_line" name="kode" id="kode">
                                
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control txt_line" name="nama" id="nama">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        {{-- <label>Warna 1</label> --}}
                                        <select class="js-example-basic-single col-md-12" name="idColor1" id="idColor1">
                                            <option value="" disabled selected>Warna 1</option>
                                            <option value="">Tidak Ada</option>
                                            @foreach ($color as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        {{-- <label>Warna 2</label> --}}
                                        <select class="js-example-basic-single col-md-12" name="idColor2" id="idColor2">
                                            <option value="" disabled selected>Warna 2</option>
                                            <option value="">Tidak Ada</option>
                                            @foreach ($color as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        {{-- <label>Warna 3</label> --}}
                                        <select class="js-example-basic-single col-md-12" name="idColor3" id="idColor3">
                                            <option value="" disabled selected>Warna 3</option>
                                            <option value="">Tidak Ada</option>
                                            @foreach ($color as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        {{-- <label>Warna 4</label> --}}
                                        <select class="js-example-basic-single col-md-12" name="idColor4" id="idColor4">
                                            <option value="" disabled selected>Warna 4</option>
                                            <option value="">Tidak Ada</option>
                                            @foreach ($color as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <button type="submit" id="new" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add New Color">
                                        <i class='fas fa-plus-circle fa-2x'></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="form-control txt_line" name="createdBy" id="createdBy" value="{{ Auth::user()->name }}">
                        <div class="col-md-12">
                            <button type="submit" id="save" class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="save">
                                <i class='far fa-check-square'></i>
                            </button>
                            <button type="button" id="cancel" class="btn" data-toggle="tooltip" data-placement="right" title="cancel">
                                <a href="/admin/divisi">
                                    <i class='far fa-window-close' style='color:red'></i>
                                </a></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>

@endsection

<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
</script>