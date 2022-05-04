@extends('pages.app')
@section('header')
@section('sidebar')
@section('main-content')




 <!--header starts-->
 <div class="header">
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand"><i class="fa fa-plus" aria-hidden="true"></i>   
            Hospital
          </a>
          <h1>  <i>Hospital Management Information System</i></h1>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search using Reg.No" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          
        </div>
      </nav>
 </div>
 <!--header ends-->

  <!--sidebar starts-->
  <div class="sidebar">
    <nav>
        <ul>
            
            <li>
                <a href="viewdoctors">
                    <span> <i class="fa fa-user-md" aria-hidden="true"></i>
                    </span>
                    <span>Doctors</span>
                </a>
            </li>
            <li>
                <a href="viewpatients">
                    <span> <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                    <span>Patients</span>
                </a>
            </li>
            <li>
                <a href="viewnurses">
                    <span> <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                    <span>Nurses</span>
                </a>
            </li>
            <li>
                <a href="viewstaff">
                    <span> <i class="fa fa-user" aria-hidden="true"></i>
                    </span>
                    <span>Non-Staff</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span><i class="fa fa-file-text" aria-hidden="true"></i>

                    </span>
                    <span>Reports</span>
                </a>
            </li>
        </ul>
    </nav>

  </div>
  <!--sidebar ends-->
<!--main-content starts-->
{{-- <div class="main-content">
    <div class="row">
              
        <!-- 1st colum starts -->
        <div class="col-lg-3">
            <div class="card-body  text-center bg-light">
                <span><i class="fa fa-user"></i>  Doctors</span>
        
            </div>
            <div class="card-footer  text-center bg-light">
                
                <span class="float-right">{{ $count  }}</span>

            </div>

        </div>
        <!-- 1st column ends -->
				<!-- 2nd column starts -->
				<div class="col-lg-3">
					<div class="card-body  text-center bg-light">
						<span><i class="fa fa-user"></i>  Patients</span>
				
					</div>
					<div class="card-footer  text-center bg-light">
                        <span class="float-right">{{ $count }}</span>

                    </div>

				</div>
		
				<!-- 2nd column ends -->
				<!-- 3rd column starts -->
				<div class="col-lg-3">
					<div class="card-body  text-center bg-light">
						<span><i class="fa fa-user"></i>  NonStuff</span>
				
					</div>
					<div class="card-footer  text-center bg-light">
                        <span class="float-right">{{ $count }}</span>

                    </div>

				</div>
						<!-- 3rd column ends -->
				<!-- 4th column starts -->
				<div class="col-lg-3">
					<div class="card-body  text-center bg-light">
						<span><i class="fa fa-user"></i>  Nurses</span>
				
					</div>
					<div class="card-footer  text-center bg-light">
                        <span class="float-right">{{ $count }}</span>

                    </div>

				</div>
				<!-- 4th column ends -->
                <!--income row-->

            
                <div class="row">
                    <div class="col-lg-3">
                        
                        <div class="card-body text-center bg-light">
                            <span>Today income</span>
                        </div>
                        <div class="card-footer text-center bg-light">
                            <span>$3000</span>
  
                        </div>
    
                    </div>

                    <div class="col-lg-3">
                        
                        <div class="card-body text-center bg-light">
                            <span>This week income</span>
                        </div>
                        <div class="card-footer text-center bg-light">
                            <span>$910000</span>
                        </div>
    
                    </div>
                    <div class="col-lg-3">
                        
                        <div class="card-body text-center bg-light">
                            <span>This month income</span>
                        </div>
                        <div class="card-footer text-center bg-light">
                            <span>$22100000</span>
  
                        </div>
    
                    </div>
                    <div class="col-lg-3">
                        
                        <div class="card-body text-center bg-light">
                            <span>This year income</span>
                        </div>
                        <div class="card-footer text-center bg-light">
                            <span>$1980000000</span>
                        </div>
    
                    </div>
            
            
                </div>
                <!--income ends-->
               
    </div>
<!--line graph starts-->
<div class="row">
    <div class="col-lg-6 ">
            <div class="card">
            <div class="card-body   text-center bg-light">
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>


            </div>
        </div>

    </div>
    <!--column-->
    <div class="col-lg-6 ">
        <div class="card">
        <div class="card-body   text-center bg-light">
            <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>


        </div>
    </div>

</div>

</div>



<!--line graph ends-->


</div> --}}
<!--main-content ends-->

{{-- new main content --}}
<div class="main-content">
    <div class="row">
        <div class="col-md-8 text-centre">
            <table class="table table-danger table-striped">
  
                <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Operations</th>
                  <a href="adddoctor"><button scope="col" type="submit"> <i class="fa fa-plus-circle" aria-hidden="true"></i>
                    Add Doctor</button></a> 

                </tr>
              </thead>
              <tbody>
                 
                @foreach ($doctors as $item )
                      
                <tr>
                  <th scope="row">{{ $item['id'] }}</th>
                  <td>{{ $item['name'] }}</td>
                  <td>{{ $item['email']}}</td>
                  <td>
                    <a href="{{"delete2/". $item['id'] }}">DELETE</a>
                    <a href="{{"edit2/". $item['id'] }}">EDIT</a>

                  </td>
                </tr>
                @endforeach

              </tbody>
            
            </table>
        </div>
    </div>
</div>

