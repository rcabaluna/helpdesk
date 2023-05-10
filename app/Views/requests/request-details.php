<div id="invoice" class="p-h-30">
                                    <div class="row lh-2">
                                        <div class="col-sm-6">
                                        

                                            <h3 class="p-l-10 m-t-10">Document No: #<?=$reqsummary['documentnumber']?></h3>
                                            <address class="p-l-10 m-t-10">
                                                <span class="font-weight-semibold text-dark">Genting Holdings.</span><br>
                                                <span>8626 Maiden Dr. </span><br>
                                                <span>Niagara Falls, New York 14304</span>
                                            </address>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="m-t-80">
                                                <div class="text-dark text-uppercase d-inline-block">
                                                    <span class="font-weight-semibold text-dark">Document No :</span></div>
                                                <div class="float-right"><?=$reqsummary['documentnumber']?></div>
                                            </div>
                                            <div class="text-dark text-uppercase d-inline-block">
                                                <span class="font-weight-semibold text-dark">Date Requested:</span>
                                            </div>
                                            <div class="float-right"><?=date("F d, Y",strtotime($reqsummary['date_created']))?> <small><?=date("h:i A",strtotime($reqsummary['date_created']))?></small></div>
                                        </div>
                                    </div>
                                    <div class="m-t-20">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Items</th>
                                                        <th>Quantity</th>
                                                        <th>Price</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>1</th>
                                                        <td>Asus Zenfone 3 Zoom ZE553KL Dual Sim (4GB, 64GB)</td>
                                                        <td>2</td>
                                                        <td>$450.00</td>
                                                        <td>$900.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th>2</th>
                                                        <td>HP Pavilion 15-au103TX 15.6˝ Laptop Red</td>
                                                        <td>1</td>
                                                        <td>$550.00</td>
                                                        <td>$550.00</td>
                                                    </tr>
                                                    <tr>
                                                        <th>3</th>
                                                        <td>Canon EOS 77D</td>
                                                        <td>1</td>
                                                        <td>$875.00</td>
                                                        <td>$875.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row m-t-30 lh-2">
                                            <div class="col-sm-12">
                                                <div class="border-bottom p-v-20">
                                                    <p class="text-opacity"><small>In exceptional circumstances, Financial Services can provide an urgent manually processed special cheque. Note, however, that urgent special cheques should be requested only on an emergency basis as manually produced cheques involve duplication of effort and considerable staff resources. Requests need to be supported by a letter explaining the circumstances to justify the special cheque payment.</small></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-v-20">
                                            <div class="col-sm-6">
                                                <img class="img-fluid text-opacity m-t-5" width="100" src="assets/images/logo/logo.png" alt="">
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <small><span class="font-weight-semibold text-dark">Phone:</span> (123) 456-7890</small>
                                                <br>
                                                <small>support@themenate.com</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>