@include('partials.header')


<section>
    <div class="container mt-5 pt-5">
        <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card border-0 shadow ">
                <div class="card-body form-container">
                  <h2 class="text-center navbar-brand mt-5">ADMIN PORTAL</h2>
         

                  @if ($errors->any())
         <div class="error-message alert alert-danger" role="alert">
                  @foreach ( $errors->all() as $error )
                
                 <p class="fw-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                        <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                      </svg> {{ $error }}
                    </p>
               
                      
                  @endforeach
           
                </div>
                  @endif

                 
                    <form action="{{ route('login') }}" method="POST" >
                        @csrf
                        <input type="email" class="form-control my-3 py-2 login-email" value="{{ old('l-email') }}" placeholder="user@gmail.com" name="l-email" required>
                        <input type="password" class="form-control my-3 py-2 login-password" placeholder="Password" name="l-password" required>
                        <div class="text-center">
                            <button class="btn btn-success mt-3 border btn-login">Log in</button>

                        </div>
                       
                        <p class="text-center forgot-text mt-5">
                            <a href="{{ route('forgot.password') }}">Forgot password?</a>
                        </p>
                    
                    </form>

                </div>
            </div>
        </div>
        </div>
    </div>
</section>

@include('partials.footer')
    
