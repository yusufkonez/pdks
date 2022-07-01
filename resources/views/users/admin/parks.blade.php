<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <a href="javascript:void(0);" onclick="javascript:void(0);" data-toggle="modal" data-target="#parkModal">&nbsp;<i class="text-success fa-solid fa-map-location-dot">&emsp;</i></a>
            <a href="javascript:void(0);" onclick="javascript:void(0);"><i class="fa-solid fa-gear">&emsp;</i></a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0"
                               role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                            <tr role="row">
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending" style="width: 37px;">Settings
                                </th>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending" style="width: 57px;">ID
                                </th>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending" style="width: 57px;">Name
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    aria-label="Position: activate to sort column ascending" style="width: 61px;">
                                    Latitude
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    aria-label="Office: activate to sort column ascending" style="width: 49px;">
                                    Longitude
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($parks as $val)
                                <tr>
{{--                                    <td>--}}
{{--                                        <a href="javascript:void(0);" onclick="uyeSil({{$val -> ID}});"><i class="text-danger fas fa-trash"></i></a>--}}
{{--                                        <a href="javascript:void(0);" onclick="uptadeUserModalShow({{$val -> ID}});"><i class="ml-4 text-warning fas fa-wrench"></i></a>--}}
{{--                                    </td>--}}
                                    <td></td>
                                    <td>{{$val-> id}}</td>
                                    <td>{{$val-> park_name}}</td>
                                    <td>{{$val-> loc_x }}</td>
                                    <td>{{$val-> loc_y }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div class="modal" id="parkModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><i class="text-success fa-solid fa-map-location-dot"> </i> Park Tanımla</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="{{route("addpark")}}" id="identifyPark" type="hidden">
                    @csrf
                    <div class="form-group">
                        <label>Park İsmi:
                            @error("name")
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </label>
                        <input name="name" class="form-control" value="{{old("name")}}">
                    </div>
                    <div class="form-group">
                        <label>Latitude:
                            @error("loc_x")
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </label>
                        <input name="loc_x" class="form-control" value="{{old("loc_x")}}">
                    </div>
                    <div class="form-group">
                        <label>Longitude:
                            @error("loc_y")
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </label>
                        <input name="loc_y" class="form-control" value="{{old("loc_y")}}">
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="$('#identifyPark').submit();">Kaydet</button>
            </div>
        </div>
    </div>
</div>
