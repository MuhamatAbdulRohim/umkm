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
                            <tr>
                                <td>1</td>
                                <td>image sdfmasldkfj alkdsjfla;kdj adklfjal;kdf</td>
                                <td>image sdfmasldkfj alkdsjfla;kdj adklfjal;kdf</td>
                                <td class="center">
                                    <button class="btn waves-effect waves-light amber"><i
                                                class="mdi-editor-mode-edit small"></i></button>
                                    <button class="btn waves-effect waves-light red darken-1"><i
                                                class="mdi-action-delete small"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>image sdfmasldkfj alkdsjfla;kdj adklfjal;kdf</td>
                                <td>image sdfmasldkfj alkdsjfla;kdj adklfjal;kdf</td>
                                <td class="center">
                                    <button class="btn waves-effect waves-light amber"><i
                                                class="mdi-editor-mode-edit small"></i></button>
                                    <button class="btn waves-effect waves-light red darken-1"><i
                                                class="mdi-action-delete small"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>image sdfmasldkfj alkdsjfla;kdj adklfjal;kdf</td>
                                <td>image sdfmasldkfj alkdsjfla;kdj adklfjal;kdf</td>
                                <td class="center">
                                    <button class="btn waves-effect waves-light amber"><i
                                                class="mdi-editor-mode-edit small"></i></button>
                                    <button class="btn waves-effect waves-light red darken-1"><i
                                                class="mdi-action-delete small"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection