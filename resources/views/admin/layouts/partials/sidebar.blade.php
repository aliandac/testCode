<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
    <div class="kt-header-mobile__logo">
        <a href="{{route('admin')}}">
            <img alt="Logo" src="{{asset('/img/logo.png')}}" height="35px"/>
        </a>
    </div>
    <div class="kt-header-mobile__toolbar">
        <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>

        <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
    </div>
</div>
<!-- end:: Header Mobile -->
<div class="kt-grid kt-grid--hor kt-grid--root">
    <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
        <!-- begin:: Aside -->
        <button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
        <div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">
            <!-- begin:: Aside -->
            <div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
                <div class="kt-aside__brand-logo">
                    <a href="{{route('admin')}}">
                        <img alt="Logo" src="{{asset('/img/logo.png')}}" width="100%"/>
                    </a>
                </div>
                <div class="kt-aside__brand-tools">
                    <button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler">
                        <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                    <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
                                          id="Path-94" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                                    <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
                                          id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3"
                                          transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
                                </g>
                            </svg></span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                   class="kt-svg-icon">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon id="Shape" points="0 0 24 0 24 24 0 24"/>
                                    <path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z"
                                          id="Path-94" fill="#000000" fill-rule="nonzero"/>
                                    <path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z"
                                          id="Path-94" fill="#000000" fill-rule="nonzero" opacity="0.3"
                                          transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999) "/>
                                </g>
                            </svg></span>
                    </button>
                </div>
            </div>
            <!-- end:: Aside -->
            <!-- begin:: Aside Menu -->
            <div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
                <div id="kt_aside_menu" class="kt-aside-menu " data-ktmenu-vertical="1" data-ktmenu-scroll="1" data-ktmenu-dropdown-timeout="500">
                    <ul class="kt-menu__nav ">
                        <li class="kt-menu__item" aria-haspopup="true"><a href="{{route('admin')}}" class="kt-menu__link "><span class="kt-menu__link-icon"><svg
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
                                            class="kt-svg-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon id="Bound" points="0 0 24 0 24 24 0 24"/>
                                            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z"
                                                  id="Shape" fill="#000000" fill-rule="nonzero"/>
                                            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z"
                                                  id="Path" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg></span><span class="kt-menu__link-text">Anasayfa</span></a></li>

                    <!-- ---------------------------------------------------------------------------- -->
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Makine Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('create-machine')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Makine Ekle</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('inactive-machines')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekleyen Makineler</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('index-machines')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onaylanmış Makineler</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('machine_category.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Kategori Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('machine_category.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Kategori Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Karıyer Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('companyWorkingPerson.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekliyen İlanlar</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('activeCompanyWorkingPerson')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Aktif İlanlar</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('CvPerson.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekliyen Cv</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('activeCvPerson')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Aktif Cvler</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Fuar Sektörü</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('fair-sector.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Fuar Sektör Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('fair-sector.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Fuar Sektör Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Reklam Slayt</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('header-slide.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Slayt Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('header-slide.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Slayt Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Fuar Kategori</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('fair-category.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Fuar Kategori Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('fair-category.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Fuar Kategori Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Fuar</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('fairs.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Fuar Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('fairs.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Fuar Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Sanal Fuarlar</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('virtual-fairs.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Sanal Fuar Listesi</span>
                                        </a>
                                    </li>
                                   <!-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('virtual-fairs.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Sanal Fuar Ekle</span>
                                        </a>
                                    </li>-->
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('virtualFairForm')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Sanal Fuar Formları</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('virtualFairCategory.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Sanal Fuar Kategori</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Sanal Fuar Stand</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('virtualFairStand.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Sanal Fuar Stand Listesi</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Haber Kategorileri</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('news-category.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Kategori Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('news-category.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Kategori Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Haber Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('news.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Haber Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('news-inactive')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekleyenler</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('news.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Haber Ekle</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('NewImageList.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Haber Resmi listesi</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Etkinlik Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('Activity_Is_Active')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekleyen Etkinlikler</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('Activity_Active')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onaylanmış Etkinlikler</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Talep Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('Demand_Is_Active_list')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekleyen Talepler</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('Demand_Active_list')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onaylanmış Talepler</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('demand-form-list')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Talep Formları</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Merkez Firma Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('company-mapping.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Firma Merkeze Bağlama</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('FormListCompanyMapping')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Firma Merkeze Formları</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Firma Şikayet Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('companyFeedBackInBackInActive')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Pasif Firma Şikayet Formu</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('companyFeedBackInBack')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Aktif Firma Şikayet Formu</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('companyFeedBackInBackObjectionList')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Firma İtiraz Mesajları</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('companyFeedBackInBackObjectionListOk')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Kapanmış Şikayetler</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Firma Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('create_company_by_admin')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Yeni firma ekle</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('Company_is_Active_list')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekleyen Firmalar</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('Company_List')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Firmalar</span>
                                        </a>
                                    </li>

                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('company-survey-list')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Firma Anket Listesi</span>
                                        </a>
                                    </li>

                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('owner-message.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Firma Sahibi Mesajları</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('CompanyInActiveImageList')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekleyen Resimler</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('companyVideo.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekleyen Videolar</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('tradeeyWelcomeFormListAdmin')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Hoşgeldin  Formları</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Franchising Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('franchisingCompany.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Yeni Franchising ekle</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('franchisingCompany.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Franchising Listesi</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">User Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('notCompanyList')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Firmasız Kullanıcılar</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Firma Kategori Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('category.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Kategori Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('category.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Kategori Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Firma Döküman İşlemleri</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('inActiveDocument')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekleyen Dökümanlar</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('activeDocument')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Dökümanlar</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Ürün Kategori Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('product_category.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Ürün Kategori Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('product_category.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Ürün Kategori Ekle</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('FirstProductCategory.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text"> Ürün Ana kategori Ayar</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('product_slider.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text"> Ürün Kategori Slider</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Ürün Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('product_admin.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekliyen Ürün Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('product-company-admin')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text"> Ürün Listesi</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Ürün Kampanya Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('product_campaign.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text"> Ürün Kapanya Listesi</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">İhale Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('bid.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">İhale Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('bid.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">İhale Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Blog Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('comments.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekleyen Yorumlar</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('comments.all')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Tüm Yorumlar</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('blog.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onaylanmış Bloglar</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('blog-inactive')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Onay Bekleyen Bloglar</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Slider Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('slider.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Slayt Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('slider.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Slayt Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Slider Kategori</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('slidesCategory.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Slayt Kategori Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('slidesCategory.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Slayt Kategori Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Paket Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('packages.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Aktif Paketler</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('package-buying')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Satın Alınan Paketler</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Reklam Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('advertisement.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Reklam Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('advertisement.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Reklam Ekle</span>
                                        </a>
                                    </li>

                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('reserving-ad.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Rezerve Edilenler</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Üniversite İşlemleri</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('university.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Üniversite Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('universityFaculty.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Fakulte Listesi</span>
                                        </a>
                                    </li>

                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('universityEpisode.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Bölüm Listesi</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Ülke Kategorileri</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('country-category.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Kategori Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('country-category.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Kategori Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Ülke Bilgileri</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('country-info.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Ülke Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('country-info.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Ülke Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Öne Çıkarılanlar</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('highligts.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Liste</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('highligts.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">SSS</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('faq.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">SSS Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('faq.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">SSS Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="{{route('countries.index')}}" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-globe-americas"></i>
                                </span>
                            <span class="kt-menu__link-text">Ülkeler</span></a>
                        </li>
                        {{-- <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-shopping-bag"></i>
                                </span>
                                <span class="kt-menu__link-text">Referanslar</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('referral.index')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Referans Listesi</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('referral.create')}}" class="kt-menu__link kt-menu__toggle">
                                            <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i>
                                            <span class="kt-menu__link-text">Referans Ekle</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li> --}}
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="{{route('complaint.index')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                        <i class="fa-whmcs fab"></i>
                                    </span><span class="kt-menu__link-text">Firma Şikayet Listesi</span></a>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="{{route('settings')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                        <i class="fa-whmcs fab"></i>
                                    </span><span class="kt-menu__link-text">Genel Ayarlar</span></a>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="{{route('subscribe.index')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                        <i class="fa-whmcs fab"></i>
                                    </span><span class="kt-menu__link-text">Abone Listesi</span></a>
                        </li>
                        {{--<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fa fa-list"></i>
                                </span>
                                <span class="kt-menu__link-text">İçerik Yönetimi</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                                <i class="fa fa-shopping-basket"></i>
                                                            </span>
                                            <span class="kt-menu__link-text">Paket</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('package.index')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Paket Listesi</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{route('package.create')}}" class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Paket Ekle</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    --}}{{--<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                            <i class="fa fa-tags"></i>
                                        </span>
                                        <span class="kt-menu__link-text">Yazılım Kategorileri</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('s_categories.index')}}" class="kt-menu__link kt-menu__toggle">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Kategori Listesi</span></a></li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('s_categories.create')}}" class="kt-menu__link kt-menu__toggle">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Kategori Ekle</span></a></li>
                                            </ul>
                                        </div>
                                    </li>--}}{{--

                                    --}}{{--<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                            <i class="fa fa-tags"></i>
                                        </span>
                                        <span class="kt-menu__link-text">Yazılım</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('software.index')}}" class="kt-menu__link kt-menu__toggle">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Yazılımlar Listesi</span></a></li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('software.create')}}" class="kt-menu__link kt-menu__toggle">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Yazılım Ekle</span></a></li>
                                            </ul>
                                        </div>
                                    </li>--}}{{--
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                                <i class="fa fa-tags"></i>
                                                            </span>
                                            <span class="kt-menu__link-text">Blog Kategori</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{route('categories.index')}}" class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Kategori Listesi</span></a></li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{route('categories.create')}}" class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Kategori Ekle</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                            <i class="fab fa-blogger"></i>
                                                                </span><span class="kt-menu__link-text">Blog</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('blog.index')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Blog Listesi</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('blog.create')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Blog Ekle</span></a></li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{route('comments.index')}}" class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Yorum Listesi</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                            <i class="fab fa-blogger"></i>
                                                                </span><span class="kt-menu__link-text">Ekibimiz</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href=""
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Kişi Listesi</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href=""
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Kişi Ekle</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                            <i class="fab fa-blogger"></i>
                                                                </span><span class="kt-menu__link-text">Domain</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href=""
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Domain Uzantı Listesi</span></a></li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href=""
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Domain Uzantı Ekle</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                        <i class="fa fa-question-circle"></i>
                                                    </span>
                                            <span class="kt-menu__link-text">SSS</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('faq.index')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">SSS Listesi</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('faq.create')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">SSS Ekle</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                            <i class="fa fa-comment"></i>
                                                            </span><span class="kt-menu__link-text">Müşteri Yorumları</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{route('customer-comment.index')}}" class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Yorum Listesi</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{route('customer-comment.create')}}" class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Yorum Ekle</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                        <i class="fa fa-sliders-h"></i>
                                                            </span><span class="kt-menu__link-text">Slayt</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('slider.index')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Slayt Listesi</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('slider.create')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Slayt Ekle</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                        <i class="fa-video fa"></i>
                                                            </span><span class="kt-menu__link-text">Videolarımız</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('video.index')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Video Listesi</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('video.create')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Video Ekle</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                        <i class="fa-newspaper fa"></i>
                                                    </span><span class="kt-menu__link-text">Basında</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('press.index')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">PDF Listesi</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('press.create')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">PDF Ekle</span></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                        <i class="fa-briefcase fa"></i>
                                                            </span><span class="kt-menu__link-text">Hizmetlerimiz</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{route('services.index')}}" class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Hizmet Listesi</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{route('services.create')}}" class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Hizmet Ekle</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    --}}{{--<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                        <i class="fa-project-diagram fa"></i>
                                    </span><span class="kt-menu__link-text">Projeler</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('projects.index')}}" class="kt-menu__link kt-menu__toggle">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Proje Listesi</span></a></li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('projects.create')}}" class="kt-menu__link kt-menu__toggle">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Proje Ekle</span></a></li>
                                            </ul>
                                        </div>
                                    </li>--}}{{--
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                        <i class="fa-images fa"></i>
                                                            </span><span class="kt-menu__link-text">Galeri</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('gallery.index')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Galeri Listesi</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{route('gallery.create')}}" class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Galeri Ekle</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    --}}{{--<li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                        <i class="fa-boxes fa"></i>
                                    </span><span class="kt-menu__link-text">Çalışma Alanlarımız</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('areas.index')}}" class="kt-menu__link kt-menu__toggle">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Çalışma Listesi</span></a></li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('areas.create')}}" class="kt-menu__link kt-menu__toggle">
                                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Çalışma Alanı Ekle</span></a></li>
                                            </ul>
                                        </div>
                                    </li>--}}{{--
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon">
                                                        <i class="fa-user-friends fa"></i>
                                                    </span><span class="kt-menu__link-text">Referanslar</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{route('referral.index')}}" class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span
                                                                class="kt-menu__link-text">Referans Listesi</span></a></li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a
                                                            href="{{route('referral.create')}}" class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Referans Ekle</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                     class="kt-menu__link kt-menu__toggle">
                                <span class="kt-menu__link-icon">
                                    <i class="fab fa-acquisitions-incorporated"></i></span>
                                <span class="kt-menu__link-text">Kurumsal</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="kt-menu__submenu ">
                                <span class="kt-menu__arrow"></span>
                                <ul class="kt-menu__subnav">
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;"
                                                                                                                                                 class="kt-menu__link kt-menu__toggle"><span
                                                    class="kt-menu__link-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                                                    viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect id="bound" x="0" y="0" width="24" height="24"/>
                                                            <rect id="Rectangle-7" fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/>
                                                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z"
                                                                  id="Combined-Shape" fill="#000000" opacity="0.3"/>
                                                        </g>
                                                    </svg></span><span class="kt-menu__link-text">Son Haberler</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                                            <ul class="kt-menu__subnav">
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('latest.index')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Haber Listesi</span></a>
                                                </li>
                                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('latest.create')}}"
                                                                                                                                                             class="kt-menu__link kt-menu__toggle">
                                                        <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Haber Ekle</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('who-we-are')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                                                        <i class="fa-question fa"></i>
                                                                    </span>
                                            <span class="kt-menu__link-text">Biz Kimiz</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('why_choose')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                                                        <i class="fab fa-rocketchat"></i>
                                                                    </span><span class="kt-menu__link-text">Neden Biz</span>
                                        </a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('ourcustomer.index')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                                                        <i class="fa-headphones-alt fa"></i>
                                                                    </span><span class="kt-menu__link-text">Müşteri Temsilcileri</span></a>
                                    </li>
                                    <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                                        <a href="{{route('counter.index')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                                            <i class="fa-superpowers fab"></i>
                                                        </span><span class="kt-menu__link-text">Sayaçlar</span></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ---------------------------------------------------------------------------- -->
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="{{route('message.index')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                        <i class="fab fa-facebook-messenger"></i>
                                    </span>
                                <span class="kt-menu__link-text">Mesajlar</span>
                            </a>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="{{route('menu.index')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                        <i class="fa-bars fa"></i>
                                    </span>
                                <span class="kt-menu__link-text">Menü Yönetimi</span>
                            </a>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="{{route('color.index')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                        <i class="fa-magic fa"></i>
                                    </span><span class="kt-menu__link-text">Renklendirme</span></a>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="{{route('settings')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                        <i class="fa-whmcs fab"></i>
                                    </span><span class="kt-menu__link-text">Genel Ayarlar</span></a>
                        </li>
                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover">
                            <a href="{{route('site-maintenance')}}" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                                        <i class="fa-moon fa"></i>
                                    </span><span class="kt-menu__link-text">Site Bakım</span></a>
                        </li> --}}

                        <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="javascript:;" class="kt-menu__link kt-menu__toggle"><span class="kt-menu__link-icon">
                            <i class="fa fa-laptop-code"></i>
                        </span>
                        <span class="kt-menu__link-text">Promosyon Özelliklerimiz</span><i class="kt-menu__ver-arrow la la-angle-right"></i></a>
                        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
                            <ul class="kt-menu__subnav">
                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('promotion-properties.index')}}" class="kt-menu__link kt-menu__toggle">
                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Özellik Listesi</span></a></li>
                                <li class="kt-menu__item  kt-menu__item--submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover"><a href="{{route('promotion-properties.create')}}" class="kt-menu__link kt-menu__toggle">
                                    <i class="kt-menu__link-bullet kt-menu__link-bullet--line"><span></span></i><span class="kt-menu__link-text">Özellik Ekle</span></a></li>
                            </ul>
                        </div>
                    </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
            <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed ">

                <!-- begin:: Header Menu -->
                <!-- Uncomment this to display the close button of the panel
                <button class="kt-header-menu-wrapper-close" id="kt_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                -->

                <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper">

                </div>
                <!-- end:: Header Menu -->
                <!-- begin:: Header Topbar -->
                <div class="kt-header__topbar">
                    {{--<div class="kt-header__topbar-item dropdown">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px" aria-expanded="true">
                            <span class="kt-header__topbar-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
                                        <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
                                        <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
                                        <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <form>
                                <!--begin: Head -->
                                <div class="kt-head kt-head--skin-dark" style="background-image: url(/metronic/themes/metronic/theme/default/demo1/dist/assets/media/misc/bg-1.jpg)">
                                    <h3 class="kt-head__title">
                                        User Quick Actions
                                        <span class="kt-space-15"></span>
                                        <span class="btn btn-success btn-sm btn-bold btn-font-md">23 tasks pending</span>
                                    </h3>
                                </div>
                                <!--end: Head -->

                                <!--begin: Grid Nav -->
                                <div class="kt-grid-nav kt-grid-nav--skin-light">
                                    <div class="kt-grid-nav__row">
                                        <a href="#" class="kt-grid-nav__item">
                                            <span class="kt-grid-nav__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" fill="#000000" opacity="0.3"></path>
                                                        <path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" fill="#000000"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="kt-grid-nav__title">Accounting</span>
                                            <span class="kt-grid-nav__desc">eCommerce</span>
                                        </a>
                                        <a href="#" class="kt-grid-nav__item">
                                                    <span class="kt-grid-nav__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"></rect>
                                                        <path d="M14.8571499,13 C14.9499122,12.7223297 15,12.4263059 15,12.1190476 L15,6.88095238 C15,5.28984632 13.6568542,4 12,4 L11.7272727,4 C10.2210416,4 9,5.17258756 9,6.61904762 L10.0909091,6.61904762 C10.0909091,5.75117158 10.823534,5.04761905 11.7272727,5.04761905 L12,5.04761905 C13.0543618,5.04761905 13.9090909,5.86843034 13.9090909,6.88095238 L13.9090909,12.1190476 C13.9090909,12.4383379 13.8240964,12.7385644 13.6746497,13 L10.3253503,13 C10.1759036,12.7385644 10.0909091,12.4383379 10.0909091,12.1190476 L10.0909091,9.5 C10.0909091,9.06606198 10.4572216,8.71428571 10.9090909,8.71428571 C11.3609602,8.71428571 11.7272727,9.06606198 11.7272727,9.5 L11.7272727,11.3333333 L12.8181818,11.3333333 L12.8181818,9.5 C12.8181818,8.48747796 11.9634527,7.66666667 10.9090909,7.66666667 C9.85472911,7.66666667 9,8.48747796 9,9.5 L9,12.1190476 C9,12.4263059 9.0500878,12.7223297 9.14285008,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L14.8571499,13 Z" fill="#000000" opacity="0.3"></path>
                                                        <path d="M9,10.3333333 L9,12.1190476 C9,13.7101537 10.3431458,15 12,15 C13.6568542,15 15,13.7101537 15,12.1190476 L15,10.3333333 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9,10.3333333 Z M10.0909091,11.1212121 L12,12.5 L13.9090909,11.1212121 L13.9090909,12.1190476 C13.9090909,13.1315697 13.0543618,13.952381 12,13.952381 C10.9456382,13.952381 10.0909091,13.1315697 10.0909091,12.1190476 L10.0909091,11.1212121 Z" fill="#000000"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="kt-grid-nav__title">Administration</span>
                                            <span class="kt-grid-nav__desc">Console</span>
                                        </a>
                                    </div>
                                    <div class="kt-grid-nav__row">
                                        <a href="#" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
        <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
    </g>
</svg>            </span>
                                            <span class="kt-grid-nav__title">Projects</span>
                                            <span class="kt-grid-nav__desc">Pending Tasks</span>
                                        </a>
                                        <a href="#" class="kt-grid-nav__item">
            <span class="kt-grid-nav__icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--lg">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
    </g>
</svg>            </span>
                                            <span class="kt-grid-nav__title">Customers</span>
                                            <span class="kt-grid-nav__desc">Latest cases</span>
                                        </a>
                                    </div>
                                </div>
                                <!--end: Grid Nav -->            </form>
                        </div>
                    </div>--}}
                    <!--end: Quick Actions -->
                    <!--begin: My Cart -->
                   {{-- <div class="kt-header__topbar-item dropdown">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="30px,0px" aria-expanded="true">
        <span class="kt-header__topbar-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"></rect>
        <path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"></path>
    </g>
</svg>                    </span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <form>
                                <!-- begin:: Mycart -->
                                <div class="kt-mycart">
                                    <div class="kt-mycart__head kt-head" style="background-image: url(/metronic/themes/metronic/theme/default/demo1/dist/assets/media/misc/bg-1.jpg);">
                                        <div class="kt-mycart__info">
                                            <span class="kt-mycart__icon"><i class="flaticon2-shopping-cart-1 kt-font-success"></i></span>
                                            <h3 class="kt-mycart__title">My Cart</h3>
                                        </div>
                                        <div class="kt-mycart__button">
                                            <button type="button" class="btn btn-success btn-sm" style=" ">2 Items</button>
                                        </div>
                                    </div>

                                    <div class="kt-mycart__body kt-scroll ps" data-scroll="true" data-height="245" data-mobile-height="200" style="height: 245px; overflow: hidden;">
                                        <div class="kt-mycart__item">
                                            <div class="kt-mycart__container">
                                                <div class="kt-mycart__info">
                                                    <a href="#" class="kt-mycart__title">
                                                        Samsung
                                                    </a>
                                                    <span class="kt-mycart__desc">
                        Profile info, Timeline etc
                    </span>

                                                    <div class="kt-mycart__action">
                                                        <span class="kt-mycart__price">$ 450</span>
                                                        <span class="kt-mycart__text">for</span>
                                                        <span class="kt-mycart__quantity">7</span>
                                                        <a href="#" class="btn btn-label-success btn-icon">−</a>
                                                        <a href="#" class="btn btn-label-success btn-icon">+</a>
                                                    </div>
                                                </div>

                                                <a href="#" class="kt-mycart__pic">
                                                    <img src="/metronic/themes/metronic/theme/default/demo1/dist/assets/media/products/product9.jpg" title="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="kt-mycart__item">
                                            <div class="kt-mycart__container">
                                                <div class="kt-mycart__info">
                                                    <a href="#" class="kt-mycart__title">
                                                        Panasonic
                                                    </a>

                                                    <span class="kt-mycart__desc">
                        For PHoto &amp; Others
                    </span>

                                                    <div class="kt-mycart__action">
                                                        <span class="kt-mycart__price">$ 329</span>
                                                        <span class="kt-mycart__text">for</span>
                                                        <span class="kt-mycart__quantity">1</span>
                                                        <a href="#" class="btn btn-label-success btn-icon">−</a>
                                                        <a href="#" class="btn btn-label-success btn-icon">+</a>
                                                    </div>
                                                </div>

                                                <a href="#" class="kt-mycart__pic">
                                                    <img src="/metronic/themes/metronic/theme/default/demo1/dist/assets/media/products/product13.jpg" title="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="kt-mycart__item">
                                            <div class="kt-mycart__container">
                                                <div class="kt-mycart__info">
                                                    <a href="#" class="kt-mycart__title">
                                                        Fujifilm
                                                    </a>
                                                    <span class="kt-mycart__desc">
                        Profile info, Timeline etc
                    </span>

                                                    <div class="kt-mycart__action">
                                                        <span class="kt-mycart__price">$ 520</span>
                                                        <span class="kt-mycart__text">for</span>
                                                        <span class="kt-mycart__quantity">6</span>
                                                        <a href="#" class="btn btn-label-success btn-icon">−</a>
                                                        <a href="#" class="btn btn-label-success btn-icon">+</a>
                                                    </div>
                                                </div>

                                                <a href="#" class="kt-mycart__pic">
                                                    <img src="/metronic/themes/metronic/theme/default/demo1/dist/assets/media/products/product16.jpg" title="">
                                                </a>
                                            </div>
                                        </div>

                                        <div class="kt-mycart__item">
                                            <div class="kt-mycart__container">
                                                <div class="kt-mycart__info">
                                                    <a href="#" class="kt-mycart__title">
                                                        Candy Machine
                                                    </a>

                                                    <span class="kt-mycart__desc">
                        For PHoto &amp; Others
                    </span>

                                                    <div class="kt-mycart__action">
                                                        <span class="kt-mycart__price">$ 784</span>
                                                        <span class="kt-mycart__text">for</span>
                                                        <span class="kt-mycart__quantity">4</span>
                                                        <a href="#" class="btn btn-label-success btn-icon">−</a>
                                                        <a href="#" class="btn btn-label-success btn-icon">+</a>
                                                    </div>
                                                </div>

                                                <a href="#" class="kt-mycart__pic">
                                                    <img src="/metronic/themes/metronic/theme/default/demo1/dist/assets/media/products/product15.jpg" title="" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>

                                    <div class="kt-mycart__footer">
                                        <div class="kt-mycart__section">
                                            <div class="kt-mycart__subtitel">
                                                <span>Sub Total</span>
                                                <span>Taxes</span>
                                                <span>Total</span>
                                            </div>

                                            <div class="kt-mycart__prices">
                                                <span>$ 840.00</span>
                                                <span>$ 72.00</span>
                                                <span class="kt-font-brand">$ 912.00</span>
                                            </div>
                                        </div>
                                        <div class="kt-mycart__button kt-align-right">
                                            <button type="button" class="btn btn-primary btn-sm">Place Order</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end:: Mycart -->        </form>
                        </div>
                    </div>--}}
                <!--begin: Language bar -->
                    {{--<div class="kt-header__topbar-item kt-header__topbar-item--langs">
                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,0px">
        <span class="kt-header__topbar-icon">
			<img class="" src="/metronic/themes/metronic/theme/default/demo1/dist/assets/media/flags/226-united-states.svg" alt="">
		</span>
                        </div>
                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround">
                            <ul class="kt-nav kt-margin-t-10 kt-margin-b-10">
                                <li class="kt-nav__item kt-nav__item--active">
                                    <a href="#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img src="/metronic/themes/metronic/theme/default/demo1/dist/assets/media/flags/226-united-states.svg" alt=""></span>
                                        <span class="kt-nav__link-text">English</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img src="/metronic/themes/metronic/theme/default/demo1/dist/assets/media/flags/128-spain.svg" alt=""></span>
                                        <span class="kt-nav__link-text">Spanish</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <span class="kt-nav__link-icon"><img src="/metronic/themes/metronic/theme/default/demo1/dist/assets/media/flags/162-germany.svg" alt=""></span>
                                        <span class="kt-nav__link-text">German</span>
                                    </a>
                                </li>
                            </ul>    </div>
                    </div>--}}
                    <!--end: Language bar --><!--begin: User Bar -->
                        <a class="gosite" href="{{route('home')}}" target="_blank"><i class="fa fa-eye"></i></a>
                    <div class="kt-header__topbar-item kt-header__topbar-item--user">

                        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="0px,0px">
                            <div class="kt-header__topbar-user">
                                <span class="kt-header__topbar-welcome kt-hidden-mobile">Merhaba,</span>
                                <span class="kt-header__topbar-username kt-hidden-mobile">{{ Auth::user()->name }}</span>
                                <img class="kt-hidden" alt="Pic" src="/metronic/themes/metronic/theme/default/demo1/dist/assets/media/users/300_25.jpg">
                                <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold">{{ Str::limit(Auth::user()->name,1,'') }}</span>
                            </div>
                        </div>

                        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-top-unround dropdown-menu-xl">
                            <!--begin: Head -->
                            <div class="kt-user-card kt-user-card--skin-dark kt-notification-item-padding-x" style="background-image: url(/metronic/themes/metronic/theme/default/demo1/dist/assets/media/misc/bg-1.jpg)">
                                <div class="kt-user-card__avatar">
                                    <img class="kt-hidden" alt="Pic" src="/metronic/themes/metronic/theme/default/demo1/dist/assets/media/users/300_25.jpg">
                                    <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->
                                    <span class="kt-badge kt-badge--lg kt-badge--rounded kt-badge--bold kt-font-success">{{ Str::limit(Auth::user()->name,1,'') }}</span>
                                </div>
                                <div class="kt-user-card__name">
                                    {{ Auth::user()->name }}
                                </div>
                                {{--<div class="kt-user-card__badge">
                                    <span class="btn btn-success btn-sm btn-bold btn-font-md">23 messages</span>
                                </div>--}}
                            </div>
                            <!--end: Head -->

                            <!--begin: Navigation -->
                            <div class="kt-notification">
                               {{-- <a href="/metronic/preview/demo1/custom/apps/user/profile-1/personal-information.html" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-calendar-3 kt-font-success"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Profile
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Account settings and more
                                        </div>
                                    </div>
                                </a>
                                <a href="/metronic/preview/demo1/custom/apps/user/profile-3.html" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-mail kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Messages
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Inbox and tasks
                                        </div>
                                    </div>
                                </a>
                                <a href="/metronic/preview/demo1/custom/apps/user/profile-2.html" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-rocket-1 kt-font-danger"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Activities
                                        </div>
                                        <div class="kt-notification__item-time">
                                            Logs and notifications
                                        </div>
                                    </div>
                                </a>
                                <a href="/metronic/preview/demo1/custom/apps/user/profile-3.html" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-hourglass kt-font-brand"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            My Tasks
                                        </div>
                                        <div class="kt-notification__item-time">
                                            latest tasks and projects
                                        </div>
                                    </div>
                                </a>

                                <a href="/metronic/preview/demo1/custom/apps/user/profile-1/overview.html" class="kt-notification__item">
                                    <div class="kt-notification__item-icon">
                                        <i class="flaticon2-cardiogram kt-font-warning"></i>
                                    </div>
                                    <div class="kt-notification__item-details">
                                        <div class="kt-notification__item-title kt-font-bold">
                                            Billing
                                        </div>
                                        <div class="kt-notification__item-time">
                                            billing &amp; statements <span class="kt-badge kt-badge--danger kt-badge--inline kt-badge--pill kt-badge--rounded">2 pending</span>
                                        </div>
                                    </div>
                                </a>--}}
                                <div class="kt-notification__custom kt-space-between">
                                    <a href="{{route('admin-logout')}}" target="_blank" class="btn btn-label btn-label-brand btn-sm btn-bold">Çıkış Yap</a>
                                </div>
                            </div>
                            <!--end: Navigation -->
                        </div>
                    </div>
                    <!--end: User Bar -->
                </div>
                <!-- end:: Header Topbar --></div>
            <!-- end:: Header -->
            <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                <!-- begin:: Content Head -->
                <div class="kt-subheader  kt-grid__item" id="kt_subheader">
                    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-subheader__main">
                            <h3 class="kt-subheader__title"><a href="{{route('admin')}}">Anasayfa</a></h3>
                            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                        </div>
                    </div>
                </div>
                <!-- end:: Content Head -->
                <!-- begin:: Content -->
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    @yield('site-details')
                    @yield('content')
                </div>
                <!-- end:: Content -->
            </div>
        </div>
    </div>
</div>
<!-- end::Quick Panel -->
<!-- begin::Scrolltop -->
<div id="kt_scrolltop" class="kt-scrolltop">
    <i class="fa fa-arrow-up"></i>
</div>
