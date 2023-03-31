@include('partials.header')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <img src="logo.png" alt="NASA" style="width:200px;height:50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/addCustomer">Add Customer</a>
      </li>
      <li class="text-end">
      <li class="nav-item">
        <a class="nav-link" href="/logout">Logout</a>
      </li>

  </div>
</nav>  

<table class="table table-bordered">
<thead>
    <tr>
      
      <th scope="col">ID</th>
      <th scope="col">Last Name</th>
      <th scope="col">First Name</th>
      <th scope="col">E-Mail</th>
      <th scope="col">Address</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  @foreach ($customers as $customer)
  <tbody>
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->lastName}}</td>
      <td>{{$customer->firstName}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->address}}</td>
      <td><a href="edit/{{$customer->id}}"><button type="button" class="btn btn-light">Edit</button></a></td>
      <td><a href="delete/{{$customer->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
    </tr>
  </tbody>
  @endforeach
</table>
@include('partials.footer')