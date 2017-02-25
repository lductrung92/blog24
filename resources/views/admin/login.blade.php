<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Administrator</title>
  <base href="{{ asset('/') }}">
  <link rel="stylesheet" href="css/admin/login/style.css">
</head>
<body>
  

  <form class="form" action="admin/login" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="forceColor"></div>
    <div class="topbar">
      <div class="spanColor"></div>
      <input type="text" class="input" name="txtUsername" placeholder="Username"/>
      <input type="password" class="input" name="txtPassword" placeholder="Password"/>
    </div>
    <button class="submit" id="submit" >Login</button>
  </form>
</body>
</html>