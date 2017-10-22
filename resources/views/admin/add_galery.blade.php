@extends('admin.master')

@section('head_css')
    <link href="{{asset('admin/js/plugins/dropify/css/dropify.min.css')}}" type="text/css" rel="stylesheet"
          media="screen,projection">
@endsection

@section('content')
    <div class="container">
        <div class="card light-blue z-depth-1">
            <div class="card-content white-text">
                @if($editProduct == 'ya')
                    <span class="card-title">Edit Galery</span>
                @else
                    <span class="card-title">Add Galery</span>
                @endif
                <p>Images Size Maximum 1MB</p>
            </div>
        </div>
        <div class="section">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card-panel">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                    <div class="col l6">
                                        <input type="hidden" name="product_id" id="product_id"
                                               @if($editProduct == 'ya') value="{{$product->id}}" @else value="" @endif>
                                        <div class="input-field">
                                            <input type="text" name="product_name" id="product_name" required
                                                   @if($editProduct == 'ya') value="{{$product->product_name}}"
                                                   @else value="" @endif>
                                            <label for="">Product Name</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="text" name="unit_price" id="unit_price" required
                                                   @if($editProduct == 'ya') value="{{$product->unit_price}}"
                                                   @else value="" @endif>
                                            <label for="">Unit Price (IDR)</label>
                                        </div>
                                        <div class="input-field">
                                            <input type="text" name="description" id="description" required
                                                   @if($editProduct == 'ya') value="{{$product->description}}"
                                                   @else value="" @endif maxlength="36">
                                            <label for="">Description</label>
                                        </div>
                                    </div>
                                    <div class="col l6">
                                        <input type="file" accept="image/*" id="input-file-max-fs" class="dropify"
                                               data-max-file-size="1M" name="image_url" required/>
                                    </div>
                                </div>

                                <div class="input-field col s12">
                                    <button class="btn light-blue darken-1 waves-effect waves-light right"
                                            id="submit_product" name="action">Submit
                                        <i class="mdi-content-send right"></i>
                                    </button>
                                </div>
                            </div>
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

        $(function () {
            $('#submit_product').click(function () {
                if ($('#product_id' != '')) {
                    //edit
                } else {
                    //save
                    if ($('#product_name').val() == '' || $('#unit_price').val() == '' || $('#description').val() == '' || $('#input-file-max-fs').val() == '') {
                        alert('Form Must be Completed !')
                    } else {
                        var a = $('#input-file-max-fs').val().split('.');
                        if (a[a.length - 1] != 'jpg' && a[a.length - 1] != 'jpeg' && a[a.length - 1] != 'png') {
                            alert('File Type Must be Image (JPG, JPEG, PNG) not ' + a[a.length - 1]);
                        } else {
                            var value = {
                                product_name: $('#product_name').val(), unit_price: $('#unit_price').val(),
                                description: $('#description').val(), image: $('#input-file-max-fs').val()
                            };
                            $.ajax({
                                url: "/adm/add_product",
                                type: "post",
                                data: value,
                                success: function (response) {
                                    alert(response.message);
                                }
                            });
                        }
                    }
                }
            });
        });
    </script>
@endpush