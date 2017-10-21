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
                                <div class="col s8 grey-text text-darken-4 right-align">Bro Windows</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-maps-place"></i> Address
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">Jalan Gajah Mada 24
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-social-domain"></i> City
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">Jember</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-content-mail"></i> Email
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">alamardianto@gmail.com
                                </div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-communication-call"></i>
                                    Phone
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">089608560788</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-action-account-circle"></i>
                                    Facebook
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">https://www.facebook.com/</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-action-account-circle"></i>
                                    Instagram
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">https://www.instagram.com/</div>
                            </div>
                        </li>
                        <li class="collection-item">
                            <div class="row">
                                <div class="col s4 grey-text darken-1"><i class="mdi-action-account-circle"></i>
                                    Twitter
                                </div>
                                <div class="col s8 grey-text text-darken-4 right-align">https://www.twitter.com/</div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="profile-page-wall" class="col s12 m6">
                    <div class="card-panel z-depth-1">
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-action-store prefix"></i>
                                        <input id="name" type="text">
                                        <label for="name">Store</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-maps-place prefix"></i>
                                        <input id="address" type="text">
                                        <label for="address">Address</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-social-domain prefix"></i>
                                        <input id="City" type="text">
                                        <label for="City">City</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-content-mail prefix"></i>
                                        <input id="email" type="text">
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <i class="mdi-communication-call prefix"></i>
                                        <input id="phone_code" type="text">
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
                <form>
                    <div class="input-field col s12">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input name="facebook" type="text">
                        <label for="facebook">Facebook URL</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input name="instagram" type="text">
                        <label for="instagram">Instagram URL</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="mdi-action-account-circle prefix"></i>
                        <input name="twitter" type="text">
                        <label for="twitter">Twitter URL</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="mdi-maps-place prefix"></i>
                        <input id="address" type="text">
                        <label for="address">Address</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="mdi-action-info prefix"></i>
                        <textarea id="message5" class="materialize-textarea" length="600"></textarea>
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