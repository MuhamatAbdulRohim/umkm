@extends('admin.master')

@section('content')

    <div class="container">
        <div class="card-panel section">
            <div id="striped-table">
                <div class="card light-blue z-depth-1">
                    <div class="card-content white-text">
                        <span class="card-title">My Service</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m8 l12">
                        <table class="striped">
                            <thead>
                            <tr>
                                <th data-field="id">No</th>
                                <th data-field="name">Service Name</th>
                                <th data-field="price">Description</th>
                                <th class="center" data-field="action">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0; ?>
                            @foreach($services as $service)
                                <?php $no = $no + 1; ?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$service->service_name}}</td>
                                    <td>{{$service->description}}</td>
                                    <td class="center">
                                        <a href="/adm/edit_service/{{$service->id}}"
                                           class="btn waves-effect waves-light amber"><i
                                                    class="mdi-editor-mode-edit small"></i></a>
                                        <a href="/adm/del_service/{{$service->id}}"
                                           class="btn waves-effect waves-light red darken-1"><i
                                                    class="mdi-action-delete small"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>
                            {!! $services->render() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection