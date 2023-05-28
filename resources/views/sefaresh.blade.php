

<html>
  <title>درخواست ترجمه</title>  
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
  <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                <h2 class="title" ><p dir="rtl" >   فرم سفارش</h2></p>
                </div>
                <div class="card-body">
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<form action="sefaresh1" class="login-form" method="post"  enctype="multipart/form-data">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <div class="form-row m-b-55">
                        <p dir="rtl" >    
                                          <label for="languageorgin">زبان مبدا ومقصد</label>
                                          <input class="input--style-5" type="text" name="languageorgin" id="languageorgin" placeholder="فارسی به انگلیسی یا انگلیسی به فارسی"></p>
                                            
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                        <p dir="rtl" >    
                                          <label for="specialist">نزدیکترین رشته به متن</label>
                                          <input class="input--style-5" type="text" name="specialist" id="specialist" placeholder="مثال مهندسی فتاوری اطلاعات"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                        <p dir="rtl" >    
                             <label for="title">موضوع متن</label>
                              <input class="input--style-5" type="text" name="title" id="title" ></p>
                        </div>
                        <div class="form-row">
                        <p dir="rtl" >    
                                          <label for="specielist">لیست مترجمان</label>
                                          <select name="list" >

                                   <option value="shadi"  id="1" selected>مهران حریری7</option>
                                   <option value="ali" id="2">علی مکاری20</option>
                                   <option value="zahra" id="3">زهرا مکاری 26</option>

                                   </select><label for="numbertranslate">شماره مترجم</label>
                              <input class="input--style-5" type="text" name="numbertranslate" id="numbertranslate" >
</p>
<p dir="rtl" >     
                             <label for="comment">توضیحات</label>
                             <input class="input--style-5" type="text" name="comment" id="comment" ></p>
                             <div class="form-group">
                                  
                             <p dir="rtl" >   <label for="uploadpath">آپلود</label>
                             <form action="sefaresh1" class="login-form" method="post"  enctype="multipart/form-data">
        <input  type="file"    id="'uploadpath"   name="uploadpath"  ></p>
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
       
    </div>
</div>
                                                     
                                                                 
<p dir="rtl" >     <button class="btn btn--radius-2 btn--red" type="submit">ثبت سفارش</button></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>