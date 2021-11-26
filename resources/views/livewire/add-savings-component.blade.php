<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Transactions</h4>
                    <div class="flex-shrink-0">
                        <ul class="nav nav-tabs-custom card-header-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#buy-tab" role="tab">Deposit</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#sell-tab" role="tab">Withdraw</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- end card header -->

                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="buy-tab" role="tabpanel">
                            <div class="float-end ms-2">
                                <h5 class="font-size-14"><i class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i> <a href="#!" class="text-reset text-decoration-underline">$4335.23</a></h5>
                            </div>
                            <h5 class="font-size-14 mb-4">Buy Coins</h5>
                            <form>
                                <div class="form-group mb-3">
                                    <label>Payment method :</label>
                                    <select class="form-select">
                                        <option>Direct Bank Payment</option>
                                        <option>Credit / Debit Card</option>
                                        <option>Paypal</option>
                                        <option>Payoneer</option>
                                        <option>Stripe</option>
                                    </select>
                                </div>

                                <div>
                                    <label>Add Amount :</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Amount </label>
                                        <input value="1" type="number" class="form-control" id="desposit-amount" placeholder="$58,245">
                                        <label class="input-group-text">Ksh</label>
                                    </div>
                                </div>

                                <div>
                                    <label></label>
                                    <div id="paypal-button-container"></div>
                                </div>

                                <div class="text-center">
                                    <a href="{{route('dashboard')}}" class="btn btn-success w-md">Cancel</a>
                                </div>
                            </form>
                        </div>
                        <!-- end tab pane -->
                        <div class="tab-pane" id="sell-tab" role="tabpanel">
                            <div class="float-end ms-2">
                                <h5 class="font-size-14"><i class="bx bx-wallet text-primary font-size-16 align-middle me-1"></i> <a href="#!" class="text-reset text-decoration-underline">$4235.23</a></h5>
                            </div>
                            <h5 class="font-size-14 mb-4">Sell Coins</h5>

                            <div>

                                <div class="form-group mb-3">
                                    <label>Wallet ID :</label>
                                    <input type="email" class="form-control" placeholder="1cvb254ugxvfcd280ki">
                                </div>

                                <div>
                                    <label>Add Amount :</label>
                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Amount</label>

                                        <select class="form-select" style="max-width: 90px;">
                                            <option value="BT" selected>BTC</option>
                                            <option value="ET">ETH</option>
                                            <option value="LT">LTC</option>
                                        </select>
                                        <input type="text" class="form-control" placeholder="0.00121255">
                                    </div>

                                    <div class="input-group mb-3">

                                        <label class="input-group-text">Price</label>

                                        <input type="text" class="form-control" placeholder="$23,754.25">

                                        <label class="input-group-text">$</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text">Total</label>
                                        <input type="text" class="form-control" placeholder="$6,852.41">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="button" class="btn btn-danger w-md">Sell Coin</button>
                                </div>
                            </div>
                        </div>
                        <!-- end tab pane -->
                    </div>
                    <!-- end tab content -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->


    </div>
    <!-- end row-->

    <script>

        paypal.Buttons({
            function (){
                $('#desposit-amount').on('change', function() {
                    var amount=  this.value;
                    console.log(amount)
                });
            },
            createOrder: function(data, actions ,amount) {
                // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: $('#desposit-amount').val()
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                    // This function shows a transaction success message to your buyer.
                    alert('Transaction completed by ' + details.payer.name.given_name);
                });
            }
        })      .render('#paypal-button-container');

        //This function displays Smart Payment Buttons on your web page.
    </script>
</div>


