<!-- cards -->
<section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                        <div class="row pt-md-5 mt-md-3 mb-5">

                            <div class="col-xl-3 col-sm-6 p-2">
                                <div class="card card-common">
                                    <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-shopping-cart fa-3x text-warning"></i>
                                        <div class="text-right text-secondary">
                                        <h5>Sales</h5>
                                        <h3>$135,000</h3>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6 p-2">
                                <div class="card card-common">
                                    <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-chart-bar fa-3x text-success"></i>
                                        <div class="text-right text-secondary">
                                        <h5>Categories</h5>
                                        <h3><?php echo countTotalRecords('categories'); ?></h3>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6 p-2">
                                <div class="card card-common">
                                    <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-users fa-3x text-info"></i>
                                        <div class="text-right text-secondary">
                                        <h5>Users</h5>
                                        <h3><?php echo countTotalRecords('users'); ?></h3>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-sm-6 p-2">
                                <div class="card card-common">
                                    <div class="card-body">
                                    <div class="d-flex justify-content-between">
                                        <i class="fas fa-chart-line fa-3x text-danger"></i>
                                        <div class="text-right text-secondary">
                                        <h5>Products</h5>
                                        <h3><?php echo countTotalRecords('products'); ?></h3>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="card-footer text-secondary">
                                    <i class="fas fa-sync mr-3"></i>
                                    <span>Updated Now</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /cards -->

        <!-- tables -->
        <!-- <section>
            <div class="container-fluid">
                <div class="row mb-5">
                    <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                                <h3 class="text-muted text-center mb-3">Staff Salary</h3>
                                <table class="table table-striped bg-light text-center">
                                    <thead>
                                    <tr class="text-muted">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Salary</th>
                                        <th>Date</th>
                                        <th>Contact</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>John</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Ann</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Mark</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Mary</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Bob</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><button type="button" class="btn btn-info btn-sm">Message</button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-xl-6 col-12">
                                <h3 class="text-muted text-center mb-3">Recent Payments</h3>
                                <table class="table table-dark table-hover text-center">
                                    <thead>
                                    <tr class="text-muted">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>Monica</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <th>2</th>
                                        <td>Nick</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <th>3</th>
                                        <td>Alex</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th>4</th>
                                        <td>Jane</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <th>5</th>
                                        <td>Michael</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><span class="badge badge-success w-75 py-2">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <th>6</th>
                                        <td>Kate</td>
                                        <td>$2000</td>
                                        <td>25/05/2018</td>
                                        <td><span class="badge badge-danger w-75 py-2">Pending</span></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- /tables -->