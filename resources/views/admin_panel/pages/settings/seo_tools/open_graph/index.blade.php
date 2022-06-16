@extends('admin_panel.layouts.app')
@section('title', 'Open Graph Meta')

@push('styles')
    {{-- Internal Styles --}}
@endpush

@section('content')
    <div class="col-xl-10 col-lg-9 col-md-12 dashboardRightside scrollbar scroll-style">
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
                <div class="col-xl-9 col-lg-8 col-md-8 v-center">
                    <div class="">
                        <h2 class="  m-0">Open Graph Meta</h2></div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 v-center">
                    <div class="text-right">
                        <div class="adminPageDetailsSearch">
                            <div class="input-group ">
                                <input type="text" class="form-control" placeholder="" aria-label="Recipient's username"
                                       aria-describedby="button-addon2">
                                <button class="btn " type="button" id="button-addon2">
                                    <svg id="magnifying-glass" xmlns="http://www.w3.org/2000/svg" width="20.16"
                                         height="20.164" viewBox="0 0 20.16 20.164">
                                        <path id="Path_42" data-name="Path 42"
                                              d="M20.036,19.136l-4.9-4.9a8.6,8.6,0,1,0-.849.849l4.9,4.9a.608.608,0,0,0,.425.179.589.589,0,0,0,.425-.179A.6.6,0,0,0,20.036,19.136ZM1.253,8.6a7.391,7.391,0,1,1,7.391,7.4A7.4,7.4,0,0,1,1.253,8.6Z"
                                              transform="translate(-0.05 0)" fill="#272d3b"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="selectsOptions">
            <div class="row m-0 py-3">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-3 "> show
                            <select class="custom-select custom-select-sm ">
                                <option selected="">15</option>
                                <option value="1">25</option>
                                <option value="2">50</option>
                                <option value="3">100</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
                <div class="col-md-4">
                    <!-- pagination -->
                    @include('admin_panel.includes.pagination')
                </div>
            </div>
        </div>
        <div class="SectionDataTable ">
            <div class="row m-0 py-3 bg-white ">
                <div class="col-md-3">
                    <div class="">
                        <div class="card" style="">
                            <div class="card-body">
                                <h5 class="card-title">Add Meta</h5>
                                <hr>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">property</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                               aria-describedby="emailHelp"></div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">content</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1"
                                                  rows="3"></textarea>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn bgOne text-white">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 ">
                    <div class="designwalsDataTables text-center border">
                        <h5 class="text-left pt-4 pl-4">Open Graph Meta List</h5>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">date</th>
                                <th scope="col">property</th>
                                <th scope="col">content</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>09.09.20</td>
                                <td>XYZ</td>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</td>
                                <td>
                                    <div class="">
                                        <a href="{{ route('super_admin.settings.seo_tools.open_graph.edit_open_graph') }}" class="btn p-0 m-0" data-toggle="tooltip" title="" data-original-title="view or edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.322" height="14.322" viewBox="0 0 14.322 14.322">
                                                <g transform="translate(-2.5 -2.203)">
                                                    <path d="M8.907,6H4.313A1.313,1.313,0,0,0,3,7.313V16.5a1.313,1.313,0,0,0,1.313,1.313H13.5A1.313,1.313,0,0,0,14.815,16.5V11.907" transform="translate(0 -1.79)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                    <path d="M18.892,3.226a1.392,1.392,0,1,1,1.969,1.969l-6.236,6.236L12,12.087l.656-2.626Z" transform="translate(-5.062 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a class="btn m-0 p-0" data-toggle="modal" data-target="#deletemodal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027"
                                                 viewBox="0 0 11.91 16.027">
                                                <path
                                                    d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z"
                                                    transform="translate(-7 -3)" fill="none" stroke="#000"
                                                    stroke-width="1"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>09.09.20</td>
                                <td>XYZ</td>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</td>
                                <td>
                                    <div class="">
                                        <a href="{{ route('super_admin.settings.seo_tools.open_graph.edit_open_graph') }}" class="btn p-0 m-0" data-toggle="tooltip" title="" data-original-title="view or edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.322" height="14.322" viewBox="0 0 14.322 14.322">
                                                <g transform="translate(-2.5 -2.203)">
                                                    <path d="M8.907,6H4.313A1.313,1.313,0,0,0,3,7.313V16.5a1.313,1.313,0,0,0,1.313,1.313H13.5A1.313,1.313,0,0,0,14.815,16.5V11.907" transform="translate(0 -1.79)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                    <path d="M18.892,3.226a1.392,1.392,0,1,1,1.969,1.969l-6.236,6.236L12,12.087l.656-2.626Z" transform="translate(-5.062 0)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"></path>
                                                </g>
                                            </svg>
                                        </a>
                                        <a class="btn m-0 p-0" data-toggle="modal" data-target="#deletemodal">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="11.91" height="16.027"
                                                 viewBox="0 0 11.91 16.027">
                                                <path
                                                    d="M8.279,16.969a1.563,1.563,0,0,0,1.559,1.559h6.234a1.563,1.563,0,0,0,1.559-1.559V7.617H8.279ZM18.41,4.279H15.683L14.9,3.5h-3.9l-.779.779H7.5V5.838H18.41Z"
                                                    transform="translate(-7 -3)" fill="none" stroke="#000"
                                                    stroke-width="1"></path>
                                            </svg>
                                        </a>
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
@endsection

@push('scripts')
    {{-- Internal Scripts --}}
@endpush
