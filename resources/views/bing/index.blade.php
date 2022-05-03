@extends('bing.layout')

@section('content')
<?php
$rand= rand(1000,9999);
$time= date('j/m/H');
$employerid="USER".$rand."/".$time;
?>
   <main>
        <div class="d-flex flex-column flex-shrink-0" style="width: 3.5rem; min-height:100vh;background-color: #19a3ff;">
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center" style="margin-top: 0px;">
              <li  >
                <a href="javascript:void(0)" style="display: none;" class="nav-link py-3" id="close" onclick="closeNav()">
                  <i class="fa-light fa-plus fa-2x" style="color:white;transform: rotate(45deg);"></i>
                </a>
                <a href="#" class="nav-link py-3" onclick="openNav()" id="open" style="display: block;" >
                  <i class="fa-light fa-bars fa-2x" style="color:white;"></i>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link py-3" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                </a>
              </li>
              
              <li class="nav-item">
                <a href="#" class="nav-link py-3" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                  <i class="fa-light fa-search" style="color:white;"></i>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link py-3" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i class="fa-light fa-calendar-minus" style="font-size:14px;font-weight: normal;color:white;"></i>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link py-3" title="Orders" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i class="fa-light fa-user" style="font-size:14px;font-weight:normal;color:white;"></i>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link py-3" title="Products" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i class="fa-light fa-comment-dots" style="font-size:14px;font-weight: normal;color:white;"></i>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link py-3" title="Customers" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i class="fa-light fa-file" style="font-size:14px;font-weight: normal;color:white;"></i>
                  
                </a>
              </li>
            </ul>
            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center" style="margin-top: 200px;">
                <li class="nav-item">
                  <a href="#" class="nav-link py-3" aria-current="page" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                    <i class="fa-light fa-gear" style="font-size:14px;color:white;"></i>
                  </a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none" >
                        <img src="https://github.com/mdo.png" alt="mdo" width="20" height="20" class="rounded-circle" style="outline:solid 1px;outline-color: white;">
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link py-3" title="Dashboard" data-bs-toggle="tooltip" data-bs-placement="right">
                        <i class="fa-light fa-bars-staggered" style="font-size:14px;color:white;"></i>
                    </a>
                </li>
              </ul>
            <div class="dropdown">
              
            </div>
          </div>
          <div class="bg-white sidebar " style="display:none;" id="sidebar">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="65"><use xlink:href="#bootstrap"/></svg>
              <span class="fs-4"></span>
            </a>
            
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="dashboard.html" class="nav-link link-dark" aria-current="page">
                    <i class="fa-light fa-calendar-minus" style="font-weight: normal;color:grey;padding:5px;"></i>
                    Dashboard
                </a>
              </li>
              <li>
                <a href="#" class="nav-link active" style="width:188px;">
                    <i class="fa-light fa-user-group" style="color:#19a3ff;padding:5px;"></i>
                    <!-- #0d6efd -->
                  Users
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                  <i class="fa-light fa-bolt" style="font-weight: normal;color:grey; padding:5px;"></i>
                  Departments
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                    <i class="fa-light fa-user-group" style="font-weight: normal;color:grey; padding:5px;"></i>
                  Employee
                </a>
              </li>
              <li>
                <a href="#" class="nav-link link-dark">
                    <i class="fa-light fa-bolt" style="font-weight: normal;color:grey; padding:5px;"></i>
                  Activities
                </a>
              </li><li>
                <a href="#" class="nav-link link-dark">
                    <i class="fa-light fa-circle-check" style="font-weight: normal;color:grey; padding:5px;"></i>
                  Holidays
                </a>
              </li><li>
                <a href="#" class="nav-link link-dark">
                    <i class="fa-light fa-fire-flame" style="font-weight: normal;color:grey; padding:5px;"></i>
                  Events
                </a>
              </li><li>
                <a href="#" class="nav-link link-dark">
                    <i class="fa-light fa-calendar-minus" style="font-weight: normal;color:grey; padding:5px;"></i>
                  Payroll
                </a>
              </li><li>
                <a href="#" class="nav-link link-dark">
                    <i class="fa-light fa-user" style="font-weight: normal;color:grey; padding:5px;"></i>
                  Accounts
                </a>
              </li><li>
                <a href="#" class="nav-link link-dark">
                    <i class="fa-light fa-circle-exclamation" style="color:grey; padding:5px;"></i>
                  Report
                </a>
              </li>
            </ul>
        
            
          </div>
          <!-- <i class="fa-light fa-search"></i>
          <i class="fa-light fa-user"></i>
          <i class="fa-light fa-calendar-minus"></i>
          <i class="fa-light fa-file"></i>
          <i class="fa-light fa-comment-dots"></i>
          <i class="fa-light fa-cog"></i>
          <i class="fa-light fa-search" style="color:blue;"></i> -->
    <div class="bg-light" style="width:1850px;" id="main">
        <div class="row-lg-4">
            <header class="p-3 bg-light text-black" style="border-bottom:1px solid rgb(235, 234, 234) ;">
                <div class="container">
                  <div class="d-flex flex-wrap align-items-center  justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-black text-decoration-none">
                      <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                    </a>
            
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                      <li><a href="#" class="nav-link text-black" style="font-size:20px;margin-left: -50px;">Users</a></li>
                      <li> <form class="nav-link text-black"  style="font-size:15px;margin-left: 20px;">
                        <input type="number" class="" placeholder="  Year" style="width:70px;border:1px solid rgb(197, 195, 195);border-radius: 3px;outline-style: none;">
                        </form></a></li>
                        <li> <form class="nav-link text-black"  style="font-size:15px;margin-left: 0px;">
                            <input type="search" placeholder="  Search..." class="" style="width:200px;border:1px solid rgb(197, 195, 195);border-radius: 4px;border-top-right-radius:0px;border-bottom-right-radius: 0px;border-right: 0px;outline-style: none;"><button style="border:1px solid rgb(197, 195, 195);border-radius: 4px;background-color: white;border-top-left-radius:0px;border-bottom-left-radius: 0px;border-left: 0px;"><i class="fa-light fa-search" ></i></button>
                            </form></a></li>
                      
                    </ul>
                    <div class="dropdon">
                    <button class="bg-light dropbtn" style="font-size:15px;color:black;border-style: none;margin-left: -50px;" >
                        Languages<i class="fa fa-caret-down" style="color:rgb(165, 164, 164)"></i>
                    </button>
                    <div class="dropdon-content">
                        <a href="#">English</a>
                        <a href="#">Spanish</a>
                        <a href="#">French</a>
                    </div>
                    </div>
                    <div class="dropdon">
                        <button class="bg-light dropbtn" style="font-size:15px;color:black;border-style: none;" >
                            Reports<i class="fa fa-caret-down" style="color:rgb(165, 164, 164)"></i>
                        </button>
                        <div class="dropdon-content">
                            <a href="#">Report 1</a>
                            <a href="#">Report 2</a>
                            <a href="#">Report 3</a>
                        </div>
                        </div>
                    <div class="dropdon">
                            <button class="bg-light dropbtn" style="font-size:15px;color:black;border-style: none;" >
                                Projects<i class="fa fa-caret-down" style="color:rgb(165, 164, 164)"></i>
                            </button>
                            <div class="dropdon-content">
                                <a href="#">Project 1</a>
                                <a href="#">Project 2</a>
                                <a href="#">Project 3</a>
                            </div>
                            </div>
                    <i class="fa-solid fa-envelope" style="padding:10px;font-size:16px;"></i>        
                    <i class="fa-solid fa-bell" style="padding:10px;font-size:16px;"></i>        
                    <i class="fa-solid fa-user" style="padding:10px;font-size:16px;"></i>        
                    
            
                    
                  </div>
                </div>
              </header>
              <header class="p-3 bg-light text-black" style="height:70px;">
                <div class="container">  
                  
                  <button id="myBtn" class="btn btn-success" style="border-radius: 7px;margin-left: 930px;margin-top:0px;color:rgb(224, 224, 250);">Add user</button> 
            <div id="myModal" class="modal">

              <!-- Modal content -->
              
              
              <div class="modal-content">
                <form style="width:auto;height:100%;" method="POST" action="{{ route('bing.store') }}"  onsubmit="return checkEmail(this);">
                @csrf
                  <div style="height:8%;width: 100%;border-bottom: 1px solid rgb(202, 201, 201);">
                    <span style="font-size:18px;padding: 20px;">Add Users<span class="closem" style="margin-left: 85%;">&times;</span></span>
                  </div>
                  <div class="row" style="height:4%;width: 100%;"></div>
                  <div class="row" style="height:9.6%;width: 100%;display: flex;align-items: center;"><div class="col-md-12"><input type="text" style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;" name="employerid" placeholder="  Employer ID*" value="<?php echo $employerid;?>" readonly></div>
                  </div>
                  <div class="row" style="height:9%;width: 100% ;display: flex;align-items: center;">
                    <div class="col-md-6"><input type="text" style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;" name="firstname" placeholder="  First Name*"></div>
                    <div class="col-md-6"><input type="text" style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;" name="lastname" placeholder="  Last Name*"></div>
                    </div>
                    <div class="row" style="height:9%;width: 100%;display: flex;align-items: center;">
                    <div class="col-md-4"><input type="email" style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;" name="email" placeholder="  Email ID*"></div>
                    <div class="col-md-4"><input type="number" style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;" name="phone" placeholder="  Mobile no"></div>
                    <div class="col-md-4"><select type="text" style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;" name="role" >
                    <option value="">Select Role Type*</option>
                    <option value="ceo and founder">CEO and Founder</option>
                    <option value="team lead">Team Lead</option>
                    <option value="employer">Employer</option>
                    <option value="web developer">Web Developer</option>
                    <option value="app designer">App Designer</option>
                    <option value="hr">HR</option>
                    </select></div>
                    </div>
                    <div class="row" style="height:9.6%;width: 100%;display: flex;align-items: center;">
                      <div class="col-md-4"><input type="text" style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;" name="username" placeholder="  Username*"></div>
                      <div class="col-md-4"><input type="password" style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;" name="password" id="txtPassword" placeholder="  Password*" minlength="6"></div>
                      <div class="col-md-4"><input type="password" style="width: 100%;height:30px;border: 1px solid rgb(228, 227, 227);outline-style: none;border-radius: 10px;color:black;" name="rpassword" id="txtConfirmPassword" placeholder="  Confirm Password*" minlength="6"></div>
                      </div>
                    <div class="row" style="height:5.6%;width: 100%;"></div>
                    <div class="row" style="height:9.6%;width: 100%;display: flex;align-items: center;background-color: rgb(220, 234, 252);color: grey;font-size: 13px;">
                    <div class="col-md-2">Module Permission</div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 d-flex justify-content-center">Read</div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 d-flex justify-content-center">Write</div>
                    <div class="col-md-1 "></div>
                    <div class="col-md-1 d-flex justify-content-center">Delete</div>
                    <div class="col-md-1"></div>
                    </div>
                  <div class="row" style="height:9%;width: 100%;display: flex;align-items: center;border-bottom: 1px solid rgb(202, 201, 201);">
                    <div class="col-md-2">Super Admin</div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 d-flex justify-content-center"><input type="checkbox" name="saread" value="saread"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 d-flex justify-content-center"><input type="checkbox" name="sawrite" value="sawrite"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 d-flex justify-content-center"><input type="checkbox" name="sadelete" value="sadelete"></div>
                    <div class="col-md-1"></div></div>
                  <div class="row" style="height:9%;width: 100%;border-bottom: 1px solid rgb(202, 201, 201);border-bottom: 1px solid rgb(202, 201, 201);display: flex;align-items: center;">
                    <div class="col-md-2">Admin</div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 d-flex justify-content-center"><input type="checkbox" name="aread" value="aread"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 d-flex justify-content-center"><input type="checkbox" name="awrite" value="awrite"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 d-flex justify-content-center"><input type="checkbox" name="adelete" value="adelete"></div>
                    <div class="col-md-1"></div></div>
                  <div class="row" style="height:9.6%;width: 100%;border-bottom: 1px solid rgb(202, 201, 201);border-bottom: 1px solid rgb(202, 201, 201);display: flex;align-items: center;">
                    <div class="col-md-2">Employer</div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 d-flex justify-content-center"><input type="checkbox" name="eread" value="eread"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 d-flex justify-content-center"><input type="checkbox" name="ewrite" value="ewrite"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1 d-flex justify-content-center"><input type="checkbox" name="edelete" value="edelete"></div>
                    <div class="col-md-1"></div></div>
                  <div class="foot" style="height:8%;width:100%;display: flex;align-items: center;"><button class="btn" style="margin-left: 80%;border-radius: 10px;background-color: #0a9cfd;width:90px;color: white;" type="submit" name="submit">Add User</button><a href="{{ route('bing.index') }}"><span class="closemm" style="font-size:15px;margin-left: 20px;color:grey;font-weight: bold;">Cancel</span></a></div>
                    
                </form>
                  
              </div>
              
            
            </div>
                </div>
                </div>
              </header>
            
        </div>
        <div class="row-lg-8">

            <div class="bg-white col-lg-12" style="width:1020px;height:450px;margin-left: -1150px;margin-top: 140px;border:2px solid #7dadf7" id="form">
                <header class="p-3 bg-white text-black d-flex justify-content-center" style="border-bottom:1px solid rgb(235, 234, 234) ;height:45px;">
                    <div class="container">
                      <div class="d-flex flex-wrap align-items-center  justify-content-center">
                        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-black text-decoration-none">
                          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                        </a>
                
                        <div class="nav col-8 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                            <a href="#" class="nav-link text-black" style="font-size:17px;margin-left: -50px;">List Users</a>
                             
                        </div>
                        <div class="nav col-4 col-lg-auto me-lg-auto mb-2 d-flex justify-content-center mb-md-0">
                            <form class="nav-link text-black"  style="font-size:15px;margin-left: 620px;">
                            <input type="search" placeholder="  Search..." class="" style="width:200px;border:1px solid rgb(197, 195, 195);border-radius: 4px;border-top-right-radius:0px;border-bottom-right-radius: 0px;border-right: 0px;outline-style: none;"><button style="border:1px solid rgb(197, 195, 195);border-radius: 4px;background-color: white;border-top-left-radius:0px;border-bottom-left-radius: 0px;border-left: 0px;"><i class="fa-light fa-search" ></i></button>
                            </form></a>
                            
                        </div>
                        
                        
                             
                        
                
                        
                      </div>
                    </div>
                </header>
                    <div class="container">  
                      <div class="row bg-light" style="height:45px;font-size:15px;">
                        <div class="col-md-2 d-flex align-items-center "><span style="padding: 20px;">Name</span></div>
                        <div class="col-md-2 d-flex align-items-center "><span style="padding: 20px;">Email</span></div>
                        <div class="col-md-2 d-flex align-items-center"></div>
                        <div class="col-md-2 d-flex align-items-center">Create Date</div>
                        <div class="col-md-2 d-flex align-items-center">Role</div>
                        <div class="col-md-1 d-flex align-items-center" style="display: flex;justify-content:end;"><span style="margin-right: -50px;">Action</span></div>
                      </div>
                      @foreach ($bings as $bing)
                      <div class="row bg-white" style="height:50px;font-size:15px;border-bottom: 1px solid rgb(243, 243, 243);">
                      <div class="col-md-2 d-flex align-items-center ">
                          <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none" >
                          <img src="{{URL::asset('mdo.jpg')}}" alt="" width="20" height="20" class="rounded-circle" style="outline:solid 1px;outline-color: white;">
                      </a>
                      <h6>{{ $bing->firstname }}  {{ $bing->lastname }}</h6><br>
                        </div><div class="col-md-2 d-flex align-items-center ">
                          
                      <h6>{{ $bing->email }}</h6><br>
                        </div>
                        
                        <div class="col-md-2 d-flex align-items-center"><button class="btn btn-danger" style="border-radius: 8px;width:100px;">Super Admin</button></div>
                        <div class="col-md-2 d-flex align-items-center">24 Oct, 2015</div>
                        <div class="col-md-2 d-flex align-items-center">{{ $bing->role }}</div>
                        <div class="col-md-1 d-flex align-items-center"></div>
                        <div class="col-md-1 d-flex align-items-center" style="display: flex;justify-content:end;"><a href="{{ route('bing.show',$bing->id) }}"  style="margin-right: 25px;"><i class="fa-light fa-eye"></i></a>@csrf
                    @method('DELETE')
                    <a href="delete.php"><i class="fa-light fa-trash-can" style="margin-right: 0px;"></i></a><a href="{{ route('bing.edit',$bing->id) }}"><i class="fa-light fa-pencil" style="text-decoration: underline; margin-left: -100px;"></i></a></div>
                      </div>
                      
                      @endforeach
                  </div>
                  <h2 style="padding-top: 20px;color:grey;"></h2>
                  <span style="padding-top: 20px;color:grey;">@Copyright 2022<a style="color: black; font-weight: bolder;"> BingHR.io</a></span>
                   
            </div> 
        </div>
         
    </div>
    
    
    
    
    
    
     </main>  
     {{ $bings->links() }}
     @endsection