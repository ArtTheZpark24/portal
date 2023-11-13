@include('partials.header')


<section>
    <div class="container mt-5 pt-5">
        <div class="row">
        <div class="col-12 col-sm-8 col-md-6 m-auto">
            <div class="card border-0 shadow ">
                <div class="card-body form-container">
                  <h2 class="text-center navbar-brand mt-5">ADMIN PORTAL</h2>
         

                  @if ($errors->any())
         <div class="error-message">
                  @foreach ( $errors->all() as $error )
                  <ul>
                    <li>{{ $error }}</li>
                  </ul>
                      
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
                            <a href="#">Forgot password?</a>
                        </p>
                    
                    </form>

                </div>
            </div>
        </div>
        </div>
    </div>
</section>

@include('partials.footer')
    
