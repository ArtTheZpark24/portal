



@include('partials.header')


<body>

    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card border-0 shadow ">
                    <div class="card-body form-container">
                      <h2 class="text-center navbar-brand mt-5">ADMIN PORTAL</h2>
             
    
                      @if ($errors->any())
             <div class="error-message alert alert-danger mb-5" role="alert">
                      @foreach ( $errors->all() as $error )
                      <ul>
                        <li>{{ $error }}</li>
                      </ul>
                          
                      @endforeach
               
                    </div>
                      @endif

                      @if (session('success'))


                        <div class="alert alert-success">

                            <span>{{ session('success') }}</span>

                        </div>
                     
                          
                      @endif

                      
                          
                 

                      <div class=" reset-message alert alert-secondary">
                        <p>Reset your password</p>
                    </div>
    
                     
                        <form action="{{ route('password.update') }}" method="POST" >
                            
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <input type="email" class="form-control my-3 py-2 forgot-email" required placeholder="user@gmail.com" name="email" required>
                            <input type="password" class="form-control my-3 py-2 " required  name="password" required>
                            <input id="password-confirm" type="password" class="form-control my-3 py-2" name="password_confirmation" required>
                            <div class="text-center">
                                <button class="btn btn-success mt-3 border btn-login">Reset</button>
    
                            </div>
                           
                           
                        
                        </form>
    
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

@include('partials.footer')
