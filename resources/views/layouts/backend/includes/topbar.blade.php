 <!-- Start Topbar -->
 <div class="topbar">
        <!-- Start container-fluid -->
        <div class="container-fluid">
            <!-- Start row -->
            <div class="row align-items-center">
                <!-- Start col -->
                <div class="col-md-12 align-self-center">
                    <div class="togglebar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="logobar">
                                    <a href="{{route('pos')}}" class="logo-small"><img width="50px" src="{{ asset(get_static_option('backend_logo') ?? get_static_option('no_image')) }}" class="img-fluid" alt="logo"></a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="searchbar">
                                    <form>
                                        <div class="input-group">
                                          <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                          <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon2"><img src="assets/backend/images/svg-icon/search.svg" class="img-fluid" alt="search"></button>
                                          </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                {{ Session::get('branch')->id }}
                                {{ Session::get('branch')->name }}
                            </li>
                        </ul>
                    </div>
                    <div class="infobar">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <div class="notifybar">
                                    <a href="javascript:void(0)" id="infobar-notifications-open" class="infobar-icon">
                                        <img src="assets/backend/images/svg-icon/notifications.svg" class="img-fluid" alt="notifications">
                                        <span class="live-icon"></span>
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="settingbar">
                                    <a href="javascript:void(0)" id="infobar-settings-open" class="infobar-icon">
                                        <img src="assets/backend/images/svg-icon/settings.svg" class="img-fluid" alt="settings">
                                    </a>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="languagebar">
                                    <div class="dropdown">
                                      <a class="dropdown-toggle" href="#" role="button" id="languagelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag flag-icon-us flag-icon-squared"></i></a>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="languagelink">
                                        <a class="dropdown-item" href="#"><i class="flag flag-icon-us flag-icon-squared"></i>English</a>
                                        <a class="dropdown-item" href="#"><i class="flag flag-icon-cn flag-icon-squared"></i>Chinese</a>
                                        <a class="dropdown-item" href="#"><i class="flag flag-icon-ru flag-icon-squared"></i>Russian</a>
                                        <a class="dropdown-item" href="#"><i class="flag flag-icon-es flag-icon-squared"></i>Spanish</a>
                                      </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item">
                                <div class="profilebar">
                                    <div class="dropdown">
                                      <a class="dropdown-toggle" href="#" role="button" id="profilelink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/backend/images/users/profile.svg" class="img-fluid" alt="profile"><span class="feather icon-chevron-down live-icon"></span></a>
                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="profilelink">
                                        <div class="dropdown-item">
                                            <div class="profilename">
                                              <h5>Shourya Kumar</h5>
                                              <p>Social Media Strategist</p>
                                            </div>
                                        </div>
                                        <div class="dropdown-item">
                                            <div class="userbox">
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="assets/backend/images/svg-icon/user.svg" class="img-fluid" alt="user"></a></li>
                                                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="assets/backend/images/svg-icon/email.svg" class="img-fluid" alt="email"></a></li>
                                                    <li class="list-inline-item"><a href="#" class="profile-icon"><img src="assets/backend/images/svg-icon/logout.svg" class="img-fluid" alt="logout"></a></li>
                                                </ul>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item menubar-toggle">
                                <div class="menubar">
                                    <a class="menu-hamburger navbar-toggle bg-transparent" href="javascript:void();" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="true">
                                        <img src="assets/backend/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                        <img src="assets/backend/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                    </a>
                                 </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
        <!-- End container-fluid -->
    </div>
    <!-- End Topbar -->
