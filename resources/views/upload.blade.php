<!DOCTYPE html>
<html>

<head>
    <style>



.upload-form {
  max-width: 500px;
  margin: 0 auto;
  text-align: center;
}

h2 {
  font-size: 24px;
  margin-bottom: 20px;
}

.inputfile {
  display: none;
}

label {
  display: inline-block;
  padding: 10px 20px;
  font-size: 18px;
  background-color: #4CAF50;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
}

label i {
  margin-right: 10px;
}

label:hover {
  background-color: #3e8e41;
}

.btn {
  display: inline-block;
  padding: 10px 20px;
  font-size: 18px;
  background-color: #008CBA;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  border: none;
  margin-top: 20px;
}

.btn:hover {
  background-color: #006E8E;
}
</style>
</head>
<body>
    @if(Session::has ('success'))
    <img src="upload/{{session('newFileName')}} style="display: block ; >
    @endif
  <div class="upload-form">  
    <form action="upload1" method="post" enctype="multipart/form-data">
    <h2>آپلود فایل</h2>
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    @method('post')
    <h2> File Upload Form</h2>
    <h2>please choose a file to upload.</h2>
    @if($errors->any())
        @foreach($errors->all() as $errors)
        <br>   {{$errors}}
        @endforeach
        @else
        {{session('success')}}
        @endif
        <br>
        <label  for="fileInput" >select file:</label>
        <input type="file" id="fileInput" name="fileInput" class="inputfile">
        <label for="file">
        <i class="fas fa-cloud-upload-alt"></i>
      <span>انتخاب فایل</span>
    </label>
    <button type="submit" class="btn">آپلود</button>
</form>
</div>
</body>
</html>

   