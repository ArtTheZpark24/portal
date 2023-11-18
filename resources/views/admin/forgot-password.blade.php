



@include('partials.header')


<body>

    <section>
        <div class="container mt-5 pt-5">
            <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card border-0 shadow ">
                    <div class="card-body form-container">
                      <h2 class="text-center navbar-brand mt-5">RESET PASSWORD</h2>
             
    
                      @if ($errors->any())
             <div class="error-message alert alert-danger mb-5" role="alert">
                      @foreach ( $errors->all() as $error )
                      <ul>
                        <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                          </svg> {{ $error }}</li>
                      </ul>
                          
                      @endforeach
               
                    </div>
                      @endif

                      @if (session('status'))


                        <div class="alert alert-success">

                            <span>{{ session('status') }}</span>

                        </div>
                     
                          
                      @endif

                      
                          
                 

                      <div class="border p-3 fw-light">
                        <p>We will send a link to your email mailtrap, please use the link to reset your password</p>
                    </div>
    
                     
                        <form action="{{ route('forgot.password.post') }}" method="POST" >
                            
                            @csrf
                            <input type="email" class="form-control my-3 py-2 forgot-email" required placeholder="user@gmail.com" name="email" required>
                          
                            <div class="text-center">
                                <button class="btn btn-success mt-3 border btn-login">Send</button>
    
                            </div>
                           
                           
                        
                        </form>
    
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

@include('partials.footer')
