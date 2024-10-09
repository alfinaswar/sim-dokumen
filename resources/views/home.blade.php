@extends('layouts.app')

@section('content')
<div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Dashboard</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html" data-bs-original-title="" title="">Home</a></li>
                  </ol>
                </div>
              </div>
            </div>
            <div class="container-fluid general-widget">
            <div class="row">
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg></div>
                      <div class="media-body"><span class="m-0">Earnings</span>
                        <h4 class="mb-0 counter">6659</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database icon-bg"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></div>
                      <div class="media-body"><span class="m-0">Products</span>
                        <h4 class="mb-0 counter">9856</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag icon-bg"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></div>
                      <div class="media-body"><span class="m-0">Messages</span>
                        <h4 class="mb-0 counter">893</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle icon-bg"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg></div>
                      <div class="media-body"><span class="m-0">New Use</span>
                        <h4 class="mb-0 counter">4531</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus icon-bg"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card">
                  <div class="cal-date-widget card-body">
                    <div class="row">
                      <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                        <div class="cal-info text-center">
                          <div>
                            <h2>24</h2>
                            <div class="d-inline-block"><span class="b-r-dark pe-3">March</span><span class="ps-3">2018</span></div>
                            <p class="f-16">There is no minimum donation, any sum is appreciated</p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6 col-xs-12 col-md-6 col-sm-6">
                        <div class="cal-datepicker">
                          <div class="datepicker-here float-sm-end" data-language="en">           <div class="datepicker-inline"><div class="datepicker"><i class="datepicker--pointer"></i><nav class="datepicker--nav"><div class="datepicker--nav-action" data-action="prev"><svg><path d="M 17,12 l -5,5 l 5,5"></path></svg></div><div class="datepicker--nav-title">October,  <i> 2024  </i></div><div class="datepicker--nav-action" data-action="next"><svg><path d="M 14,12 l 5,5 l -5,5"></path></svg></div></nav><div class="datepicker--content"><div class="datepicker--days datepicker--body active"><div class="datepicker--days-names"><div class="datepicker--day-name -weekend-">S</div><div class="datepicker--day-name">M</div><div class="datepicker--day-name">T</div><div class="datepicker--day-name">W</div><div class="datepicker--day-name">T</div><div class="datepicker--day-name">F</div><div class="datepicker--day-name -weekend-">S</div></div><div class="datepicker--cells datepicker--cells-days"><div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="29" data-month="8" data-year="2024">29</div><div class="datepicker--cell datepicker--cell-day -other-month-" data-date="30" data-month="8" data-year="2024">30</div><div class="datepicker--cell datepicker--cell-day" data-date="1" data-month="9" data-year="2024">1</div><div class="datepicker--cell datepicker--cell-day" data-date="2" data-month="9" data-year="2024">2</div><div class="datepicker--cell datepicker--cell-day" data-date="3" data-month="9" data-year="2024">3</div><div class="datepicker--cell datepicker--cell-day" data-date="4" data-month="9" data-year="2024">4</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="5" data-month="9" data-year="2024">5</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="6" data-month="9" data-year="2024">6</div><div class="datepicker--cell datepicker--cell-day" data-date="7" data-month="9" data-year="2024">7</div><div class="datepicker--cell datepicker--cell-day" data-date="8" data-month="9" data-year="2024">8</div><div class="datepicker--cell datepicker--cell-day -current-" data-date="9" data-month="9" data-year="2024">9</div><div class="datepicker--cell datepicker--cell-day" data-date="10" data-month="9" data-year="2024">10</div><div class="datepicker--cell datepicker--cell-day" data-date="11" data-month="9" data-year="2024">11</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="12" data-month="9" data-year="2024">12</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="13" data-month="9" data-year="2024">13</div><div class="datepicker--cell datepicker--cell-day" data-date="14" data-month="9" data-year="2024">14</div><div class="datepicker--cell datepicker--cell-day" data-date="15" data-month="9" data-year="2024">15</div><div class="datepicker--cell datepicker--cell-day" data-date="16" data-month="9" data-year="2024">16</div><div class="datepicker--cell datepicker--cell-day" data-date="17" data-month="9" data-year="2024">17</div><div class="datepicker--cell datepicker--cell-day" data-date="18" data-month="9" data-year="2024">18</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="19" data-month="9" data-year="2024">19</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="20" data-month="9" data-year="2024">20</div><div class="datepicker--cell datepicker--cell-day" data-date="21" data-month="9" data-year="2024">21</div><div class="datepicker--cell datepicker--cell-day" data-date="22" data-month="9" data-year="2024">22</div><div class="datepicker--cell datepicker--cell-day" data-date="23" data-month="9" data-year="2024">23</div><div class="datepicker--cell datepicker--cell-day" data-date="24" data-month="9" data-year="2024">24</div><div class="datepicker--cell datepicker--cell-day" data-date="25" data-month="9" data-year="2024">25</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="26" data-month="9" data-year="2024">26</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="27" data-month="9" data-year="2024">27</div><div class="datepicker--cell datepicker--cell-day" data-date="28" data-month="9" data-year="2024">28</div><div class="datepicker--cell datepicker--cell-day" data-date="29" data-month="9" data-year="2024">29</div><div class="datepicker--cell datepicker--cell-day" data-date="30" data-month="9" data-year="2024">30</div><div class="datepicker--cell datepicker--cell-day" data-date="31" data-month="9" data-year="2024">31</div><div class="datepicker--cell datepicker--cell-day -other-month-" data-date="1" data-month="10" data-year="2024">1</div><div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="2" data-month="10" data-year="2024">2</div></div></div></div></div></div></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
                <div class="card">
                  <div class="mobile-clock-widget">
                    <div class="bg-svg">
                      <svg class="climacon climacon_cloudLightningMoon" id="cloudLightningMoon" version="1.1" viewBox="15 15 70 70">
                        <clipPath id="moonCloudFillClipfill11">
                          <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                        </clipPath>
                        <clipPath id="cloudFillClipfill19">
                          <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                        </clipPath>
                        <g class="climacon_iconWrap climacon_iconWrap-cloudLightningMoon">
                          <g clip-path="url(#cloudFillClip)">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                            </g>
                          </g>
                          <g class="climacon_wrapperComponent climacon_wrapperComponent-lightning">
                            <polygon class="climacon_component climacon_component-stroke climacon_component-stroke_lightning" points="48.001,51.641 57.999,51.641 52,61.641 58.999,61.641 46.001,77.639 49.601,65.641 43.001,65.641 "></polygon>
                          </g>
                          <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                            <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.999,65.641c-0.28,0-0.649,0-1.062,0l3.584-4.412c3.182-1.057,5.478-4.053,5.478-7.588c0-4.417-3.581-7.998-7.999-7.998c-1.602,0-3.083,0.48-4.333,1.29c-1.231-5.316-5.974-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,12c0,5.446,3.632,10.039,8.604,11.503l-1.349,3.777c-6.52-2.021-11.255-8.098-11.255-15.282c0-8.835,7.163-15.999,15.998-15.999c6.004,0,11.229,3.312,13.965,8.204c0.664-0.114,1.338-0.205,2.033-0.205c6.627,0,11.999,5.371,11.999,11.999C71.999,60.268,66.626,65.641,59.999,65.641z"></path>
                          </g>
                        </g>
                      </svg>
                    </div>
                    <div>
                      <ul class="clock" id="clock">
                        <li class="hour" id="hour" style="transform: rotate(681deg);"></li>
                        <li class="min" id="min" style="transform: rotate(252deg);"></li>
                        <li class="sec" id="sec" style="transform: rotate(300deg);"></li>
                      </ul>
                      <div class="date f-24 mb-2" id="date"><span id="monthDay">Oct 9</span><span id="year">,&nbsp;2024</span></div>
                      <div>
                        <p class="m-0 f-14 text-light">kolkata, India                                            </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 xl-50 col-sm-6 box-col-6">
                <div class="card">
                  <div class="weather-widget-two">
                    <div class="card-body">
                      <div class="media">
                        <svg class="climacon climacon_cloudDrizzleMoonAlt" id="cloudDrizzleMoonAlt" version="1.1" viewBox="15 15 70 70">
                          <clipPath id="cloudFillClip">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clipPath>
                          <clipPath id="moonCloudFillClip">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clipPath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzleMoonAlt">
                            <g clip-path="url(#cloudFillClip)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" id="Drizzle-Left_1_" d="M56.969,57.672l-2.121,2.121c-1.172,1.172-1.172,3.072,0,4.242c1.17,1.172,3.07,1.172,4.24,0c1.172-1.17,1.172-3.07,0-4.242L56.969,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M50.088,57.672l-2.119,2.121c-1.174,1.172-1.174,3.07,0,4.242c1.17,1.172,3.068,1.172,4.24,0s1.172-3.07,0-4.242L50.088,57.672z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M43.033,57.672l-2.121,2.121c-1.172,1.172-1.172,3.07,0,4.242s3.07,1.172,4.244,0c1.172-1.172,1.172-3.07,0-4.242L43.033,57.672z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudDrizzleMoonAlt-->
                        <div class="media-body align-self-center text-white">
                          <h4 class="m-0 f-w-600 num">25°C</h4>
                          <p class="m-0 f-14">Newyork</p>
                        </div>
                      </div>
                      <div class="media">
                        <svg class="climacon climacon_cloudRainMoon" id="cloudRainMoon" version="1.1" viewBox="15 15 70 70">
                          <clipPath id="cloudFillClip1">
                            <path d="M15,15v70h70V15H15z M59.943,61.639c-3.02,0-12.381,0-15.999,0c-6.626,0-11.998-5.371-11.998-11.998c0-6.627,5.372-11.999,11.998-11.999c5.691,0,10.434,3.974,11.665,9.29c1.252-0.81,2.733-1.291,4.334-1.291c4.418,0,8,3.582,8,8C67.943,58.057,64.361,61.639,59.943,61.639z"></path>
                          </clipPath>
                          <clipPath id="moonCloudFillClip1">
                            <path d="M0,0v100h100V0H0z M60.943,46.641c-4.418,0-7.999-3.582-7.999-7.999c0-3.803,2.655-6.979,6.211-7.792c0.903,4.854,4.726,8.676,9.579,9.58C67.922,43.986,64.745,46.641,60.943,46.641z"></path>
                          </clipPath>
                          <g class="climacon_iconWrap climacon_iconWrap-cloudRainMoon">
                            <g clip-path="url(#cloudFillClip1)">
                              <g class="climacon_wrapperComponent climacon_wrapperComponent-moon climacon_componentWrap-moon_cloud" clip-path="url(#moonCloudFillClip1)">
                                <path class="climacon_component climacon_component-stroke climacon_component-stroke_sunBody" d="M61.023,50.641c-6.627,0-11.999-5.372-11.999-11.998c0-6.627,5.372-11.999,11.999-11.999c0.755,0,1.491,0.078,2.207,0.212c-0.132,0.576-0.208,1.173-0.208,1.788c0,4.418,3.582,7.999,8,7.999c0.614,0,1.212-0.076,1.788-0.208c0.133,0.717,0.211,1.452,0.211,2.208C73.021,45.269,67.649,50.641,61.023,50.641z"></path>
                              </g>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-rain">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- left" d="M41.946,53.641c1.104,0,1.999,0.896,1.999,2v15.998c0,1.105-0.895,2-1.999,2s-2-0.895-2-2V55.641C39.946,54.537,40.842,53.641,41.946,53.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- middle" d="M49.945,57.641c1.104,0,2,0.896,2,2v15.998c0,1.104-0.896,2-2,2s-2-0.896-2-2V59.641C47.945,58.535,48.841,57.641,49.945,57.641z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_rain climacon_component-stroke_rain- right" d="M57.943,53.641c1.104,0,2,0.896,2,2v15.998c0,1.105-0.896,2-2,2c-1.104,0-2-0.895-2-2V55.641C55.943,54.537,56.84,53.641,57.943,53.641z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud" clip-path="url(#cloudFillClip1)">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M59.943,41.642c-0.696,0-1.369,0.092-2.033,0.205c-2.736-4.892-7.961-8.203-13.965-8.203c-8.835,0-15.998,7.162-15.998,15.997c0,5.992,3.3,11.207,8.177,13.947c0.276-1.262,0.892-2.465,1.873-3.445l0.057-0.057c-3.644-2.061-6.106-5.963-6.106-10.445c0-6.626,5.372-11.998,11.998-11.998c5.691,0,10.433,3.974,11.666,9.29c1.25-0.81,2.732-1.291,4.332-1.291c4.418,0,8,3.581,8,7.999c0,3.443-2.182,6.371-5.235,7.498c0.788,1.146,1.194,2.471,1.222,3.807c4.666-1.645,8.014-6.077,8.014-11.305C71.941,47.014,66.57,41.642,59.943,41.642z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudRainMoon-->
                        <div class="media-body align-self-center text-white">
                          <h4 class="m-0 f-w-600 num">95°F</h4>
                          <p class="m-0 f-14">Peris</p>
                        </div>
                      </div>
                      <div class="media">
                        <svg class="climacon climacon_cloudDrizzle" id="cloudDrizzle" version="1.1" viewBox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudDrizzle">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-drizzle">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-left" d="M42.001,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2.001-0.895-2.001-2v-3.998C40,54.538,40.896,53.644,42.001,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-middle" d="M49.999,53.644c1.104,0,2,0.896,2,2v4c0,1.104-0.896,2-2,2s-1.998-0.896-1.998-2v-4C48.001,54.54,48.896,53.644,49.999,53.644z"></path>
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_drizzle climacon_component-stroke_drizzle-right" d="M57.999,53.644c1.104,0,2,0.896,2,2v3.998c0,1.105-0.896,2-2,2c-1.105,0-2-0.895-2-2v-3.998C55.999,54.538,56.894,53.644,57.999,53.644z"></path>
                            </g>
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M63.999,64.944v-4.381c2.387-1.386,3.998-3.961,3.998-6.92c0-4.418-3.58-8-7.998-8c-1.603,0-3.084,0.481-4.334,1.291c-1.232-5.316-5.973-9.29-11.664-9.29c-6.628,0-11.999,5.372-11.999,12c0,3.549,1.55,6.729,3.998,8.926v4.914c-4.776-2.769-7.998-7.922-7.998-13.84c0-8.836,7.162-15.999,15.999-15.999c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.336-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12C71.997,58.864,68.655,63.296,63.999,64.944z"></path>
                            </g>
                          </g>
                        </svg>
                        <!-- cloudDrizzle-->
                        <div class="media-body align-self-center text-white">
                          <h4 class="m-0 f-w-600 num">50°C</h4>
                          <p class="m-0 f-14">India</p>
                        </div>
                      </div>
                      <div class="top-bg-whether">
                        <svg class="climacon climacon_cloudHailAltFill" id="cloudHailAltFill" version="1.1" viewBox="15 15 70 70">
                          <g class="climacon_iconWrap climacon_iconWrap-cloudHailAltFill">
                            <g class="climacon_wrapperComponent climacon_wrapperComponent-hailAlt">
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-left">
                                <circle cx="42" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-middle">
                                <circle cx="49.999" cy="65.498" r="2"></circle>
                              </g>
                              <g class="climacon_component climacon_component-stroke climacon_component-stroke_hailAlt climacon_component-stroke_hailAlt-right">
                                <circle cx="57.998" cy="65.498" r="2"></circle>
                              </g>
                            </g>
                            <g class="climacon_componentWrap climacon_componentWrap_cloud">
                              <path class="climacon_component climacon_component-stroke climacon_component-stroke_cloud" d="M43.945,65.639c-8.835,0-15.998-7.162-15.998-15.998c0-8.836,7.163-15.998,15.998-15.998c6.004,0,11.229,3.312,13.965,8.203c0.664-0.113,1.338-0.205,2.033-0.205c6.627,0,11.998,5.373,11.998,12c0,6.625-5.371,11.998-11.998,11.998C57.168,65.639,47.143,65.639,43.945,65.639z"></path>
                              <path class="climacon_component climacon_component-fill climacon_component-fill_cloud" fill="#FFFFFF" d="M59.943,61.639c4.418,0,8-3.582,8-7.998c0-4.417-3.582-8-8-8c-1.601,0-3.082,0.481-4.334,1.291c-1.23-5.316-5.973-9.29-11.665-9.29c-6.626,0-11.998,5.372-11.998,11.999c0,6.626,5.372,11.998,11.998,11.998C47.562,61.639,56.924,61.639,59.943,61.639z"></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="bottom-whetherinfo">
                        <div class="row">
                          <div class="col-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cloud-drizzle"><line x1="8" y1="19" x2="8" y2="21"></line><line x1="8" y1="13" x2="8" y2="15"></line><line x1="16" y1="19" x2="16" y2="21"></line><line x1="16" y1="13" x2="16" y2="15"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="12" y1="15" x2="12" y2="17"></line><path d="M20 16.58A5 5 0 0 0 18 7h-1.26A8 8 0 1 0 4 15.25"></path></svg></div>
                          <div class="col-6">
                            <div class="whether-content"><span>India, Surat</span>
                              <h4 class="num mb-0">36°F                                    </h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 xl-50 box-col-12">
                <div class="widget-joins card widget-arrow">
                  <div class="row">
                    <div class="col-sm-6 pe-0">
                      <div class="media border-after-xs">
                        <div class="align-self-center me-3 text-start"><span class="widget-t mb-1">Sale</span>
                          <h5 class="mb-0">Today</h5>
                        </div>
                        <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down font-primary"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></div>
                        <div class="media-body">
                          <h5 class="mb-0">$<span class="counter">25698</span></h5><span class="mb-1">-$2658(36%)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 ps-0">
                      <div class="media">
                        <div class="align-self-center me-3 text-start"><span class="widget-t mb-1">Sale</span>
                          <h5 class="mb-0">Month</h5>
                        </div>
                        <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up font-primary"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></div>
                        <div class="media-body ps-2">
                          <h5 class="mb-0">$<span class="counter">6954</span></h5><span class="mb-1">+$369(15%)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 pe-0">
                      <div class="media border-after-xs">
                        <div class="align-self-center me-3 text-start"><span class="widget-t mb-1">Sale</span>
                          <h5 class="mb-0">Week</h5>
                        </div>
                        <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up font-primary"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></div>
                        <div class="media-body">
                          <h5 class="mb-0">$<span class="counter">63147</span></h5><span class="mb-1">+$69(65%)</span>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 ps-0">
                      <div class="media">
                        <div class="align-self-center me-3 text-start"><span class="widget-t mb-1">Sale</span>
                          <h5 class="mb-0">Year</h5>
                        </div>
                        <div class="media-body align-self-center ps-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up font-primary"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></div>
                        <div class="media-body ps-2">
                          <h5 class="mb-0">$<span class="counter">963198</span></h5><span class="mb-1">+$3654(90%)          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 xl-50 box-col-12">
                <div class="widget-joins card">
                  <div class="row">
                    <div class="col-sm-6 pe-0">
                      <div class="media border-after-xs">
                        <div class="align-self-center me-3">68%<i class="fa fa-angle-up ms-2"></i></div>
                        <div class="media-body details ps-3"><span class="mb-1">New</span>
                          <h5 class="mb-0 counter">6981</h5>
                        </div>
                        <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag font-primary float-end ms-2"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg></div>
                      </div>
                    </div>
                    <div class="col-sm-6 ps-0">
                      <div class="media">
                        <div class="align-self-center me-3">12%<i class="fa fa-angle-down ms-2"></i></div>
                        <div class="media-body details ps-3"><span class="mb-1">Pending</span>
                          <h5 class="mb-0 counter">783</h5>
                        </div>
                        <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers font-primary float-end ms-3"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg></div>
                      </div>
                    </div>
                    <div class="col-sm-6 pe-0">
                      <div class="media border-after-xs">
                        <div class="align-self-center me-3">68%<i class="fa fa-angle-up ms-2"></i></div>
                        <div class="media-body details ps-3 pt-0"><span class="mb-1">Done</span>
                          <h5 class="mb-0 counter">3674</h5>
                        </div>
                        <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart font-primary float-end ms-2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></div>
                      </div>
                    </div>
                    <div class="col-sm-6 ps-0">
                      <div class="media">
                        <div class="align-self-center me-3">68%<i class="fa fa-angle-up ms-2"></i></div>
                        <div class="media-body details ps-3 pt-0"><span class="mb-1">Cancel</span>
                          <h5 class="mb-0 counter">69</h5>
                        </div>
                        <div class="media-body align-self-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign font-primary float-end ms-2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 box-col-6">
                <div class="card testimonial text-center">
                  <div class="card-body">
                    <div>
                      <div class="item"><i class="fa fa-quote-left"></i>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock.</p><img class="img-80" src="../assets/images/dashboard/boy-2.png" alt="">
                        <h5 class="font-primary">Poio klot</h5><span>Developer</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card xl-none">
                  <div class="ecommerce-widget card-body">
                    <div class="row">
                      <div class="col-6"><span>New Order</span>
                        <h3 class="total-num counter">25639</h3>
                      </div>
                      <div class="col-6">
                        <div class="text-end">
                          <ul>
                            <li>Profit<span class="product-stts font-primary m-l-10">8989<i class="icon-angle-up f-12 m-l-10"></i></span></li>
                            <li>Loss<span class="product-stts font-primary m-l-10">2560<i class="icon-angle-down f-12 m-l-10"></i></span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="progress-showcase">
                      <div class="progress sm-progress-bar">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">                                               </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 box-col-12">
                <div>
                  <div class="card card-activity">
                    <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                      <h5 class="text-uppercase">Recent Activity</h5>
                      <div class="setting-list">
                        <ul class="list-unstyled setting-option">
                          <li>
                            <div class="setting-primary"><i class="icon-settings"></i></div>
                          </li>
                          <li><i class="view-html fa fa-code font-primary"></i></li>
                          <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                          <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                          <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                          <li><i class="icofont icofont-error close-card font-primary"></i></li>
                        </ul>
                      </div>
                    </div>
                    <div class="card-body">
                      <ul class="crm-activity">
                        <li class="media"><span class="me-3 font-primary">A</span>
                          <div class="align-self-center media-body">
                            <h6 class="mt-0">Any desktop publishing.</h6>
                            <ul class="dates">
                              <li>25 July 2017</li>
                              <li>20 hours ago</li>
                            </ul>
                          </div>
                        </li>
                        <li class="media"><span class="me-3 font-secondary">C</span>
                          <div class="align-self-center media-body">
                            <h6 class="mt-0">Contrary to popular belief. </h6>
                            <ul class="dates">
                              <li>25 July 2017</li>
                              <li>20 hours ago      </li>
                            </ul>
                          </div>
                        </li>
                        <li class="media"><span class="me-3 font-primary">E</span>
                          <div class="align-self-center media-body">
                            <h6 class="mt-0">Established fact that a reader.</h6>
                            <ul class="dates">
                              <li>25 July 2017</li>
                              <li>20 hours ago</li>
                            </ul>
                          </div>
                        </li>
                        <li class="media"><span class="me-3 font-secondary">H</span>
                          <div class="align-self-center media-body">
                            <h6 class="mt-0">H-Code - A premium portfolio.</h6>
                            <ul class="dates">
                              <li>25 July 2017</li>
                              <li>20 hours ago      </li>
                            </ul>
                          </div>
                        </li>
                        <li class="media"><span class="me-3 font-primary">T</span>
                          <div class="align-self-center media-body">
                            <h6 class="mt-0">There isn't any hidden.</h6>
                            <ul class="dates">
                              <li>25 July 2017</li>
                              <li>20 hours ago</li>
                            </ul>
                          </div>
                        </li>
                        <li class="media">
                          <div class="align-self-center media-body">
                            <ul class="dates">
                              <li>25 July 2017</li>
                              <li>20 hours ago</li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                      <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#recent-activity" title="" data-bs-original-title="Copy" aria-label="Copy"><i class="icofont icofont-copy-alt"></i></button>
                        <pre class=" language-html"><code class=" language-html" id="recent-activity"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-header pb-0 d-flex justify-content-between align-items-center<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text-uppercase<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Recent Activity<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>setting-list<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>ul</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>list-unstyled setting-option<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>setting-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icon-settings<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>view-html fa fa-code font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-maximize full-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-minus minimize-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-refresh reload-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-error close-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>ul</span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-body<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
    <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>ul</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>crm-activity<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>media<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>me-3 font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>A<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>align-self-center media-body<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>mt-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Any desktop publishing packages and web page editors.<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>ul</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dates<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>25 July 2017<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>20 hours ago<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>ul</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
      <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>media<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>me-3 font-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>C<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>align-self-center media-body<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>mt-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Contrary to popular belief, Lorem Ipsum is not simply. <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>ul</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dates<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>25 July 2017<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>20 hours ago <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>ul</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>media<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>me-3 font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>E<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>align-self-center media-body<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>mt-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Established fact that a reader will be distracted <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>ul</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dates<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>25 July 2017<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>20 hours ago<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>ul</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>media<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>me-3 font-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>H<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>align-self-center media-body<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>mt-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>H-Code - A premium portfolio template from ThemeZaa <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>ul</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dates<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>25 July 2017<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>20 hours ago <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>ul</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>media<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>me-3 font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>T<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>align-self-center media-body<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>mt-0<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>There isn't anything embarrassing hidden.<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>ul</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dates<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>25 July 2017<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>20 hours ago<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>ul</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>media<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>align-self-center media-body<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>ul</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>dates<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>25 July 2017<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>20 hours ago<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>ul</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>ul</span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 box-col-6">
                <div class="card custom-card">
                  <div class="card-header pb-0"><img class="img-fluid" src="../assets/images/user-card/3.jpg" alt=""></div>
                  <div class="card-profile"><img class="rounded-circle" src="../assets/images/avtar/3.jpg" alt=""></div>
                  <ul class="card-social">
                    <li><a href="#" data-bs-original-title="" title=""><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" data-bs-original-title="" title=""><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" data-bs-original-title="" title=""><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" data-bs-original-title="" title=""><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" data-bs-original-title="" title=""><i class="fa fa-rss"></i></a></li>
                  </ul>
                  <div class="text-center profile-details">
                    <h4><a href="social-app.html" alt="" data-bs-original-title="" title="">Scarlett john</a></h4>
                    <h6>Manager</h6>
                  </div>
                  <div class="card-footer row">
                    <div class="col-4 col-sm-4">
                      <h6>Follower</h6>
                      <h3 class="counter">9564</h3>
                    </div>
                    <div class="col-4 col-sm-4">
                      <h6>Following</h6>
                      <h3><span class="counter">49</span>K</h3>
                    </div>
                    <div class="col-4 col-sm-4">
                      <h6>Total Post</h6>
                      <h3><span class="counter">96</span>M</h3>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 xl-25 col-lg-6 box-col-6">
                <div class="card social-widget-card">
                  <div class="card-body">
                    <div class="redial-social-widget radial-bar-70" data-label="50%"><i class="fa fa-facebook font-primary"></i></div>
                    <h5 class="b-b-light">Facebook</h5>
                    <div class="row">
                      <div class="col text-center b-r-light"><span>Post</span>
                        <h4 class="counter mb-0">6589</h4>
                      </div>
                      <div class="col text-center"><span>Like</span>
                        <h4 class="counter mb-0">75269</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 xl-25 col-lg-6 box-col-6">
                <div class="card social-widget-card">
                  <div class="card-body">
                    <div class="redial-social-widget radial-bar-70" data-label="50%"><i class="fa fa-twitter font-primary"></i></div>
                    <h5 class="b-b-light">Twitter</h5>
                    <div class="row">
                      <div class="col text-center b-r-light"><span>Post</span>
                        <h4 class="counter mb-0">6589</h4>
                      </div>
                      <div class="col text-center"><span>Follower</span>
                        <h4 class="counter mb-0">75269</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 xl-25 col-lg-6 box-col-6">
                <div class="card social-widget-card">
                  <div class="card-body">
                    <div class="redial-social-widget radial-bar-70" data-label="50%"><i class="fa fa-linkedin font-primary"></i></div>
                    <h5 class="b-b-light">linkedin</h5>
                    <div class="row">
                      <div class="col text-center b-r-light"><span>Post</span>
                        <h4 class="counter mb-0">1234</h4>
                      </div>
                      <div class="col text-center"><span>linkedin</span>
                        <h4 class="counter mb-0">4369</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 xl-25 col-lg-6 box-col-6">
                <div class="card social-widget-card">
                  <div class="card-body">
                    <div class="redial-social-widget radial-bar-70" data-label="50%"><i class="fa fa-google-plus font-primary"></i></div>
                    <h5 class="b-b-light">Google +</h5>
                    <div class="row">
                      <div class="col text-center b-r-light"><span>Post</span>
                        <h4 class="counter mb-0">369</h4>
                      </div>
                      <div class="col text-center"><span>Follower</span>
                        <h4 class="counter mb-0">3458</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-sm-12">
                <div class="card browser-widget">
                  <div class="media card-body">
                    <div class="media-img"><img src="../assets/images/dashboard/chrome.png" alt=""></div>
                    <div class="media-body align-self-center">
                      <div>
                        <p>Daily </p>
                        <h4><span class="counter">36</span>%</h4>
                      </div>
                      <div>
                        <p>Month </p>
                        <h4><span class="counter">96</span>%</h4>
                      </div>
                      <div>
                        <p>Week </p>
                        <h4><span class="counter">46</span>%</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6">
                <div class="card browser-widget">
                  <div class="media card-body">
                    <div class="media-img"><img src="../assets/images/dashboard/firefox.png" alt=""></div>
                    <div class="media-body align-self-center">
                      <div>
                        <p>Daily </p>
                        <h4><span class="counter">36</span>%</h4>
                      </div>
                      <div>
                        <p>Month </p>
                        <h4><span class="counter">96</span>%</h4>
                      </div>
                      <div>
                        <p>Week </p>
                        <h4><span class="counter">46</span>%</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6">
                <div class="card browser-widget">
                  <div class="media card-body">
                    <div class="media-img"><img src="../assets/images/dashboard/safari.png" alt=""></div>
                    <div class="media-body align-self-center">
                      <div>
                        <p>Daily </p>
                        <h4><span class="counter">36</span>%</h4>
                      </div>
                      <div>
                        <p>Month </p>
                        <h4><span class="counter">96</span>%</h4>
                      </div>
                      <div>
                        <p>Week </p>
                        <h4><span class="counter">46</span>%</h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card">
                  <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h5>PRODUCTS CART</h5>
                    <div class="setting-list">
                      <ul class="list-unstyled setting-option">
                        <li>
                          <div class="setting-primary"><i class="icon-settings"></i></div>
                        </li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="user-status table-responsive">
                      <table class="table table-bordernone">
                        <thead>
                          <tr>
                            <th scope="col">Details</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Status</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="f-w-600">Simply dummy text of the printing</td>
                            <td>1</td>
                            <td class="font-primary">Pending</td>
                            <td>
                              <div class="span badge rounded-pill pill-badge-secondary">6523</div>
                            </td>
                          </tr>
                          <tr>
                            <td class="f-w-600">Long established</td>
                            <td>5</td>
                            <td class="font-secondary">Cancle</td>
                            <td>
                              <div class="span badge rounded-pill pill-badge-success">6523</div>
                            </td>
                          </tr>
                          <tr>
                            <td class="f-w-600">sometimes by accident</td>
                            <td>10</td>
                            <td class="font-secondary">Cancle</td>
                            <td>
                              <div class="span badge rounded-pill pill-badge-warning">6523</div>
                            </td>
                          </tr>
                          <tr>
                            <td class="f-w-600">Classical Latin literature</td>
                            <td>9</td>
                            <td class="font-primary">Return</td>
                            <td>
                              <div class="span badge rounded-pill pill-badge-primary">6523</div>
                            </td>
                          </tr>
                          <tr>
                            <td class="f-w-600">keep the site on the Internet</td>
                            <td>8</td>
                            <td class="font-primary">Pending</td>
                            <td>
                              <div class="span badge rounded-pill pill-badge-danger">6523</div>
                            </td>
                          </tr>
                          <tr>
                            <td class="f-w-600">Molestiae consequatur</td>
                            <td>3</td>
                            <td class="font-secondary">Cancle</td>
                            <td>
                              <div class="span badge rounded-pill pill-badge-info">6523</div>
                            </td>
                          </tr>
                          <tr>
                            <td class="f-w-600">Pain can procure</td>
                            <td>8</td>
                            <td class="font-primary">Return</td>
                            <td>
                              <div class="span badge rounded-pill pill-badge-primary">6523</div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#products-cart" title="" data-bs-original-title="Copy" aria-label="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre class=" language-html"><code class=" language-html" id="products-cart"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-header pb-0 d-flex justify-content-between align-items-center<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span><span class="token punctuation">&gt;</span></span>PRODUCTS CART<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>setting-list<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>ul</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>list-unstyled setting-option<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>setting-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icon-settings<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>view-html fa fa-code font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-maximize full-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-minus minimize-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-refresh reload-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-error close-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>ul</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-body<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>user-status table-responsive<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>table</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>table table-bordernone<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>thead</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Details<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Quantity<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Status<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Price<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>thead</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tbody</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>f-w-600<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Simply dummy text of the printing<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>1<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Pending<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>span badge rounded-pill pill-badge-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>6523<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>f-w-600<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Long established<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>5<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>font-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Cancle<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>span badge rounded-pill pill-badge-success<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>6523<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>f-w-600<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>sometimes by accident<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>10<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>font-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Cancle<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>span badge rounded-pill pill-badge-warning<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>6523<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>f-w-600<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Classical Latin literature<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>9<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Return<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>span badge rounded-pill pill-badge-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>6523<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>f-w-600<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>keep the site on the Internet<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>8<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Pending<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>span badge rounded-pill pill-badge-danger<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>6523<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>f-w-600<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Molestiae consequatur<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>3<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>font-secondary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Cancle<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>span badge rounded-pill pill-badge-info<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>6523<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>f-w-600<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Pain can procure<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>8<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Return<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>span badge rounded-pill pill-badge-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>6523<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tbody</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>table</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 xl-100 box-col-12">
                <div class="card employee-status">
                  <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h5>EMPLOYEE STATUS</h5>
                    <div class="setting-list">
                      <ul class="list-unstyled setting-option">
                        <li>
                          <div class="setting-primary"><i class="icon-settings"></i></div>
                        </li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="user-status table-responsive">
                      <table class="table table-bordernone">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Skill Level</th>
                            <th scope="col">Experience</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="bd-t-none u-s-tb">
                              <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle" src="../assets/images/user/4.jpg" alt="">
                                <div class="d-inline-block">
                                  <h6>John Deo <span class="text-muted">(14+ Online)</span></h6>
                                </div>
                              </div>
                            </td>
                            <td>Designer</td>
                            <td>
                              <div class="progress-showcase">
                                <div class="progress" style="height: 8px;">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td>2 Year</td>
                          </tr>
                          <tr>
                            <td class="bd-t-none u-s-tb">
                              <div class="align-middle image-sm-size d-flex align-items-center"><img class="img-radius align-top m-r-15 rounded-circle" src="../assets/images/user/1.jpg" alt="">
                                <div class="d-inline-block">
                                  <h6>Holio Mako <span class="text-muted">(250+ Online)</span></h6>
                                </div>
                              </div>
                            </td>
                            <td>Developer</td>
                            <td>
                              <div class="progress-showcase">
                                <div class="progress" style="height: 8px;">
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 70%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td>3 Year</td>
                          </tr>
                          <tr>
                            <td class="bd-t-none u-s-tb">
                              <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle" src="../assets/images/user/5.jpg" alt="">
                                <div class="d-inline-block">
                                  <h6>Mohsib lara<span class="text-muted">(99+ Online)</span></h6>
                                </div>
                              </div>
                            </td>
                            <td>Tester</td>
                            <td>
                              <div class="progress-showcase">
                                <div class="progress" style="height: 8px;">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td>5 Month</td>
                          </tr>
                          <tr>
                            <td class="bd-t-none u-s-tb">
                              <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle" src="../assets/images/user/6.jpg" alt="">
                                <div class="d-inline-block">
                                  <h6>Hileri Soli <span class="text-muted">(150+ Online)</span></h6>
                                </div>
                              </div>
                            </td>
                            <td>Designer</td>
                            <td>
                              <div class="progress-showcase">
                                <div class="progress" style="height: 8px;">
                                  <div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td>3 Month</td>
                          </tr>
                          <tr>
                            <td class="bd-t-none u-s-tb">
                              <div class="align-middle image-sm-size"><img class="img-radius align-top m-r-15 rounded-circle" src="../assets/images/user/7.jpg" alt="">
                                <div class="d-inline-block">
                                  <h6>Pusiz bia <span class="text-muted">(14+ Online)</span></h6>
                                </div>
                              </div>
                            </td>
                            <td>Designer</td>
                            <td>
                              <div class="progress-showcase">
                                <div class="progress" style="height: 8px;">
                                  <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </td>
                            <td>5 Year</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#emplotee-status" title="" data-bs-original-title="Copy" aria-label="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre class=" language-html"><code class=" language-html" id="emplotee-status"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-header pb-0 d-flex justify-content-between align-items-center<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span><span class="token punctuation">&gt;</span></span>EMPLOYEE STATUS<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>setting-list<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>ul</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>list-unstyled setting-option<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>setting-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icon-settings<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>view-html fa fa-code font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-maximize full-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-minus minimize-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-refresh reload-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-error close-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>ul</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-body<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>user-status table-responsive<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>table</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>table table-bordernone<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>thead</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Name<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Designation<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Skill Level<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>th</span> <span class="token attr-name">scope</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Experience<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>th</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>thead</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tbody</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>bd-t-none u-s-tb<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>align-middle image-sm-size<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>../assets/images/user/4.jpg<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>John Deo <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text-muted<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>(14+ Online)<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>Designer<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-showcase<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">height</span><span class="token punctuation">:</span> 8px<span class="token punctuation">;</span></span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-bar bg-primary<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progressbar<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">width</span><span class="token punctuation">:</span> 30%</span><span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuenow</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>50<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemin</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>0<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemax</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>2 Year<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>bd-t-none u-s-tb<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>align-middle image-sm-size d-flex align-items-center<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>../assets/images/user/1.jpg<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Holio Mako <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text-muted<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>(250+ Online)<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>Developer<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-showcase<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">height</span><span class="token punctuation">:</span> 8px<span class="token punctuation">;</span></span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-bar bg-secondary<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progressbar<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">width</span><span class="token punctuation">:</span> 70%</span><span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuenow</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>50<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemin</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>0<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemax</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>3 Year<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
        <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
          <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>bd-t-none u-s-tb<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
            <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>align-middle image-sm-size<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>../assets/images/user/5.jpg<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Mohsib lara<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text-muted<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>(99+ Online)<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
                <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>Tester<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-showcase<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">height</span><span class="token punctuation">:</span> 8px<span class="token punctuation">;</span></span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-bar bg-primary<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progressbar<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">width</span><span class="token punctuation">:</span> 60%</span><span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuenow</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>50<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemin</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>0<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemax</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>5 Month<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>bd-t-none u-s-tb<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>align-middle image-sm-size<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>../assets/images/user/6.jpg<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Hileri Soli <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text-muted<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>(150+ Online)<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>Designer<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-showcase<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">height</span><span class="token punctuation">:</span> 8px<span class="token punctuation">;</span></span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-bar bg-secondary<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progressbar<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">width</span><span class="token punctuation">:</span> 30%</span><span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuenow</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>50<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemin</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>0<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemax</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>3 Month<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>tr</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>bd-t-none u-s-tb<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>align-middle image-sm-size<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>img</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>img-radius align-top m-r-15 rounded-circle<span class="token punctuation">"</span></span> <span class="token attr-name">src</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>../assets/images/user/7.jpg<span class="token punctuation">"</span></span> <span class="token attr-name">alt</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>d-inline-block<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                  <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h6</span><span class="token punctuation">&gt;</span></span>Pusiz bia <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>span</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text-muted<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>(14+ Online)<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>span</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h6</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
           <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>Designer<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-showcase<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">height</span><span class="token punctuation">:</span> 8px<span class="token punctuation">;</span></span><span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
                   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progress-bar bg-primary<span class="token punctuation">"</span></span> <span class="token attr-name">role</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>progressbar<span class="token punctuation">"</span></span><span class="token style-attr language-css"><span class="token attr-name"> <span class="token attr-name">style</span></span><span class="token punctuation">="</span><span class="token attr-value"><span class="token property">width</span><span class="token punctuation">:</span> 90%</span><span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuenow</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>50<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemin</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>0<span class="token punctuation">"</span></span> <span class="token attr-name">aria-valuemax</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>100<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
                   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
               <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
             <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>td</span><span class="token punctuation">&gt;</span></span>5 Year<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>td</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tr</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>tbody</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>table</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-lg-6 col-xl-4 xl-50 col-md-12 box-col-6">
                <div class="card height-equal" style="min-height: auto;">
                  <div class="calender-widget">
                    <div class="cal-img"></div>
                    <div class="cal-date">
                      <h5>25<br>Apr</h5>
                    </div>
                    <div class="cal-desc text-center card-body">
                      <h6 class="f-w-600">I must explain to you how? </h6>
                      <p>Denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth,Letraset sheets.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-lg-6 col-xl-8 xl-50 col-md-12 box-col-6">
                <div class="card height-equal" style="min-height: auto;">
                  <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h5>Contact Us</h5>
                    <div class="setting-list">
                      <ul class="list-unstyled setting-option">
                        <li>
                          <div class="setting-primary"><i class="icon-settings"></i></div>
                        </li>
                        <li><i class="view-html fa fa-code font-primary"></i></li>
                        <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                        <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                        <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                        <li><i class="icofont icofont-error close-card font-primary"></i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="contact-form card-body">
                    <form class="theme-form">
                      <div class="form-icon"><i class="icofont icofont-envelope-open"></i></div>
                      <div class="mb-3">
                        <label for="exampleInputName">Your Name</label>
                        <input class="form-control" id="exampleInputName" type="text" placeholder="John Dio" data-bs-original-title="" title="">
                      </div>
                      <div class="mb-3">
                        <label class="col-form-label" for="exampleInputEmail1">Email</label>
                        <input class="form-control" id="exampleInputEmail1" type="email" placeholder="Demo@gmail.com" data-bs-original-title="" title="">
                      </div>
                      <div class="mb-3">
                        <label class="col-form-label" for="exampleInputEmail1">Message</label>
                        <textarea class="form-control textarea" rows="3" cols="50" placeholder="Your Message"></textarea>
                      </div>
                      <div class="text-sm-end">
                        <button class="btn btn-primary" data-bs-original-title="" title="">SEND IT</button>
                      </div>
                    </form>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#contact-us" title="" data-bs-original-title="Copy" aria-label="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre class=" language-html"><code class=" language-html" id="contact-us"> <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card height-equal<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>card-header pb-0 d-flex justify-content-between align-items-center<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>h5</span><span class="token punctuation">&gt;</span></span>Contact Us<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>h5</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>setting-list<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>ul</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>list-unstyled setting-option<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>setting-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icon-settings<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>view-html fa fa-code font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-maximize full-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-minus minimize-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-refresh reload-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>li</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-error close-card font-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>li</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>ul</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>contact-form card-body<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>form</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>theme-form<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>form-icon<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>i</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>icofont icofont-envelope-open<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>i</span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>exampleInputName<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Your Name<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
         <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>exampleInputName<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>John Dio<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col-form-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>exampleInputEmail1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Email<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>input</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>form-control<span class="token punctuation">"</span></span> <span class="token attr-name">id</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>exampleInputEmail1<span class="token punctuation">"</span></span> <span class="token attr-name">type</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>email<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Demo@gmail.com<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>mb-3<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>label</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>col-form-label<span class="token punctuation">"</span></span> <span class="token attr-name">for</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>exampleInputEmail1<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>Message<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>label</span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>textarea</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>form-control textarea<span class="token punctuation">"</span></span> <span class="token attr-name">rows</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>3<span class="token punctuation">"</span></span> <span class="token attr-name">cols</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>50<span class="token punctuation">"</span></span> <span class="token attr-name">placeholder</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>Your Message<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>textarea</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>div</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>text-sm-end<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>
       <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>button</span> <span class="token attr-name">class</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>btn btn-primary<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span>SEND IT<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>button</span><span class="token punctuation">&gt;</span></span>
     <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
   <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>form</span><span class="token punctuation">&gt;</span></span>
 <span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span>
<span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>div</span><span class="token punctuation">&gt;</span></span></code></pre>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
