<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header ">
                <h4 class="card-title">Update Password</h4>
                <p class="card-title-desc"></p>
            </div>
            <div class="card-body">

                <form>
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                            <div class="mb-3">
                                <label class="form-label">Current Password</label>
                                <input type="password" class="form-control" placeholder="********" wire:model="current_password">
                                @error('current_password') <p class="text-danger">{{$message}}</p>@enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Current Password</label>
                                <input type="password" class="form-control"  placeholder="********" id="" wire:model="password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id=""  placeholder="********" wire:model="updatepassword">
                            </div>
                            <div class="mb-3">
                                <input type="button" class="btn btn-primary" value="Update" id="" wire:click="update()">
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
