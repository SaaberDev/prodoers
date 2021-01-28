@extends('admin_panel.layouts.app')
@section('title', 'Dashboard')

@push('styles')
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style" >
        <div class="row">
            <!--                    card one -->
            <div class="col-md-3">
                <div class="dashboardMainCard">
                    <div class="row">
                        <div class="col-md-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90">
                                <g transform="translate(-379 -131)">
                                    <rect width="90" height="90" rx="10" transform="translate(379 131)" fill="#4791ff" opacity="0.17" />
                                    <g transform="translate(403.653 149.75)">
                                        <path d="M93.136,41.748,90.875,13.26a3.561,3.561,0,0,0-3.534-3.273H82.876v-.2a9.786,9.786,0,1,0-19.571,0v.2H58.839a3.559,3.559,0,0,0-3.533,3.269l-2.262,28.5a8.243,8.243,0,0,0,8.219,8.874H84.917a8.243,8.243,0,0,0,8.219-8.877ZM66.27,9.786a6.82,6.82,0,0,1,13.641,0v.2H66.27Zm22.52,36.183a5.224,5.224,0,0,1-3.872,1.691H61.263A5.278,5.278,0,0,1,56,41.982l2.261-28.5a.581.581,0,0,1,.577-.535H63.3V16.6a1.483,1.483,0,1,0,2.965,0V12.952H79.911V16.6a1.483,1.483,0,1,0,2.965,0V12.952h4.466a.582.582,0,0,1,.577.538L90.18,41.978A5.224,5.224,0,0,1,88.789,45.968Z" transform="translate(-53.02)" fill="#4791ff" />
                                        <g transform="translate(12.956 24.709)">
                                            <path d="M197.846,250.327a1.482,1.482,0,0,0-2.1,0l-6.62,6.62-2.546-2.546a1.483,1.483,0,0,0-2.1,2.1l3.594,3.594a1.482,1.482,0,0,0,2.1,0l7.669-7.669A1.483,1.483,0,0,0,197.846,250.327Z" transform="translate(-184.052 -249.893)" fill="#4791ff" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="col-md-9 v-end">
                            <div class="dashboardMainCardContent">
                                <h3 class="mb-0  ">34</h3>
                                <p class="mb-0 ">Total Orders</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--                    card two -->
            <div class="col-md-3">
                <div class="dashboardMainCard">
                    <div class="row">
                        <div class="col-md-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90">
                                <g transform="translate(-788 -137)">
                                    <rect width="90" height="90" rx="10" transform="translate(788 137)" fill="#ffebd4" opacity="0.3" />
                                    <g transform="translate(809 129)">
                                        <path d="M177,49a8,8,0,1,0-8-8A8.007,8.007,0,0,0,177,49Zm0-13.238a5.24,5.24,0,1,1-5.24,5.24A5.246,5.246,0,0,1,177,35.758Z" transform="translate(-153.464)" fill="#f80" />
                                        <path d="M382.056,107.112A5.056,5.056,0,1,0,377,102.056,5.062,5.062,0,0,0,382.056,107.112Zm0-7.354a2.3,2.3,0,1,1-2.3,2.3A2.3,2.3,0,0,1,382.056,99.758Z" transform="translate(-342.343 -58.117)" fill="#f80" />
                                        <path d="M40.825,241H38.692a6.251,6.251,0,0,0-5.671,3.617,11.1,11.1,0,0,0-8.2-3.617h-2.57a11.1,11.1,0,0,0-8.2,3.617A6.251,6.251,0,0,0,8.375,241H6.242A6.23,6.23,0,0,0,0,247.2v10.039a2.7,2.7,0,0,0,2.7,2.693h8.432a3.223,3.223,0,0,0,3.207,2.942H32.724a3.223,3.223,0,0,0,3.207-2.942h8.336a2.8,2.8,0,0,0,2.8-2.789V247.2a6.23,6.23,0,0,0-6.242-6.2ZM2.758,247.2a3.469,3.469,0,0,1,3.484-3.446H8.375a3.469,3.469,0,0,1,3.484,3.446v.944c-.927,2.414-.735,3.861-.735,9.031H2.758Zm30.428,12.455a.462.462,0,0,1-.462.462H14.343a.462.462,0,0,1-.462-.462v-7.534a8.377,8.377,0,0,1,8.367-8.367h2.57a8.377,8.377,0,0,1,8.367,8.367Zm11.123-2.511c0,.048.514.031-8.365.031,0-5.208.19-6.62-.735-9.031V247.2a3.469,3.469,0,0,1,3.484-3.446h2.133a3.469,3.469,0,0,1,3.484,3.446Z" transform="translate(0 -188.879)" fill="#f80" />
                                        <path d="M30.056,107.112A5.056,5.056,0,1,0,25,102.056,5.062,5.062,0,0,0,30.056,107.112Zm0-7.354a2.3,2.3,0,1,1-2.3,2.3A2.3,2.3,0,0,1,30.056,99.758Z" transform="translate(-22.702 -58.117)" fill="#f80" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="col-md-9 v-end">
                            <div class="dashboardMainCardContent">
                                <h3 class="mb-0  ">34</h3>
                                <p class="mb-0 ">Total Clients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--                card three -->
            <div class="col-md-3">
                <div class="dashboardMainCard">
                    <div class="row">
                        <div class="col-md-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90">
                                <g transform="translate(-1171 -137)">
                                    <path d="M10,0H80A10,10,0,0,1,90,10V80A10,10,0,0,1,80,90H10A10,10,0,0,1,0,80V10A10,10,0,0,1,10,0Z" transform="translate(1171 137)" fill="#ffe0e0" opacity="0.5" />
                                    <g transform="translate(1193 106.186)">
                                        <g transform="translate(0 57.815)">
                                            <path d="M59.9,185.277h6.89a.889.889,0,1,0,0-1.778H59.9a.889.889,0,1,0,0,1.778Z" transform="translate(-53.764 -172.323)" fill="#ff0707" />
                                            <path d="M59.9,254.523h6.89a.889.889,0,1,0,0-1.778H59.9a.889.889,0,0,0,0,1.778Z" transform="translate(-53.764 -235.411)" fill="#ff0707" />
                                            <path d="M147.513,434.753a.888.888,0,1,0-.481,1.161A.9.9,0,0,0,147.513,434.753Z" transform="translate(-132.839 -400.736)" fill="#ff0707" />
                                            <path d="M45.29,78.072,34.713,66.718l3.238-3.231a2.94,2.94,0,0,0,.022-4.158,2.966,2.966,0,0,0-4.161-.033l-.008.008-4.44,4.429H27.7V60.32a.889.889,0,0,0-.889-.889H22.107V58.7a.889.889,0,1,0-1.778,0v.726H17.08V58.7a.889.889,0,1,0-1.778,0v.726H12.053V58.7a.889.889,0,1,0-1.778,0v.726H7.026V58.7a.889.889,0,1,0-1.778,0v.726H.889A.889.889,0,0,0,0,60.32V92.172a.889.889,0,0,0,.889.889H9.966a.889.889,0,1,0,0-1.778H1.778V61.209H5.248v.807a.889.889,0,0,0,1.778,0v-.807h3.249v.807a.889.889,0,0,0,1.778,0v-.807H15.3v.807a.889.889,0,0,0,1.778,0v-.807h3.248v.807a.889.889,0,0,0,1.778,0v-.807h3.82V63.74a6.428,6.428,0,0,0-4.255,1.866l-6.544,6.544a.9.9,0,0,0,.146,1.376,6.048,6.048,0,0,0,2.426.909,6.126,6.126,0,0,0,.873.062h0l-1.021,1.018a.889.889,0,0,0-.176.253l-2.853,4.285a1.942,1.942,0,0,0-.324,1.254H6.137a.889.889,0,0,0,0,1.778H16.152a1.97,1.97,0,0,0,1.09-.344l4.336-2.946a.923.923,0,0,0,.144-.116l2.011-2.006,2.194,2.189V91.283H17.789a.889.889,0,1,0,0,1.778h9.026a.889.889,0,0,0,.889-.889V81.6a6.236,6.236,0,0,0,4.006,1.443h3.548a2.723,2.723,0,0,1,1.958.835l6.775,7.2a.9.9,0,0,0,1.537-.609V78.678A.889.889,0,0,0,45.29,78.072ZM22.929,66.863a4.624,4.624,0,0,1,3.259-1.35h1.393l-5.54,5.527a6.2,6.2,0,0,1-1.654,1.279,4.346,4.346,0,0,1-3.113.2Zm12.126-6.294a1.182,1.182,0,0,1,1.655.012,1.161,1.161,0,0,1-.012,1.644L27.4,71.5l-.448-.448a3.468,3.468,0,0,0-1.52-.885ZM16.242,81.27a.152.152,0,0,1-.213-.02.145.145,0,0,1-.022-.213l2.324-3.49L19.7,78.918Zm4.852-3.478-1.65-1.65,1.694-1.691a3.494,3.494,0,0,0,.9,1.531l.434.433ZM43.75,88.222l-5.243-5.571a4.513,4.513,0,0,0-3.249-1.39H31.711a4.475,4.475,0,0,1-3.181-1.314l-5.236-5.225a1.705,1.705,0,0,1,0-2.42,1.739,1.739,0,0,1,2.405,0l4.254,4.254a.9.9,0,0,0,1.258,0,.889.889,0,0,0,0-1.258l-2.549-2.549,4.791-4.78,10.3,11.053Z" transform="translate(0 -57.815)" fill="#ff0707" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="col-md-9 v-end">
                            <div class="dashboardMainCardContent">
                                <h3 class="mb-0  ">$34</h3>
                                <p class="mb-0 ">Total Sales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--                     card four -->
            <div class="col-md-3">
                <div class="dashboardMainCard">
                    <div class="row">
                        <div class="col-md-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" viewBox="0 0 90 90">
                                <g transform="translate(-1554 -137)">
                                    <path d="M10,0H80A10,10,0,0,1,90,10V80A10,10,0,0,1,80,90H10A10,10,0,0,1,0,80V10A10,10,0,0,1,10,0Z" transform="translate(1554 137)" fill="#d4ecd5" opacity="0.5" />
                                    <g transform="translate(1573.875 139.787)">
                                        <g transform="translate(0 16.224)">
                                            <path d="M52.59,58.512a.782.782,0,0,0-.782.782v5.224a.132.132,0,0,1-.132.132H48.706V53.227a.782.782,0,1,0-1.564,0V64.65H41.4l1.554-1.709a1.25,1.25,0,0,0,.3-1l0-.023-1.747-10.32.321-.484.084.059a1.224,1.224,0,0,0,1.8-.451h0l1.777-3.562,4.06,1.572a3.891,3.891,0,0,1,2.254,3.528v3.388a.782.782,0,1,0,1.564,0V52.257a5.452,5.452,0,0,0-3.226-4.976l-.015-.006L43.218,44.6V43.175a5.709,5.709,0,0,0,2.065-3.546,2.728,2.728,0,0,0,1.452-.639,2.692,2.692,0,0,0,.328-3.743v-2.11a7.481,7.481,0,0,0-12.347-5.689,2.688,2.688,0,0,0-.605-1.627v-2.11a7.487,7.487,0,1,0-14.975,0v2.165a2.55,2.55,0,0,0-.6,1.565A7.454,7.454,0,0,0,15.582,25.9a.782.782,0,1,0-.4,1.512,5.925,5.925,0,0,1,4.411,5.728v1.169l-.146-.026a.9.9,0,0,0-.187-.528c-.2-.288-.56-.646-1.716-1.888a1.236,1.236,0,0,0-1.584-.193,11.172,11.172,0,0,1-6.618,1.822,1.25,1.25,0,0,0-1.375.8l-.221.044v-1.2a5.962,5.962,0,0,1,4.213-5.672.782.782,0,1,0-.451-1.5,7.547,7.547,0,0,0-3.818,2.663,7.42,7.42,0,0,0-1.508,4.506V35.3a2.548,2.548,0,0,0-.607,1.648,2.7,2.7,0,0,0,2.391,2.68,5.775,5.775,0,0,0,2.179,3.637V44.6L3.241,47.276l-.015.006A5.451,5.451,0,0,0,0,52.257V64.518a1.7,1.7,0,0,0,1.7,1.7H25.772a1.685,1.685,0,0,0,.914-.269,1.684,1.684,0,0,0,.914.269H51.677a1.7,1.7,0,0,0,1.7-1.7V59.294A.782.782,0,0,0,52.59,58.512Zm-44.7-20.5a1.129,1.129,0,0,1-.751-1.065,1.155,1.155,0,0,1,.751-1.017ZM44.03,46.59l-1.535,3.076-1.729-1.228,1.919-2.368Zm-4.394.759-2.022-2.5V44.1a6.305,6.305,0,0,0,2.032.332h0a5.78,5.78,0,0,0,2.008-.365v.787Zm.918,2.857-.288.433h-1.26l-.288-.433.918-.652ZM26.684,37.923l-2.022-2.5v-.75a6.3,6.3,0,0,0,2.032.332h0a5.779,5.779,0,0,0,2.008-.365v.787Zm.918,2.857-.288.433h-1.26l-.288-.433.918-.652ZM20.527,30.129a2.8,2.8,0,0,0,.392.075A5.775,5.775,0,0,0,23.1,33.841v1.332l-1.6.618a2.68,2.68,0,0,0-.345-.545v-2.11A7.469,7.469,0,0,0,20.527,30.129ZM30.838,29.3a4.216,4.216,0,0,1-8.431,0V25.639a12.8,12.8,0,0,0,7.13-1.938c.7.756,1.124,1.2,1.3,1.4C30.838,27.046,30.838,27.8,30.838,29.3Zm1.492.9a2.813,2.813,0,0,0,.39-.075,7.442,7.442,0,0,0-.633,3.009V35.3a2.668,2.668,0,0,0-.309.457l-1.512-.586V33.749A5.71,5.71,0,0,0,32.33,30.2Zm-8.7,6.441,1.919,2.369-1.309.93,0,0-.415.3L22.29,37.164Zm4.851,1.541,1.25-1.542,1.345.521L29.543,40.24l-.416-.3h0l-1.311-.931Zm.394,3.5.084.059a1.224,1.224,0,0,0,1.8-.451h0l1.319-2.645a2.744,2.744,0,0,0,1.784.983,5.684,5.684,0,0,0,2.182,3.635V44.6L29.4,47.176l-.847-5.007Zm7.707,4.385L38.5,48.439l-1.726,1.226L35.242,46.59Zm7.206-7.344a4.216,4.216,0,0,1-8.431,0V35.064a12.809,12.809,0,0,0,7.13-1.938c.7.756,1.124,1.2,1.3,1.4C43.79,36.472,43.79,37.224,43.79,38.727Zm2.315-1.777a1.129,1.129,0,0,1-.751,1.065V35.887A1.127,1.127,0,0,1,46.106,36.95ZM33.651,33.137a5.924,5.924,0,1,1,11.847,0v1.169c-.036-.007-.133-.024-.146-.026a.9.9,0,0,0-.187-.528c-.205-.3-.561-.647-1.716-1.888a1.237,1.237,0,0,0-1.584-.193,11.193,11.193,0,0,1-6.676,1.819,1.23,1.23,0,0,0-1.317.8l-.221.044v-1.2Zm.144,2.8v2.081a1.126,1.126,0,0,1-.751-1.064A1.154,1.154,0,0,1,33.8,35.932Zm-.642-8.408a1.125,1.125,0,0,1-.391.854,1.157,1.157,0,0,1-.36.21V26.461A1.127,1.127,0,0,1,33.153,27.524Zm-6.531-9.736a5.93,5.93,0,0,1,5.924,5.924v1.169l-.146-.026a.947.947,0,0,0-.221-.577c-.209-.283-.6-.673-1.681-1.84a1.236,1.236,0,0,0-1.584-.193,11.168,11.168,0,0,1-6.739,1.816,1.242,1.242,0,0,0-1.254.806l-.221.044v-1.2h0A5.93,5.93,0,0,1,26.623,17.788Zm-5.779,8.719v2.082a1.129,1.129,0,0,1-.751-1.065A1.155,1.155,0,0,1,20.843,26.506ZM19.45,35.887a1.129,1.129,0,0,1,0,2.126Zm-.072,3.744a2.742,2.742,0,0,0,1.858-1.079L22.6,41.293h0a1.224,1.224,0,0,0,1.8.451l.084-.059.321.484-.847,5.005L17.314,44.6V43.175h0A5.715,5.715,0,0,0,19.378,39.632Zm-5.646,7.717-2.022-2.5V44.1a6.3,6.3,0,0,0,2.032.332h0a5.778,5.778,0,0,0,2.008-.365v.787ZM14.65,50.2l-.288.433H13.1l-.288-.433.918-.652Zm2.131-4.136,1.345.521-1.535,3.076-.416-.3h0l-1.311-.931ZM9.455,38.727V35.064a12.814,12.814,0,0,0,7.13-1.938c.7.749,1.124,1.195,1.3,1.4v4.2a4.216,4.216,0,0,1-8.431,0ZM10.68,46.07,12.6,48.439l-1.309.93,0,0-.415.3L9.338,46.59ZM6.23,64.65V53.227a.782.782,0,1,0-1.564,0V64.65H1.7a.132.132,0,0,1-.132-.132V52.257A3.892,3.892,0,0,1,3.817,48.73l4.057-1.573,1.777,3.562h0a1.224,1.224,0,0,0,1.8.451l.084-.059.321.484-1.747,10.32,0,.023a1.251,1.251,0,0,0,.3,1l1.554,1.709H6.23Zm5.453-2.637,1.66-9.811h.778l1.661,9.811-2.049,2.254ZM25.9,64.518a.132.132,0,0,1-.132.132H22.8V53.227a.782.782,0,1,0-1.564,0V64.65H15.5l1.554-1.709a1.25,1.25,0,0,0,.3-1l0-.023L15.6,51.595l.321-.484.084.059a1.224,1.224,0,0,0,1.8-.451h0l1.777-3.562,4.06,1.572A3.883,3.883,0,0,1,25.9,52.257V64.518Zm.782-15.1A5.567,5.567,0,0,0,25.411,48l.884-5.223h.778L27.957,48A5.571,5.571,0,0,0,26.686,49.416ZM32.134,64.65h0V53.227a.782.782,0,1,0-1.564,0V64.65H27.6a.132.132,0,0,1-.132-.132V52.257a3.737,3.737,0,0,1,.912-2.5,4.209,4.209,0,0,1,1.341-1.023l4.057-1.573,1.777,3.562h0a1.224,1.224,0,0,0,1.8.451l.084-.059.321.484-1.747,10.32,0,.023a1.251,1.251,0,0,0,.3,1L37.87,64.65H32.134Zm5.453-2.637L39.247,52.2h.778l1.661,9.811-2.049,2.254Z" transform="translate(0 -16.224)" fill="#038d08" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="col-md-9 v-end">
                            <div class="dashboardMainCardContent">
                                <h3 class="mb-0  ">34</h3>
                                <p class="mb-0 ">Total Designwalas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--               end -->
        </div>
        <!--                 card div end -->
        <!--               Top Designwalas-->
        <!--              Top Services-->
        <!--              Top Clients-->
        <div class="row " style="padding-top: 30px;">
            <!--               Top Designwalas-->
            <!--               Top Designwalas-->
            <!--               Top Designwalas-->
            <!--               Top Designwalas-->
            <div class="col-md-3">
                <div class="dashboardMainCard">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="w-100">
                                <div class="card_nameNsmallContent">
                                    <h5 class="">Top Designwalas</h5>
                                    <p class="mb-0">( Based on total completed orders )</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">

                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--                     top designwals end -->
            <!--                     top designwals end -->
            <!--                     top designwals end -->
            <!--                     top designwals end -->
            <!--             top service -->
            <!--             top service -->
            <!--             top service -->
            <!--             top service -->
            <div class="col-md-3">
                <div class="dashboardMainCard">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="w-100">
                                <div class="card_nameNsmallContent">
                                    <h5 class="">Top Services</h5>
                                    <p class="mb-0">( Based on total order sale )</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--             top service end-->
            <!--             top service end-->
            <!--             top service end-->
            <!--             top service end-->
            <!--              top clients -->
            <!--              top clients -->
            <!--              top clients -->
            <!--              top clients -->
            <div class="col-md-3">
                <div class="dashboardMainCard">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="w-100">
                                <div class="card_nameNsmallContent">
                                    <h5 class="">Top Clients</h5>
                                    <p class="mb-0">( Based on total spent )</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--              top clients end-->
            <!--              top clients end-->
            <!--              top clients end-->
            <!--              top clients end-->
            <!--              top affiliates -->
            <!--              top affiliates -->
            <!--              top affiliates -->
            <!--              top affiliates -->
            <div class="col-md-3">
                <div class="dashboardMainCard">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="w-100">
                                <div class="card_nameNsmallContent">
                                    <h5 class="">Top Affiliators</h5>
                                    <p class="mb-0">( Based on total sales )</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                            single person details-->
                        <div class="col-md-12 dashHomesingleDIv">
                            <div class="w-100 clearfix">
                                <div class="w-75 float-left">
                                    <div class="w-100 ">
                                        <div class="w-25 float-left">
                                            <div class="dashHomeActiveimg active" style=""><img src="{{ asset('_assets/_admin_panel/img/dashboardlistmanlogo.png') }}" alt="">
                                                <div class="dashHomeActiveSVG">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8" viewBox="0 0 8 8">
                                                        <g fill="#038d08" stroke="#fff" stroke-width="1">
                                                            <circle cx="4" cy="4" r="4" stroke="none" />
                                                            <circle cx="4" cy="4" r="3.5" fill="none" />
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-75 float-left">
                                            <div class="">
                                                <p class="m-0"><a href="#">Name</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-25 float-right">
                                    <div class="text-right">
                                        <h6 class="m-0">60 </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--              top affiliates end-->
            <!--              top affiliates end-->
            <!--              top affiliates end-->
            <!--              top affiliates end-->
        </div>
        <!--               dashboard home table -->
        <div class="row" style="padding-top: 30px;">
            <div class="col-md-12">
                <div class="dashHomeTable boxshadow py-4 bg-white">
                    <div class="w-100">
                        <div class="w-50 float-left">
                            <div class="">
                                <h4 class="runningorderTextheadingtable">Running Orders</h4>
                            </div>
                        </div>
                        <div class="w-50 float-left">
                            <div class="text-right"> <a class="runningorderSeeAllingtable" href="#">See All</a></div>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Client's Name</th>
                            <th scope="col">Assigned to</th>
                            <th scope="col">Service Name</th>
                            <th scope="col">Total Spent</th>
                            <th scope="col">Payment Method</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>XYZ</td>
                            <td>XYZ</td>
                            <td>Logo Design</td>
                            <td>$100</td>
                            <td>Bkash</td>
                            <td>
                                <div class="tableDataLastButtonLiketab tabletabRED"> <span class="">Not assigned</span> </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>XYZ</td>
                            <td>XYZ</td>
                            <td>Logo Design</td>
                            <td>$100</td>
                            <td>Bkash</td>
                            <td>
                                <div class="tableDataLastButtonLiketab tabletabGREEN"><span class="">Complete</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>XYZ</td>
                            <td>XYZ</td>
                            <td>Logo Design</td>
                            <td>$100</td>
                            <td>Bkash</td>
                            <td>
                                <div class="tableDataLastButtonLiketab tabletabORANGE"><span class="">Delivered</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>XYZ</td>
                            <td>XYZ</td>
                            <td>Logo Design</td>
                            <td>$100</td>
                            <td>Bkash</td>
                            <td>
                                <div class="tableDataLastButtonLiketab tabletabORANGE"> <span class="">Delivered</span> </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>XYZ</td>
                            <td>XYZ</td>
                            <td>Logo Design</td>
                            <td>$100</td>
                            <td>Bkash</td>
                            <td>
                                <div class="tableDataLastButtonLiketab tabletabLightSKY"> <span class="">Ongoing</span> </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>XYZ</td>
                            <td>XYZ</td>
                            <td>Logo Design</td>
                            <td>$100</td>
                            <td>Bkash</td>
                            <td>
                                <div class="tableDataLastButtonLiketab tabletabLightSKY"> <span class="">Ongoing</span> </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>XYZ</td>
                            <td>XYZ</td>
                            <td>Logo Design</td>
                            <td>$100</td>
                            <td>Bkash</td>
                            <td>
                                <div class="tableDataLastButtonLiketab tabletabORANGE"> <span class=" ">Delivered</span> </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
