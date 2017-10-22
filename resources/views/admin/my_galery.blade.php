@extends('admin.master')

@section('content')

    <div class="container">
        <div class="card-panel section">
            <div id="striped-table">
                <div class="card light-blue z-depth-1">
                    <div class="card-content white-text">
                        <span class="card-title">My Galery</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m8 l12">
                        <table class="striped">
                            <thead>
                            <tr>
                                <th data-field="id">No</th>
                                <th data-field="name">Image</th>
                                <th data-field="price">Name</th>
                                <th class="center" data-field="action">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0; ?>
                            @foreach($products as $porduct)
                                <?php $no = $no + 1; ?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td><img src="{{asset('admin/images/gallary/'.$porduct->image_url)}}"
                                             class="size-image"></td>
                                    <td>{{$porduct->product_name}}</td>
                                    <td class="center">
                                        <a href="/adm/edit_galery/{{$porduct->id}}"
                                           class="btn waves-effect waves-light amber"><i
                                                    class="mdi-editor-mode-edit small"></i></a>
                                        <a href="/adm/del_galery/{{$porduct->id}}"
                                           class="btn waves-effect waves-light red darken-1"><i
                                                    class="mdi-action-delete small"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>
                            {!! $products->render() !!}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection