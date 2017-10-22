@extends('admin.master')

@section('content')
    <div class="container">
        <div id="profile-page" class="section">
            <div id="profile-page-content" class="row">
                <div id="profile-page-sidebar" class="col s12 m6 row">
                    <div class="card light-blue z-depth-1">
                        <div class="card-content white-text">
                            <span class="card-title">My Profile</span>
                        </div>
                    </div>
                    <ul id="profile-page-about-details" class="collection z-depth-1">
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-action-store"></i> Store
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">{{$company->company_name}}</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-maps-place"></i> Address
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">{{$company->address}}</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-social-domain"></i> City
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">{{$company->city}}</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-content-mail"></i> Email
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">{{$company->email}}</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-communication-call"></i>
                                    Phone
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">{{$company->handphone}}</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-action-account-circle"></i>
                                    Facebook
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">{{$company->facebook_url}}</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-action-account-circle"></i>
                                    Instagram
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">{{$company->instagram_url}}</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-action-account-circle"></i>
                                    Twitter
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">{{$company->twitter_url}}</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="profile-page-wall" class="col s12 m6">
                    <div class="card-panel z-depth-1">
                        <div class="row">
                            <form class="col s12" action="/adm/update_account" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-action-store prefix"></i>
                                        <input name="company_name" type="text" required
                                               value="{{$company->company_name}}">
                                        <label for="name">Store</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input name="address" type="text" required value="{{$company->address}}">
                                        <label for="address">Address</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-social-domain prefix"></i>
                                        <input name="city" type="text" required value="{{$company->city}}">
                                        <label for="City">City</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-content-mail prefix"></i>
                                        <input name="email" type="text" required value="{{$company->email}}">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-communication-call prefix"></i>
                                        <input id="phone_code" name="handphone" type="text" required
                                               value="{{$company->handphone}}">
                                        <label for="phone_code">Phone</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn light-blue darken-1 waves-effect waves-light right"
                                                type="submit" name="action">CHANGE
                                            <i class="mdi-content-send right"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card light-blue z-depth-1">
                <div class="card-content white-text">
                    <span class="card-title">Additional Profile</span>
                </div>
            </div>

            <div id="profile-page-content" class="card-panel z-depth-1">
                <form action="/adm/update_additional" method="post">
                    {{csrf_field()}}
                    <div class="input-field col s12">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input name="facebook" type="text" required value="{{$company->facebook_url}}">
                        <label for="facebook">Facebook URL</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input name="instagram" type="text" required value="{{$company->instagram_url}}">
                        <label for="instagram">Instagram URL</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input name="twitter" type="text" required value="{{$company->twitter_url}}">
                        <label for="twitter">Twitter URL</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="mdi-maps-place prefix"></i>
                        <input name="maps" type="text" required value="{{$company->maps}}">
                        <label for="address">Maps</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="mdi-action-info prefix"></i>
                        <textarea name="about_company" class="materialize-textarea" length="600"
                                  required>{{$company->about_company}}</textarea>
                        <label for="text"> About us</label>
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
    </div>
@endsection