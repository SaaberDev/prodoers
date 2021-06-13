<div class="modal fade shadow" id="assignorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Order ID</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span> </button>
            </div>
            <div class="modal-body">
                <div class="SectionDataTable ">
                    <div class="row m-0 py-3 bg-white rounded">
                        <div class="col-md-12">
                            <div class="designwalsDataTables text-center">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">User name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Designation</th>
                                        <th scope="col">Assigned to</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($designwalas as $designwala)
                                    <tr>
                                        <td>{{ $designwala->username }}</td>
                                        <td>{{ $designwala->email }}</td>
                                        <td>{{ $designwala->designation }}</td>
                                        <td>
                                            <div class="" style="display: grid">
                                                <span class="tableDataLastButtonLiketab tabletabLightSKY" style="margin-bottom: 4px">aniyah01</span>
                                                <span class="tableDataLastButtonLiketab tabletabRED" style="margin-bottom: 4px">Not assigned yet</span>
                                            </div>
                                        </td>
                                        <td>
                                            <button  class="btn shadow bgOne text-white px-2 py-0">
                                                Assigned
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr><td class="null_table" colspan="7">No Designwala</td></tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
