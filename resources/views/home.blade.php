@extends('layouts.app')
@section('content')

<main class="main-content">
    <div class="position-relative iq-banner">
      <!--Nav Start-->
      <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar">
        <div class="container-fluid navbar-inner">
          <a href="../dashboard/index.html" class="navbar-brand">
              <!--Logo start-->
              <!--logo End-->
              
              <!--Logo start-->
              <div class="logo-main">
                  <div class="logo-normal">
                      <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                          <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                          <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                          <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                      </svg>
                  </div>
                  <div class="logo-mini">
                      <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                          <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                          <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                          <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                      </svg>
                  </div>
              </div>
              <!--logo End-->
              
              
              
              
              <h4 class="logo-title">Hope UI</h4>
          </a>
          <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
              <i class="icon">
               <svg  width="20px" class="icon-20" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
              </svg>
              </i>
          </div>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
              
              
                <div class="p-0 sub-drop dropdown-menu dropdown-menu-end" aria-labelledby="mail-drop">
                    <div class="m-0 shadow-none card">
                      <div class="py-3 card-header d-flex justify-content-between bg-primary">
                          <div class="header-title">
                            <h5 class="mb-0 text-white">All Message</h5>
                          </div>
                      </div>
                      <div class="p-0 card-body ">
                          <a href="#" class="iq-sub-card">
                            <div class="d-flex align-items-center">
                                <div class="">
                                  <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/01.png" alt="">
                                </div>
                                <div class="ms-3">
                                  <h6 class="mb-0 ">Bni Emma Watson</h6>
                                  <small class="float-start font-size-12">13 Jun</small>
                                </div>
                            </div>
                          </a>
                          <a href="#" class="iq-sub-card">
                            <div class="d-flex align-items-center">
                                <div class="">
                                  <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/02.png" alt="">
                                </div>
                                <div class="ms-3">
                                  <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                  <small class="float-start font-size-12">20 Apr</small>
                                </div>
                            </div>
                          </a>
                          <a href="#" class="iq-sub-card">
                            <div class="d-flex align-items-center">
                                <div class="">
                                  <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/03.png" alt="">
                                </div>
                                <div class="ms-3">
                                  <h6 class="mb-0 ">Why do we use it?</h6>
                                  <small class="float-start font-size-12">30 Jun</small>
                                </div>
                            </div>
                          </a>
                          <a href="#" class="iq-sub-card">
                            <div class="d-flex align-items-center">
                                <div class="">
                                  <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/04.png" alt="">
                                </div>
                                <div class="ms-3">
                                  <h6 class="mb-0 ">Variations Passages</h6>
                                  <small class="float-start font-size-12">12 Sep</small>
                                </div>
                            </div>
                          </a>
                          <a href="#" class="iq-sub-card">
                            <div class="d-flex align-items-center">
                                <div class="">
                                  <img class="p-1 avatar-40 rounded-pill bg-soft-primary" src="../assets/images/shapes/05.png" alt="">
                                </div>
                                <div class="ms-3">
                                  <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                  <small class="float-start font-size-12">5 Dec</small>
                                </div>
                            </div>
                          </a>
                      </div>
                    </div>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="{{asset('images/avatars/01.png')}}" alt="User-Profile" class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded">
                  <img src="{{asset('images/avatars/avtar_1.png')}}" alt="User-Profile" class="theme-color-purple-img img-fluid avatar avatar-50 avatar-rounded">
                  <img src="{{asset('images/avatars/avtar_2.png')}}" alt="User-Profile" class="theme-color-blue-img img-fluid avatar avatar-50 avatar-rounded">
                  <img src="{{asset('images/avatars/avtar_4.png')}}" alt="User-Profile" class="theme-color-green-img img-fluid avatar avatar-50 avatar-rounded">
                  <img src="{{asset('images/avatars/avtar_5.png')}}" alt="User-Profile" class="theme-color-yellow-img img-fluid avatar avatar-50 avatar-rounded">
                  <img src="{{asset('images/avatars/avtar_3.png')}}" alt="User-Profile" class="theme-color-pink-img img-fluid avatar avatar-50 avatar-rounded">
                  <div class="caption ms-3 d-none d-md-block ">
                      <h6 class="mb-0 caption-title">{{Auth::user()->name}}</h6>
                      <p class="mb-0 caption-sub-title">Anggota Koperasi</p>
                  </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="../dashboard/app/user-profile.html">Profile</a></li>
                  <li><a class="dropdown-item" href="../dashboard/app/user-privacy-setting.html">Privacy Setting</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../dashboard/auth/sign-in.html">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>          <!-- Nav Header Component Start -->
        <div class="iq-navbar-header" style="height: 215px;">
            <div class="container-fluid iq-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flex-wrap d-flex justify-content-between align-items-center">
                            <div>
                                <h1>Hello {{Auth::user()->name}}!</h1>
                                <p>Selamat Datang di Website SIKOPER.</p>
                            </div>
                            <div>
                                <a href="" class="btn btn-link btn-soft-light">
                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.8251 15.2171H12.1748C14.0987 15.2171 15.731 13.985 16.3054 12.2764C16.3887 12.0276 16.1979 11.7713 15.9334 11.7713H14.8562C14.5133 11.7713 14.2362 11.4977 14.2362 11.16C14.2362 10.8213 14.5133 10.5467 14.8562 10.5467H15.9005C16.2463 10.5467 16.5263 10.2703 16.5263 9.92875C16.5263 9.58722 16.2463 9.31075 15.9005 9.31075H14.8562C14.5133 9.31075 14.2362 9.03619 14.2362 8.69849C14.2362 8.35984 14.5133 8.08528 14.8562 8.08528H15.9005C16.2463 8.08528 16.5263 7.8088 16.5263 7.46728C16.5263 7.12575 16.2463 6.84928 15.9005 6.84928H14.8562C14.5133 6.84928 14.2362 6.57472 14.2362 6.23606C14.2362 5.89837 14.5133 5.62381 14.8562 5.62381H15.9886C16.2483 5.62381 16.4343 5.3789 16.3645 5.13113C15.8501 3.32401 14.1694 2 12.1748 2H11.8251C9.42172 2 7.47363 3.92287 7.47363 6.29729V10.9198C7.47363 13.2933 9.42172 15.2171 11.8251 15.2171Z" fill="currentColor"></path>
                                        <path opacity="0.4" d="M19.5313 9.82568C18.9966 9.82568 18.5626 10.2533 18.5626 10.7823C18.5626 14.3554 15.6186 17.2627 12.0005 17.2627C8.38136 17.2627 5.43743 14.3554 5.43743 10.7823C5.43743 10.2533 5.00345 9.82568 4.46872 9.82568C3.93398 9.82568 3.5 10.2533 3.5 10.7823C3.5 15.0873 6.79945 18.6413 11.0318 19.1186V21.0434C11.0318 21.5715 11.4648 22.0001 12.0005 22.0001C12.5352 22.0001 12.9692 21.5715 12.9692 21.0434V19.1186C17.2006 18.6413 20.5 15.0873 20.5 10.7823C20.5 10.2533 20.066 9.82568 19.5313 9.82568Z" fill="currentColor"></path>
                                    </svg>
                                    Announcements
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-header-img">
                <img src="{{asset('images/dashboard/top-header.png')}}" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
                <img src="{{asset('images/dashboard/top-header1.png')}}" alt="header" class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX">
                <img src="{{asset('images/dashboard/top-header2.png')}}" alt="header" class="theme-color-blue-img img-fluid w-100 h-100 animated-scaleX">
                <img src="{{asset('images/dashboard/top-header3.png')}}" alt="header" class="theme-color-green-img img-fluid w-100 h-100 animated-scaleX">
                <img src="{{asset('images/dashboard/top-header4.png')}}" alt="header" class="theme-color-yellow-img img-fluid w-100 h-100 animated-scaleX">
                <img src="{{asset('images/dashboard/top-header5.png')}}" alt="header" class="theme-color-pink-img img-fluid w-100 h-100 animated-scaleX">
            </div>
        </div>          <!-- Nav Header Component End -->
      <!--Nav End-->
    </div>
    <div class="conatiner-fluid content-inner mt-n5 py-0">
<div class="row">
 <div class="col-md-12 col-lg-12">
    <div class="row row-cols-1">
       <div class="overflow-hidden d-slider1 ">
          <ul  class="p-0 m-0 mb-2 swiper-wrapper list-inline">
             <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="700">
                <div class="card-body">
                   <div class="progress-widget">
                      <div id="circle-progress-01" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="90" data-type="percent">
                         <svg class="card-slie-arrow icon-24" width="24"  viewBox="0 0 24 24">
                            <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                         </svg>
                      </div>
                      <div class="progress-detail">
                         <p  class="mb-2">Total Sales</p>
                         <h4 class="counter">$560K</h4>
                      </div>
                   </div>
                </div>
             </li>
             <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="800">
                <div class="card-body">
                   <div class="progress-widget">
                      <div id="circle-progress-02" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="80" data-type="percent">
                         <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                         </svg>
                      </div>
                      <div class="progress-detail">
                         <p  class="mb-2">Total Profit</p>
                         <h4 class="counter">$185K</h4>
                      </div>
                   </div>
                </div>
             </li>
             <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="900">
                <div class="card-body">
                   <div class="progress-widget">
                      <div id="circle-progress-03" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="70" data-type="percent">
                         <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                         </svg>
                      </div>
                      <div class="progress-detail">
                         <p  class="mb-2">Total Cost</p>
                         <h4 class="counter">$375K</h4>
                      </div>
                   </div>
                </div>
             </li>
             <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1000">
                <div class="card-body">
                   <div class="progress-widget">
                      <div id="circle-progress-04" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="60" data-type="percent">
                         <svg class="card-slie-arrow icon-24" width="24px"  viewBox="0 0 24 24">
                            <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                         </svg>
                      </div>
                      <div class="progress-detail">
                         <p  class="mb-2">Revenue</p>
                         <h4 class="counter">$742K</h4>
                      </div>
                   </div>
                </div>
             </li>
             <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1100">
                <div class="card-body">
                   <div class="progress-widget">
                      <div id="circle-progress-05" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="50" data-type="percent">
                         <svg class="card-slie-arrow icon-24" width="24px"  viewBox="0 0 24 24">
                            <path fill="currentColor" d="M5,17.59L15.59,7H9V5H19V15H17V8.41L6.41,19L5,17.59Z" />
                         </svg>
                      </div>
                      <div class="progress-detail">
                         <p  class="mb-2">Net Income</p>
                         <h4 class="counter">$150K</h4>
                      </div>
                   </div>
                </div>
             </li>
             <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1200">
                <div class="card-body">
                   <div class="progress-widget">
                      <div id="circle-progress-06" class="text-center circle-progress-01 circle-progress circle-progress-info" data-min-value="0" data-max-value="100" data-value="40" data-type="percent">
                         <svg class="card-slie-arrow icon-24" width="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                         </svg>
                      </div>
                      <div class="progress-detail">
                         <p  class="mb-2">Today</p>
                         <h4 class="counter">$4600</h4>
                      </div>
                   </div>
                </div>
             </li>
             <li class="swiper-slide card card-slide" data-aos="fade-up" data-aos-delay="1300">
                <div class="card-body">
                   <div class="progress-widget">
                      <div id="circle-progress-07" class="text-center circle-progress-01 circle-progress circle-progress-primary" data-min-value="0" data-max-value="100" data-value="30" data-type="percent">
                         <svg class="card-slie-arrow icon-24 " width="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M19,6.41L17.59,5L7,15.59V9H5V19H15V17H8.41L19,6.41Z" />
                         </svg>
                      </div>
                      <div class="progress-detail">
                         <p  class="mb-2">Members</p>
                         <h4 class="counter">11.2M</h4>
                      </div>
                   </div>
                </div>
             </li>
          </ul>
          <div class="swiper-button swiper-button-next"></div>
          <div class="swiper-button swiper-button-prev"></div>
       </div>
    </div>
 </div>
 <div class="col-md-12 col-lg-8">
    <div class="row">
       <div class="col-md-12">
          <div class="card" data-aos="fade-up" data-aos-delay="800">
             <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                <div class="header-title">
                   <h4 class="card-title">$855.8K</h4>
                   <p class="mb-0">Gross Sales</p>          
                </div>
                <div class="d-flex align-items-center align-self-center">
                   <div class="d-flex align-items-center text-primary">
                      <svg class="icon-12" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                         <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                         </g>
                      </svg>
                      <div class="ms-2">
                         <span class="text-gray">Sales</span>
                      </div>
                   </div>
                   <div class="d-flex align-items-center ms-3 text-info">
                      <svg class="icon-12" xmlns="http://www.w3.org/2000/svg" width="12" viewBox="0 0 24 24" fill="currentColor">
                         <g>
                            <circle cx="12" cy="12" r="8" fill="currentColor"></circle>
                         </g>
                      </svg>
                      <div class="ms-2">
                         <span class="text-gray">Cost</span>
                      </div>
                   </div>
                </div>
                <div class="dropdown">
                   <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton22" data-bs-toggle="dropdown" aria-expanded="false">
                   This Week
                   </a>
                   <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton22">
                      <li><a class="dropdown-item" href="#">This Week</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                   </ul>
                </div>
             </div>
             <div class="card-body">
                <div id="d-main" class="d-main"></div>
             </div>
          </div>
       </div>
       <div class="col-md-12 col-xl-6">
          <div class="card" data-aos="fade-up" data-aos-delay="900">
             <div class="flex-wrap card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">Earnings</h4>            
                </div>   
                <div class="dropdown">
                   <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      This Week
                   </a>
                   <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                      <li><a class="dropdown-item" href="#">This Week</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                   </ul>
                </div>
             </div>
             <div class="card-body">
                <div class="flex-wrap d-flex align-items-center justify-content-between">
                   <div id="myChart" class="col-md-8 col-lg-8 myChart"></div>
                   <div class="d-grid gap col-md-4 col-lg-4">
                      <div class="d-flex align-items-start">
                         <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#3a57e8">
                            <g>
                               <circle cx="12" cy="12" r="8" fill="#3a57e8"></circle>
                            </g>
                         </svg>
                         <div class="ms-3">
                            <span class="text-gray">Fashion</span>
                            <h6>251K</h6>
                         </div>
                      </div>
                      <div class="d-flex align-items-start">
                         <svg class="mt-2 icon-14" xmlns="http://www.w3.org/2000/svg" width="14" viewBox="0 0 24 24" fill="#4bc7d2">
                            <g>
                               <circle cx="12" cy="12" r="8" fill="#4bc7d2"></circle>
                            </g>
                         </svg>
                         <div class="ms-3">
                            <span class="text-gray">Accessories</span>
                            <h6>176K</h6>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-md-12 col-xl-6">
          <div class="card" data-aos="fade-up" data-aos-delay="1000">
             <div class="flex-wrap card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="card-title">Conversions</h4>            
                </div>
                <div class="dropdown">
                   <a href="#" class="text-gray dropdown-toggle" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                      This Week
                   </a>
                   <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton3">
                      <li><a class="dropdown-item" href="#">This Week</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                   </ul>
                </div>
             </div>
             <div class="card-body">
                <div id="d-activity" class="d-activity"></div>
             </div>
          </div>
       </div>         
       <div class="col-md-12 col-lg-12">
          <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
             <div class="flex-wrap card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="mb-2 card-title">Enterprise Clients</h4>
                   <p class="mb-0">
                      <svg class ="me-2 text-primary icon-24" width="24"  viewBox="0 0 24 24">
                         <path fill="currentColor" d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                      </svg>
                      15 new acquired this month
                   </p>            
                </div>
             </div>
             <div class="p-0 card-body">
                <div class="mt-4 table-responsive">
                   <table id="basic-table" class="table mb-0 table-striped" role="grid">
                      <thead>
                         <tr>
                            <th>COMPANIES</th>
                            <th>CONTACTS</th>
                            <th>ORDER</th>
                            <th>COMPLETION</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>
                               <div class="d-flex align-items-center">
                                  <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="../assets/images/shapes/01.png" alt="profile">
                                  <h6>Addidis Sportwear</h6>
                               </div>
                            </td>
                            <td>
                               <div class="iq-media-group iq-media-group-1">
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                  </a>
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                  </a>
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                  </a>
                               </div>
                            </td>
                            <td>$14,000</td>
                            <td>
                               <div class="mb-2 d-flex align-items-center">
                                  <h6>60%</h6>
                               </div>
                               <div class="shadow-none progress bg-soft-primary w-100" style="height: 4px">
                                  <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="d-flex align-items-center">
                                  <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="../assets/images/shapes/05.png" alt="profile">
                                  <h6>Netflixer Platforms</h6>
                               </div>
                            </td>
                            <td>
                               <div class="iq-media-group iq-media-group-1">
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                  </a>
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                  </a>
                               </div>
                            </td>
                            <td>$30,000</td>
                            <td>
                               <div class="mb-2 d-flex align-items-center">
                                  <h6>25%</h6>
                               </div>
                               <div class="shadow-none progress bg-soft-primary w-100" style="height: 4px">
                                  <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="d-flex align-items-center">
                                  <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="../assets/images/shapes/02.png" alt="profile">
                                  <h6>Shopifi Stores</h6>
                               </div>
                            </td>
                            <td>                                 
                               <div class="iq-media-group iq-media-group-1">
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                  </a>
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                  </a>
                               </div>
                            </td>
                            <td>$8,500</td>
                            <td>
                               <div class="mb-2 d-flex align-items-center">
                                  <h6>100%</h6>
                               </div>
                               <div class="shadow-none progress bg-soft-success w-100" style="height: 4px">
                                  <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="d-flex align-items-center">
                                  <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="../assets/images/shapes/03.png" alt="profile">
                                  <h6>Bootstrap Technologies</h6>
                               </div>
                            </td>
                            <td>
                               <div class="iq-media-group iq-media-group-1">
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">SP</div>
                                  </a>
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">PP</div>
                                  </a>
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                  </a>
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">TP</div>
                                  </a>
                               </div>
                            </td>
                            <td>$20,500</td>
                            <td>
                               <div class="mb-2 d-flex align-items-center">
                                  <h6>100%</h6>
                               </div>
                               <div class="shadow-none progress bg-soft-success w-100" style="height: 4px">
                                  <div class="progress-bar bg-success" data-toggle="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                            </td>
                         </tr>
                         <tr>
                            <td>
                               <div class="d-flex align-items-center">
                                  <img class="rounded bg-soft-primary img-fluid avatar-40 me-3" src="../assets/images/shapes/04.png" alt="profile">
                                  <h6>Community First</h6>
                               </div>
                            </td>
                            <td>
                               <div class="iq-media-group iq-media-group-1">
                                  <a href="#" class="iq-media-1">
                                     <div class="icon iq-icon-box-3 rounded-pill">MM</div>
                                  </a>
                               </div>
                            </td>
                            <td>$9,800</td>
                            <td>
                               <div class="mb-2 d-flex align-items-center">
                                  <h6>75%</h6>
                               </div>
                               <div class="shadow-none progress bg-soft-primary w-100" style="height: 4px">
                                  <div class="progress-bar bg-primary" data-toggle="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                               </div>
                            </td>
                         </tr>
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <div class="col-md-12 col-lg-4">
    <div class="row">
       <div class="col-md-12 col-lg-12">
          <div class="card credit-card-widget" data-aos="fade-up" data-aos-delay="900">
             <div class="pb-4 border-0 card-header">
                <div class="p-4 border border-white rounded primary-gradient-card">
                   <div class="d-flex justify-content-between align-items-center">
                      <div>
                         <h5 class="font-weight-bold">VISA </h5>
                         <P class="mb-0">PREMIUM ACCOUNT</P>  
                      </div>
                      <div class="master-card-content">
                         <svg class="master-card-1 icon-60" width="60"  viewBox="0 0 24 24">
                            <path fill="#ffffff" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                         </svg>
                         <svg class="master-card-2 icon-60" width="60"  viewBox="0 0 24 24">
                            <path fill="#ffffff" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2Z" />
                         </svg>
                      </div>
                   </div>
                   <div class="my-4">
                      <div class="card-number">
                         <span class="fs-5 me-2">5789</span>
                         <span class="fs-5 me-2">****</span>
                         <span class="fs-5 me-2">****</span>
                         <span class="fs-5">2847</span>
                      </div>
                   </div>
                   <div class="mb-2 d-flex align-items-center justify-content-between">
                      <p class="mb-0">Card holder</p>
                      <p class="mb-0">Expire Date</p>
                   </div>
                   <div class="d-flex align-items-center justify-content-between">
                      <h6>Mike Smith</h6>
                      <h6 class="ms-5">06/11</h6>
                   </div>
                </div>
             </div>
             <div class="card-body">
                <div class="flex-wrap mb-4 d-flex align-itmes-center justify-content-between">
                   <div class="d-flex align-itmes-center me-0 me-md-4">
                      <div>
                         <div class="p-3 mb-2 rounded bg-soft-primary">
                            <svg class="icon-20"  width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9303 7C16.9621 6.92913 16.977 6.85189 16.9739 6.77432H17C16.8882 4.10591 14.6849 2 12.0049 2C9.325 2 7.12172 4.10591 7.00989 6.77432C6.9967 6.84898 6.9967 6.92535 7.00989 7H6.93171C5.65022 7 4.28034 7.84597 3.88264 10.1201L3.1049 16.3147C2.46858 20.8629 4.81062 22 7.86853 22H16.1585C19.2075 22 21.4789 20.3535 20.9133 16.3147L20.1444 10.1201C19.676 7.90964 18.3503 7 17.0865 7H16.9303ZM15.4932 7C15.4654 6.92794 15.4506 6.85153 15.4497 6.77432C15.4497 4.85682 13.8899 3.30238 11.9657 3.30238C10.0416 3.30238 8.48184 4.85682 8.48184 6.77432C8.49502 6.84898 8.49502 6.92535 8.48184 7H15.4932ZM9.097 12.1486C8.60889 12.1486 8.21321 11.7413 8.21321 11.2389C8.21321 10.7366 8.60889 10.3293 9.097 10.3293C9.5851 10.3293 9.98079 10.7366 9.98079 11.2389C9.98079 11.7413 9.5851 12.1486 9.097 12.1486ZM14.002 11.2389C14.002 11.7413 14.3977 12.1486 14.8858 12.1486C15.3739 12.1486 15.7696 11.7413 15.7696 11.2389C15.7696 10.7366 15.3739 10.3293 14.8858 10.3293C14.3977 10.3293 14.002 10.7366 14.002 11.2389Z" fill="currentColor"></path>                                            
                            </svg>
                         </div>
                      </div>
                      <div class="ms-3">
                         <h5>1153</h5>
                         <small class="mb-0">Products</small>
                      </div>
                   </div>
                   <div class="d-flex align-itmes-center">
                      <div>
                         <div class="p-3 mb-2 rounded bg-soft-info">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                               <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1213 11.2331H16.8891C17.3088 11.2331 17.6386 10.8861 17.6386 10.4677C17.6386 10.0391 17.3088 9.70236 16.8891 9.70236H14.1213C13.7016 9.70236 13.3719 10.0391 13.3719 10.4677C13.3719 10.8861 13.7016 11.2331 14.1213 11.2331ZM20.1766 5.92749C20.7861 5.92749 21.1858 6.1418 21.5855 6.61123C21.9852 7.08067 22.0551 7.7542 21.9652 8.36549L21.0159 15.06C20.8361 16.3469 19.7569 17.2949 18.4879 17.2949H7.58639C6.25742 17.2949 5.15828 16.255 5.04837 14.908L4.12908 3.7834L2.62026 3.51807C2.22057 3.44664 1.94079 3.04864 2.01073 2.64043C2.08068 2.22305 2.47038 1.94649 2.88006 2.00874L5.2632 2.3751C5.60293 2.43735 5.85274 2.72207 5.88272 3.06905L6.07257 5.35499C6.10254 5.68257 6.36234 5.92749 6.68209 5.92749H20.1766ZM7.42631 18.9079C6.58697 18.9079 5.9075 19.6018 5.9075 20.459C5.9075 21.3061 6.58697 22 7.42631 22C8.25567 22 8.93514 21.3061 8.93514 20.459C8.93514 19.6018 8.25567 18.9079 7.42631 18.9079ZM18.6676 18.9079C17.8282 18.9079 17.1487 19.6018 17.1487 20.459C17.1487 21.3061 17.8282 22 18.6676 22C19.4969 22 20.1764 21.3061 20.1764 20.459C20.1764 19.6018 19.4969 18.9079 18.6676 18.9079Z" fill="currentColor"></path>                                            
                            </svg>                                        
                         </div>
                      </div>
                      <div class="ms-3">
                         <h5>81K</h5>
                         <small class="mb-0">Order Served</small>
                      </div>
                   </div>
                </div>
                <div class="mb-4">
                   <div class="flex-wrap d-flex justify-content-between">
                      <h2 class="mb-2">$405,012,300</h2>
                      <div>
                         <span class="badge bg-success rounded-pill">YoY 24%</span>
                      </div>
                   </div>
                   <p class="text-info">Life time sales</p>
                </div>
                <div class="grid-cols-2 d-grid gap-card">
                   <button class="p-2 btn btn-primary text-uppercase">SUMMARY</button>
                   <button class="p-2 btn btn-info text-uppercase">ANALYTICS</button>
                </div>
             </div>
          </div>
          <div class="card" data-aos="fade-up" data-aos-delay="500">
             <div class="text-center card-body d-flex justify-content-around">
                <div>
                   <h2 class="mb-2">750<small>K</small></h2>
                   <p class="mb-0 text-gray">Website Visitors</p>
                </div>
                <hr class="hr-vertial">
                <div>
                   <h2 class="mb-2">7,500</h2>
                   <p class="mb-0 text-gray">New Customers</p>
                </div>
             </div>
          </div> 
       </div>
       <div class="col-md-12 col-lg-12">
          <div class="card" data-aos="fade-up" data-aos-delay="600">
             <div class="flex-wrap card-header d-flex justify-content-between">
                <div class="header-title">
                   <h4 class="mb-2 card-title">Activity overview</h4>
                   <p class="mb-0">
                      <svg class ="me-2 icon-24" width="24" height="24" viewBox="0 0 24 24">
                         <path fill="#17904b" d="M13,20H11V8L5.5,13.5L4.08,12.08L12,4.16L19.92,12.08L18.5,13.5L13,8V20Z" />
                      </svg>
                      16% this month
                   </p>
                </div>
             </div>
             <div class="card-body">
                <div class="mb-2  d-flex profile-media align-items-top">
                   <div class="mt-1 profile-dots-pills border-primary"></div>
                   <div class="ms-4">
                      <h6 class="mb-1 ">$2400, Purchase</h6>
                      <span class="mb-0">11 JUL 8:10 PM</span>
                   </div>
                </div>
                <div class="mb-2  d-flex profile-media align-items-top">
                   <div class="mt-1 profile-dots-pills border-primary"></div>
                   <div class="ms-4">
                      <h6 class="mb-1 ">New order #8744152</h6>
                      <span class="mb-0">11 JUL 11 PM</span>
                   </div>
                </div>
                <div class="mb-2  d-flex profile-media align-items-top">
                   <div class="mt-1 profile-dots-pills border-primary"></div>
                   <div class="ms-4">
                      <h6 class="mb-1 ">Affiliate Payout</h6>
                      <span class="mb-0">11 JUL 7:64 PM</span>
                   </div>
                </div>
                <div class="mb-2  d-flex profile-media align-items-top">
                   <div class="mt-1 profile-dots-pills border-primary"></div>
                   <div class="ms-4">
                      <h6 class="mb-1 ">New user added</h6>
                      <span class="mb-0">11 JUL 1:21 AM</span>
                   </div>
                </div>
                <div class="mb-1  d-flex profile-media align-items-top">
                   <div class="mt-1 profile-dots-pills border-primary"></div>
                   <div class="ms-4">
                      <h6 class="mb-1 ">Product added</h6>
                      <span class="mb-0">11 JUL 4:50 AM</span>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div> 
</div>
    </div>
    <div class="btn-download">
        <a class="btn btn-success px-3 py-2" href="https://iqonic.design/product/admin-templates/hope-ui-admin-free-open-source-bootstrap-admin-template/" target="_blank" >
            <svg class="icon-24"  width="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.4" d="M17.554 7.29614C20.005 7.29614 22 9.35594 22 11.8876V16.9199C22 19.4453 20.01 21.5 17.564 21.5L6.448 21.5C3.996 21.5 2 19.4412 2 16.9096V11.8773C2 9.35181 3.991 7.29614 6.438 7.29614H7.378L17.554 7.29614Z" fill="currentColor"></path>
                <path d="M12.5464 16.0374L15.4554 13.0695C15.7554 12.7627 15.7554 12.2691 15.4534 11.9634C15.1514 11.6587 14.6644 11.6597 14.3644 11.9654L12.7714 13.5905L12.7714 3.2821C12.7714 2.85042 12.4264 2.5 12.0004 2.5C11.5754 2.5 11.2314 2.85042 11.2314 3.2821L11.2314 13.5905L9.63742 11.9654C9.33742 11.6597 8.85043 11.6587 8.54843 11.9634C8.39743 12.1168 8.32142 12.3168 8.32142 12.518C8.32142 12.717 8.39743 12.9171 8.54643 13.0695L11.4554 16.0374C11.6004 16.1847 11.7964 16.268 12.0004 16.268C12.2054 16.268 12.4014 16.1847 12.5464 16.0374Z" fill="currentColor"></path>
            </svg>
        </a>
    </div>
    <!-- Footer Section Start -->
    <footer class="footer">
        <div class="footer-body">
            <ul class="left-panel list-inline mb-0 p-0">
                <li class="list-inline-item"><a href="../dashboard/extra/privacy-policy.html">Privacy Policy</a></li>
                <li class="list-inline-item"><a href="../dashboard/extra/terms-of-service.html">Terms of Use</a></li>
            </ul>
            <div class="right-panel">
                ©<script>document.write(new Date().getFullYear())</script> Hope UI, Made with
                <span class="">
                    <svg class="icon-15" width="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.85 2.50065C16.481 2.50065 17.111 2.58965 17.71 2.79065C21.401 3.99065 22.731 8.04065 21.62 11.5806C20.99 13.3896 19.96 15.0406 18.611 16.3896C16.68 18.2596 14.561 19.9196 12.28 21.3496L12.03 21.5006L11.77 21.3396C9.48102 19.9196 7.35002 18.2596 5.40102 16.3796C4.06102 15.0306 3.03002 13.3896 2.39002 11.5806C1.26002 8.04065 2.59002 3.99065 6.32102 2.76965C6.61102 2.66965 6.91002 2.59965 7.21002 2.56065H7.33002C7.61102 2.51965 7.89002 2.50065 8.17002 2.50065H8.28002C8.91002 2.51965 9.52002 2.62965 10.111 2.83065H10.17C10.21 2.84965 10.24 2.87065 10.26 2.88965C10.481 2.96065 10.69 3.04065 10.89 3.15065L11.27 3.32065C11.3618 3.36962 11.4649 3.44445 11.554 3.50912C11.6104 3.55009 11.6612 3.58699 11.7 3.61065C11.7163 3.62028 11.7329 3.62996 11.7496 3.63972C11.8354 3.68977 11.9247 3.74191 12 3.79965C13.111 2.95065 14.46 2.49065 15.85 2.50065ZM18.51 9.70065C18.92 9.68965 19.27 9.36065 19.3 8.93965V8.82065C19.33 7.41965 18.481 6.15065 17.19 5.66065C16.78 5.51965 16.33 5.74065 16.18 6.16065C16.04 6.58065 16.26 7.04065 16.68 7.18965C17.321 7.42965 17.75 8.06065 17.75 8.75965V8.79065C17.731 9.01965 17.8 9.24065 17.94 9.41065C18.08 9.58065 18.29 9.67965 18.51 9.70065Z" fill="currentColor"></path>
                    </svg>
                </span> by <a href="https://iqonic.design/">IQONIC Design</a>.
            </div>
        </div>
    </footer>
  </main>
    
@endsection

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
