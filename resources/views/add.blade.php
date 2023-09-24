<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<form action="{{url('/')}}/register" method="post">
  @csrf
    <div class="container">
        <h1 class="text-center">Registration Form</h1>
     
        <div class="form-group">
    <label for="">Name</label>
    <input type="text"  id="" aria-describedby="helpId" placeholder="" name="name" class="form-control">
    <span class="text-danger">
      @error('name')
      {{$message}}
      @enderror
        </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email"  id="" placeholder="" aria-describedby="helpId" name="email" class="form-control">
    <span class="text-danger">
      @error('email')
      {{$message}}
      @enderror
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password"  id="" aria-describedby="helpId" placeholder="" name="password" class="form-control">
    <span class="text-danger">
      @error('password')
      {{$message}}
      @enderror
    </div>
    <div class="form-group">
      <label for="">Gender</label><br>
  <input class="form-check-input" type="radio" name="gender" id="" value="M" class="form-control">
  <label class="form-check-label" for="">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="" value="F" class="form-control">
  <label class="form-check-label" for="">
    Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="" value="O" class="form-control">
  <label class="form-check-label" for="">
    Other
  </label>
  <span class="text-danger">
      @error('gender')
      {{$message}}
      @enderror
</div>
<div class="form-group">
    <label for="">Date of Birth</label>
    <input type="date"  id="" placeholder="" aria-describedby="helpId" name="dob" class="form-control">
    <span class="text-danger">
      @error('dob')
      {{$message}}
      @enderror
  </div>
<br>

  <div class="form-group">
  <label for="">Hobbies</label><br>
  <input class="form-check-input" type="checkbox" name="hobby[]" value="Cricket" id="">
  <label class="form-check-label" for="">Cricket</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Dance" name="hobby[]" id="" class="form-control">
  <label class="form-check-label" for="">Dance</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="hobby[]" value="Reading" id="" class="form-control">
  <label class="form-check-label" for="">Reading</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="Painting" name="hobby[]" id="" class="form-control">
  <label class="form-check-label" for="">Painting</label>
</div>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="hobby[]" value="Singing" id="" class="form-control">
  <label class="form-check-label" for="">Singing</label>
  <span class="text-danger">
      @error('hobby')
      {{$message}}
      @enderror
</div>

<div class="form-group">
      <label for="">Address</label>
      <textarea class="form-control" rows="3" id="" name="address" class="form-control"></textarea>
      <span class="text-danger">
      @error('address')
      {{$message}}
      @enderror
    </div>
  <div class="form-group">
    <label for="">City</label>
    <input type="text"  id="" placeholder="" aria-describedby="helpId" name="city" class="form-control">
    <span class="text-danger">
      @error('city')
      {{$message}}
      @enderror
  </div>
  <div class="form-group">
    <label for="">State</label>
    <input type="text"  id="" placeholder="" aria-describedby="helpId" name="state" class="form-control">
    <span class="text-danger">
      @error('state')
      {{$message}}
      @enderror
  </div><br>
  <button class="btn btn-primary">Submit </button>
</form>
</body>
</html>