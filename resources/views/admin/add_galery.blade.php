@extends('admin.master')

@section('head_css')
    <link href="{{asset('admin/js/plugins/dropify/css/dropify.min.css')}}" type="text/css" rel="stylesheet"
          media="screen,projection">
@endsection

@section('content')
    <div class="container">
        <div class="card light-blue z-depth-1">
            <div class="card-content white-text">
                <span class="card-title">Add Galery</span>
                <p>Images Size Maximum 1MB</p>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <div class="row">
                            <form class="col s12">

                                <div class="row">
                                    <div class="col l6">
                                        <div class="input-field">
                                            <input type="text" name="product_name">
                                            <label for="">Product Name</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="text" name="unit_price">
                                            <label for="">Unit Price (IDR)</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="text" name="description">
                                            <label for="">Description</label>
                                        </div>
                                    </div>
                                    <div class="col 13">
                                        <input type="file" id="input-file-max-fs" class="dropify"
                                               data-max-file-size="1M"/>
                                    </div>
                                </div>

                                <div class="input-field col s12">
                                    <button class="btn light-blue darken-1 waves-effect waves-light right"
                                            type="submit" name="action">Submit
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="{{asset('admin/js/plugins/dropify/js/dropify.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.dropify').dropify();
        });
    </script>
@endpush