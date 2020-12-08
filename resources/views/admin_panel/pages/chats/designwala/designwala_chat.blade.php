@extends('admin_panel.layouts.app')
@section('title', 'Designwala Chat')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style" >
        <div class="">
            <div class="row justify-content-center pb-3 m-0">
                <div class="col-md-12 col-sm-12  v-center">
                    <!-- breadcrumb  -->
                    @include('admin_panel.includes.breadcrumb')
                </div>
            </div>
        </div>
        <div class="boxshadow rounded">
            <div class="row justify-content-center m-0 py-1 boxshadow rounded">
                <div class="col-xl-12 col-lg-12 col-md-12 v-center">
                    <div class="">
                        <h2 class="  m-0">Chat</h2> </div>
                </div>
            </div>
        </div>

        <!--nav tab -->
        <div class="tab-content mt-4" id="nav-tabContent">
            <!--  designwala -->
            <div class="tab-pane fade show active" id="designwalachat" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row  justify-content-center m-0 py-3 boxshadow rounded">
                    <div class="col-md-3">
                        <div class="list-group designwalaChatTabs" id="list-tab" role="tablist" style="">
                            <a class="list-group-item   bg-light">
                                <div class="w-100">
                                    <div class="w-80 float-left">
                                        <div class="">
                                            <div class="adminPageDetailsSearch">
                                                <div class="input-group border ">
                                                    <input type="text" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
                                                    <button class="btn " type="button" id="button-addon2">
                                                        <svg id="magnifying-glass" xmlns="http://www.w3.org/2000/svg" width="20.16" height="20.164" viewBox="0 0 20.16 20.164">
                                                            <path id="Path_42" data-name="Path 42" d="M20.036,19.136l-4.9-4.9a8.6,8.6,0,1,0-.849.849l4.9,4.9a.608.608,0,0,0,.425.179.589.589,0,0,0,.425-.179A.6.6,0,0,0,20.036,19.136ZM1.253,8.6a7.391,7.391,0,1,1,7.391,7.4A7.4,7.4,0,0,1,1.253,8.6Z" transform="translate(-0.05 0)" fill="#272d3b"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="w-20 float-left text-center">
                                        <button href="#" class="btn btn-link">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.322" height="14.322" viewBox="0 0 14.322 14.322">
                                                <g transform="translate(-2.5 -2.203)">
                                                    <path d="M8.907,6H4.313A1.313,1.313,0,0,0,3,7.313V16.5a1.313,1.313,0,0,0,1.313,1.313H13.5A1.313,1.313,0,0,0,14.815,16.5V11.907" transform="translate(0 -1.79)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                    <path d="M18.892,3.226a1.392,1.392,0,1,1,1.969,1.969l-6.236,6.236L12,12.087l.656-2.626Z" transform="translate(-5.062 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold active" id="list-home-list" data-toggle="list" href="#tabOne" role="tab" aria-controls="home">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-profile-list" data-toggle="list" href="#tabTwo" role="tab" aria-controls="profile">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold " id="list-messages-list" data-toggle="list" href="#tabThree" role="tab" aria-controls="messages">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFour" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>
                            <a class="list-group-item list-group-item-action bg-light  text-dark font-weight-bold" id="list-settings-list" data-toggle="list" href="#tabFive" role="tab" aria-controls="settings">
                                #Order Id
                            </a>

                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content chattabContent" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="tabOne" role="tabpanel" aria-labelledby="list-home-list">
                                <div class="card">
                                    <div class="card-header">
                                        <h4> Client Name</h4>
                                        <p class="mb-0">#000000</p>
                                    </div>
                                    <div class="card-body">
                                        <blockquote class="blockquote clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemOne">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote pt-3 clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemTwo">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quaerat.</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemOne">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote pt-3 clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemTwo">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quaerat.</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemOne">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote pt-3 clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemTwo">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quaerat.</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemOne">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote pt-3 clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemTwo">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quaerat.</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemOne">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote pt-3 clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemTwo">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quaerat.</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemOne">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote pt-3 clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemTwo">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quaerat.</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemOne">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote pt-3 clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemTwo">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quaerat.</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemOne">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote pt-3 clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemTwo">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quaerat.</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemOne">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote pt-3 clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemTwo">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quaerat.</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemOne">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote pt-3 clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemTwo">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quaerat.</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemOne">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?You did a really great work! Can you please make me one more report until tomorrow EOB?</p>
                                                </div>
                                            </div>
                                        </blockquote>
                                        <blockquote class="blockquote pt-3 clearfix">
                                            <div class="w-100">
                                                <div class="w-10 float-left"><img src="img/devimg/headermanlogo.png" height="50" width="50" alt=""></div>
                                                <div class="w-90 float-left chatItemTwo">
                                                    <h6 class="m-0  colorOne">Mahfuzur Rahman Saber</h6>
                                                    <p class="m-0 font13 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, quaerat.</p>
                                                </div>
                                            </div>
                                        </blockquote>



                                    </div>
                                    <div class="chatBox p-3">
                                        <div class="adminPageDetailsSearch">
                                            <div class="input-group ">
                                                <input type="text" class="form-control" placeholder="type your message here">
                                                <button class="btn " type="button" id="button-addon2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 40 40">
                                                        <g transform="translate(-1776 -651)">
                                                            <circle cx="20" cy="20" r="20" transform="translate(1776 651)" fill="#038d08" />
                                                            <g transform="translate(1787.594 662)">
                                                                <path d="M17.858.31A.519.519,0,0,0,17.286.2L.312,7.641A.525.525,0,0,0,0,8.091a.515.515,0,0,0,.261.476L6.18,11.923,9.694,17.9a.523.523,0,0,0,.445.257h.031a.52.52,0,0,0,.445-.311L17.97.882A.513.513,0,0,0,17.858.31Zm-2.7,1.955L6.472,10.894l-4.8-2.719ZM10.07,16.5,7.209,11.624l8.737-8.679Z" transform="translate(0 -0.16)" fill="#f5fbff" /> </g>
                                                        </g>
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabTwo" role="tabpanel" aria-labelledby="list-profile-list">two</div>
                            <div class="tab-pane fade" id="tabThree" role="tabpanel" aria-labelledby="list-messages-list">Three</div>
                            <div class="tab-pane fade" id="tabFour" role="tabpanel" aria-labelledby="list-settings-list">Four</div>
                            <div class="tab-pane fade" id="tabFive" role="tabpanel" aria-labelledby="list-settings-list">Five</div>
                        </div>
                    </div>
                </div>
            </div>
            <!--order -->

        </div>
    </div>
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
