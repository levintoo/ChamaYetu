<div class="container-fluid">
            <div class="row" hidden>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Prefered Theme Colors</h4>
                            <p class="card-title-desc"></p>
                        </div>
                        <div class="card-body">

                            <div class="text-center">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="mt-4">
                                            <h5 class="font-size-14">Classic Demo</h5>
                                            <div class="classic-colorpicker"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mt-4">
                                            <h5 class="font-size-14">Monolith Demo</h5>
                                            <div class="monolith-colorpicker"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="mt-4">
                                            <h5 class="font-size-14">Nano Demo</h5>
                                            <div class="nano-colorpicker"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Personal Details</h4>
                            <p class="card-title-desc"></p>
                        </div>
                        <div class="card-body">

                            <form >
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="col-lg-6">
                                        @if(Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif
                                        <div class="mb-3">
                                            <label class="form-label">Oficial name</label>
                                            <input type="text" class="form-control" placeholder="Full Name" id=""  wire:model="oficial_name">
                                            @error('oficial_name') <p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control flatpickr-input"  placeholder="phone" wire:model="phone_number">
                                            @error('phone_number') <p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">DOB</label>
                                            <input type="text" class="form-control" id="datepicker-basic"  placeholder="DOB" wire:model="dob">
                                            @error('dob') <p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">National ID</label>
                                            <input type="text" class="form-control" id=""  placeholder="ID number" wire:model="national_id">
                                            @error('national_id') <p class="text-danger">{{$message}}</p>@enderror
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Residence</label>
                                            <input type="text" class="form-control" id=""  placeholder="residence" wire:model="residence">
                                            @error('residence') <p class="text-danger">{{$message}}</p>@enderror
                                        </div>
                                        <div class="mb-3">
                                            <button type="button" class="btn btn-primary" wire:click="storeinfo()">Update me</button>
                                            <button class="btn theme-btn-1 add_message" type="button" name="submit-form" wire:click="storeinfo()">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header ">
                    <h4 class="card-title">Update Password</h4>
                    <p class="card-title-desc"></p>
                </div>
                <div class="card-body">

                    <form action="#">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">

                                <div class="mb-3">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" class="form-control" placeholder="********" id="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Current Password</label>
                                    <input type="password" class="form-control"  placeholder="********" id="">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id=""  placeholder="********">
                                </div>
                                <div class="mb-3">
                                    <input type="button" class="btn btn-primary" value="Update" id="">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
        </div>

