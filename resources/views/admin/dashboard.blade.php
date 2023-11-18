@include('partials.header')

<body>
    <div class="wrapper">
      <aside id="sidebar">
        <!-- sidebar content here-->
        <div class="h-100">
          <div class="sidebar-logo">
         
              
           <h6 class="text-uppercase"><i class="fa-regular fa-circle-user"></i> Admin</h6>
              
            <p>{{ $email }}</p>
            
          </div>
          <ul class="sidebar-nav">
            
            <hr>
            <li class="sidebar-item">
             <a href="" class="sidebar-link">
              <i class="fa-solid fa-list"></i> Dashboard
            </a>
            </li>
             
            <li class="sidebar-item" ><a class="sidebar-link" href=""> 
              <i class="fa-solid fa-graduation-cap"></i> Students </a></li>

              <li class="sidebar-item" ><a class="sidebar-link" href=""> 
                <i class="fa-solid fa-person-chalkboard"></i> Teachers</a></li>
                <li class="sidebar-item" ><a class="sidebar-link" href=""> 
                  <i class="fa-solid fa-book-open"></i> Grading</a></li>

                  <li class="sidebar-item" ><a class="sidebar-link" href=""> 
                    <i class="fa-solid fa-gear"></i> Settings</a></li>

                  <li class="sidebar-item" ><a class="sidebar-link" href=""> 
                    <i class="fa-solid fa-bell"></i> Notification <span class="bg-secondary p-1 rounded fw-bold">0</span></a></li>
                
          </ul>
    
          </div>
        
      </aside>
     
        <div class="main container-fluid">
          
            <nav class="navbar navbar-expand px-3 border-bottom">
             <button class="btn" type="button">
              <span class="navbar-toggler-icon " id="sidebar-toggle"></span>
            </button>

            <div class="navbar-collapse navbar">

              <ul class="navbar-nav">
                <li>
                  <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn border">Log out</button>
                </form>
                
                </li>
              </ul>

            </div>
             

          
            </nav>
             <!-- Add this block inside the main content area -->
<main class="content px-3 py-2">
  <div class="container-fluid">
      <h2>Dashboard</h2>
      <!-- Add your dashboard content here -->
      <div class="row">
          <div class="col-md-4">
              <!-- Add some dashboard widgets or charts here -->
              <div class="card">
                  <div class="card-body  align-items-center">
                  
                    
                      <h5 class="card-title fw-bold fs-3">47</h5>
                      <div class="d-flex tex">
                        <i class="fa-solid fa-graduation-cap"></i>
                      <h6>Students</h6>
                    </div>
                    <div class="text-center  more-details border mt-2 p-1 bg-success text-white shadow ">
                      <span class="fw-300 ">More details</span>
                      <i class="fa-solid fa-arrow-right"></i>
                    </div>
                  </div>
              </div>
          </div>
          <div class="col-md-4">
              <!-- Add another dashboard widget or chart here -->
              <div class="card">
                  <div class="card-body">
                      <h5 class="card-title">Teachers</h5>
                      <!-- Add content for Widget 2 -->
                  </div>
                  
              </div>
              
          </div>
          <div class="col-md-4">
            <!-- Add another dashboard widget or chart here -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Widget 2</h5>
                    <!-- Add content for Widget 2 -->
                </div>
      </div>
  </div>
</main>

        </div>
     
    </div>
   
  
   
 

<script src="{{ asset('js/dash.js') }}"></script>


@include('partials.footer')