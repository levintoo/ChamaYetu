<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Users</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buttons example</h4>
                    <p class="card-title-desc">The Buttons extension for DataTables
                        provides a common set of options, API methods and styling to display
                        buttons on a page that will interact with a DataTable. The core library
                        provides the based framework upon which plug-ins can built.
                    </p>
                </div>
                <div class="card-body overflow-auto">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>UserId</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Phone</th>
{{--                            <th>National Id</th>--}}
{{--                            <th>DOB</th>--}}
{{--                            <th>WalletBalance</th>--}}
{{--                            <th>Residence</th>--}}
{{--                            <th>Email</th>--}}
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->userid}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->oficial_name}}</td>
                                <td>{{$user->phone_number}}</td>
{{--                                <td>{{$user->national_id}}</td>--}}
{{--                                <td>{{$user->dob}}</td>--}}
{{--                                <td>{{$user->walletbalance}}</td>--}}
{{--                                <td>{{$user->residence}}</td>--}}
{{--                                <td>{{$user->email}}</td>--}}
                                <td class='text-center'>
                                    <a class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end cardaa -->
        </div> <!-- end col -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Admins</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Buttons example</h4>
                    <p class="card-title-desc">The Buttons extension for DataTables
                        provides a common set of options, API methods and styling to display
                        buttons on a page that will interact with a DataTable. The core library
                        provides the based framework upon which plug-ins can built.
                    </p>
                </div>
                <div class="card-body overflow-auto">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                        <thead>
                        <tr>
                            <th>UserId</th>
                            <th>Post</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td>{{$user->userid}}</td>
                                <td>{{$user->utype}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class='text-center'>
                                    <a class="btn btn-success"><i class="fas fa-user-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end cardaa -->
        </div> <!-- end col -->
    </div>
</div> <!-- container-fluid -->

