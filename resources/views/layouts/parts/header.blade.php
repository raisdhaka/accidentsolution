<div class="header">
    <div class="container">
        <div class="row vmargin">
            <div id="website_logo"
                class="col-md-5 tpad xs-nopad xs-hpad sm-text-center xs-bmargin header-left-container">
                <a href={{ config('app.url', 'http://www.accidentsolutionllc.com') }} title="Accident Solution">
                    <img width="450" height="70" src="{{asset('images/Accident-Solutions-Can-Help-2.png')}}"
                        alt="Accident Solution">
                </a>
                <div class="clearfix"></div>
            </div>
            <style type='text/css'>
                body input.tt-hint,
                body input.form-control.normal-autosuggest-input.tt-query {
                    background-color: white !important;
                }

                .input-group-sm .input-group-addon .fa {
                    font-size: 15px;
                }
            </style>
            <div class="col-md-7 text-right sm-text-center header-right-container nolpad xs-hpad">
                <ul class="mini-nav nobmargin list-inline xs-nopad xs-tmargin vpad">
                    <li class='bmargin xs-nomargin'><span id='link249' class='bmargin'> 888-852-9911</span></li>
                    <li class='bmargin xs-nomargin'><a href='{{route('contact')}}' id='link250'
                            class='hpad bmargin'>Contact Us</a></li>
                            @guest
                            <li class='bmargin xs-nomargin'><a href='{{route('login')}}' id='link251' class='rpad bmargin'>Member
                            Login</a></li>
                            @else
                            <li class='bmargin xs-nomargin'>
                                {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hello {{ Auth::user()->name }}
                                </a> --}}

                                <li class='bmargin xs-nomargin'>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                            </li>
                            @endguest
                    <li class='bmargin norpad xs-nopad xs-vmargin'><a href='/join' id='link252'
                            class='btn btn_get_listed bold'> - Get Listed Today</a></li>
                </ul>
                <div class="clearfix"></div>
                <form action="/search_results" name="frm1" class="form-inline website-search">
                    <div class="input-group input-group-sm bmargin sm-autosuggest">
                        <span class="input-group-addon hidden-md"><i class="fa fa-search"></i></span>
                        <input type="text" placeholder="Category" value="" name="q"
                            class="member_search form-control input-sm" autocomplete="off">
                    </div>
                    <div class="input-group input-group-sm bmargin">
                        <span class="input-group-addon hidden-md"><i class="fa fa-location-arrow"></i></span>
                        <input type="text" placeholder="City or Zip Code" value="" id="location_google_maps_header"
                            name="location_value" class="googleSuggest googleLocation form-control">
                    </div>
                    <input type="submit" value="Search" class="btn btn-sm btn_search bmargin xs-btn-block bold">
                </form>
            </div>
        </div>
    </div>

    @include('layouts.parts.menu')
    <!--CSS IF MENU IS FIXED TOP-->

</div>
