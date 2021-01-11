<div class="col-xl-2 col-lg-3 p-0 leftsideOverflow scrollbar scroll-style d-none d-lg-block">
    <div class="sideNavAdminLarge " id="sidebar">
        <ul class="nav bd-links flex-column">
            {{-- dashboard --}}
            <li class="nav-item">
                <a class="nav-link {{ Route::is('dashboard.index') ? 'active' : '' }}"
                   href="{{ route('dashboard.index') }}">
                    <span class="svgSpan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.406" viewBox="0 0 24 22.406">
                            <g id="_01_dashboard" data-name="01_dashboard" transform="translate(0 -17)">
                                <path id="Path_2278" data-name="Path 2278"
                                      d="M21.891,17H2.109A2.112,2.112,0,0,0,0,19.109V32.8a2.112,2.112,0,0,0,2.109,2.109H8.92L8.4,38H7.5a.7.7,0,1,0,0,1.406h9A.7.7,0,0,0,16.5,38h-.9l-.516-3.094h6.811A2.112,2.112,0,0,0,24,32.8V19.109A2.112,2.112,0,0,0,21.891,17ZM14.17,38H9.83l.516-3.094h3.309Zm8.424-5.2a.7.7,0,0,1-.7.7H2.109a.7.7,0,0,1-.7-.7V19.109a.7.7,0,0,1,.7-.7H11.3v.8a.7.7,0,0,0,1.406,0v-.8h9.188a.7.7,0,0,1,.7.7Z"
                                      fill="#2d2d2d"/>
                                <path id="Path_2279" data-name="Path 2279"
                                      d="M71.7,117.5a.7.7,0,0,0-.7.7v2.3H69.406v-4.547a.7.7,0,0,0-1.406,0V120.5H66.406v-6.8a.7.7,0,0,0-1.406,0v7.5a.7.7,0,0,0,.7.7h6a.7.7,0,0,0,.7-.7v-3A.7.7,0,0,0,71.7,117.5Z"
                                      transform="translate(-61.953 -91.5)" fill="#2d2d2d"/>
                                <path id="Path_2280" data-name="Path 2280"
                                      d="M277.078,121a4.076,4.076,0,0,0-2.915,6.927.461.461,0,0,0,.066.066A4.077,4.077,0,1,0,277.078,121Zm2.577,3.375h-1.874V122.5A2.681,2.681,0,0,1,279.655,124.375Zm-3.28-1.874v2.286l-1.616,1.616A2.673,2.673,0,0,1,276.375,122.5Zm-.621,4.9,1.616-1.616h2.286A2.673,2.673,0,0,1,275.754,127.4Z"
                                      transform="translate(-260.203 -99.125)" fill="#2d2d2d"/>
                            </g>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">Dashboard</span>
                </a>
            </li>

            {{-- service start --}}
            <li class="nav-item">
                <a class="nav-link collapsed {{ Route::is('services.*') ? 'active' : '' }}"
                   data-toggle="collapse" href="#services" role="button"
                   aria-expanded="{{ Route::is('services.*') ? 'true' : '' }}">
                    <span class="svgSpan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24.104" viewBox="0 0 24 24.104">
                            <g id="_02_services" data-name="02_services" transform="translate(-1.1)">
                                <path id="Path_2240" data-name="Path 2240"
                                      d="M279.33,114.926a.471.471,0,1,0-.471-.471A.471.471,0,0,0,279.33,114.926Z"
                                      transform="translate(-264.684 -108.618)" fill="#2d2d2d"/>
                                <path id="Path_2241" data-name="Path 2241"
                                      d="M169.633,115.645a4.267,4.267,0,0,0,3.34-6.923.471.471,0,1,0-.737.586,3.29,3.29,0,0,1,.722,2.07,3.325,3.325,0,1,1-3.507-3.321.471.471,0,1,0-.05-.94,4.267,4.267,0,0,0,.232,8.528Z"
                                      transform="translate(-156.534 -102.074)" fill="#2d2d2d"/>
                                <path id="Path_2242" data-name="Path 2242"
                                      d="M23.02,3.279H20.191a7.608,7.608,0,0,0-.829-.87,1.632,1.632,0,0,0-2.305,0l-.72.72a6.928,6.928,0,0,0-1.162-.482V1.63A1.632,1.632,0,0,0,13.546,0h-.893a1.632,1.632,0,0,0-1.63,1.63V2.647a6.93,6.93,0,0,0-1.162.482l-.72-.72a1.632,1.632,0,0,0-2.305,0,7.677,7.677,0,0,0-.829.87H3.179A2.082,2.082,0,0,0,1.1,5.359V16.4a2.082,2.082,0,0,0,2.08,2.08h8.157l-.617,2.216H9.3a1.544,1.544,0,0,0-1.542,1.542v.929H6.033a.471.471,0,0,0,0,.942H20.165a.471.471,0,1,0,0-.942H18.437v-.929a1.544,1.544,0,0,0-1.542-1.542H15.48l-.617-2.216H23.02A2.082,2.082,0,0,0,25.1,16.4V5.359a2.082,2.082,0,0,0-2.08-2.08Zm0,.942a1.139,1.139,0,0,1,1.138,1.138v8.972H20.466a1.634,1.634,0,0,0-.472-1.069l-.72-.72a6.924,6.924,0,0,0,.482-1.162c1.029,0,1.04.006,1.183-.008A1.632,1.632,0,0,0,22.4,9.751V8.858a1.632,1.632,0,0,0-1.63-1.63H19.756a6.928,6.928,0,0,0-.482-1.162l.72-.72a1.628,1.628,0,0,0,.478-1.126ZM6.87,3.707,7.5,3.075a.689.689,0,0,1,.974,0l.971.972a.471.471,0,0,0,.574.072,6,6,0,0,1,1.589-.659A.471.471,0,0,0,11.964,3V1.63a.689.689,0,0,1,.689-.689h.893a.689.689,0,0,1,.689.689V3a.471.471,0,0,0,.355.456,5.994,5.994,0,0,1,1.589.659.471.471,0,0,0,.574-.072l.971-.972a.689.689,0,0,1,.974,0c.635.656.765.689.822.994a.688.688,0,0,1-.19.612l-.971.971a.471.471,0,0,0-.072.574,6,6,0,0,1,.6,1.381q.03.1.057.208a.471.471,0,0,0,.456.355h1.373a.689.689,0,0,1,.689.689v.893a.689.689,0,0,1-.689.689H19.4a.471.471,0,0,0-.456.355,5.993,5.993,0,0,1-.659,1.589q-.01.017-.019.035a.471.471,0,0,0,.091.538c.864.919,1.122.986,1.168,1.374H6.673a.682.682,0,0,1,.2-.4l.971-.971a.471.471,0,0,0,.072-.574,5.99,5.99,0,0,1-.659-1.589.471.471,0,0,0-.456-.355H5.425a.689.689,0,0,1-.689-.689V8.858a.689.689,0,0,1,.689-.689H6.8a.471.471,0,0,0,.456-.355,5.99,5.99,0,0,1,.659-1.589.471.471,0,0,0-.072-.574A14.387,14.387,0,0,1,6.779,4.568a.689.689,0,0,1,.091-.861Zm-3.691.514H5.726A1.629,1.629,0,0,0,6.2,5.346l.72.72a6.932,6.932,0,0,0-.482,1.162H5.425a1.632,1.632,0,0,0-1.63,1.63v.893a1.632,1.632,0,0,0,1.63,1.63H6.442a6.928,6.928,0,0,0,.482,1.162l-.72.72a1.633,1.633,0,0,0-.472,1.069H2.041V5.359A1.139,1.139,0,0,1,3.179,4.221ZM17.5,22.233v.929H8.7v-.929a.6.6,0,0,1,.6-.6h7.591A.6.6,0,0,1,17.5,22.233ZM14.5,20.691H11.7l.617-2.216h1.572Zm9.656-4.3a1.139,1.139,0,0,1-1.138,1.138H3.179A1.139,1.139,0,0,1,2.041,16.4V15.273H24.158V16.4Z"
                                      transform="translate(0 0)" fill="#2d2d2d"/>
                            </g>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">Services</span>
                    <span class="nav-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                            <text id="_" data-name="&gt;" transform="translate(0 21)" fill="#141414" font-size="20"
                                  font-family="Poppins-Regular, Poppins">
                                <tspan x="0" y="0">&gt;</tspan>
                            </text>
                        </svg>
                    </span>
                </a>
                {{-- service sub menu--}}
                <div class="collapse {{ Route::is('services.*') ? 'show' : '' }}"
                     id="services">
                    <ul class="list-unstyled font-weight-normal pb-1 small">
                        <li class="nav-item sub-item">
                            <a href="{{ route('services.service.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('services.service.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Services</span>
                            </a>
                        </li>
                        <li class="nav-item sub-item">
                            <a href="{{ route('services.category.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('services.category.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Categories</span>
                            </a>
                            {{--                             nested sub insider--}}
                        </li>

                        <li class="nav-item sub-item">
                            <a href="{{ route('services.tag.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('services.tag.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Tags</span>
                            </a>
                            {{--                             nested sub insider--}}
                        </li>
                    </ul>
                </div>
            </li>
            {{-- service end --}}
            {{-- chat --}}
            <li class="nav-item">
                <a class="nav-link collapsed {{ Route::is('chats.*') ? 'active' : '' }}" data-toggle="collapse"
                   href="#chat" role="button" aria-expanded="{{ Route::is('chats.*') ? 'true' : '' }}">
                    <span class="svgSpan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25.232" viewBox="0 0 24 25.232">
                            <g id="_03_chat" data-name="03_chat" transform="translate(-3.365)">
                                <g id="Group_1159" data-name="Group 1159" transform="translate(3.366)">
                                    <g id="Group_1158" data-name="Group 1158" transform="translate(0)">
                                        <path id="Path_2233" data-name="Path 2233"
                                              d="M15.422,0c-.007.007-.02.007-.039.007A12.228,12.228,0,0,0,3.366,12.412,12.574,12.574,0,0,0,5.979,20.1L4.23,24.291a.681.681,0,0,0,.341.886.647.647,0,0,0,.373.047l6.411-1.163a11.229,11.229,0,0,0,3.995.717A12.228,12.228,0,0,0,27.366,12.372,12.16,12.16,0,0,0,15.422,0Zm-.065,23.432a10.219,10.219,0,0,1-3.7-.7.609.609,0,0,0-.347-.034l-5.4.974,1.428-3.428a.7.7,0,0,0-.1-.71,10.882,10.882,0,0,1-1.82-3.123,11.307,11.307,0,0,1-.733-4.009A10.9,10.9,0,0,1,15.389,1.352,10.822,10.822,0,0,1,26.063,12.331v.041A10.9,10.9,0,0,1,15.356,23.432Z"
                                              transform="translate(-3.366)" fill="#2d2d2d"/>
                                    </g>
                                </g>
                                <g id="Group_1161" data-name="Group 1161" transform="translate(10.89 9.918)">
                                    <g id="Group_1160" data-name="Group 1160">
                                        <path id="Path_2234" data-name="Path 2234"
                                              d="M118.993,146.7h-3.651a.676.676,0,0,0,0,1.352h3.651a.676.676,0,0,0,0-1.352Z"
                                              transform="translate(-114.666 -146.7)" fill="#2d2d2d"/>
                                    </g>
                                </g>
                                <g id="Group_1163" data-name="Group 1163" transform="translate(10.89 13.298)">
                                    <g id="Group_1162" data-name="Group 1162">
                                        <path id="Path_2235" data-name="Path 2235"
                                              d="M123.725,196.7h-8.383a.676.676,0,1,0,0,1.352h8.383a.676.676,0,1,0,0-1.352Z"
                                              transform="translate(-114.666 -196.7)" fill="#2d2d2d"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">Chat</span>
                    <span class="nav-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                            <text id="_" data-name=">" transform="translate(0 21)" fill="#141414" font-size="20"
                                  font-family="Poppins-Regular, Poppins">
                                <tspan x="0" y="0">&gt;</tspan>
                            </text>
                        </svg>
                    </span>
                </a>
                {{-- service sub menu --}}
                <div class="collapse {{ Route::is('chats.*') ? 'show' : '' }}" id="chat">
                    <ul class="list-unstyled font-weight-normal pb-1 small">
                        <li class="nav-item sub-item">
                            <a href="{{ route('chats.designwala_chat.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('chats.designwala_chat.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Designwala</span>
                            </a>
                        </li>
                        <li class="nav-item sub-item">
                            <a href="{{ route('chats.order_chat.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('chats.order_chat.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Order</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- chat end --}}
            {{-- order --}}
            <li class="nav-item">
                <a class="nav-link collapsed {{ Route::is('orders.*') ? 'active' : '' }}" data-toggle="collapse"
                   href="#ordersNav" role="button" aria-expanded="{{ Route::is('orders.*') ? 'true' : '' }}">
                    <span class="svgSpan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="26.035" viewBox="0 0 24 26.035">
                            <path id="_04_order" data-name="04_order"
                                  d="M13.494,1.718V10.54h4.424V1.718a2.212,2.212,0,0,0-4.424,0ZM2.614,5.569A.763.763,0,0,1,3.693,4.49l.418.418,1.35-1.35a2.36,2.36,0,1,0,.85,1.307L4.651,6.526a.763.763,0,0,1-1.079,0ZM6.545,2.474,7.5,1.517A.763.763,0,0,1,8.582,2.6L7.493,3.684a3.888,3.888,0,1,1-.947-1.21ZM-.743,18.422a.763.763,0,0,0-.763.763.763.763,0,0,0,.763.763.763.763,0,0,0,.763-.763A.763.763,0,0,0-.743,18.422Zm3.051,1.525a.763.763,0,0,1,0-1.525H9.68a.763.763,0,0,1,0,1.525ZM-.743,15.371a.763.763,0,0,0-.763.763.763.763,0,0,0,.763.763.763.763,0,0,0,.763-.763A.763.763,0,0,0-.743,15.371ZM2.307,16.9a.763.763,0,0,1,0-1.525H9.68a.763.763,0,0,1,0,1.525Zm11.187-4.831V23.253a.763.763,0,0,1-.763.763H-3.794a.763.763,0,0,1-.763-.763V1.642A3.667,3.667,0,0,1-.9-2.019h16.6a3.746,3.746,0,0,1,3.737,3.737V11.3a.763.763,0,0,1-.763.763ZM12.7-.494a3.715,3.715,0,0,0-.729,2.212V22.49h-15V1.642A2.141,2.141,0,0,1-.9-.494ZM-.743,12.32a.763.763,0,0,0-.763.763.763.763,0,0,0,.763.763.763.763,0,0,0,.763-.763A.763.763,0,0,0-.743,12.32Zm3.051,1.525H9.68a.763.763,0,0,0,0-1.525H2.307a.763.763,0,0,0,0,1.525Zm0,0"
                                  transform="translate(4.557 2.02)" fill="#2d2d2d" fill-rule="evenodd"/>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">Orders</span>
                    <span class="nav-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                            <text id="_" data-name="&gt;" transform="translate(0 21)" fill="#141414" font-size="20"
                                  font-family="Poppins-Regular, Poppins">
                                <tspan x="0" y="0">&gt;</tspan>
                            </text>
                        </svg>
                    </span>
                </a>
                {{-- service sub menu --}}
                <div class="collapse {{ Route::is('orders.*') ? 'show' : '' }}" id="ordersNav">
                    <ul class="list-unstyled font-weight-normal pb-1 small">
                        <li class="nav-item sub-item">
                            <a href="{{ route('orders.order.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('orders.order.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Order</span>
                            </a>
                        </li>
                        <li class="nav-item sub-item">
                            <a href="{{ route('orders.payment.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('orders.payment.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Payment</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- order end --}}
            {{-- blogs --}}
            <li class="nav-item">
                <a class="nav-link collapsed {{ Route::is('blogs.*') ? 'active' : '' }}" data-toggle="collapse"
                   href="#blogNav" role="button" aria-expanded="{{ Route::is('blogs.*') ? 'true' : '' }}">
                    <span class="svgSpan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22" viewBox="0 0 24 22">
                            <g id="_05_blog" data-name="05_blog" transform="translate(0 -1)">
                                <g id="Group_1150" data-name="Group 1150">
                                    <path id="Path_2225" data-name="Path 2225"
                                          d="M7.323,10.5h-2.5a.75.75,0,0,1,0-1.5h2.5a.75.75,0,0,1,0,1.5Z"
                                          fill="#2d2d2d"/>
                                </g>
                                <g id="Group_1151" data-name="Group 1151">
                                    <path id="Path_2226" data-name="Path 2226"
                                          d="M19.323,10.5h-7.5a.75.75,0,0,1,0-1.5h7.5a.75.75,0,0,1,0,1.5Z"
                                          fill="#2d2d2d"/>
                                </g>
                                <g id="Group_1152" data-name="Group 1152">
                                    <path id="Path_2227" data-name="Path 2227"
                                          d="M7.323,14.5h-2.5a.75.75,0,0,1,0-1.5h2.5a.75.75,0,0,1,0,1.5Z"
                                          fill="#2d2d2d"/>
                                </g>
                                <g id="Group_1153" data-name="Group 1153">
                                    <path id="Path_2228" data-name="Path 2228"
                                          d="M19.323,14.5h-7.5a.75.75,0,0,1,0-1.5h7.5a.75.75,0,1,1,0,1.5Z"
                                          fill="#2d2d2d"/>
                                </g>
                                <g id="Group_1154" data-name="Group 1154">
                                    <path id="Path_2229" data-name="Path 2229"
                                          d="M7.323,18.5h-2.5a.75.75,0,0,1,0-1.5h2.5a.75.75,0,0,1,0,1.5Z"
                                          fill="#2d2d2d"/>
                                </g>
                                <g id="Group_1155" data-name="Group 1155">
                                    <path id="Path_2230" data-name="Path 2230"
                                          d="M19.323,18.5h-7.5a.75.75,0,0,1,0-1.5h7.5a.75.75,0,1,1,0,1.5Z"
                                          fill="#2d2d2d"/>
                                </g>
                                <g id="Group_1156" data-name="Group 1156">
                                    <path id="Path_2231" data-name="Path 2231"
                                          d="M21.25,23H2.75A2.752,2.752,0,0,1,0,20.25V3.75A2.752,2.752,0,0,1,2.75,1h18.5A2.752,2.752,0,0,1,24,3.75v16.5A2.752,2.752,0,0,1,21.25,23ZM2.75,2.5A1.252,1.252,0,0,0,1.5,3.75v16.5A1.252,1.252,0,0,0,2.75,21.5h18.5a1.252,1.252,0,0,0,1.25-1.25V3.75A1.252,1.252,0,0,0,21.25,2.5Z"
                                          fill="#2d2d2d"/>
                                </g>
                                <g id="Group_1157" data-name="Group 1157">
                                    <path id="Path_2232" data-name="Path 2232"
                                          d="M23.25,6H.75a.75.75,0,0,1,0-1.5h22.5a.75.75,0,0,1,0,1.5Z" fill="#2d2d2d"/>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">Blogs</span>
                    <span class="nav-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                            <text id="_" data-name="&gt;" transform="translate(0 21)" fill="#141414" font-size="20"
                                  font-family="Poppins-Regular, Poppins">
                                <tspan x="0" y="0">&gt;</tspan>
                            </text>
                        </svg>
                    </span>
                </a>
                {{-- service sub menu --}}
                <div class="collapse {{ Route::is('blogs.*') ? 'show' : '' }}" id="blogNav">
                    <ul class="list-unstyled font-weight-normal pb-1 small">
                        <li class="nav-item sub-item">
                            <a href="{{ route('blogs.blog.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('blogs.blog.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3"> Blog</span>
                            </a>
                        </li>
                        <li class="nav-item sub-item">
                            <a href="{{ route('blogs.category.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('blogs.category.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3"> Categories</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- blogs end --}}
            {{-- Clients --}}
            <li class="nav-item">
                <a class="nav-link collapsed {{ Route::is('clients.*') ? 'active' : '' }}" data-toggle="collapse"
                   href="#customer" role="button" aria-expanded="{{ Route::is('clients.*') ? 'true' : '' }}">
                    <span class="svgSpan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20.906" viewBox="0 0 24 20.906">
                            <g id="_06_clients" data-name="06_clients" transform="translate(0 -33)">
                                <path id="Path_2236" data-name="Path 2236"
                                      d="M173.078,41.156A4.078,4.078,0,1,0,169,37.078,4.083,4.083,0,0,0,173.078,41.156Zm0-6.75a2.672,2.672,0,1,1-2.672,2.672A2.675,2.675,0,0,1,173.078,34.406Z"
                                      transform="translate(-161.078)" fill="#2d2d2d"/>
                                <path id="Path_2237" data-name="Path 2237"
                                      d="M379.578,102.156A2.578,2.578,0,1,0,377,99.578,2.581,2.581,0,0,0,379.578,102.156Zm0-3.75a1.172,1.172,0,1,1-1.172,1.172A1.173,1.173,0,0,1,379.578,98.406Z"
                                      transform="translate(-359.328 -61)" fill="#2d2d2d"/>
                                <path id="Path_2238" data-name="Path 2238"
                                      d="M20.817,241H19.73a3.188,3.188,0,0,0-2.892,1.845A5.659,5.659,0,0,0,12.655,241h-1.31a5.659,5.659,0,0,0-4.183,1.845A3.188,3.188,0,0,0,4.27,241H3.183A3.177,3.177,0,0,0,0,244.164v5.119a1.378,1.378,0,0,0,1.379,1.373h4.3a1.644,1.644,0,0,0,1.635,1.5h9.373a1.644,1.644,0,0,0,1.635-1.5h4.251A1.427,1.427,0,0,0,24,249.234v-5.07A3.177,3.177,0,0,0,20.817,241ZM1.406,244.164a1.769,1.769,0,0,1,1.777-1.757H4.27a1.769,1.769,0,0,1,1.777,1.757v.481c-.473,1.231-.375,1.969-.375,4.6H1.406Zm15.516,6.351a.236.236,0,0,1-.235.235H7.313a.236.236,0,0,1-.235-.235v-3.842a4.271,4.271,0,0,1,4.267-4.267h1.31a4.271,4.271,0,0,1,4.267,4.267Zm5.672-1.281c0,.024.262.016-4.266.016,0-2.655.1-3.376-.375-4.6v-.481a1.769,1.769,0,0,1,1.777-1.757h1.087a1.769,1.769,0,0,1,1.777,1.757Z"
                                      transform="translate(0 -198.25)" fill="#2d2d2d"/>
                                <path id="Path_2239" data-name="Path 2239"
                                      d="M27.578,102.156A2.578,2.578,0,1,0,25,99.578,2.581,2.581,0,0,0,27.578,102.156Zm0-3.75a1.172,1.172,0,1,1-1.172,1.172A1.173,1.173,0,0,1,27.578,98.406Z"
                                      transform="translate(-23.828 -61)" fill="#2d2d2d"/>
                            </g>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">Clients</span>
                    <span class="nav-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                            <text id="_" data-name="&gt;" transform="translate(0 21)" fill="#141414" font-size="20"
                                  font-family="Poppins-Regular, Poppins">
                                <tspan x="0" y="0">&gt;</tspan>
                            </text>
                        </svg>
                    </span>
                </a>
                {{-- service sub menu --}}
                <div class="collapse {{ Route::is('clients.*') ? 'show' : '' }}" id="customer">
                    <ul class="list-unstyled font-weight-normal pb-1 small">
                        <li class="nav-item sub-item">
                            <a href="{{ route('clients.client.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('clients.client.*') ? 'sub-active' : '' }}">
                                <span class="pl-4"> <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
                                                         viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Clients</span>
                            </a>
                        </li>
                        <li class="nav-item sub-item">
                            <a href="{{ route('clients.subscribers.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('clients.subscribers.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Subscribers</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Clients end --}}
            {{-- divider --}}
            <li>
                <div class="dropdown-divider"></div>
            </li>
            {{-- divider --}}
            {{-- Services Reviews --}}
            <li class="nav-item">
                <a class="nav-link {{ Route::is('reviews.*') ? 'active' : '' }}" href="{{ route('reviews.index') }}">
                    <span class="svgSpan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="16.998" viewBox="0 0 24 16.998">
                            <g id="_07_services_reviews" data-name="07_services reviews"
                               transform="translate(0 -73.537)">
                                <path id="Path_2248" data-name="Path 2248"
                                      d="M22.572,73.537H7.156a.476.476,0,0,0,0,.952H22.572a.477.477,0,0,1,.476.476v11.25a.477.477,0,0,1-.476.476H14.236a.476.476,0,0,0-.374.181l-1.92,2.433L9.906,86.863a.476.476,0,0,0-.366-.171H1.428a.477.477,0,0,1-.476-.476V74.965a.477.477,0,0,1,.476-.476H3.24a.476.476,0,0,0,0-.952H1.428A1.43,1.43,0,0,0,0,74.965v11.25a1.43,1.43,0,0,0,1.428,1.428H9.317l2.27,2.722a.479.479,0,0,0,.739-.01l2.141-2.712h8.1A1.43,1.43,0,0,0,24,86.215V74.965a1.43,1.43,0,0,0-1.428-1.428Z"
                                      fill="#2d2d2d"/>
                                <path id="Path_2249" data-name="Path 2249"
                                      d="M54.911,159.837a.476.476,0,0,0,.086.451l.927,1.119-.092,1.45c-.072,1.136,1.633-.07,2-.063s2.073,1.186,2,.063l-.092-1.45.927-1.119a.483.483,0,0,0-.249-.765l-1.408-.36-.778-1.227a.483.483,0,0,0-.8,0l-.778,1.227-1.408.36a.476.476,0,0,0-.335.314Zm2.161.2c.352-.09.584-.679.761-.959.174.275.412.87.761.959l.863.221-.568.686a.476.476,0,0,0-.108.334l.057.889-.828-.328a.476.476,0,0,0-.351,0l-.828.328.056-.889a.476.476,0,0,0-.108-.334l-.568-.686Z"
                                      transform="translate(-52.274 -80.175)" fill="#2d2d2d"/>
                                <path id="Path_2250" data-name="Path 2250"
                                      d="M195.059,159.836a.476.476,0,0,0-.335-.314l-1.408-.36-.778-1.227a.483.483,0,0,0-.8,0l-.778,1.227-1.408.36a.476.476,0,0,0-.249.765l.927,1.119-.092,1.45c-.072,1.136,1.633-.07,2-.063s2.073,1.186,2,.063l-.092-1.45.927-1.119A.476.476,0,0,0,195.059,159.836Zm-1.867,1.108a.476.476,0,0,0-.108.334l.057.889a1.572,1.572,0,0,0-2.007,0l.057-.889a.476.476,0,0,0-.108-.334l-.568-.686.863-.221c.352-.09.584-.679.761-.959.174.275.412.87.761.959l.863.221Z"
                                      transform="translate(-180.184 -80.174)" fill="#2d2d2d"/>
                                <path id="Path_2251" data-name="Path 2251"
                                      d="M329.441,159.836a.476.476,0,0,0-.335-.314l-1.408-.36-.778-1.227a.483.483,0,0,0-.8,0l-.778,1.227-1.408.36a.483.483,0,0,0-.249.765l.927,1.119-.092,1.45c-.072,1.136,1.633-.07,2-.063s2.073,1.187,2,.063l-.092-1.45.927-1.119A.476.476,0,0,0,329.441,159.836Zm-1.867,1.108a.476.476,0,0,0-.108.334l.056.889-.828-.328a.476.476,0,0,0-.351,0l-.828.328.056-.889a.476.476,0,0,0-.108-.334l-.568-.686.863-.221c.352-.09.584-.679.761-.959.174.275.412.87.761.959l.863.221Z"
                                      transform="translate(-308.173 -80.174)" fill="#2d2d2d"/>
                                <path id="Path_2252" data-name="Path 2252"
                                      d="M99.638,74.413a.476.476,0,1,0-.18-.567A.479.479,0,0,0,99.638,74.413Z"
                                      transform="translate(-94.694 -0.004)" fill="#2d2d2d"/>
                            </g>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">Reviews</span>
                </a>
            </li>
            {{-- Services Reviews end--}}
            {{-- faq--}}
            <li class="nav-item">
                <a class="nav-link {{ Route::is('faqs.*') ? 'active' : '' }}" href="{{ route('faqs.index') }}">
                    <span class="svgSpan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.441" viewBox="0 0 24 22.441">
                            <path id="_08_faq" data-name="08_faq"
                                  d="M6.283,22.441a1.53,1.53,0,0,1-.576-.113,1.468,1.468,0,0,1-.926-1.36V19.4A1.023,1.023,0,0,0,3.75,18.393,3.719,3.719,0,0,1,0,14.714V3.678A3.719,3.719,0,0,1,3.75,0h16.5A3.719,3.719,0,0,1,24,3.678v6.438a.938.938,0,0,1-1.875,0V3.678A1.86,1.86,0,0,0,20.25,1.839H3.75A1.86,1.86,0,0,0,1.875,3.678V14.714A1.86,1.86,0,0,0,3.75,16.553,2.882,2.882,0,0,1,6.656,19.4v.677l2.041-2a5.325,5.325,0,0,1,3.753-1.525h7.8a1.86,1.86,0,0,0,1.875-1.839.938.938,0,0,1,1.875,0,3.719,3.719,0,0,1-3.75,3.679h-7.8a3.445,3.445,0,0,0-2.427.986l-2.681,2.63a1.511,1.511,0,0,1-1.059.432Zm6.654-8.6a.938.938,0,1,0-.937.92A.929.929,0,0,0,12.937,13.84Zm0-3.219V9.979a.121.121,0,0,1,.071-.115,3.147,3.147,0,0,0,2.177-3.088,3.2,3.2,0,0,0-5.4-2.132A3.073,3.073,0,0,0,8.812,6.9a.938.938,0,0,0,1.875,0,1.266,1.266,0,0,1,.4-.928,1.318,1.318,0,0,1,.962-.359,1.284,1.284,0,0,1,.363,2.509,1.954,1.954,0,0,0-1.353,1.86v.643a.938.938,0,0,0,1.875,0Zm0,0"
                                  fill="#2d2d2d"/>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">FAQ</span>
                </a>
            </li>
            {{-- faq end --}}
            {{-- offers --}}
            <li class="nav-item">
                <a class="nav-link collapsed {{ Route::is('offers.*') ? 'active' : '' }}" data-toggle="collapse"
                   href="#offersNav" role="button" aria-expanded="{{ Route::is('offers.*') ? 'true' : '' }}">
                    <span class="svgSpan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25.488" viewBox="0 0 24 25.488">
                            <g id="_09_offers" data-name="09_offers" transform="translate(-10.359 0.002)">
                                <g id="Group_1165" data-name="Group 1165" transform="translate(10.359 -0.002)">
                                    <g id="Group_1164" data-name="Group 1164">
                                        <path id="Path_2243" data-name="Path 2243"
                                              d="M33.2,13.073a.76.76,0,0,1,0-.66l.933-1.945A2.233,2.233,0,0,0,33.2,7.529L31.321,6.515a.746.746,0,0,1-.381-.534l-.367-2.132a2.177,2.177,0,0,0-2.453-1.816l-2.1.3a.724.724,0,0,1-.616-.2L23.875.627a2.142,2.142,0,0,0-3.032,0L19.316,2.132a.725.725,0,0,1-.616.2l-2.1-.3a2.177,2.177,0,0,0-2.453,1.816l-.367,2.132a.746.746,0,0,1-.381.534L11.52,7.53a2.233,2.233,0,0,0-.937,2.938l.933,1.945a.76.76,0,0,1,0,.66l-.933,1.945a2.233,2.233,0,0,0,.937,2.938L13.4,18.97a.746.746,0,0,1,.381.534l.367,2.132A2.166,2.166,0,0,0,16.6,23.453l2.1-.3a.724.724,0,0,1,.616.2l1.527,1.505a2.142,2.142,0,0,0,3.032,0L25.4,23.354a.725.725,0,0,1,.616-.2l2.1.3a2.177,2.177,0,0,0,2.453-1.816l.367-2.132a.746.746,0,0,1,.381-.534L33.2,17.956a2.233,2.233,0,0,0,.937-2.938Zm-.68,3.584-1.876,1.015A2.205,2.205,0,0,0,29.52,19.25l-.367,2.132a.736.736,0,0,1-.83.614l-2.1-.3a2.14,2.14,0,0,0-1.821.6l-1.527,1.5a.725.725,0,0,1-1.026,0L20.319,22.3a2.143,2.143,0,0,0-1.511-.625,2.173,2.173,0,0,0-.31.022l-2.1.3a.737.737,0,0,1-.83-.614L15.2,19.25a2.205,2.205,0,0,0-1.126-1.579L12.2,16.657a.756.756,0,0,1-.317-.994l.933-1.945a2.245,2.245,0,0,0,0-1.951l-.933-1.945a.756.756,0,0,1,.317-.994l1.876-1.015A2.205,2.205,0,0,0,15.2,6.235L15.565,4.1a.736.736,0,0,1,.83-.614l2.1.3a2.141,2.141,0,0,0,1.821-.6l1.527-1.505a.725.725,0,0,1,1.026,0L24.4,3.188a2.141,2.141,0,0,0,1.821.6l2.1-.3a.737.737,0,0,1,.83.614l.367,2.132a2.205,2.205,0,0,0,1.126,1.579l1.876,1.015a.756.756,0,0,1,.317.994l-.933,1.945a2.245,2.245,0,0,0,0,1.951l.933,1.945A.756.756,0,0,1,32.522,16.657Z"
                                              transform="translate(-10.359 0.002)" fill="#2d2d2d"/>
                                    </g>
                                </g>
                                <g id="Group_1167" data-name="Group 1167" transform="translate(16.773 7.157)">
                                    <g id="Group_1166" data-name="Group 1166">
                                        <path id="Path_2244" data-name="Path 2244"
                                              d="M154.748,144.007a.735.735,0,0,0-1.04,0l-9.7,9.7a.735.735,0,1,0,1.039,1.039l9.7-9.7A.735.735,0,0,0,154.748,144.007Z"
                                              transform="translate(-143.791 -143.791)" fill="#2d2d2d"/>
                                    </g>
                                </g>
                                <g id="Group_1169" data-name="Group 1169" transform="translate(16.794 6.127)">
                                    <g id="Group_1168" data-name="Group 1168">
                                        <path id="Path_2245" data-name="Path 2245"
                                              d="M145.5,123.116a2.7,2.7,0,1,0,2.7,2.7A2.7,2.7,0,0,0,145.5,123.116Zm0,3.92a1.225,1.225,0,1,1,1.225-1.225A1.226,1.226,0,0,1,145.5,127.036Z"
                                              transform="translate(-142.802 -123.116)" fill="#2d2d2d"/>
                                    </g>
                                </g>
                                <g id="Group_1171" data-name="Group 1171" transform="translate(22.533 13.968)">
                                    <g id="Group_1170" data-name="Group 1170" transform="translate(0)">
                                        <path id="Path_2246" data-name="Path 2246"
                                              d="M263.617,280.61a2.7,2.7,0,1,0,2.7,2.7A2.7,2.7,0,0,0,263.617,280.61Zm0,3.92a1.225,1.225,0,1,1,1.225-1.225A1.226,1.226,0,0,1,263.617,284.53Z"
                                              transform="translate(-260.922 -280.61)" fill="#2d2d2d"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">Offers</span>
                    <span class="nav-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                            <text id="_" data-name="&gt;" transform="translate(0 21)" fill="#141414" font-size="20"
                                  font-family="Poppins-Regular, Poppins">
                                <tspan x="0" y="0">&gt;</tspan>
                            </text>
                        </svg>
                    </span>
                </a>
                {{-- service sub menu --}}
                <div class="collapse {{ Route::is('offers.*') ? 'show' : '' }}" id="offersNav">
                    <ul class="list-unstyled font-weight-normal pb-1 small">
                        <li class="nav-item sub-item">
                            <a href="{{ route('offers.coupon.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('offers.coupon.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Manage Coupons</span>
                            </a>
                        </li>
                        <li class="nav-item sub-item">
                            <a href="{{ route('offers.affiliate.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('offers.affiliate.*') ? 'sub-active' : '' }}">
                                <span class="pl-4"> <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
                                                         viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Manage Affiliates</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- offers end --}}
            {{-- Promotions --}}
            <li class="nav-item">
                <a class="nav-link collapsed {{ Route::is('promotions.*') ? 'active' : '' }}" data-toggle="collapse"
                   href="#navpromotions" role="button" aria-expanded="{{ Route::is('promotions.*') ? 'true' : '' }}">
                    <span class="svgSpan">
                        <svg id="_10_promotion" data-name="10_promotion" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="22.711" viewBox="0 0 24 22.711">
                            <path id="Path_2272" data-name="Path 2272"
                                  d="M122.667,290.45a.469.469,0,1,0-.64-.172A.469.469,0,0,0,122.667,290.45Zm0,0"
                                  transform="translate(-116.247 -276.001)" fill="#2d2d2d"/>
                            <path id="Path_2273" data-name="Path 2273"
                                  d="M4.5,38.991,6.86,43.08a1.875,1.875,0,1,0,3.248-1.875L8.7,38.769l1.218-.7a.469.469,0,0,0,.172-.64l-.61-1.056,8.978-1.761A1.406,1.406,0,0,0,19.6,32.5l-1.558-2.7,1-1.508a.469.469,0,0,0,.015-.493l-.938-1.624a.47.47,0,0,0-.434-.233l-1.8.108-1.729-3a1.394,1.394,0,0,0-1.2-.7h-.018A1.394,1.394,0,0,0,11.745,23L5.622,30.8,1.641,33.1A3.281,3.281,0,0,0,4.5,38.991Zm4.8,2.683a.938.938,0,0,1-1.624.937l-2.344-4.06,1.624-.937L9.3,41.674ZM8.232,37.957l-.469-.812.812-.469.469.812ZM17.447,26.9l.648,1.122-.578.875L16.4,26.962Zm-4.918-3.381a.469.469,0,0,1,.806.009l5.452,9.444a.469.469,0,0,1-.394.7,1.721,1.721,0,0,0-.257.044l-5.767-9.989c.121-.156.137-.171.161-.21Zm-.784,1,5.419,9.385-8.178,1.6L6.5,31.205ZM1.252,37.116a2.342,2.342,0,0,1,.858-3.2l3.654-2.109,2.344,4.059-3.654,2.11a2.347,2.347,0,0,1-3.2-.858Zm0,0"
                                  transform="translate(0 -21.307)" fill="#2d2d2d"/>
                            <path id="Path_2274" data-name="Path 2274"
                                  d="M45.649,309.807a.469.469,0,0,0-.64-.172l-.812.469a.469.469,0,0,1-.64-.172.469.469,0,0,0-.812.469,1.408,1.408,0,0,0,1.921.515l.812-.469a.469.469,0,0,0,.172-.64Zm0,0"
                                  transform="translate(-40.681 -295.061)" fill="#2d2d2d"/>
                            <path id="Path_2275" data-name="Path 2275"
                                  d="M439.128,42.54l-2.612,1.453a.469.469,0,1,0,.456.819l2.612-1.453a.469.469,0,0,0-.456-.819Zm0,0"
                                  transform="translate(-415.825 -40.489)" fill="#2d2d2d"/>
                            <path id="Path_2276" data-name="Path 2276"
                                  d="M442.464,137.122l-1.811-.485a.469.469,0,1,0-.243.905l1.811.485a.469.469,0,1,0,.242-.905Zm0,0"
                                  transform="translate(-419.435 -130.217)" fill="#2d2d2d"/>
                            <path id="Path_2277" data-name="Path 2277"
                                  d="M383.994.348l-.486,1.811a.469.469,0,1,0,.906.243L384.9.591a.469.469,0,1,0-.905-.243Zm0,0"
                                  transform="translate(-365.516 0)" fill="#2d2d2d"/>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">Promotions</span>
                    <span class="nav-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                            <text id="_" data-name="&gt;" transform="translate(0 21)" fill="#141414" font-size="20"
                                  font-family="Poppins-Regular, Poppins">
                                <tspan x="0" y="0">&gt;</tspan>
                            </text>
                        </svg>
                    </span>
                </a>
                {{-- service sub menu --}}
                <div class="collapse {{ Route::is('promotions.*') ? 'show' : '' }}" id="navpromotions">
                    <ul class="list-unstyled font-weight-normal pb-1 small">
                        <li class="nav-item sub-item">
                            <a href="#promotionsNav" class="nav-link d-inline-flex align-items-center sub-menu-link"
                               data-toggle="collapse" role="button"
                               aria-expanded="{{ Route::is('promotions.email_marketing.*') ? 'true' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Email Marketing</span>
                                <span class="nav-arrow subnav-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                                        <text id="_" data-name="&gt;" transform="translate(0 21)" fill="#141414"
                                              font-size="20" font-family="Poppins-Regular, Poppins">
                                            <tspan x="0" y="0">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span>
                            </a>
                            {{-- nested sub insider --}}
                            <div
                                class="collapse nestedSubmenu {{ Route::is('promotions.email_marketing.*') ? 'show' : '' }}"
                                id="promotionsNav">
                                <ul class="list-unstyled font-weight-normal pb-1 small">
                                    <li class="nav-item sub-item">
                                        <a href="{{ route('promotions.email_marketing.all_mail.index') }}"
                                           class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('promotions.email_marketing.all_mail.*') ? 'sub-active' : '' }}">
                                            <span class="pl-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
                                                     viewBox="0 0 9 9">
                                                    <g fill="none" stroke="#2d2d2d" stroke-width="1">
                                                        <circle cx="4.5" cy="4.5" r="4.5" stroke="none"/>
                                                        <circle cx="4.5" cy="4.5" r="4" fill="none"/>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="pl-3">All Mail</span>
                                        </a>
                                    </li>
                                    <li class="nav-item sub-item">
                                        <a href="{{ route('promotions.email_marketing.draft.index') }}"
                                           class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('promotions.email_marketing.draft.*') ? 'sub-active' : '' }}">
                                            <span class="pl-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
                                                     viewBox="0 0 9 9">
                                                    <g fill="none" stroke="#2d2d2d" stroke-width="1">
                                                        <circle cx="4.5" cy="4.5" r="4.5" stroke="none"/>
                                                        <circle cx="4.5" cy="4.5" r="4" fill="none"/>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="pl-3"> Drafts</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            {{-- nested sub insider --}}
                        </li>
                        <li class="nav-item sub-item">
                            <a href="{{ route('promotions.advertisement_banner.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Advertisement Banner</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- Promotions end --}}
            {{-- Designwalas --}}
            <li class="nav-item">
                <a href="{{ route('designwalas.designwala.index') }}"
                   class="nav-link collapsed {{ Route::is('designwalas.*') ? 'active' : '' }}">
                    <span class="svgSpan">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.479" viewBox="0 0 24 22.479">
                            <g id="_11_designwalas" data-name="11_designwalas" transform="translate(0 -16.225)">
                                <g id="Group_1172" data-name="Group 1172" transform="translate(0 16.224)">
                                    <path id="Path_2247" data-name="Path 2247"
                                          d="M23.648,35.24a.352.352,0,0,0-.352.352v2.349a.059.059,0,0,1-.059.059H21.9V32.863a.352.352,0,1,0-.7,0V38H18.617l.7-.769a.562.562,0,0,0,.136-.451l0-.01-.785-4.64.145-.218.038.027a.55.55,0,0,0,.811-.2h0l.8-1.6,1.826.707A1.75,1.75,0,0,1,23.3,32.427v1.524a.352.352,0,0,0,.7,0V32.427a2.452,2.452,0,0,0-1.451-2.237l-.007,0-3.109-1.2v-.64a2.567,2.567,0,0,0,.928-1.594,1.227,1.227,0,0,0,.653-.288,1.211,1.211,0,0,0,.148-1.683v-.949a3.364,3.364,0,0,0-5.552-2.558,1.208,1.208,0,0,0-.272-.732v-.949a3.367,3.367,0,1,0-6.734,0v.973a1.147,1.147,0,0,0-.272.7,3.352,3.352,0,0,0-1.326-.694.352.352,0,0,0-.179.68,2.664,2.664,0,0,1,1.983,2.576v.526l-.066-.012a.4.4,0,0,0-.084-.238c-.09-.129-.252-.29-.771-.849a.556.556,0,0,0-.712-.087,5.024,5.024,0,0,1-2.976.819.562.562,0,0,0-.618.36l-.1.02v-.539a2.681,2.681,0,0,1,1.894-2.55.352.352,0,1,0-.2-.673,3.394,3.394,0,0,0-1.717,1.2,3.336,3.336,0,0,0-.678,2.026V24.8a1.146,1.146,0,0,0-.273.741,1.214,1.214,0,0,0,1.075,1.205,2.6,2.6,0,0,0,.98,1.636v.6l-3.105,1.2-.007,0A2.451,2.451,0,0,0,0,32.427v5.513a.763.763,0,0,0,.762.762H11.589A.758.758,0,0,0,12,38.582a.757.757,0,0,0,.411.121H23.238A.763.763,0,0,0,24,37.941V35.592A.352.352,0,0,0,23.648,35.24Zm-20.1-9.218a.507.507,0,0,1-.338-.479.519.519,0,0,1,.338-.457ZM19.8,29.879l-.69,1.383-.777-.552.863-1.065Zm-1.976.341L16.914,29.1V28.76a2.835,2.835,0,0,0,.914.149h0a2.6,2.6,0,0,0,.9-.164V29.1Zm.413,1.285-.129.195H17.54l-.129-.195.413-.293ZM12,25.981l-.909-1.122v-.337a2.835,2.835,0,0,0,.914.149h0a2.6,2.6,0,0,0,.9-.164v.354Zm.413,1.285-.129.195h-.567l-.129-.195L12,26.973ZM9.23,22.477a1.257,1.257,0,0,0,.176.034,2.6,2.6,0,0,0,.98,1.636v.6l-.717.278a1.205,1.205,0,0,0-.155-.245v-.949A3.359,3.359,0,0,0,9.23,22.477Zm4.637-.372a1.9,1.9,0,0,1-3.791,0V20.458a5.757,5.757,0,0,0,3.206-.871c.317.34.506.537.585.629C13.867,21.09,13.867,21.428,13.867,22.1Zm.671.406a1.265,1.265,0,0,0,.176-.034,3.346,3.346,0,0,0-.285,1.353V24.8a1.2,1.2,0,0,0-.139.205l-.68-.263V24.1A2.568,2.568,0,0,0,14.538,22.51Zm-3.911,2.9.863,1.065-.589.418h0l-.187.133-.69-1.383Zm2.181.693.562-.694.6.234-.69,1.383L13.1,26.89h0l-.59-.419Zm.177,1.574.038.027a.55.55,0,0,0,.811-.2h0l.593-1.189a1.234,1.234,0,0,0,.8.442,2.556,2.556,0,0,0,.981,1.635v.6l-2.989,1.159-.381-2.251Zm3.466,1.972.863,1.065-.776.551-.69-1.383Zm3.24-3.3a1.9,1.9,0,0,1-3.791,0V24.7a5.76,5.76,0,0,0,3.206-.871c.317.34.506.537.585.629C19.691,25.329,19.691,25.667,19.691,26.343Zm1.041-.8a.508.508,0,0,1-.338.479v-.956A.507.507,0,0,1,20.732,25.544Zm-5.6-1.714a2.664,2.664,0,1,1,5.327,0v.526l-.066-.012a.405.405,0,0,0-.084-.238c-.092-.133-.252-.291-.771-.849a.556.556,0,0,0-.712-.087,5.033,5.033,0,0,1-3,.818.553.553,0,0,0-.592.361l-.1.02v-.539Zm.065,1.257v.936a.506.506,0,0,1-.338-.478A.519.519,0,0,1,15.2,25.086Zm-.289-3.781a.506.506,0,0,1-.176.384.52.52,0,0,1-.162.095v-.956A.507.507,0,0,1,14.908,21.305Zm-2.937-4.378a2.667,2.667,0,0,1,2.664,2.664v.526l-.066-.012a.426.426,0,0,0-.1-.259c-.094-.127-.268-.3-.756-.827A.556.556,0,0,0,13,18.931a5.022,5.022,0,0,1-3.03.816.559.559,0,0,0-.564.363l-.1.02v-.539h0A2.667,2.667,0,0,1,11.971,16.927Zm-2.6,3.921v.936a.507.507,0,0,1-.338-.479A.519.519,0,0,1,9.373,20.848Zm-.626,4.218a.508.508,0,0,1,0,.956ZM8.714,26.75a1.233,1.233,0,0,0,.836-.485l.615,1.232h0a.55.55,0,0,0,.811.2l.038-.027.145.218-.381,2.251L7.786,28.983v-.64h0A2.57,2.57,0,0,0,8.714,26.75ZM6.175,30.22,5.266,29.1V28.76a2.834,2.834,0,0,0,.914.149h0a2.6,2.6,0,0,0,.9-.164V29.1ZM6.588,31.5l-.129.195H5.892L5.762,31.5l.413-.293Zm.958-1.86.6.234-.69,1.383-.187-.133h0l-.59-.419Zm-3.294-3.3V24.7a5.762,5.762,0,0,0,3.206-.871c.314.337.506.537.585.629v1.889a1.9,1.9,0,0,1-3.791,0Zm.551,3.3.863,1.065-.589.418h0l-.187.133L4.2,29.879ZM2.8,38V32.863a.352.352,0,1,0-.7,0V38H.762A.059.059,0,0,1,.7,37.941V32.427a1.75,1.75,0,0,1,1.013-1.586l1.824-.707.8,1.6h0a.55.55,0,0,0,.811.2l.038-.027.145.218-.785,4.64,0,.01a.563.563,0,0,0,.136.451l.7.769H2.8Zm2.452-1.186L6,32.4h.35L7.1,36.814l-.922,1.014Zm6.395,1.126a.059.059,0,0,1-.059.059H10.253V32.863a.352.352,0,1,0-.7,0V38H6.969l.7-.769A.562.562,0,0,0,7.8,36.78l0-.01-.785-4.64.145-.218.038.027a.55.55,0,0,0,.811-.2h0l.8-1.6,1.826.707a1.746,1.746,0,0,1,1.014,1.586v5.513ZM12,31.15a2.5,2.5,0,0,0-.573-.637l.4-2.349h.35l.4,2.35A2.505,2.505,0,0,0,12,31.15ZM14.45,38h0V32.863a.352.352,0,1,0-.7,0V38H12.411a.059.059,0,0,1-.059-.059V32.427a1.68,1.68,0,0,1,.41-1.126,1.892,1.892,0,0,1,.6-.46l1.824-.707.8,1.6h0a.55.55,0,0,0,.811.2l.038-.027.145.218L16.2,36.77l0,.01a.563.563,0,0,0,.136.451l.7.769H14.45ZM16.9,36.814l.747-4.412H18l.747,4.412-.922,1.014Z"
                                          transform="translate(0 -16.224)" fill="#2d2d2d"/>
                                </g>
                            </g>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">Deginewala</span>
                </a>
                {{-- service sub menu --}}
            </li>
            {{-- Deginewalas end --}}
            {{-- divider --}}
            <li>
                <div class="dropdown-divider"></div>
            </li>
            {{-- divider --}}
            {{-- roles and permissions --}}
            <li class="nav-item">
                <a href="{{ route('roles_permissions.role.index') }}"
                   class="nav-link collapsed {{ Route::is('roles_permissions.*') ? 'active' : '' }}">
                    <span class="svgSpan">
                        <svg id="_12_permission" data-name="12_permission" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="27.549" viewBox="0 0 24 27.549">
                            <path id="Path_2253" data-name="Path 2253"
                                  d="M22.642,6.887H19.019V1.377A1.344,1.344,0,0,0,17.66,0H1.358A1.344,1.344,0,0,0,0,1.377V26.171a1.344,1.344,0,0,0,1.358,1.377H15.124L19.019,23.6V20.661h-.906v2.3H15.849a1.344,1.344,0,0,0-1.358,1.377v2.3H1.358a.431.431,0,0,1-.453-.459V1.377A.431.431,0,0,1,1.358.918h16.3a.431.431,0,0,1,.453.459v5.51H14.491a1.344,1.344,0,0,0-1.358,1.377v8.264a1.344,1.344,0,0,0,1.358,1.377h2.536l1.54,1.561,1.54-1.561h2.536A1.344,1.344,0,0,0,24,16.529V8.264a1.344,1.344,0,0,0-1.358-1.377ZM15.849,23.875h1.63L15.4,25.987V24.334A.431.431,0,0,1,15.849,23.875Zm7.245-7.346a.431.431,0,0,1-.453.459h-2.9l-1.177,1.194-1.177-1.194h-2.9a.431.431,0,0,1-.453-.459V8.264a.431.431,0,0,1,.453-.459h8.151a.431.431,0,0,1,.453.459Zm0,0"
                                  fill="#2d2d2d"/>
                            <path id="Path_2254" data-name="Path 2254" d="M120,40h5.51v.918H120Zm0,0"
                                  transform="translate(-113.235 -37.704)" fill="#2d2d2d"/>
                            <path id="Path_2255" data-name="Path 2255" d="M40,80h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -75.409)" fill="#2d2d2d"/>
                            <path id="Path_2256" data-name="Path 2256" d="M80,80H92.4v.918H80Zm0,0"
                                  transform="translate(-75.537 -75.409)" fill="#2d2d2d"/>
                            <path id="Path_2257" data-name="Path 2257" d="M40,128h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -120.654)" fill="#2d2d2d"/>
                            <path id="Path_2258" data-name="Path 2258" d="M80,128h7.346v.918H80Zm0,0"
                                  transform="translate(-75.499 -120.654)" fill="#2d2d2d"/>
                            <path id="Path_2259" data-name="Path 2259" d="M40,176h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -165.899)" fill="#2d2d2d"/>
                            <path id="Path_2260" data-name="Path 2260" d="M80,176h7.346v.918H80Zm0,0"
                                  transform="translate(-75.499 -165.899)" fill="#2d2d2d"/>
                            <path id="Path_2261" data-name="Path 2261" d="M40,224h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -211.144)" fill="#2d2d2d"/>
                            <path id="Path_2262" data-name="Path 2262" d="M80,224h7.346v.918H80Zm0,0"
                                  transform="translate(-75.499 -211.144)" fill="#2d2d2d"/>
                            <path id="Path_2263" data-name="Path 2263" d="M40,272h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -256.389)" fill="#2d2d2d"/>
                            <path id="Path_2264" data-name="Path 2264" d="M80,272h7.346v.918H80Zm0,0"
                                  transform="translate(-75.499 -256.389)" fill="#2d2d2d"/>
                            <path id="Path_2265" data-name="Path 2265" d="M40,320h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -301.635)" fill="#2d2d2d"/>
                            <path id="Path_2266" data-name="Path 2266" d="M80,320h7.346v.918H80Zm0,0"
                                  transform="translate(-75.499 -301.635)" fill="#2d2d2d"/>
                            <path id="Path_2267" data-name="Path 2267" d="M40,368h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -346.88)" fill="#2d2d2d"/>
                            <path id="Path_2268" data-name="Path 2268" d="M80,368H92.4v.918H80Zm0,0"
                                  transform="translate(-75.537 -346.88)" fill="#2d2d2d"/>
                            <path id="Path_2269" data-name="Path 2269" d="M40,416h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -392.125)" fill="#2d2d2d"/>
                            <path id="Path_2270" data-name="Path 2270" d="M80,416h8.724v.918H80Zm0,0"
                                  transform="translate(-75.507 -392.125)" fill="#2d2d2d"/>
                            <path id="Path_2271" data-name="Path 2271"
                                  d="M284.591,154.847v-1.01a1.837,1.837,0,1,0-3.673,0h.918a.918.918,0,1,1,1.837,0v.918h-2.3A1.353,1.353,0,0,0,280,156.133v1.837a1.353,1.353,0,0,0,1.377,1.377h2.755a1.353,1.353,0,0,0,1.377-1.377v-1.837A1.337,1.337,0,0,0,284.591,154.847Zm0,3.122a.434.434,0,0,1-.459.459h-2.755a.434.434,0,0,1-.459-.459v-1.837a.434.434,0,0,1,.459-.459h2.755a.434.434,0,0,1,.459.459Zm0,0"
                                  transform="translate(-264.264 -143.277)" fill="#2d2d2d"/>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">Manage Roles</span>
                </a>
                {{-- service sub menu --}}
            </li>
            {{--<li class="nav-item">
                <a class="nav-link collapsed {{ Route::is('roles_permissions.*') ? 'active' : '' }}" data-toggle="collapse" href="#navRolesnPermission" role="button" aria-expanded="{{ Route::is('roles_permissions.*') ? 'true' : '' }}">
                    <span class="svgSpan">
                        <svg id="_12_permission" data-name="12_permission" xmlns="http://www.w3.org/2000/svg"
                             width="24" height="27.549" viewBox="0 0 24 27.549">
                            <path id="Path_2253" data-name="Path 2253"
                                  d="M22.642,6.887H19.019V1.377A1.344,1.344,0,0,0,17.66,0H1.358A1.344,1.344,0,0,0,0,1.377V26.171a1.344,1.344,0,0,0,1.358,1.377H15.124L19.019,23.6V20.661h-.906v2.3H15.849a1.344,1.344,0,0,0-1.358,1.377v2.3H1.358a.431.431,0,0,1-.453-.459V1.377A.431.431,0,0,1,1.358.918h16.3a.431.431,0,0,1,.453.459v5.51H14.491a1.344,1.344,0,0,0-1.358,1.377v8.264a1.344,1.344,0,0,0,1.358,1.377h2.536l1.54,1.561,1.54-1.561h2.536A1.344,1.344,0,0,0,24,16.529V8.264a1.344,1.344,0,0,0-1.358-1.377ZM15.849,23.875h1.63L15.4,25.987V24.334A.431.431,0,0,1,15.849,23.875Zm7.245-7.346a.431.431,0,0,1-.453.459h-2.9l-1.177,1.194-1.177-1.194h-2.9a.431.431,0,0,1-.453-.459V8.264a.431.431,0,0,1,.453-.459h8.151a.431.431,0,0,1,.453.459Zm0,0"
                                  fill="#2d2d2d"/>
                            <path id="Path_2254" data-name="Path 2254" d="M120,40h5.51v.918H120Zm0,0"
                                  transform="translate(-113.235 -37.704)" fill="#2d2d2d"/>
                            <path id="Path_2255" data-name="Path 2255" d="M40,80h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -75.409)" fill="#2d2d2d"/>
                            <path id="Path_2256" data-name="Path 2256" d="M80,80H92.4v.918H80Zm0,0"
                                  transform="translate(-75.537 -75.409)" fill="#2d2d2d"/>
                            <path id="Path_2257" data-name="Path 2257" d="M40,128h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -120.654)" fill="#2d2d2d"/>
                            <path id="Path_2258" data-name="Path 2258" d="M80,128h7.346v.918H80Zm0,0"
                                  transform="translate(-75.499 -120.654)" fill="#2d2d2d"/>
                            <path id="Path_2259" data-name="Path 2259" d="M40,176h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -165.899)" fill="#2d2d2d"/>
                            <path id="Path_2260" data-name="Path 2260" d="M80,176h7.346v.918H80Zm0,0"
                                  transform="translate(-75.499 -165.899)" fill="#2d2d2d"/>
                            <path id="Path_2261" data-name="Path 2261" d="M40,224h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -211.144)" fill="#2d2d2d"/>
                            <path id="Path_2262" data-name="Path 2262" d="M80,224h7.346v.918H80Zm0,0"
                                  transform="translate(-75.499 -211.144)" fill="#2d2d2d"/>
                            <path id="Path_2263" data-name="Path 2263" d="M40,272h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -256.389)" fill="#2d2d2d"/>
                            <path id="Path_2264" data-name="Path 2264" d="M80,272h7.346v.918H80Zm0,0"
                                  transform="translate(-75.499 -256.389)" fill="#2d2d2d"/>
                            <path id="Path_2265" data-name="Path 2265" d="M40,320h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -301.635)" fill="#2d2d2d"/>
                            <path id="Path_2266" data-name="Path 2266" d="M80,320h7.346v.918H80Zm0,0"
                                  transform="translate(-75.499 -301.635)" fill="#2d2d2d"/>
                            <path id="Path_2267" data-name="Path 2267" d="M40,368h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -346.88)" fill="#2d2d2d"/>
                            <path id="Path_2268" data-name="Path 2268" d="M80,368H92.4v.918H80Zm0,0"
                                  transform="translate(-75.537 -346.88)" fill="#2d2d2d"/>
                            <path id="Path_2269" data-name="Path 2269" d="M40,416h1.377v.918H40Zm0,0"
                                  transform="translate(-37.704 -392.125)" fill="#2d2d2d"/>
                            <path id="Path_2270" data-name="Path 2270" d="M80,416h8.724v.918H80Zm0,0"
                                  transform="translate(-75.507 -392.125)" fill="#2d2d2d"/>
                            <path id="Path_2271" data-name="Path 2271"
                                  d="M284.591,154.847v-1.01a1.837,1.837,0,1,0-3.673,0h.918a.918.918,0,1,1,1.837,0v.918h-2.3A1.353,1.353,0,0,0,280,156.133v1.837a1.353,1.353,0,0,0,1.377,1.377h2.755a1.353,1.353,0,0,0,1.377-1.377v-1.837A1.337,1.337,0,0,0,284.591,154.847Zm0,3.122a.434.434,0,0,1-.459.459h-2.755a.434.434,0,0,1-.459-.459v-1.837a.434.434,0,0,1,.459-.459h2.755a.434.434,0,0,1,.459.459Zm0,0"
                                  transform="translate(-264.264 -143.277)" fill="#2d2d2d"/>
                        </svg>
                    </span>
                    <span class="ml-3 AdminNavText">Roles &amp; Permissions</span>
                    <span class="nav-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                            <text id="_" data-name="&gt;" transform="translate(0 21)" fill="#141414" font-size="20"
                                  font-family="Poppins-Regular, Poppins">
                                <tspan x="0" y="0">&gt;</tspan>
                            </text>
                        </svg>
                    </span>
                </a>
                --}}{{-- service sub menu --}}{{--
                <div class="collapse {{ Route::is('roles_permissions.*') ? 'show' : '' }}" id="navRolesnPermission">
                    <ul class="list-unstyled font-weight-normal pb-1 small">
                        <li class="nav-item sub-item">
                            <a href="{{ route('roles_permissions.role.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('roles_permissions.role.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Roles</span>
                            </a>
                        </li>
                        <li class="nav-item sub-item">
                            <a href="{{ route('roles_permissions.permission.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('roles_permissions.permission.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Permissions</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>--}}
            {{-- roles and permissions end --}}
            {{-- settings --}}
            <li class="nav-item">
                <a class="nav-link collapsed {{ Route::is('settings.*') ? 'active' : '' }}" data-toggle="collapse"
                   href="#navSettings" role="button"
                   aria-expanded="{{ Route::is('settings.*') ? 'true' : '' }}">
                    <span class="svgSpan">
                        <svg id="_13_settings" data-name="13_settings" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" viewBox="0 0 24 24">
                            <g id="Group_1174" data-name="Group 1174" transform="translate(0 8)">
                                <g id="Group_1173" data-name="Group 1173">
                                    <path id="Path_2281" data-name="Path 2281"
                                          d="M14.8,166h-.44a.394.394,0,0,1-.37-.258c-.049-.128-.1-.253-.158-.377a.394.394,0,0,1,.08-.446l.314-.314a1.2,1.2,0,0,0,0-1.7l-1.13-1.13a1.2,1.2,0,0,0-1.7,0l-.314.313a.4.4,0,0,1-.446.08c-.124-.056-.249-.109-.378-.16a.393.393,0,0,1-.26-.371v-.44A1.2,1.2,0,0,0,8.8,160H7.2A1.2,1.2,0,0,0,6,161.2v.44a.394.394,0,0,1-.258.37c-.128.049-.253.1-.377.158a.4.4,0,0,1-.446-.08l-.314-.314a1.2,1.2,0,0,0-1.7,0l-1.13,1.134a1.2,1.2,0,0,0,0,1.7l.313.314a.394.394,0,0,1,.08.446c-.056.124-.109.249-.158.378A.393.393,0,0,1,1.64,166H1.2A1.2,1.2,0,0,0,0,167.2v1.6A1.2,1.2,0,0,0,1.2,170h.44a.394.394,0,0,1,.37.258c.049.128.1.253.158.377a.394.394,0,0,1-.08.446l-.314.314a1.2,1.2,0,0,0,0,1.7l1.13,1.13a1.2,1.2,0,0,0,1.7,0l.314-.313a.4.4,0,0,1,.446-.08c.124.056.249.109.378.16A.393.393,0,0,1,6,174.36v.44A1.2,1.2,0,0,0,7.2,176H8.8a1.2,1.2,0,0,0,1.2-1.2v-.44a.394.394,0,0,1,.258-.37c.128-.049.253-.1.377-.158a.4.4,0,0,1,.446.08l.314.314a1.2,1.2,0,0,0,1.7,0l1.13-1.13a1.2,1.2,0,0,0,0-1.7l-.313-.314a.394.394,0,0,1-.08-.446c.056-.124.109-.249.16-.378a.393.393,0,0,1,.371-.26h.44a1.2,1.2,0,0,0,1.2-1.2v-1.6A1.2,1.2,0,0,0,14.8,166Zm.4,2.8a.4.4,0,0,1-.4.4h-.44a1.2,1.2,0,0,0-1.12.774q-.064.168-.138.331a1.2,1.2,0,0,0,.24,1.342l.313.313a.4.4,0,0,1,0,.566h0l-1.13,1.13a.4.4,0,0,1-.566,0l-.314-.313a1.2,1.2,0,0,0-1.342-.24c-.108.049-.219.1-.33.138A1.2,1.2,0,0,0,9.2,174.36v.44a.4.4,0,0,1-.4.4H7.2a.4.4,0,0,1-.4-.4v-.44a1.2,1.2,0,0,0-.774-1.12q-.168-.064-.331-.138a1.2,1.2,0,0,0-1.342.24l-.313.313a.4.4,0,0,1-.566,0h0l-1.13-1.129a.4.4,0,0,1,0-.566l.313-.314A1.2,1.2,0,0,0,2.9,170.3c-.049-.108-.1-.219-.138-.33A1.2,1.2,0,0,0,1.64,169.2H1.2a.4.4,0,0,1-.4-.4v-1.6a.4.4,0,0,1,.4-.4h.44a1.2,1.2,0,0,0,1.12-.774q.064-.168.138-.331a1.2,1.2,0,0,0-.24-1.342l-.314-.313a.4.4,0,0,1,0-.566h0l1.13-1.13a.4.4,0,0,1,.566,0l.314.313a1.2,1.2,0,0,0,1.342.24c.108-.049.219-.1.33-.138A1.2,1.2,0,0,0,6.8,161.64v-.44a.4.4,0,0,1,.4-.4H8.8a.4.4,0,0,1,.4.4v.44a1.2,1.2,0,0,0,.774,1.12q.168.064.331.138a1.2,1.2,0,0,0,1.342-.24l.313-.313a.4.4,0,0,1,.566,0l1.13,1.13a.4.4,0,0,1,0,.566l-.313.314a1.2,1.2,0,0,0-.24,1.342c.049.108.1.219.138.33a1.2,1.2,0,0,0,1.119.773h.44a.4.4,0,0,1,.4.4v1.6Z"
                                          transform="translate(0 -160)" fill="#2d2d2d"/>
                                </g>
                            </g>
                            <g id="Group_1176" data-name="Group 1176" transform="translate(4.398 12.4)">
                                <g id="Group_1175" data-name="Group 1175">
                                    <path id="Path_2282" data-name="Path 2282"
                                          d="M95.153,251.44c0-.1-.011-.192-.022-.287s-.028-.2-.049-.3c-.014-.065-.032-.13-.05-.194q-.034-.124-.076-.244c-.02-.056-.04-.111-.061-.166a3.564,3.564,0,0,0-.176-.374c-.005-.009-.008-.019-.014-.028a3.549,3.549,0,0,0-.36-.524c-.012-.014-.025-.028-.037-.042-.055-.065-.112-.128-.172-.189-.031-.032-.064-.063-.1-.094s-.08-.074-.12-.109-.1-.083-.148-.122l-.066-.049A3.575,3.575,0,0,0,91.561,248c-.04,0-.08.006-.12.008-.085,0-.171.007-.257.016l-.136.016a3.671,3.671,0,0,0-.388.072,3.6,3.6,0,0,0,0,6.976.092.092,0,0,1,.02,0,3.811,3.811,0,0,0,.419.08c.093.012.186.014.28.018.062,0,.12.012.185.012.114,0,.232-.008.353-.02a.4.4,0,0,0,.04-.005c.1-.011.2-.025.3-.045.04-.008.077-.018.116-.026.07-.016.14-.034.212-.055.056-.017.11-.036.165-.056l.168-.062c.057-.022.1-.046.156-.07.067-.031.134-.061.2-.1h0a4.734,4.734,0,0,0,1.025-.74,1.259,1.259,0,0,0,.214-.262,4.27,4.27,0,0,0,.6-1.644c.011-.077.021-.154.027-.233s.01-.144.011-.216c0-.023,0-.044,0-.067C95.161,251.546,95.155,251.494,95.153,251.44Zm-.8.262c0,.033,0,.066,0,.1-.007.1-.02.194-.036.291a2.806,2.806,0,0,1-1.406,1.96c-.05.026-.1.05-.147.073l-.033.016a2.889,2.889,0,0,1-.73.221l-.054.008c-.05.007-.1.013-.148.018-.064.006-.129.009-.2.01h-.084a2.81,2.81,0,0,1-.283-.018l-.048-.006a2.963,2.963,0,0,1-.327-.062,2.8,2.8,0,0,1,0-5.424h0a2.9,2.9,0,0,1,.7-.088,2.763,2.763,0,0,1,.342.023l.09.014c.086.014.172.031.256.052l.082.021a2.825,2.825,0,0,1,.61.257l.091.056c.063.04.124.08.185.126.032.024.065.047.1.072a2.885,2.885,0,0,1,.225.2c.028.029.054.06.082.09.046.05.091.1.134.155.03.037.058.076.086.114.04.058.08.118.116.178l.06.1a2.746,2.746,0,0,1,.138.293c.016.04.03.08.044.12.026.074.048.148.068.223.01.04.021.076.03.114a2.818,2.818,0,0,1,.051.328c0,.029,0,.059,0,.088C94.357,251.517,94.359,251.609,94.355,251.7Z"
                                          transform="translate(-87.959 -248)" fill="#2d2d2d"/>
                                </g>
                            </g>
                            <g id="Group_1178" data-name="Group 1178" transform="translate(4.363)">
                                <g id="Group_1177" data-name="Group 1177">
                                    <path id="Path_2283" data-name="Path 2283"
                                          d="M105.7,8.4H104.44a.39.39,0,0,1-.373-.262,8.331,8.331,0,0,0-.449-1.084.392.392,0,0,1,.077-.452l.892-.893a1.2,1.2,0,0,0,0-1.7l-1.7-1.7a1.2,1.2,0,0,0-1.7,0l-.892.891a.392.392,0,0,1-.451.077,8.31,8.31,0,0,0-1.085-.452.39.39,0,0,1-.264-.373V1.2A1.2,1.2,0,0,0,97.3,0H94.9a1.2,1.2,0,0,0-1.2,1.2V2.458a.39.39,0,0,1-.262.373,8.336,8.336,0,0,0-1.084.451.391.391,0,0,1-.452-.077l-.893-.892a1.2,1.2,0,0,0-1.7,0l-1.7,1.7a1.2,1.2,0,0,0,0,1.7l1.312,1.314a.4.4,0,0,0,.566-.565L88.178,5.143a.4.4,0,0,1,0-.566l1.7-1.7a.4.4,0,0,1,.566,0l.894.892A1.189,1.189,0,0,0,92.709,4a7.568,7.568,0,0,1,.98-.408A1.19,1.19,0,0,0,94.5,2.458V1.2a.4.4,0,0,1,.4-.4h2.4a.4.4,0,0,1,.4.4V2.458a1.19,1.19,0,0,0,.808,1.132A7.544,7.544,0,0,1,99.487,4a1.192,1.192,0,0,0,1.374-.226l.894-.892a.4.4,0,0,1,.566,0l1.7,1.7a.4.4,0,0,1,0,.565l-.892.894a1.19,1.19,0,0,0-.226,1.374,7.57,7.57,0,0,1,.408.98,1.19,1.19,0,0,0,1.132.808H105.7a.4.4,0,0,1,.4.4V12a.4.4,0,0,1-.4.4H104.44a1.19,1.19,0,0,0-1.132.808,7.538,7.538,0,0,1-.408.981,1.191,1.191,0,0,0,.226,1.374l.892.894a.4.4,0,0,1,0,.566l-1.7,1.7a.4.4,0,0,1-.565,0l-1.314-1.312a.4.4,0,1,0-.575.557l.01.01,1.314,1.312a1.2,1.2,0,0,0,1.7,0l1.7-1.7a1.2,1.2,0,0,0,0-1.7L103.693,15a.392.392,0,0,1-.077-.451,8.31,8.31,0,0,0,.452-1.085.39.39,0,0,1,.373-.264H105.7a1.2,1.2,0,0,0,1.2-1.2V9.6A1.2,1.2,0,0,0,105.7,8.4Z"
                                          transform="translate(-87.261)" fill="#2d2d2d"/>
                                </g>
                            </g>
                            <g id="Group_1180" data-name="Group 1180" transform="translate(9.411 5.602)">
                                <g id="Group_1179" data-name="Group 1179">
                                    <path id="Path_2284" data-name="Path 2284"
                                          d="M195.685,113.57a5.205,5.205,0,0,0-7.354,0,.4.4,0,0,0,.566.566,4.4,4.4,0,0,1,6.264,6.181l-.042.042a.4.4,0,0,0,.556.575l.01-.01A5.205,5.205,0,0,0,195.685,113.57Z"
                                          transform="translate(-188.219 -112.049)" fill="#2d2d2d"/>
                                </g>
                            </g>
                        </svg>
                    </span> <span class="ml-3 AdminNavText">Settings</span>
                    <span class="nav-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                            <text id="_" data-name="&gt;" transform="translate(0 21)" fill="#141414" font-size="20"
                                  font-family="Poppins-Regular, Poppins">
                                <tspan x="0" y="0">&gt;</tspan>
                            </text>
                        </svg>
                    </span>
                </a>
                {{-- service sub menu --}}
                <div class="collapse {{ Route::is('settings.*') ? 'show' : '' }}" id="navSettings">
                    <ul class="list-unstyled font-weight-normal pb-1 small">
                        <li class="nav-item sub-item">
                            <a href="#settingNavSeo" class="nav-link d-inline-flex align-items-center sub-menu-link"
                               data-toggle="collapse" role="button"
                               aria-expanded="{{ Route::is('settings.seo_tools.*') ? 'true' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">SEO tools</span>
                                <span class="nav-arrow subnav-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                                        <text id="_" data-name="&gt;" transform="translate(0 21)" fill="#141414"
                                              font-size="20" font-family="Poppins-Regular, Poppins">
                                            <tspan x="0" y="0">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span>
                            </a>
                            {{-- nested sub insider --}}
                            <div class="collapse nestedSubmenu {{ Route::is('settings.seo_tools.*') ? 'show' : '' }}"
                                 id="settingNavSeo">
                                <ul class="list-unstyled font-weight-normal pb-1 small">
                                    <li class="nav-item sub-item">
                                        <a href="{{ route('settings.seo_tools.google_analytics.index_google_analytics') }}"
                                           class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('settings.seo_tools.google_analytics.*') ? 'sub-active' : '' }}">
                                            <span class="pl-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
                                                     viewBox="0 0 9 9">
                                                    <g fill="none" stroke="#2d2d2d" stroke-width="1">
                                                        <circle cx="4.5" cy="4.5" r="4.5" stroke="none"/>
                                                        <circle cx="4.5" cy="4.5" r="4" fill="none"/>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="pl-3">Google Analytics</span>
                                        </a>
                                        {{-- nested sub insider --}}
                                    </li>
                                    <li class="nav-item sub-item">
                                        <a href="{{ route('settings.seo_tools.open_graph.index_open_graph') }}"
                                           class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('settings.seo_tools.open_graph.*') ? 'sub-active' : '' }}">
                                            <span class="pl-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
                                                     viewBox="0 0 9 9">
                                                    <g fill="none" stroke="#2d2d2d" stroke-width="1">
                                                        <circle cx="4.5" cy="4.5" r="4.5" stroke="none"/>
                                                        <circle cx="4.5" cy="4.5" r="4" fill="none"/>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="pl-3"> Open Graph Meta</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            {{-- nested sub insider --}}
                        </li>
                        <li class="nav-item sub-item">
                            <a href="{{ route('settings.site_cms.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('settings.site_cms.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Site CMS</span>
                            </a>
                            {{-- nested sub insider --}}
                        </li>
                        <li class="nav-item sub-item">
                            <a href="{{ route('settings.policy.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('settings.policy.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Policies</span>
                            </a>
                            {{-- nested sub insider --}}
                        </li>
                        <li class="nav-item sub-item">
                            <a href="#settingNavFooter" class="nav-link d-inline-flex align-items-center sub-menu-link"
                               data-toggle="collapse" role="button"
                               aria-expanded="{{ Route::is('settings.footer_section.*') ? 'true' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Footer Section</span>
                                <span class="nav-arrow subnav-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="28" viewBox="0 0 11 28">
                                        <text id="_" data-name="&gt;" transform="translate(0 21)" fill="#141414"
                                              font-size="20" font-family="Poppins-Regular, Poppins">
                                            <tspan x="0" y="0">&gt;</tspan>
                                        </text>
                                    </svg>
                                </span>
                            </a>
                            {{-- nested sub insider --}}
                            <div
                                class="collapse nestedSubmenu {{ Route::is('settings.footer_section.*') ? 'show' : '' }}"
                                id="settingNavFooter">
                                <ul class="list-unstyled font-weight-normal pb-1 small">
                                    <li class="nav-item sub-item">
                                        <a href="{{ route('settings.footer_section.footer.index') }}"
                                           class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('settings.footer_section.footer.*') ? 'sub-active' : '' }}">
                                            <span class="pl-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
                                                     viewBox="0 0 9 9">
                                                    <g fill="none" stroke="#2d2d2d" stroke-width="1">
                                                        <circle cx="4.5" cy="4.5" r="4.5" stroke="none"/>
                                                        <circle cx="4.5" cy="4.5" r="4" fill="none"/>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="pl-3">Footer</span>
                                        </a>
                                        {{-- nested sub insider --}}
                                    </li>
                                    <li class="nav-item sub-item">
                                        <a href="{{ route('settings.footer_section.social_link.index') }}"
                                           class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('settings.footer_section.social_link.*') ? 'sub-active' : '' }}">
                                            <span class="pl-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9"
                                                     viewBox="0 0 9 9"><g fill="none" stroke="#2d2d2d" stroke-width="1"><circle
                                                            cx="4.5" cy="4.5" r="4.5" stroke="none"/><circle cx="4.5" cy="4.5" r="4" fill="none"/></g></svg>
                                            </span>
                                            <span class="pl-3">Social Links</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            {{-- nested sub insider --}}
                        </li>
                        <li class="nav-item sub-item">
                            <a href="{{ route('settings.maintenance.index') }}"
                               class="nav-link d-inline-flex align-items-center sub-menu-link {{ Route::is('settings.maintenance.*') ? 'sub-active' : '' }}">
                                <span class="pl-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" viewBox="0 0 12 12">
                                        <circle id="Ellipse_224" data-name="Ellipse 224" cx="6" cy="6" r="6"
                                                fill="#000000"/>
                                    </svg>
                                </span>
                                <span class="pl-3">Maintenance Mode</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            {{-- settings end --}}
        </ul>
    </div>
</div>
