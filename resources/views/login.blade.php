<x-layout>
    <x-slot name="title">Login Page</x-slot>
    <x-slot name="main">
<h1>User Login</h1>
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
  </div>
<button type="button" class="btn btn-primary">Login</button>


    </x-slot>

</x-layout>