<!DOCTYPE html>

<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Dashboard</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--begin::Global Theme Styles -->
		<link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/base/vendors.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link href="{{asset('assets/demo/demo2/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/demo/demo2/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Global Theme Styles -->

		<!--begin::Page Vendors Styles -->
		<link href="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css" rel="stylesheet" type="text/css" />-->

		<!--end::Page Vendors Styles -->
		<link rel="shortcut icon" href="{{asset('assets/demo/demo2/media/img/logo/favicon.ico')}}" />
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">

			<!-- begin::Header -->
			<header id="m_header" class="m-grid__item m-header " m-minimize="minimize" m-minimize-offset="200" m-minimize-mobile-offset="200">
				<div class="m-header__top">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">

							<!-- begin::Brand -->
							<div class="m-stack__item m-brand">
								<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
									<div class="m-stack__item m-stack__item--middle m-brand__logo">
										<a href="index.html" class="m-brand__logo-wrapper">
											<img alt="" src="{{asset('assets/demo/demo2/media/img/logo/logo.png')}}" />
										</a>
									</div>
									<div class="m-stack__item m-stack__item--middle m-brand__tools">
										<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
											<a href="#" class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
												<span>Dashboard</span>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav">
																<li class="m-nav__section m-nav__section--first m--hide">
																	<span class="m-nav__section-text">Quick Menu</span>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">Human Resources</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">Customer Relationship</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">Order Processing</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																		<span class="m-nav__link-text">Accounting</span>
																	</a>
																</li>
																<li class="m-nav__separator m-nav__separator--fit">
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">Customer Relationship</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-info"></i>
																		<span class="m-nav__link-text">Order Processing</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>

										<!-- begin::Responsive Header Menu Toggler-->
										<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
											<span></span>
										</a>

										<!-- end::Responsive Header Menu Toggler-->

										<!-- begin::Topbar Toggler-->
										<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
											<i class="flaticon-more"></i>
										</a>

										<!--end::Topbar Toggler-->
									</div>
								</div>
							</div>

							<!-- end::Brand -->

							<!-- begin::Topbar -->
							<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
								<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
									<div class="m-stack__item m-topbar__nav-wrapper">
										<ul class="m-topbar__nav m-nav m-nav--inline">
                        @auth
												<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
												 m-dropdown-toggle="click">
													<a href="#" class="m-nav__link m-dropdown__toggle">
														<span class="m-topbar__userpic m--hide">
															<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt="" />
														</span>
														<span class="m-topbar__welcome">Hello,&nbsp;</span>
														<span class="m-topbar__username">{{Auth::user()->name}}</span>
													</a>
													<div class="m-dropdown__wrapper">
														<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
														<div class="m-dropdown__inner">
															<div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
																<div class="m-card-user m-card-user--skin-dark">
																	<div class="m-card-user__pic">
																		<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
																	</div>
																	<div class="m-card-user__details">
																		<span class="m-card-user__name m--font-weight-500">{{Auth::user()->name}}</span>
																		<a href="" class="m-card-user__email m--font-weight-300 m-link">{{Auth::user()->email}}</a>
																	</div>
																</div>
															</div>
															<div class="m-dropdown__body">
																<div class="m-dropdown__content">
																	<ul class="m-nav m-nav--skin-light">
																		<li class="m-nav__section m--hide">
																			<span class="m-nav__section-text">Section</span>
																		</li>
																		<li class="m-nav__item">
																			<a href="profile.html" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-profile-1"></i>
																				<span class="m-nav__link-title">
																					<span class="m-nav__link-wrap">
																						<span class="m-nav__link-text">My Profile</span>
																						<span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
																					</span>
																				</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="profile.html" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-share"></i>
																				<span class="m-nav__link-text">Activity</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="profile.html" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-chat-1"></i>
																				<span class="m-nav__link-text">Messages</span>
																			</a>
																		</li>
																		<li class="m-nav__separator m-nav__separator--fit">
																		</li>
																		<li class="m-nav__item">
																			<a href="profile.html" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-info"></i>
																				<span class="m-nav__link-text">FAQ</span>
																			</a>
																		</li>
																		<li class="m-nav__item">
																			<a href="profile.html" class="m-nav__link">
																				<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																				<span class="m-nav__link-text">Support</span>
																			</a>
																		</li>
																		<li class="m-nav__separator m-nav__separator--fit">
																		</li>
																		<li class="m-nav__item">
																			<a href="snippets/pages/user/login-1.html" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</li>
												@endauth
												@guest
												<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
												 m-dropdown-toggle="click">
													<a href="#" class="m-nav__link m-dropdown__toggle">
														<span class="m-topbar__userpic m--hide">
															<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt="" />
														</span>
														<span class="m-topbar__username" data-toggle="modal" data-target="#m_modal_5">Sign In</span>
														{{-- <span class="m-topbar__welcome">Sign In</span> --}}
													</a>
												</li>
												@endguest


										</ul>
									</div>
								</div>
							</div>

							<!-- end::Topbar -->
						</div>
					</div>
				</div>
				<div class="m-header__bottom">
					<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">

							<!-- begin::Horizontal Menu -->
							<div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
								<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item  m-menu__item--active " aria-haspopup="true"><a href="index.html" class="m-menu__link "><span class="m-menu__item-here"></span><span class="m-menu__link-text">Dashboard</span></a></li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><span
												 class="m-menu__link-text">Actions</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Generate
																		Reports</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">2</span></span> </span></span></a></li>
													<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-business"></i><span
															 class="m-menu__link-text">Manage Orders</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
														<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
															<ul class="m-menu__subnav">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Latest Orders</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Pending Orders</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Processed Orders</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Delivery Reports</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Payments</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Customers</span></a></li>
															</ul>
														</div>
													</li>
													<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-chat-1"></i><span
															 class="m-menu__link-text">Customer Feedbacks</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
														<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
															<ul class="m-menu__subnav">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Customer Feedbacks</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Supplier Feedbacks</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Reviewed Feedbacks</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Resolved Feedbacks</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Feedback Reports</span></a></li>
															</ul>
														</div>
													</li>
													<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Register Member</span></a></li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span
												 class="m-menu__item-here"></span><span class="m-menu__link-text">Reports</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:600px"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<div class="m-menu__subnav">
													<ul class="m-menu__content">
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Finance Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Annual Reports</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">HR Reports</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">IPO Reports</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Finance Margins</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Revenue Reports</span></a></li>
															</ul>
														</li>
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Project Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Coca Cola
																			CRM</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Delta
																			Airlines Booking Site</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Malibu
																			Accounting</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Vineseed
																			Website Rewamp</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Zircon
																			Mobile App</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Mercury CMS</span></a></li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><span
												 class="m-menu__link-text">Orders</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
											<div class="m-menu__submenu  m-menu__submenu--fixed-xl m-menu__submenu--center"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<div class="m-menu__subnav">
													<ul class="m-menu__content">
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Finance Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Annual Reports</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">HR Reports</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">IPO Reports</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Finance Margins</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Revenue Reports</span></a></li>
															</ul>
														</li>
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Project Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Coca Cola
																			CRM</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Delta
																			Airlines Booking Site</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Malibu
																			Accounting</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Vineseed
																			Website Rewamp</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Zircon
																			Mobile App</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Mercury CMS</span></a></li>
															</ul>
														</li>
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">HR Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
																			Directory</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Client
																			Directory</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Salary
																			Reports</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
																			Payslips</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Corporate
																			Expenses</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Project
																			Expenses</span></a></li>
															</ul>
														</li>
														<li class="m-menu__item">
															<h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Reporting Apps</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
															<ul class="m-menu__inner">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Report Adjusments</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Sources & Mediums</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Reporting Settings</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Conversions</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Report Flows</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Audit & Logs</span></a></li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel m-menu__item--more m-menu__item--icon-only" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle"
											 title="Non functional dummy link"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-more-v3"></i><span class="m-menu__link-text"></span></a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--pull"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-business"></i><span class="m-menu__link-text">eCommerce</span></a></li>
													<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="crud/datatable_v1.html" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-computer"></i><span
															 class="m-menu__link-text">Audience</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
														<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
															<ul class="m-menu__subnav">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Active Users</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-interface-1"></i><span class="m-menu__link-text">User Explorer</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-lifebuoy"></i><span class="m-menu__link-text">Users Flows</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Market Segments</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic"></i><span class="m-menu__link-text">User Reports</span></a></li>
															</ul>
														</div>
													</li>
													<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Marketing</span></a></li>
													<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">Campaigns</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">3</span></span> </span></span></a></li>
													<li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-infinity"></i><span
															 class="m-menu__link-text">Cloud Manager</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
														<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow "></span>
															<ul class="m-menu__subnav">
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span
																				 class="m-menu__link-text">File Upload</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">3</span></span> </span></span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-signs-1"></i><span class="m-menu__link-text">File Attributes</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder"></i><span class="m-menu__link-text">Folders</span></a></li>
																<li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-cogwheel-2"></i><span class="m-menu__link-text">System Settings</span></a></li>
															</ul>
														</div>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>

							<!-- end::Horizontal Menu -->

							<!--begin::Search-->
							<div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-" id="m_quicksearch"
							 m-quicksearch-mode="default">

								<!--begin::Search Form -->
								<form class="m-header-search__form">
									<div class="m-header-search__wrapper">
										<span class="m-header-search__icon-search" id="m_quicksearch_search">
											<i class="la la-search"></i>
										</span>
										<span class="m-header-search__input-wrapper">
											<input autocomplete="off" type="text" name="q" class="m-header-search__input" value="" placeholder="Search..." id="m_quicksearch_input">
										</span>
										<span class="m-header-search__icon-close" id="m_quicksearch_close">
											<i class="la la-remove"></i>
										</span>
										<span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
											<i class="la la-remove"></i>
										</span>
									</div>
								</form>

								<!--end::Search Form -->

								<!--begin::Search Results -->
								<div class="m-dropdown__wrapper">
									<div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
									<div class="m-dropdown__inner">
										<div class="m-dropdown__body">
											<div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
												<div class="m-dropdown__content m-list-search m-list-search--skin-light">
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--end::Search Results -->
							</div>

							<!--end::Search-->
						</div>
					</div>
				</div>
			</header>

			<!-- end::Header -->

			<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop 	m-container m-container--responsive m-container--xxl m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">

					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">Dashboard</h3>
							</div>
							<div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
							</div>
						</div>
					</div>

					<!-- END: Subheader -->
					<div class="m-content">
                        @yield('content')


					</div>
				</div>

				<!--</div>-->
			</div>

			<!-- end::Body -->
						<div class="modal fade" id="m_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-sm" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="{{ route('login') }}" method="POST">
                                            @csrf
											<div class="form-group">
												<label for="recipient-name" class="form-control-label">Email:</label>
												<input class="form-control m-input" type="text" placeholder="Email" name="email" autocomplete="off" required>
													@if ($errors->has('email'))
													<span class="m-login__account-msg m--font-danger">
															{{ $errors->first('email') }}
													</span>
													@endif												
											</div>
											<div class="form-group">
												<label for="recipient-name" class="form-control-label">Password:</label>
                                                <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" required>
                                                @if ($errors->has('password'))
                                                <span class="m-login__account-msg m--font-danger">
                                                    {{ $errors->first('password') }}
                                                </span>
                                                @endif
											</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary" id="btn-login">Sign In</button>
                                        </div>
                                    </form>
								</div>
							</div>
						</div>			

			<!-- begin::Footer -->
			<footer class="m-grid__item m-footer ">
				<div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
					<div class="m-footer__wrapper">
						<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
							<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
								<span class="m-footer__copyright">
									2017 &copy; Metronic theme by <a href="https://keenthemes.com" class="m-link">Keenthemes</a>
								</span>
							</div>
							<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
								<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">About</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">Privacy</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">T&C</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">Purchase</span>
										</a>
									</li>
									<li class="m-nav__item m-nav__item--last">
										<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
											<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>

			<!-- end::Footer -->
		</div>

		<!-- end:: Page -->



		<!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>

		<!-- end::Scroll Top -->



		<!--begin::Global Theme Bundle -->
		<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
		<script src="{{asset('assets/demo/demo2/base/scripts.bundle.js')}}" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors -->
		<script src="{{asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts -->
		<script src="{{asset('assets/app/js/dashboard.js')}}" type="text/javascript"></script>

        <!--end::Page Scripts -->
        <script>
            $('#btn-login').submit();
        </script>
	</body>

	<!-- end::Body -->
</html>
