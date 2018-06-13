@extends('...layouts.admin_layout')
@section('title')
    <title>Buses</title>
@endsection
@section('content')
    <header class="blue accent-3 relative">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-database"></i>
                        Users
                    </h4>
                </div>
            </div>
            <div class="row justify-content-between">
                <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                    <li>
                        <a class="nav-link active" id="v-pills-all-tab" data-toggle="pill" href="#v-pills-all"
                           role="tab" aria-controls="v-pills-all"><i class="icon icon-home2"></i>All Users</a>
                    </li>
                    <li class="float-right">
                        <a class="nav-link" href="panel-page-users-create.html"><i
                                    class="icon icon-plus-circle"></i> Add New User</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid animatedParent animateOnce">
        <div class="tab-content my-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="v-pills-all" role="tabpanel"
                 aria-labelledby="v-pills-all-tab">
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card r-0 shadow">
                            <div class="table-responsive">
                                <form>
                                    <table class="table table-striped table-hover r-0">
                                        <thead>
                                        <tr class="no-b">
                                            <th style="width: 30px">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="checkedAll"
                                                           class="custom-control-input"><label
                                                            class="custom-control-label" for="checkedAll"></label>
                                                </div>
                                            </th>
                                            <th>USER NAME</th>
                                            <th>ITEMS</th>
                                            <th>INCOME</th>
                                            <th>PHONE</th>
                                            <th>STATUS</th>
                                            <th>ROLE</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_1" required><label
                                                            class="custom-control-label" for="user_id_1"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-a  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Alexander Pierce</strong>
                                                    </div>
                                                    <small> alexander@paper.com</small>
                                                </div>
                                            </td>

                                            <td>2</td>
                                            <td>256</td>

                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-warning"></span>
                                                Inactive
                                            </td>
                                            <td><span class="r-3 badge badge-success ">Administrator</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_2" required><label
                                                            class="custom-control-label" for="user_id_2"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-b  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Blexander Pierce</strong>
                                                    </div>
                                                    <small> blexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>9,500</td>

                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-warning"></span>
                                                Inactive
                                            </td>
                                            <td><span class="r-3 badge badge-warning">Subscriber</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_3" required><label
                                                            class="custom-control-label" for="user_id_3"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-m  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Mlexander Pierce</strong>
                                                    </div>
                                                    <small>mlexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>

                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-success"></span>
                                                Active
                                            </td>

                                            <td><span class="r-3 badge badge-warning">Seller</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_4" required><label
                                                            class="custom-control-label" for="user_id_4"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-y  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Ylexander Pierce</strong>
                                                    </div>
                                                    <small>Ylexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>

                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-danger"></span>
                                                Suspended
                                            </td>

                                            <td><span class="r-3 badge badge-success">Buyer</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_5" required><label
                                                            class="custom-control-label" for="user_id_5"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <img src="/admin_inc/assets/img/dummy/u5.png" alt="">
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Alexander Pierce</strong>
                                                    </div>
                                                    <small> alexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>

                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-success"></span>
                                                Active
                                            </td>

                                            <td><span class="r-3 badge badge-warning">Seller</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_6" required><label
                                                            class="custom-control-label" for="user_id_6"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <span class="avatar-letter avatar-letter-p  avatar-md circle"></span>
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Plexander Pierce</strong>
                                                    </div>
                                                    <small>plexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>

                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-success"></span>
                                                Active
                                            </td>

                                            <td><span class="r-3 badge badge-success">Buyer</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_7" required><label
                                                            class="custom-control-label" for="user_id_7"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <img src="/admin_inc/assets/img/dummy/u7.png" alt="">
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Alexander Pierce</strong>
                                                    </div>
                                                    <small> alexander@paper.com</small>
                                                </div>
                                            </td>

                                            <td>2</td>
                                            <td>6,000</td>

                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-success"></span>
                                                Active
                                            </td>

                                            <td><span class="r-3 badge badge-success">Buyer</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_8" required><label
                                                            class="custom-control-label" for="user_id_8"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <img src="/admin_inc/assets/img/dummy/u8.png" alt="">
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Alexander Pierce</strong>
                                                    </div>
                                                    <small> alexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>

                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-danger"></span>
                                                Suspended
                                            </td>

                                            <td><span class="r-3 badge badge-success">Buyer</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_9" required><label
                                                            class="custom-control-label" for="user_id_9"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <img src="/admin_inc/assets/img/dummy/u3.png" alt="">
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Alexander Pierce</strong>
                                                    </div>
                                                    <small> alexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>

                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-success"></span>
                                                Active
                                            </td>

                                            <td><span class="r-3 badge badge-success">Buyer</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input checkSingle"
                                                           id="user_id_10" required><label
                                                            class="custom-control-label" for="user_id_10"></label>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="avatar avatar-md mr-3 mt-1 float-left">
                                                    <img src="/admin_inc/assets/img/dummy/u1.png" alt="">
                                                </div>
                                                <div>
                                                    <div>
                                                        <strong>Alexander Pierce</strong>
                                                    </div>
                                                    <small> alexander@paper.com</small>
                                                </div>
                                            </td>
                                            <td>2</td>
                                            <td>6,000</td>

                                            <td>+92 333 123 136</td>
                                            <td><span class="icon icon-circle s-12  mr-2 text-success"></span>
                                                Active
                                            </td>

                                            <td><span class="r-3 badge badge-success">Buyer</span></td>
                                            <td>
                                                <a href="panel-page-profile.html"><i class="icon-eye mr-3"></i></a>
                                                <a href="panel-page-profile.html"><i class="icon-pencil"></i></a>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <nav class="my-3" aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="tab-pane animated fadeInUpShort" id="v-pills-buyers" role="tabpanel"
                 aria-labelledby="v-pills-buyers-tab">
                <div class="row">
                    <div class="col-md-3 my-3">
                        <div class="card no-b">
                            <div class="card-body text-center p-5">
                                <div class="avatar avatar-xl mb-3">
                                    <img src="/admin_inc/assets/img/dummy/u1.png" alt="User Image">
                                </div>
                                <div>
                                    <h6 class="p-t-10">Alexander Pierce</h6>
                                    alexander@paper.com
                                </div>
                                <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="card no-b">
                            <div class="card-body text-center p-5">
                                <div class="avatar avatar-xl mb-3">
                                    <img src="/admin_inc/assets/img/dummy/u2.png" alt="User Image">
                                </div>
                                <div>
                                    <h6 class="p-t-10">Alexander Pierce</h6>
                                    alexander@paper.com
                                </div>
                                <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="card no-b">
                            <div class="card-body text-center p-5">
                                <div class="avatar avatar-xl mb-3">
                                    <img src="/admin_inc/assets/img/dummy/u4.png" alt="User Image">
                                </div>
                                <div>
                                    <h6 class="p-t-10">Alexander Pierce</h6>
                                    alexander@paper.com
                                </div>
                                <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="card no-b">
                            <div class="card-body text-center p-5">
                                <div class="avatar avatar-xl mb-3">
                                    <img src="/admin_inc/assets/img/dummy/u5.png" alt="User Image">
                                </div>
                                <div>
                                    <h6 class="p-t-10">Alexander Pierce</h6>
                                    alexander@paper.com
                                </div>
                                <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="card no-b">
                            <div class="card-body text-center p-5">
                                <div class="avatar avatar-xl mb-3">
                                    <img src="/admin_inc/assets/img/dummy/u6.png" alt="User Image">
                                </div>
                                <div>
                                    <h6 class="p-t-10">Alexander Pierce</h6>
                                    alexander@paper.com
                                </div>
                                <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="card no-b">
                            <div class="card-body text-center p-5">
                                <div class="avatar avatar-xl mb-3">
                                    <img src="/admin_inc/assets/img/dummy/u7.png" alt="User Image">
                                </div>
                                <div>
                                    <h6 class="p-t-10">Alexander Pierce</h6>
                                    alexander@paper.com
                                </div>
                                <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="card no-b">
                            <div class="card-body text-center p-5">
                                <div class="avatar avatar-xl mb-3">
                                    <img src="/admin_inc/assets/img/dummy/u8.png" alt="User Image">
                                </div>
                                <div>
                                    <h6 class="p-t-10">Alexander Pierce</h6>
                                    alexander@paper.com
                                </div>
                                <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="card no-b">
                            <div class="card-body text-center p-5">
                                <div class="avatar avatar-xl mb-3">
                                    <img src="/admin_inc/assets/img/dummy/u9.png" alt="User Image">
                                </div>
                                <div>
                                    <h6 class="p-t-10">Alexander Pierce</h6>
                                    alexander@paper.com
                                </div>
                                <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="card no-b">
                            <div class="card-body text-center p-5">
                                <div class="avatar avatar-xl mb-3">
                                    <img src="/admin_inc/assets/img/dummy/u9.png" alt="User Image">
                                </div>
                                <div>
                                    <h6 class="p-t-10">Alexander Pierce</h6>
                                    alexander@paper.com
                                </div>
                                <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="card no-b">
                            <div class="card-body text-center p-5">
                                <div class="avatar avatar-xl mb-3">
                                    <img src="/admin_inc/assets/img/dummy/u10.png" alt="User Image">
                                </div>
                                <div>
                                    <h6 class="p-t-10">Alexander Pierce</h6>
                                    alexander@paper.com
                                </div>
                                <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="card no-b">
                            <div class="card-body text-center p-5">
                                <div class="avatar avatar-xl mb-3">
                                    <img src="/admin_inc/assets/img/dummy/u11.png" alt="User Image">
                                </div>
                                <div>
                                    <h6 class="p-t-10">Alexander Pierce</h6>
                                    alexander@paper.com
                                </div>
                                <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 my-3">
                        <div class="card no-b">
                            <div class="card-body text-center p-5">
                                <div class="avatar avatar-xl mb-3">
                                    <img src="/admin_inc/assets/img/dummy/u12.png" alt="User Image">
                                </div>
                                <div>
                                    <h6 class="p-t-10">Alexander Pierce</h6>
                                    alexander@paper.com
                                </div>
                                <a href="#" class="btn btn-success btn-sm mt-3">View Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane animated fadeInUpShort" id="v-pills-sellers" role="tabpanel"
                 aria-labelledby="v-pills-sellers-tab">
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Alexander Pierce</strong>
                                    </div>
                                    <small> alexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u1.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u4.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u1.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u4.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Alexander Pierce</strong>
                                    </div>
                                    <small> alexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Alexander Pierce</strong>
                                    </div>
                                    <small> alexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u1.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u4.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u1.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u4.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Alexander Pierce</strong>
                                    </div>
                                    <small> alexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Alexander Pierce</strong>
                                    </div>
                                    <small> alexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u1.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u4.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u1.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u4.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Alexander Pierce</strong>
                                    </div>
                                    <small> alexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Alexander Pierce</strong>
                                    </div>
                                    <small> alexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u1.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u4.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u1.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <img src="/admin_inc/assets/img/dummy/u4.png" alt="User Image">
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-a avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Alexander Pierce</strong>
                                    </div>
                                    <small> alexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card no-b p-3">
                            <div>
                                <div class="image mr-3 avatar-lg float-left">
                                    <span class="avatar-letter avatar-letter-c avatar-lg  circle"></span>
                                </div>
                                <div class="mt-1">
                                    <div>
                                        <strong>Clexander Pierce</strong>
                                    </div>
                                    <small>clexander@paper.com</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Add New Message Fab Button-->
    <a href="panel-page-users-create.html"
       class="btn-fab btn-fab-md fab-right fab-right-bottom-fixed shadow btn-primary"><i
                class="icon-add"></i></a>
@endsection