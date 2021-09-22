<div class="app-header header main-header1">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="index.html">
                <img src="{{ asset('backend/assets/images/brand/logo.png') }}" class="header-brand-img desktop-lgo" alt="Azea logo">
                <img src="{{ asset('backend/assets/images/brand/logo1.png') }}" class="header-brand-img dark-logo" alt="Azea logo">
                <img src="{{ asset('backend/assets/images/brand/favicon.png') }}" class="header-brand-img mobile-logo" alt="Azea logo">
                <img src="{{ asset('backend/assets/images/brand/favicon1.png') }}" class="header-brand-img darkmobile-logo" alt="Azea logo">
            </a>
            <div class="app-sidebar__toggle d-flex" data-bs-toggle="sidebar">
                <a class="open-toggle" href="javascript:void0;">
                    <svg xmlns="http://www.w3.org/2000/svg" class="feather feather-align-left header-icon" height="24" viewbox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 19h18v2H3zM3 7h12v2H3zm0-4h18v2H3zm0 12h12v2H3zm0-4h18v2H3z"></path></svg>
                </a>
            </div>
            <div class="mt-1 d-md-block d-none">
                <form class="form-inline">
                    <div class="search-element">
                        <input type="search" class="form-control header-search mobile-view-search" placeholder="Search…" aria-label="Search" tabindex="1">
                        <button class="btn btn-primary-color" type="submit">
                        <svg class="header-icon search-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewbox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
                        </button>
                        <a href="javascript:void0;" class="close-btn"><i class="fe fe-x search-bar-escape"></i></a>
                    </div>
                </form>
            </div><!-- SEARCH -->
            <div class="d-flex order-lg-2 ms-auto main-header-end">
                <button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="true" aria-label="Toggle navigation">
                    <i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
                </button>
                <div class="navbar navbar-expand-lg navbar-collapse responsive-navbar p-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2">
                            <div class="dropdown d-lg-none d-flex responsive-search">
                                <a href="javascript:void0;" class="nav-link icon" data-bs-toggle="dropdown">
                                    <svg class="header-icon search-icon" xmlns="http://www.w3.org/2000/svg" height="24" viewbox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control" placeholder="Search....">
                                        <button class="btn btn-primary-color" type="submit">
                                            <svg class="header-icon search-icon p-1 mt-1" xmlns="http://www.w3.org/2000/svg" height="24" viewbox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
                                        </button>
                                    </div>
                                </div>
                            </div><!-- SEARCH -->
                            <div class="dropdown d-flex">
                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                    <span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon" enable-background="new 0 0 24 24" height="24px" viewbox="0 0 24 24" width="24px" fill="none"><rect fill="none" height="24" width="24"></rect><circle cx="12" cy="12" opacity=".3" r="3"></circle><path d="M12,9c1.65,0,3,1.35,3,3s-1.35,3-3,3s-3-1.35-3-3S10.35,9,12,9 M12,7c-2.76,0-5,2.24-5,5s2.24,5,5,5s5-2.24,5-5 S14.76,7,12,7L12,7z M2,13l2,0c0.55,0,1-0.45,1-1s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S1.45,13,2,13z M20,13l2,0c0.55,0,1-0.45,1-1 s-0.45-1-1-1l-2,0c-0.55,0-1,0.45-1,1S19.45,13,20,13z M11,2v2c0,0.55,0.45,1,1,1s1-0.45,1-1V2c0-0.55-0.45-1-1-1S11,1.45,11,2z M11,20v2c0,0.55,0.45,1,1,1s1-0.45,1-1v-2c0-0.55-0.45-1-1-1C11.45,19,11,19.45,11,20z M5.99,4.58c-0.39-0.39-1.03-0.39-1.41,0 c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0s0.39-1.03,0-1.41L5.99,4.58z M18.36,16.95 c-0.39-0.39-1.03-0.39-1.41,0c-0.39,0.39-0.39,1.03,0,1.41l1.06,1.06c0.39,0.39,1.03,0.39,1.41,0c0.39-0.39,0.39-1.03,0-1.41 L18.36,16.95z M19.42,5.99c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06c-0.39,0.39-0.39,1.03,0,1.41 s1.03,0.39,1.41,0L19.42,5.99z M7.05,18.36c0.39-0.39,0.39-1.03,0-1.41c-0.39-0.39-1.03-0.39-1.41,0l-1.06,1.06 c-0.39,0.39-0.39,1.03,0,1.41s1.03,0.39,1.41,0L7.05,18.36z"></path></svg></span>
                                    <span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon" enable-background="new 0 0 24 24" height="24px" viewbox="0 0 24 24" width="24px" fill="none"><rect fill="none" height="24" width="24"></rect><path d="M9.37,5.51C9.19,6.15,9.1,6.82,9.1,7.5c0,4.08,3.32,7.4,7.4,7.4c0.68,0,1.35-0.09,1.99-0.27 C17.45,17.19,14.93,19,12,19c-3.86,0-7-3.14-7-7C5,9.07,6.81,6.55,9.37,5.51z" opacity=".3"></path><path d="M9.37,5.51C9.19,6.15,9.1,6.82,9.1,7.5c0,4.08,3.32,7.4,7.4,7.4c0.68,0,1.35-0.09,1.99-0.27C17.45,17.19,14.93,19,12,19 c-3.86,0-7-3.14-7-7C5,9.07,6.81,6.55,9.37,5.51z M12,3c-4.97,0-9,4.03-9,9s4.03,9,9,9s9-4.03,9-9c0-0.46-0.04-0.92-0.1-1.36 c-0.98,1.37-2.58,2.26-4.4,2.26c-2.98,0-5.4-2.42-5.4-5.4c0-1.81,0.89-3.42,2.26-4.4C12.92,3.04,12.46,3,12,3L12,3z"></path></svg></span>
                                </a>
                            </div>
                         <!-- Theme-Layout -->
                            <div class="dropdown   header-fullscreen d-flex">
                                <a class="nav-link icon full-screen-link p-0" id="fullscreen-button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="header-icon" height="24" viewbox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M3 19.01h18V4.99H3v14.02zM14 15h3v-3h2v5h-5v-2zM5 7h5v2H7v3H5V7z" opacity=".3"></path><path d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16.01H3V4.99h18v14.02zM7 9h3V7H5v5h2zm12 3h-2v3h-3v2h5z"></path></svg>
                                </a>
                            </div>
                            <div class="dropdown header-message d-flex">
                                <a class="nav-link icon" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon" height="24" viewbox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M20 4H4v13.17L5.17 16H20V4zm-2 10H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z" opacity=".3"></path><path d="M20 18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14zm-16-.83V4h16v12H5.17L4 17.17zM6 12h12v2H6zm0-3h12v2H6zm0-3h12v2H6z"></path></svg>
                                    <span class="badge bg-success side-badge">5</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  animated">
                                    <div class="dropdown-header">
                                        <h6 class="mb-0">Messages</h6>
                                        <span class="badge fs-10 bg-secondary br-7 ms-auto">New</span>
                                    </div>
                                    <div class="header-dropdown-list message-menu">
                                        <a class="dropdown-item border-bottom" href="chat.html">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <span class="avatar avatar-md brround align-self-center cover-image" data-image-src="../../assets/images/users/1.jpg"></span>
                                                </div>
                                                <div class="d-flex mt-1 mb-1">
                                                    <div class="ps-3">
                                                        <span class="mb-1 fs-13">Joan Powell</span>
                                                        <p class="fs-12 mb-1">All the best your template awesome</p>
                                                        <div class="fs-11 text-muted">
                                                            3 hours ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item border-bottom" href="chat.html">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <span class="avatar avatar-md brround align-self-center cover-image" data-image-src="../../assets/images/users/2.jpg"></span>
                                                </div>
                                                <div class="d-flex mt-1 mb-1">
                                                    <div class="ps-3">
                                                        <span class="mb-1 s-13">Gavin Sibson</span>
                                                        <p class="fs-12 mb-1">Hey! there I'm available</p>
                                                        <div class="fs-11 text-muted">
                                                            5 hour ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item border-bottom" href="chat.html">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <span class="avatar avatar-md brround align-self-center cover-image" data-image-src="../../assets/images/users/3.jpg"></span>
                                                </div>
                                                <div class="d-flex mt-1 mb-1">
                                                    <div class="ps-3">
                                                        <span class="mb-1">Julian Kerr</span>
                                                        <p class="fs-12 mb-1">Just created a new blog post</p>
                                                        <div class="fs-11 text-muted">
                                                            45 mintues ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item border-bottom" href="chat.html">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <span class="avatar avatar-md brround align-self-center cover-image" data-image-src="../../assets/images/users/4.jpg"></span>
                                                </div>
                                                <div class="d-flex mt-1 mb-1">
                                                    <div class="ps-3">
                                                        <span class=" fs-13 mb-1">Cedric Kelly</span>
                                                        <p class="fs-12 mb-1">Added new comment on your photo</p>
                                                        <div class="fs-11 text-muted">
                                                            2 days ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item border-bottom" href="chat.html">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <span class="avatar avatar-md brround align-self-center cover-image" data-image-src="../../assets/images/users/6.jpg"></span>
                                                </div>
                                                <div class="d-flex mt-1 mb-1">
                                                    <div class="ps-3">
                                                        <span class="mb-1 fs-13">Julian Kerr</span>
                                                        <p class="fs-12 mb-1">Your payment invoice is generated</p>
                                                        <div class="fs-11 text-muted">
                                                            3 days ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="chat.html">
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <span class="avatar avatar-md brround align-self-center cover-image" data-image-src="../../assets/images/users/7.jpg"></span>
                                                </div>
                                                <div class="d-flex mt-1 mb-1">
                                                    <div class="ps-3">
                                                        <span class="mb-1 fs-13">Faith Dickens</span>
                                                        <p class="fs-12 mb-1">Please check your mail....</p>
                                                        <div class="fs-11 text-muted">
                                                            4 days ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=" text-center p-2 pt-3 border-top">
                                        <a href="chat.html" class="fs-13 btn btn-primary btn-md btn-block">See More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown header-notify d-flex">
                                <a class="nav-link icon" data-bs-toggle="dropdown">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="header-icon" height="24" viewbox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 6.5c-2.49 0-4 2.02-4 4.5v6h8v-6c0-2.48-1.51-4.5-4-4.5z" opacity=".3"></path><path d="M18 16v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zm-4 5c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2z"></path></svg><span class="pulse "></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow  animated">
                                    <div class="dropdown-header">
                                        <h6 class="mb-0">Notifications</h6>
                                        <span class="badge fs-10 bg-secondary br-7 ms-auto">New</span>
                                    </div>
                                    <div class="notify-menu">
                                        <a href="email-inbox.html" class="dropdown-item border-bottom d-flex ps-4">
                                            <div class="notifyimg  text-primary bg-primary-transparent border-primary"> <i class="fa fa-envelope"></i> </div>
                                            <div>
                                                <span class="fs-13">Message Sent.</span>
                                                <div class="small text-muted">3 hours ago</div>
                                            </div>
                                        </a>
                                        <a href="email-inbox.html" class="dropdown-item border-bottom d-flex ps-4">
                                            <div class="notifyimg  text-secondary bg-secondary-transparent border-secondary"> <i class="fa fa-shopping-cart"></i></div>
                                            <div>
                                                <span class="fs-13">Order Placed</span>
                                                <div class="small text-muted">5  hour ago</div>
                                            </div>
                                        </a>
                                        <a href="email-inbox.html" class="dropdown-item border-bottom d-flex ps-4">
                                            <div class="notifyimg  text-danger bg-danger-transparent border-danger"> <i class="fa fa-gift"></i> </div>
                                            <div>
                                                <span class="fs-13">Event Started</span>
                                                <div class="small text-muted">45 mintues ago</div>
                                            </div>
                                        </a>
                                        <a href="email-inbox.html" class="dropdown-item border-bottom d-flex ps-4 mb-2">
                                            <div class="notifyimg  text-success  bg-success-transparent border-success"> <i class="fa fa-windows"></i> </div>
                                            <div>
                                                <span class="fs-13">Your Admin lanuched</span>
                                                <div class="small text-muted">1 daya ago</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class=" text-center p-2">
                                        <a href="email-inbox.html" class="btn btn-primary btn-md fs-13 btn-block">View All</a>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown profile-dropdown d-flex">
                                <a href="javascript:void0;" class="nav-link pe-0 leading-none" data-bs-toggle="dropdown">
                                    <span class="header-avatar1">
                                        <img src="{{ asset('backend/assets/images/users/2.jpg') }}" alt="img" class="avatar avatar-md brround">
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow animated">
                                    <div class="text-center">
                                        <div class="text-center user pb-0 font-weight-bold">{{ Auth::user()->name }}</div>
                                        <span class="text-center user-semi-title">{{ Auth::user()->role }}</span>
                                        <div class="dropdown-divider"></div>
                                    </div>
                                    <a class="dropdown-item d-flex" href="profile-1.html">
                                        <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" height="24" viewbox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z"></path></svg>
                                        <div class="fs-13">Profile</div>
                                    </a>
                                    <a class="dropdown-item d-flex" href="search.html">
                                        <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" height="24" viewbox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"></path></svg>
                                        <div class="fs-13">Settings</div>
                                    </a>

                                    <a class="dropdown-item d-flex" href="{{ route('logout') }}"  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        <svg class="header-icon me-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewbox="0 0 24 24" width="24"><g><rect fill="none" height="24" width="24"></rect></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"></path></g></svg>
                                        <div class="fs-13">Sign Out</div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <a class="nav-link icon demo-icon">
                        <svg class="header-icon settings-icon fa-spin" xmlns="http://www.w3.org/2000/svg" height="24px" viewbox="0 0 24 24" width="24px" fill="#000000"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M19.28 8.6l-.7-1.21-1.27.51-1.06.43-.91-.7c-.39-.3-.8-.54-1.23-.71l-1.06-.43-.16-1.13L12.7 4h-1.4l-.19 1.35-.16 1.13-1.06.44c-.41.17-.82.41-1.25.73l-.9.68-1.05-.42-1.27-.52-.7 1.21 1.08.84.89.7-.14 1.13c-.03.3-.05.53-.05.73s.02.43.05.73l.14 1.13-.89.7-1.08.84.7 1.21 1.27-.51 1.06-.43.91.7c.39.3.8.54 1.23.71l1.06.43.16 1.13.19 1.36h1.39l.19-1.35.16-1.13 1.06-.43c.41-.17.82-.41 1.25-.73l.9-.68 1.04.42 1.27.51.7-1.21-1.08-.84-.89-.7.14-1.13c.04-.31.05-.52.05-.73 0-.21-.02-.43-.05-.73l-.14-1.13.89-.7 1.1-.84zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" opacity=".3"></path><path d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98s.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
