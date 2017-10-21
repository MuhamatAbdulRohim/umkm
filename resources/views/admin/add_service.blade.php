@extends('admin.master')

@section('content')
    <div class="container">
        <div class="section">
            <div class="card light-blue z-depth-1">
                <div class="card-content white-text">
                    <span class="card-title">Add Service</span>
                </div>
            </div>

            <div class="card-panel col s12 m12 l12 z-depth-1">
                <div class="input-field col s12">
                    <input type="text" name="title">
                    <label>Service Name</label>
                </div>
                <div class="input-field col s12">
                    <i class="mdi-image-filter-1 prefix"></i>
                    <textarea id="message5" class="materialize-textarea" length="600"></textarea>
                    <label for="text">Description</label>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button class="btn light-blue darken-1 waves-effect waves-light right" type="submit"
                                name="action">Submit
                            <i class="mdi-content-send right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection