@extends('admin.master')

@section('content')
    <div class="container">
        <div class="section">
            <div class="card light-blue z-depth-1">
                <div class="card-content white-text">
                    @if($editService == 'tidak')
                        <span class="card-title">Add Service</span>
                    @else
                        <span class="card-title">Edit Service</span>
                    @endif
                </div>
            </div>

            <form class="card-panel col s12 m12 l12 z-depth-1" @if($editService == 'tidak') action="/adm/store_service"
                  @else action="/adm/update_service/" @endif method="post">
                {{csrf_field()}}
                <input type="hidden" name="service_id" @if($editService == 'ya') value="{{$service->id}}"
                       @else value="" @endif>
                <div class="input-field col s12">
                    <input type="text" name="service_name" required
                           @if($editService == 'ya') value="{{$service->service_name}}" @else value="" @endif>
                    <label>Service Name</label>
                </div>
                <div class="input-field col s12">
                    <i class="mdi-image-filter-1 prefix"></i>
                    <textarea id="message5" class="materialize-textarea" name="description" required
                              length="600">@if($editService == 'ya'){{$service->description}}@endif</textarea>
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
            </form>
        </div>
    </div>
@endsection