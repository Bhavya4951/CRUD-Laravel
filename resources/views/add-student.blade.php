<!DOCTYPE html>
<html>
<body>

@if(Session::has('message'))

    <p>{{Session::get('message')}}</p>
@endif

<h2>HTML Forms</h2>

<form action="{{url('save-student')}}" method="post">
@csrf
  <label for="fname">Student Name</label><br>
  <input type="text" name="sname" ><br>
        @error('sname')
        {{$message}}
        @enderror<br>

  <label>Email</label><br>
  <input type="email"  name="semail"><br>
  @error('semail')
  {{$message}}
  @enderror<br>

  <label >phone</label><br>
  <input type="text"  name="sphone"><br>
  @error('sphone')
  {{$message}}
  @enderror<br>

  <label >Address</label><br>
    <textarea rows="10" cols="20" name="address"> 
    
    </textarea><br>
    @error('address')
    {{$message}}
    @enderror<br>

    <br><br/>
  <input type="submit" value="Submit">
</form> 



</body>
</html>