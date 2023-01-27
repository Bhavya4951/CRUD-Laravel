<!DOCTYPE html>
<html>
<body>

@if(Session::has('message'))

    <p>{{Session::get('message')}}</p>
@endif

<h2>HTML Forms</h2>

<form action="{{url('update-student')}}" method="post">
@csrf
  <label for="fname">Student Name</label><br>

  <input type="hidden" value="{{$data->id}}" name="id"/>
<input type="text" name="sname" value="{{$data->name}}" ><br>
        @error('sname')
        {{$message}}
        @enderror<br>

  <label>Email</label><br>
  <input type="email"  name="semail" value="{{$data->email}}"><br>
  @error('semail')
  {{$message}}
  @enderror<br>

  <label >phone</label><br>
  <input type="text"  name="sphone" value="{{$data->phone}}"><br>
  @error('sphone')
  {{$message}}
  @enderror<br>

  <label >Address</label><br>
    <textarea rows="10" cols="20" name="address"> 
      {{$data->address}}
    </textarea><br>
    @error('address')
    {{$message}}
    @enderror<br>

    <br><br/>
  <input type="submit" value="Submit">
</form> 



</body>
</html>