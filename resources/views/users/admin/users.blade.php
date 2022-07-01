<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
            <a href="javascript:void(0);" onclick="javascript:void(0);" data-toggle="modal" data-target="#userModal">&nbsp;<i
                    class="text-success fa-solid fa-user-plus">&emsp;</i></a>
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
                                    e-mail
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    aria-label="Office: activate to sort column ascending" style="width: 49px;">TC Kimlik No
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $val)
                                    <tr>
{{--                                        <td>--}}
{{--                                            <a href="javascript:void(0);" onclick="uyeSil({{$val -> ID}});"><iclass="text-danger fas fa-trash"></i></a>--}}
{{--                                            <a href="javascript:void(0);" onclick="uptadeUserModalShow({{$val -> ID}});"><i class="ml-4 text-warning fas fa-wrench"></i></a>--}}
{{--                                        </td>--}}
                                        <td></td>
                                        <td>{{$val-> id}}</td>
                                        <td>{{$val-> name}}</td>
                                        <td>{{$val-> email }}</td>
                                        <td>{{$val-> tckn }}</td>
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
<div class="modal" id="userModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title"><i class="text-success fa-solid fa-user-plus"> </i> Üye Tanımla</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" action="{{route("adduser")}}" id="identifyStaff" type="hidden">
                    @csrf
                    <div class="form-group">
                        <label>Adınız:
                            @error("name")
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </label>
                        <input name="name" class="form-control" value="{{old("name")}}">
                    </div>
                    <div class="form-group">
                        <label>e-mail:
                            @error("email")
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </label>
                        <input name="email" class="form-control" value="{{old("email")}}">
                    </div>
                    <div class="form-group">
                        <label>sys_role:
                            @error("sys_role")
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </label>
                        <input name="sys_role" class="form-control" value="{{old("sys_role")}}">
                    </div>
                    <div class="form-group">
                        <label>Password:
                            @error("password")
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </label>
                        <input type ="password" name="password" class="form-control" value="{{old("password")}}">
                    </div>
                    <div class="form-group">
                        <label>TC Kimlik No:
                            @error("tckn")
                            <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </label>
                        <input name="tckn" class="form-control" value="{{old("tckn")}}">
                    </div>
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-success" onclick="$('#identifyStaff').submit();">Kaydet</button>
            </div>
        </div>
    </div>
</div>
