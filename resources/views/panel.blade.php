<html>
    <head>
    <style>




*{
 box-sizing:border-box;
}

.mybutton{
 background-color:#2196F3;
 width: 100%;
 border:none;
 border-radius:7px;
 color:#fff;
 padding:10px 25px;
 text-align:center;
 font-size:16px;
 cursor:pointer;
 transition:0.7s;
 margin-bottom:10px;
 display:block;
 text-decoration:none;
}

.mybutton:hover{
 background-color:#555;
 border-radius:15px;
}

.red{
 background-color:#F44336;
}

.green{
 background-color:#4CAF50;
}

</style>

    </head>
    <body>
        
    <p><h1>hellow </h1></p>

   <h1>salam {{$info->username}}</h1> 
   
   <a href="http://localhost:8000/sefaresh" class="mybutton red">ثبت سفارش</a>
<a href="https://free-learn.ir/" class="mybutton green">برو به سایت</a>
  



    </body>
</html>