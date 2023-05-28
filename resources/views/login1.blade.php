@extends('loginmaster')
@section('title')
  فرم ورود
@endsection

@section('subject')
  فرم ورود 

@section('content')
<body class="text-algin=center">
<form action="/login1"  class="login-form" method="post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <div class="form-row m-b-55">
                           
                        <div class="form-row">
                        <div class="name">نام کاربری</div>
                            <div class="value">
                                <div class="input-group">
                                    <input align="left" class="input--style-5" type="text" name="username"  id="username">
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-row">
                        <div class="name">رمز عبور</div>
                            <div class="value">
                              
                                    <input class="input--style-5" type="password " name="password" id="password">
                                </div>
                            </div>
                        </div>
                        <div align="right">
                            <button align="left" class="btn btn--radius-2 btn--red" type="submit">ورود </button>
</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

                    @endsection
