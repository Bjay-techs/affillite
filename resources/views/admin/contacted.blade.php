 <?php

    use Illuminate\Support\Facades\Auth;
    use App\Models\User;

    $user = Auth::user();
    $name = $user->name;
    $ref_code = $user->activation;
    if($user->has_free_package=='no'):
    header("location:user.user-package");
    endif;
    ?>

 
 <div>
     @include('admin.admin-base')
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <div class="row mb-2">
              <div style="padding: 0px;margin-top:-530px;height:100%;">
 <div>
   
         @if(session('message'))
         <p class="alert alert-success" style="margin-left: 600px;">


             {{ session('message') }}
         </p>
         @endif
         <marquee behavior="" direction=""><i style="color: brown">Welcome Back To Millionaire Site,We're Here for
                 you,now
                 you can make money online without Imvestments,work hard and get yourself imverstements to buy new
                 package.
                 And don't Hesitate to Contact us</i> </marquee>

     </div>
     <style>
     .cc .col {
         background-color: #fff5aa;
         border-radius:12px;
         /* Add desired background color */
         border: 1px solid #ccc;
         /* Add desired border style */
         display: flex;
         width: 12px;
         border: 4px solid white;
         height: 100px;
         text-align: center;
         left: 40px;
         padding-top: 30px;
         padding-left: 25px;
     }

     #founder {
         background-color: lightgreen;
         border-raius: 1px solid #ccc;
         display: flex;
         width: 80px;
         height: 100px;
         text-align: center;
         left: 80px;
         padding-top: 30px;
         padding-left: 45px;
     }

     .coming .info-box {
         display: flex;
         width: 100%;
         height: 100%;
         justify-content: center;
         text-align: center;
         float: right;
         padding-top: 5px;

     }


     @media (max-width: 768px),
     @media screen and (min-width: 768px) {
         .cc .col {
             /*  border: 1px solid #ccc; /* Add desired border style */
             */ background-color: red;
             width: 100%;
             flex: 0 0 60%;
             border: 4px solid white;
             height: 100px;
             text-align: center;
             left: 40px;
             padding-top: 30px;
             padding-left: 25px;
         }

         #hide {
             display: none;
         }
     }


     .coming {
         display: flex;
         width: 100%;
         height: 120px;

         justify-content: center;
     }
     </style>
     <!-- Content Wrapper. Contains page content -->
     <?php $results=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NOT NULL");
     $verified=count($results);
      $result=DB::select("SELECT * from users where utype != 'ADM' and email_verified_at IS NULL");
     $unverified=count($result);
     ?>
     <div class="container cc">
         <div class="row row-cols">
             <div class="col" style="background-color: white;" id="hide"></div>
             <div class="col bg-info " id="not">
                 <a class="nav-icon fas fa-window-restore" href="#">Verified use<br><span class="bg-secondary">{{$verified}}</span></b></a>
                 </div>
             <div class="col bg-success ">
                 <a href="{{route('user.dashboard.activate')}}" class="nav-icon fas fa-window-restore" >Pending user<br><span class="bg-danger">{{$unverified}}</span></a>
                 </div>
                  <div class="col bg-primary"><a class="nav-icon fas fa-wallet" href="#"><br>Projects<br>0:0</a> </div>
             <div class="col bg-danger"><a class="nav-icon fas fa-bookmark" href="#"> <br>Cash out <br>0:0</a> </div>
             <div class="col bg-warning"><a class="nav-icon fas fa-money" href="#"> <br>Total Direct <br />0</a></div>
             <div class="col bg-info"><a class="nav-icon fas fa-gift" href='#'> <br>team <br>0</a></div>
             <div class="col bg-success"><a class="nav-icon fas fa-gift" href='#'> <br>Pending Derect <br>0</a></div><br>
             
            
         </div>
     </div>

     <div class="container cc">
         <div class="row row-cols">
             <div class="col " style="background-color: white;" id="hide"></div>
             <div class="col bg-success"><a class="nav-icon fas fa-gear" href="#"><br>Update</a></div>
             <div class="col bg-primary"><a class="nav-icon fas fa-user" href="#"><br>My invetees</a></div>
             <div class="col bg-danger"><a class="nav-icon fas fa-users" href="#"><br>My Team</a></div>
             <div class="col bg-warning"><a class="nav-icon fas fa-gift" href="#"><br>Mcoin <sub>coming some</sub></a></div>
             <div class="col bg-info"><a class="nav-icon fas fa-gift" href="#"><br>Total Balance</a></div>
             <div class="col bg-success"><a class="nav-icon fas fa-gift" href="#"><br>Income</a></div>
             <div class="col bg-info"><a class="nav-icon fas fa-gift" href="#"><br>Wallet Balance <sub>coming some</sub></a></div>
         </div>
     </div>
   
  
<div class="card direct-chat direct-chat-primary">
            <div class="card-header">
              

                <div class="card-tools">  
                   
             
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
                <div class="direct-chat-messages">
 <h3  class="card-title">Messages</h3>
                    <table align="center" style="width:70%;margin-left: 300px;">
                        <thead class="bg-gradient-primary ">
                            <tr>
                                <th>N<sup>0</sup></th>
                                <th>Names</th>
                            <th>Surnmae</th>
                                <th>email</th>

                                <th>phone</th>
                                
                                <th>Messages</th>
                            </tr>
                        </thead>
                        <?php
$results=DB::select("SELECT * from contacteds");
$n=1;
foreach ($results as $row):
    

?>

                        <tbody>
                            <tr>
                                <td>{{$n}}</td>
                                <td>{{$row->name}}</td>
                                <td>{{$row->sur}}</td>
                                <td>{{$row->email}}</td>
                                <td>{{$row->phone}}</td>
                                
                                <td>{{$row->message}}</td>
                            </tr>
                            {{$n++}}
                            <?php endforeach;  ?>
                        </tbody>
                    </table>




                </div>


            </div>

        </div
 </div>

 </div>
 </div>