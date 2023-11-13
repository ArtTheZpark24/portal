@include('partials.header')
    
<h1>Hello user</h1>
</body>
<form action="{{ route('admin.logout') }}" method="POST">
    @csrf
<button class="btn btn-logout">Log out</button>
</form>
</html>

@include('partials.footer')