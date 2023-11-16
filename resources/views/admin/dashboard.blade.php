@include('partials.header')
@if (session('success'))
<div class="alert alert-success login-message" role="alert">
 {{ session('success') }}
</div>
@endif
<h1>Hello user</h1>
<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn border">Log out</button>
</form>

   
 
</body>

</html>

@include('partials.footer')