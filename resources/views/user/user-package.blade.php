 <?php

    use Illuminate\Support\Facades\Auth;
    use App\Models\User;

    $user = Auth::user();
    $name = $user->name;
     $email = $user->email;
    $ref_code = $user->activation;
    ?><div>
  <!--@include('user.user-dashboard-base')-->
  
  <div>

<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->

    <!-- Content Wrapper. Contains page content -->
<!--    <div class="content-wrapper">-->
        <!-- Content Header (Page header) -->
<!--        <div class="content-header">-->
<!--            <div class="container-fluid">-->
<!--                <div class="row mb-2">-->
<!--                    <div class="col-sm-6">-->
<!--                        <h1 class="m-0 text-dark">Dashboard</h1>-->


<!--                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">-->
<!--                            Open Form-->
<!--                        </button>-->

                        <!-- Modal -->
<!--                        <div wire:ignore.self class="modal fade" id="" tabindex="-1" role="dialog"-->
<!--                            data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--                            <div class="modal-dialog" role="document">-->
<!--                                <div class="modal-content">-->
<!--                                    <div class="modal-header">-->
<!--                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
<!--                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                                            <span aria-hidden="true close-btn">×</span>-->
<!--                                        </button>-->
<!--                                    </div>-->
<!--                                    <div class="modal-body">-->
<!--                                        <form>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="exampleFormControlInput1">Name</label>-->
<!--                                                <input type="text" class="form-control" id="exampleFormControlInput1"-->
<!--                                                    placeholder="Enter Name" wire:model="name">-->
<!--                                                @error('name') <span-->
<!--                                                    class="text-danger error">{{ $message }}</span>@enderror-->
<!--                                            </div>-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="exampleFormControlInput2">Email address</label>-->
<!--                                                <input type="email" class="form-control" id="exampleFormControlInput2"-->
<!--                                                    wire:model="email" placeholder="Enter Email">-->
<!--                                                @error('email') <span-->
<!--                                                    class="text-danger error">{{ $message }}</span>@enderror-->
<!--                                            </div>-->
<!--                                        </form>-->
<!--                                    </div>-->
<!--                                    <div class="modal-footer">-->
<!--                                        <button type="button" class="btn btn-secondary close-btn"-->
<!--                                            data-dismiss="modal">Close</button>-->
<!--                                        <button type="button" wire:click.prevent="store()"-->
<!--                                            class="btn btn-primary close-modal">Save changes</button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->


<!--                    </div>/.col-->
<!--                    <div class="col-sm-6">-->
<!--                        <ol class="breadcrumb float-sm-right">-->
<!--                            <li class="breadcrumb-item"><a href="#">Home</a></li>-->
<!--                            <li class="breadcrumb-item active">Dashboard</li>-->
<!--                        </ol>-->
<!--                    </div>/.col-->
<!--                    <marquee behavior="" direction=""><i style="color: brown">Welcome Back To Millionaire Site,We're-->
<!--                            Here for you,now you can make money online without Imvestments,work hard and get yourself-->
<!--                            imverstements to buy new package. And don't Hesitate to Contact us</i> </marquee>-->

<!--                </div>/.row-->
<!--            </div>/.container-fluid-->
<!--        </div>-->
        <!-- /.content-header -->
<!--        <div class="row">-->
<!--            <div class="col-12 col-sm-6 col-md-3">-->
<!--                <a href="">-->
<!--                    <div class="info-box">-->
<!--                        <span class="info-box-icon bg-info elevation-1"><i class="fas fa-hand-up"></i></span>-->

<!--                        <div class="info-box-content">-->
<!--                            <span class="info-box-text">Clicks</span>-->
<!--                            <span class="info-box-number">-->
<!--                                94-->
<!--                            </span>-->
<!--                        </div>-->
                        <!-- /.info-box-content -->
<!--                    </div>-->
<!--                </a>-->
                <!-- /.info-box -->
<!--            </div>-->
            <!-- /.col -->
<!--            <div class="col-12 col-sm-6 col-md-3">-->
<!--                <a href="">-->
<!--                    <div class="info-box mb-3">-->
<!--                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-users"></i></span>-->

<!--                        <div class="info-box-content">-->
<!--                            <span class="info-box-text">Referrals</span>-->
<!--                            <span class="info-box-number">45</span>-->
<!--                        </div>-->
                        <!-- /.info-box-content -->
<!--                    </div>-->
<!--                </a>-->
                <!-- /.info-box -->
<!--            </div>-->
            <!-- /.col -->

            <!-- fix for small devices only -->
<!--            <div class="clearfix hidden-md-up"></div>-->

<!--            <div class="col-12 col-sm-6 col-md-3">-->
<!--                <div class="info-box mb-3">-->
<!--                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-list"></i></span>-->

<!--                    <div class="info-box-content">-->
<!--                        <span class="info-box-text">Tasks</span>-->
<!--                        <span class="info-box-number">7</span>-->
<!--                    </div>-->
                    <!-- /.info-box-content -->
<!--                </div>-->
                <!-- /.info-box -->
<!--            </div>-->
            <!-- /.col -->
<!--            <div class="col-12 col-sm-6 col-md-3">-->
<!--                <div class="info-box mb-3">-->
<!--                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>-->

<!--                    <div class="info-box-content">-->
<!--                        <span class="info-box-text">Earnings</span>-->
<!--                        <span class="info-box-number">$ 2,000</span>-->
<!--                    </div>-->
                    <!-- /.info-box-content -->
<!--                </div>-->
                <!-- /.info-box -->
<!--            </div>-->
            <!-- /.col -->
<!--        </div>-->
        <!-- /.row ENDING RIGHT HERE AND BE READY TO START -->
        <!-- Main content -->
<!--        <div class="content">-->
<!--            <div class="container-fluid">-->

<!--                <div class="row">-->
<!--                    <div class="col-lg-6">-->


<!--                        <div class="card card-primary card-outline">-->
<!--                            <div class="card-body">-->
<!--                                <h5 class="card-title">Your Refferal Link</h5><br>-->
<!--                                <input type="text" name=""-->
<!--                                    value="https://share.muhahe.com/register.php?referral=manzi22" class="form-control"-->
<!--                                    disabled=""><br>-->

<!--                                <p class="card-text">-->
<!--                                    <i class="fas fa-arrow-circle-right"></i> Share this link and earn $2 for every-->
<!--                                    person who clicks on it. Earn an additional $10 when they sign up!-->
<!--                                </p>-->
<!--                                <a href="#" class="btn btn-primary">Copy Link</a>-->
<!--                            </div>-->
<!--                        </div>/.card-->


<!--                    </div>-->
                    <!-- /.col-md-6 -->
<!--                    <div class="col-lg-6">-->
                        <!-- Map card -->
<!--                        <div class="card bg-gradient-primary">-->
<!--                            <div class="card-header border-0">-->
<!--                                <h3 class="card-title">-->
<!--                                    <i class="fas fa-edit mr-1"></i>-->
<!--                                    Survey-->
<!--                                </h3>-->

                                <!-- /.card-tools -->
<!--                            </div>-->
<!--                            <div class="card-body" style="background-color:white;height: 180px; width: 100%; ">-->
<!--                                <center><a href="#">-->
<!--                                        <h4>Earn $30 By SURVEYS & APPS</h4>-->
<!--                                        <i class="fas fa-share "></i></center>-->
<!--                                </a>-->
<!--                            </div>-->

<!--                        </div>-->
                        <!-- /.card -->

                        <!-- solid sales graph -->


<!--                    </div>-->
<!--                    <div class="col-lg-12">-->
                        <!-- Map card -->
<!--                        <div class="card " style="background-color:#000050; width: 100%; ">-->
<!--                            <div class="card-header " style="background-color:gray;">-->
<!--                                <h3 class="card-title" style="color: white">-->
<!--                                    Earn Type-->
<!--                                </h3>-->


                                <!-- /.card-tools -->
<!--                            </div>-->
<!--                            <div class="card-body">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-9">-->
<!--                                        <h3 style="color: white">Tasks</h3>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-3">-->

<!--                                        <h3 style="color: white">Earn</h3>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!-- /.card -->
<!--                                <div class="row" style="margin-top:10px;">-->
<!--                                    <div class="col-md-9">-->
<!--                                        <li style="color: white">Create YouTube videos</li>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-3 btn btn-success">-->
<!--                                        50$-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!-- /.card -->
<!--                                <div class="row" style="margin-top:10px;">-->
<!--                                    <div class="col-md-9">-->
<!--                                        <li style="color: white">Complete surveys</li>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-3 btn btn-success">-->
<!--                                        30$-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!-- /.card -->
<!--                                <div class="row" style="margin-top:10px;">-->
<!--                                    <div class="col-md-9">-->
<!--                                        <li style="color: white">Download apps</li>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-3 btn btn-success">-->
<!--                                        20$-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!-- /.card -->
<!--                                <div class="row" style="margin-top:10px;">-->
<!--                                    <div class="col-md-9">-->
<!--                                        <li style="color: white">Refer friends</li>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-3 btn btn-success">-->
<!--                                        10$-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!-- /.card -->
<!--                                <div class="row" style="margin-top:10px;">-->
<!--                                    <div class="col-md-9">-->
<!--                                        <li style="color: white">Get clicks</li>-->
<!--                                    </div>-->
<!--                                    <div class="col-md-3 btn btn-success">-->
<!--                                        2$-->
<!--                                    </div>-->
<!--                                </div>-->
                                <!-- /.card -->
<!--                            </div>-->

<!--                        </div>-->
                        <!-- /.card -->

                        <!-- solid sales graph -->


<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="card card-secondary card-outline">-->

<!--                            <div class="card-body card-warning">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-md-6">-->
<!--                                        Total Volume-->
<!--                                        <div class="row">-->
<!--                                            <div class="col-lg-12">-->
                                                <!-- Map card -->
<!--                                                <div class="card bg-gradient-primary">-->

<!--                                                    <div class="card-body"-->
<!--                                                        style="background-color:white;color:black;height: 180px; width: 100%; ">-->
<!--                                                        <h5><b class="text-warning">Members:</b> 20</h5>-->

<!--                                                        <p>-->
<!--                                                        <h4>1500 <small>Vp</small></h4>-->
<!--                                                        </p>-->


<!--                                                        <h3 class="text-success">-->
<!--                                                            <i class="fas fa-users mr-1"></i>-->
<!--                                                            Left Team-->
<!--                                                        </h3>-->
<!--                                                        <hr>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->

                                        <!-- solid sales graph -->
<!--                                        <div class="row">-->

<!--                                            <div class="col-lg-12">-->
                                                <!-- Map card -->
<!--                                                <div class="card bg-gradient-primary">-->

<!--                                                    <div class="card-body"-->
<!--                                                        style="background-color:white;color:black;height: 180px; width: 100%; ">-->
<!--                                                        <h5><b class="text-warning">Members:</b> 44</h5>-->

<!--                                                        <p>-->
<!--                                                        <h4>3000 <small>Vp</small></h4>-->
<!--                                                        </p>-->

<!--                                                        <h3 class="text-success">-->
<!--                                                            <i class="fas fa-users mr-1"></i>-->
<!--                                                            Right Team-->
<!--                                                        </h3>-->
<!--                                                        <hr>-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
                                            <!-- solid sales graph -->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    {{-- END OF COL-MD-6 --}}-->
<!--                                    <div class="col-md-6">-->
<!--                                        Commissions-->
<!--                                        <div class="card">-->

<!--                                            <div class="card-body">-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col-md-6"></div>-->
<!--                                                    <div class="col-md-6">-->
<!--                                                        <select name="" id=""-->
<!--                                                            class="form-control float-sm-right float-md-right">-->
<!--                                                            <option value="">This week</option>-->
<!--                                                        </select>-->

<!--                                                    </div>-->


<!--                                                </div><br><br>-->
<!--                                                <div class="row">-->
<!--                                                    <div class="col-md-4"></div>-->
                                                    <!-- /.col -->
<!--                                                    <div class="col-md-6">-->
<!--                                                        <div class="col-6 text-center">-->
<!--                                                            <input type="text" class="knob" data-readonly="true"-->
<!--                                                                value="30" data-width="90" data-height="90"-->
<!--                                                                data-fgColor="#39CCCC">-->

<!--                                                        </div>-->

<!--                                                        <b> Week 27 July - 02 August</b>-->

<!--                                                    </div>-->
<!--                                                    <div class="col-md-3">-->

<!--                                                    </div>-->
                                                    <!-- /.col -->
<!--                                                </div>-->
<!--                                                <br>-->

<!--                                                <div class="row">-->
<!--                                                    <div class="col-sm-3 col-6">-->
<!--                                                        <div class="description-block border-right">-->
<!--                                                            <span class="description-text"><b>Left Team</b></span><br>-->
<!--                                                            <h5 class="description-header">100 Vp</h5>-->

<!--                                                        </div>-->
                                                        <!-- /.description-block -->
<!--                                                    </div>-->
                                                    <!-- /.col -->
<!--                                                    <div class="col-sm-6 col-6">-->
<!--                                                        <div class="description-block border-right">-->
<!--                                                            <span class="description-text"> <b>Volume-->
<!--                                                                    Bonus</b></span><br>-->
<!--                                                            <h5 class="description-header">0 EUR</h5>-->

<!--                                                        </div>-->
                                                        <!-- /.description-block -->
<!--                                                    </div>-->
                                                    <!-- /.col -->
<!--                                                    <div class="col-sm-3 col-6">-->
<!--                                                        <div class="description-block">-->
<!--                                                            <span class="description-text"><b>Right Team</b></span><br>-->
<!--                                                            <h5 class="description-header">150 Vp</h5>-->

<!--                                                        </div>-->
                                                        <!-- /.description-block -->
<!--                                                    </div>-->


<!--                                                </div>-->


<!--                                            </div>-->
<!--                                        </div>-->
                                        <!-- END OF CARD -->

<!--                                    </div>-->

<!--                                </div>-->

<!--                            </div>-->
<!--                        </div>-->
                        <!-- END OF CARD -->
<!--                    </div>-->
                    <!-- /.col-md-6 -->
<!--                </div>-->
<!--                {{-- End of commissions --}}-->
                <!-- /.row -->
<!--                <div class="row">-->
<!--                    <div class="col-lg-6">-->
<!--                        <div class="card direct-chat direct-chat-primary">-->
<!--                            <div class="card-header">-->
<!--                                <h3 class="card-title">SHARED LINKS</h3>-->

<!--                                <div class="card-tools">-->
<!--                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">-->
<!--                                        <i class="fas fa-minus"></i>-->
<!--                                    </button>-->

<!--                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i-->
<!--                                            class="fas fa-times"></i>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                            </div>-->
                            <!-- /.card-header -->
<!--                            <div class="card-body">-->
<!--                                <div class="direct-chat-messages">-->
                                    <!-- Add font awesome icons -->
<!--                                    <a href="#" class="fa fa-facebook"></a><button class="btn-success">share-->
<!--                                        link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-twitter"></a><button class="btn-success">share-->
<!--                                        link</button>-->

<!--                                    <hr>-->
<!--                                    <a href="#" class="fa fa-google"></a><button class="btn-success">share link</button>-->
<!--                                    <hr>-->
<!--                                    <a href="#" class="fa fa-linkedin"></a> <button class="btn-success">share-->
<!--                                        link</button>-->
<!--                                    <hr>-->
<!--                                    <a href="#" class="fa fa-youtube"></a> <button class="btn-success">share-->
<!--                                        link</button>-->
<!--                                    <hr>-->
<!--                                    <a href="#" class="fa fa-instagram"></a><button class="btn-success">share-->
<!--                                        link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-pinterest"></a><button class="btn-success">share-->
<!--                                        link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-snapchat-ghost"></a><button class="btn-success">share-->
<!--                                        link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-skype"></a><button class="btn-success">share link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-android"></a><button class="btn-success">share-->
<!--                                        link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-dribbble"></a><button class="btn-success">share-->
<!--                                        link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-vimeo"></a><button class="btn-success">share link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-tumblr"></a><button class="btn-success">share link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-vine"></a><button class="btn-success">share link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-foursquare"></a><button class="btn-success">share-->
<!--                                        link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-stumbleupon"></a><button class="btn-success">share-->
<!--                                        link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-flickr"></a><button class="btn-success">share link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-yahoo"></a><button class="btn-success">share link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-reddit"></a><button class="btn-success">share link</button>-->
<!--                                    <hr>-->

<!--                                    <a href="#" class="fa fa-rss"></a><button class="btn-success">share link</button>-->
<!--                                    <hr>-->

<!--                                </div>-->


<!--                            </div>-->

<!--                        </div>-->

<!--                        {{-- END OF SHARING --}}-->



<!--                    </div>-->


<!--                    {{-- END OF THE COLUMN --}}-->
<!--                    <div class="col-lg-6">-->
<!--                        <div class="card direct-chat direct-chat-primary">-->
<!--                            <div class="card-header">-->
<!--                                <h3 class="card-title">LEADERBOARD</h3>-->

<!--                                <div class="card-tools">-->
<!--                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">-->
<!--                                        <i class="fas fa-minus"></i>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts"-->
<!--                                        data-widget="chat-pane-toggle">-->
<!--                                        <i class="fas fa-comments"></i>-->
<!--                                    </button>-->
<!--                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i-->
<!--                                            class="fas fa-times"></i>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                            </div>-->
                            <!-- /.card-header -->
<!--                            <div class="card-body">-->
<!--                                <div class="direct-chat-messages">-->

<!--                                    <table class="table">-->
<!--                                        <thead class="bg-gradient-primary">-->
<!--                                            <tr>-->
<!--                                                <th>Username</th>-->
<!--                                                <th></th>-->
<!--                                                <th>Total Earned</th>-->
<!--                                            </tr>-->
<!--                                        </thead>-->
<!--                                        <tbody>-->
<!--                                            <tr>-->
<!--                                                <td>1. John</td>-->
<!--                                                <td></td>-->
<!--                                                <td>$5000</td>-->
<!--                                            </tr>-->
<!--                                            <tr>-->
<!--                                                <td>2. Mary</td>-->
<!--                                                <td></td>-->
<!--                                                <td>$2000</td>-->
<!--                                            </tr>-->
<!--                                            <tr>-->
<!--                                                <td>3. July</td>-->
<!--                                                <td></td>-->
<!--                                                <td>$1500</td>-->
<!--                                            </tr>-->
<!--                                            <tr>-->
<!--                                                <td>4. July</td>-->
<!--                                                <td></td>-->
<!--                                                <td>$1000</td>-->
<!--                                            </tr>-->
<!--                                            <tr>-->
<!--                                                <td>5. JackMan-->
<!--                                                </td>-->
<!--                                                <td></td>-->
<!--                                                <td>$500</td>-->
<!--                                            </tr>-->
<!--                                        </tbody>-->
<!--                                    </table>-->




<!--                                </div>-->


<!--                            </div>-->

<!--                        </div>-->

<!--                        {{-- END OF LEADER --}}-->



<!--                    </div>-->
<!--                </div>-->

<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="card">-->
<!--                            <div class="card-header">-->
<!--                                <h5 class="card-title">Total Earned Monthly Report</h5>-->

<!--                                <div class="card-tools">-->
<!--                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">-->
<!--                                        <i class="fas fa-minus"></i>-->
<!--                                    </button>-->
<!--                                    <div class="btn-group">-->
<!--                                        <button type="button" class="btn btn-tool dropdown-toggle"-->
<!--                                            data-toggle="dropdown">-->
<!--                                            <i class="fas fa-wrench"></i>-->
<!--                                        </button>-->
<!--                                        <div class="dropdown-menu dropdown-menu-right" role="menu">-->
<!--                                            <a href="#" class="dropdown-item">Action</a>-->
<!--                                            <a href="#" class="dropdown-item">Another action</a>-->
<!--                                            <a href="#" class="dropdown-item">Something else here</a>-->
<!--                                            <a class="dropdown-divider"></a>-->
<!--                                            <a href="#" class="dropdown-item">Separated link</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <button type="button" class="btn btn-tool" data-card-widget="remove">-->
<!--                                        <i class="fas fa-times"></i>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                            </div>-->

                            <!-- ./card-body -->
<!--                            <div class="card-footer">-->
<!--                                <div class="row">-->
<!--                                    <div class="col-sm-3 col-6">-->
<!--                                        <div class="description-block border-right">-->
<!--                                            <span class="description-percentage text-success"><i-->
<!--                                                    class="fas fa-caret-up"></i> 37%</span>-->
<!--                                            <h5 class="description-header">$35,210.43</h5>-->
<!--                                            <span class="description-text">Balance</span>-->
<!--                                        </div>-->
                                        <!-- /.description-block -->
<!--                                    </div>-->
                                    <!-- /.col -->
<!--                                    <div class="col-sm-3 col-6">-->
<!--                                        <div class="description-block border-right">-->
<!--                                            <span class="description-percentage text-warning"><i-->
<!--                                                    class="fas fa-caret-left"></i> 10%</span>-->
<!--                                            <h5 class="description-header">$1,390.90</h5>-->
<!--                                            <span class="description-text">TOTAL Clicks</span>-->
<!--                                        </div>-->
                                        <!-- /.description-block -->
<!--                                    </div>-->
                                    <!-- /.col -->
<!--                                    <div class="col-sm-3 col-6">-->
<!--                                        <div class="description-block border-right">-->
<!--                                            <span class="description-percentage text-success"><i-->
<!--                                                    class="fas fa-caret-up"></i> 20%</span>-->
<!--                                            <h5 class="description-header">$813.53</h5>-->
<!--                                            <span class="description-text">TOTAL PROFIT</span>-->
<!--                                        </div>-->
                                        <!-- /.description-block -->
<!--                                    </div>-->
                                    <!-- /.col -->
<!--                                    <div class="col-sm-3 col-6">-->
<!--                                        <div class="description-block">-->
<!--                                            <span class="description-percentage text-danger"><i-->
<!--                                                    class="fas fa-caret-down"></i> 18%</span>-->
<!--                                            <h5 class="description-header">1200</h5>-->
<!--                                            <span class="description-text">GOAL COMPLETIONS</span>-->
<!--                                        </div>-->
                                        <!-- /.description-block -->
<!--                                    </div>-->
<!--                                </div>-->
                                <!-- /.row -->
<!--                            </div>-->
                            <!-- /.card-footer -->
<!--                        </div>-->
                        <!-- /.card -->
<!--                    </div>-->
                    <!-- /.col -->
<!--                </div>-->
                <!-- /.row -->

                <!-- Main row -->
<!--            </div>/.container-fluid-->
<!--        </div>-->
        <!-- /.content -->
        <!-- /.row -->

<!--    </div>-->


<!--</div>-->


<style>
/* The Modal (background) */
.card_payment {
    width: 80px;
    height: 40px
}

.PayImage {
    width: 100%;
    height: 40px;
}

.modal {
    display: inline;
    position: fixed;
    z-index: 999999;
    padding-top: 20px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow-x: auto;
  overflow-y: hidden;
    /*    background-color: rgb(0, 0, 0);*/
    background-color: rgba(0, 0, 0, 0.4);
}

#div {
    display: none;
}

/* Modal Content */
/*.modal-content {*/
/*    background-color: #fefefe;*/
    /*margin: auto;*/
/*    margin-left: 18%;*/
/*    border: 1px solid #888;*/
/*    width: 100%;*/
/*    height: content;*/
/*}*/

#pay {
    display: none;

}

#choose {
    display: none;

}

.chose {

    width: 50%;
}

.bg-dark {
    width: 250px;
    height: 400px;
}

.card-body1 {
    width: 250px;
    height: 80px;
}

.div1 {
    width: 250px;
    height: 100px;
}
.submit-btn{
padding:12px;
border:none;
border-radius: 8px;
font-size: 17px;
background:white;
color:#fff; 

width:138px;
  
}
</style>

<div id="exampleModal" class="modal" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content" style="background: linear-gradient(190deg, #2ecd71 60%, #27ae60 40.1%); color: black;;">
            <div class="flex justify-content-between mb-4">
                <a href="/"><button type="button" class="btn btn-outline-info btn-primary"> Back</button></a>
<a class="float-right" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
    <button type="button" class="btn btn-outline-info btn-danger"> Logout</button>
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
</form>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <center class="bg-danger">
                                <h3>FC </h3>
                            </center>
                            <center>
                                FC VIP 100$
                                <ul>
                                    <li><b>Buy Account $100</b></li>
                                </ul>
                            </center>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary" value="100" onclick="send(this.value)">BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <center class="bg-danger">
                                <h3>FC </h3>
                            </center>
                            <center>
                                FC VIP 200$
                                <ul>
                                    <li><b>Buy Account $200</b></li>
                                </ul>
                            </center>
                            <div class="text-center mt-3">
                                <button class="btn btn-primary"  value="200" onclick="send(this.value)">BUY NOW</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <center class="bg-danger">
                        <h3>Standard</h3>
                    </center>
                    <center>
                        Standard User
                        <ul>
                            <li><b>Activate free account</b></li>
                        </ul>
                    </center>
                    <div class="text-center mt-3">
                        <form action="{{route('free')}}" method="get">
                            @csrf
                            <input type="hidden" name="amount" value="free">
                            <button class="btn btn-primary">Activate</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="row">-->
<!--        <div class="col-md-16 order-md-2 ">-->
<!--            <div class="bg-primary p-3 text-center mt-4">-->
<!--                <table class="mx-auto">-->
<!--                    <tr>-->
<!--                        <td><label>Re-fund project:</label></td></tr>-->
<!--                        <tr>-->
<!--                        <td>-->
<!--                           <input type="number" id='added' style="width:138px;color: black;" name="refund"-->
<!--                                        placeholder="amount usd$">-->
<!--                        </td></tr>-->
<!--                    </tr>-->
<!--              <tr><td>-->

<!--            <button class="btn-secondary" style="margin-top: 0px;width: 135px;height: 35px;margin-left: 60px;"-->
<!--                        onclick="add()">ADD-->
<!--                        NOW</button></td></tr></table>-->
<!--        </div>  -->
<!--    </div>-->
<!--</div>-->
 <!--<div class=" container" style=" margin-left: 200px;">-->
 <!--                   <div class="col">-->
 <!--                       <table width="280px" style="margin-top: 10px;">-->
 <!--                           <tr>-->
 <!--                               <td> Re-fund project:</td>-->
 <!--                               <td> <input type="number" id='added' style="width:138px;color: black;" name="refund"-->
 <!--                                       placeholder="amount usd$">-->
 <!--                                   </td>-->
 <!--                           </tr>-->
 <!--                       </table>-->
 <!--                   </di-->
 
 <!--                   <button class="btn-secondary" style="margin-top: 5px;width: 135px;height: 35px;margin-left: 140px;"-->
 <!--                       onclick="add()">ADD-->
 <!--                       NOW</button>-->
                <!--</div>-->

                <!--<form action="" method="POST"> @csrf-->
                <!--                                     </div>-->


                <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 20px;
                    background-color: #f5f5f5;
                }

                #foma {
                    display: none;
                }

                h1 {
                    text-align: center;
                }

                .foma {
                    max-width: 500px;
                    /*margin: 0px;*/
                    background-color: #fff;
                    margin-left:15px;
                    padding: 0px;
                    border-radius: 4px;
                    box-shadow: 0 2px 4px rgba(0, 3, 0, 0.1);
                    margin-top: -37px;
                }
                .container label{
                    color:whitesmoke;
                    font-size:18px;
                }
                    .add-ditail{
                       
                        width: 135px;
                        height: 35px;
                        
                        margin-right:20px;
                        border:none;
                        border-radius:4px;

                    }
                input[type="radio"] {
                    margin-bottom: 10px;
                }

                input[type="submit"] {
                    display: block;
                    /*margin: 20px;*/
                    /*padding: 10px 20px;*/
                    background-color: #4CAF50;
                    color: #fff;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    font-size: 16px;
                }

                .paypal {
                    background-color: whitesmoke;
                    color: black;
                    padding: 1px;
                    border-radius: 4px;
                    display: inline-block;
                }

                .crypto {
                    background-color: whitesmoke;
                    color: black;
                    padding: 1px;
                    border-radius: 4px;
                    display: inline-block;
                }

                .perfectmoney {
                    background-color: #c82586;
                    color: black;
                    padding: 10px;
                    border: 4px solid white;
                    display: inline-block;
                }

                .foma img {
                    width: 100px;
                    height: 40px;
                }

                .visa {
                    background-color: whitesmoke;
                    color: black;
                    padding: 1px;
                    border-radius: 4px;
                    display: inline-block;
                }

                .mastercard {
                    background-color: #e61c39;
                    color: #fff;
                    padding: 10px;
                    border-radius: 4px;
                    display: inline-block;
                }

                .skrill {
                    background-color: black;
                    color: #fff;
                    padding: 10px;
                    border-radius: 4px;
                    display: inline-block;
                }

                .mobilemoney {
                    background-color: black;
                    color: #fff;
                    padding: 10px;
                    border-radius: 4px;
                    display: inline-block;
                }
                #myButton {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
}

.form-popup {
  display: none;
  position: absolute;
  bottom: 0;
  right: 15px;
  border: 1px solid #555;
  z-index: 9;
}

.form-container {
  max-width: 300px;
  padding: 20px;
  background-color: white;
}

.form-container h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-container input[type=text],
.form-container input[type=email] {
  width: 100%;
  padding: 12px;
  margin: 8px 0;
  border: 1px solid #ccc;
}

.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom: 10px;
}

.form-container .cancel {
  background-color: #ccc;
  font-weight:bold;
}

.form-container .btn:hover,
.open-button:hover {
  opacity: 0.8;
}
                </style>

           
{{$error??''}}<span class="bg-danger">{{$message??''}}</span>
                    <form class="foma" id="foma" method="POST" action="{{ route('payment') }}" >
                        @csrf
                        <label id="am"> </label>
                         <label id="am1"> </label>
                         
                         <span id="payment_area"></span>
                        <script type="text/javascript">
                        // function add() {
                        //     var added = document.getElementById('added').value;
                        //     added = parseFloat(added);
                        //     return added;
                        // }
                        

                        function send(id) {
                            var pay = document.getElementById('foma').style.display = "block";
                            // document.getElementByTagName('table').style.display='none';
                            // document.getElementById('changed').innerHTML = pay;
                            // var fund = add();
                            // fund = parseFloat(fund);

                            // fund = fund ? fund : 0;
                            // var sum = parseFloat(id) + fund;
                                                      //  var display=document.getElementById('am').innerHTML=sum;
                            document.getElementById('am').innerHTML =
                                "<input type='hidden' name='amount' id='amount' value='" +
                                id + "'>";
                                if(id==100){
 document.getElementById('am1').innerHTML =
                                "<input type='hidden' name='package' value='fc1'>";
                        }
                                else{
 document.getElementById('am1').innerHTML =
                                "<input type='hidden' name='package' value='fc2'>";
                        }}
              </script>
              <div id="hideme">                        <h1>Select a Payment Option</h1>
                        <input type="radio" name="option" value="paypal"><span class="paypal">Paypal
                            &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;
                            <img src="https://cdn-icons-png.flaticon.com/128/196/196566.png"
                                alt="PayPal" style="width:64px; height: 44px;">

                        </span><br><br>

                        
                        <span class="crypto"> <input type="radio" name="option" value="crypto">Cryptocurrency Payment&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;
                            
                            
                            
                            <a href="#" onclick="pay()">
  <img src="https://www.blockonomics.co/img/pay_with_bitcoin_medium.png" alt="Pay with Bitcoin">
</a>
                             
<script src="https://blockonomics.co/js/pay_widget.js"></script>
<script>
var amount= document.getElementById('amount').value;
  function pay() {
document.getElementById('hideme').style.display="none";
    Blockonomics.widget({
      msg_area: 'payment_area',
      uid: 'b2ece55d990d487f',
      email: '{{$email}}',
      amount:amount
//   alert(9);//
}) ;
  } 

//   document.getElementById('pay').onclick = function() { pay() };
</script>


                        </span><br>
<br>
                        
                        <span class="visa"><input type="radio" name="option" value="card"> Visa Card||Mastercard &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                             <img src="https://cdn-icons-png.flaticon.com/128/179/179457.png" style="width:34px; height: 44px;" alt="Visa Card"> 
                        </span>
                        <input type="submit" value="Proceed to Payment" style=" margin-left:100px;">

                    </form> <br>
            </div>
        </div>
    </div>
</div>
</div>

<script>
document.addEventListener('livewire:load', function() {

    // $('#exampleModal').modal('show');

})
</script>

