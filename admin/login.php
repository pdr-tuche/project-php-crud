<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    
</head>
<body>
    
    
    
    <style>
        
    
    html{
      background-image: url("../assets/img/wallpaper-registro.jpg");
      height: 100vh;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    
    main{
      
      justify-content: center;
    }
    
    body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, 
    pre, form, fieldset, input, textarea, p, blockquote, th, td { 
    padding:0;
    margin:0;}
    
    fieldset, img {border:0}
    
    ol, ul, li {list-style:none}
    
    :focus {outline:none}
    
    body,
    input,
    textarea,
    select {
    font-family: 'Open Sans', sans-serif;
    font-size: 16px;
    color: #4c4c4c;
    }
    
    p {
    width: 85%;
    text-align: justify;
    font-size: 12px;
    color: #fff;
    display: inline-block;
    margin-left: 18px;
    }
    h1 {
    font-size: 32px;
    font-weight: 600;
    color: #fff;
    text-align: center;
    margin-top: 2rem;
    margin-bottom: 10px;
    }
    
    
    .testbox {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    margin: 20px auto;
    width: 343px; 
    height: 394px; 
    -webkit-border-radius: 8px/7px; 
    -moz-border-radius: 8px/7px; 
    border-radius: 8px/7px; 
    background-color: #000000d6; 
    -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
    -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
    box-shadow: 1px 2px 5px rgba(0,0,0,.31); 
    border: solid 1px #cbc9c9;
    }
    
    input[type=radio] {
    visibility: hidden;
    }
    
    form{
    margin: 0 30px;
    }
    
    label.radio {
    cursor: pointer;
    text-indent: 35px;
    overflow: visible;
    display: inline-block;
    position: relative;
    margin-bottom: 15px;
    }
    
    label.radio:before {
    background: #3a57af;
    content:'';
    position: absolute;
    top:2px;
    left: 0;
    width: 20px;
    height: 20px;
    border-radius: 100%;
    }
    
    label.radio:after {
    opacity: 0;
    content: '';
    position: absolute;
    width: 0.5em;
    height: 0.25em;
    background: transparent;
    top: 7.5px;
    left: 4.5px;
    border: 3px solid #ffffff;
    border-top: none;
    border-right: none;
    
    -webkit-transform: rotate(-45deg);
    -moz-transform: rotate(-45deg);
    -o-transform: rotate(-45deg);
    -ms-transform: rotate(-45deg);
    transform: rotate(-45deg);
    }
    
    input[type=radio]:checked + label:after {
    opacity: 1;
    }
    
    hr{
    color: #a9a9a9;
    opacity: 0.3;
    }
    
    input[type=text],input[type=password]{
    width: 200px; 
    height: 39px; 
    -webkit-border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
    -moz-border-radius: 0px 4px 4px 0px/0px 0px 4px 4px; 
    border-radius: 0px 4px 4px 0px/5px 5px 4px 4px; 
    background-color: #fff; 
    -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
    -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
    box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
    border: solid 1px #cbc9c9;
    margin-left: -5px;
    margin-top: 13px; 
    padding-left: 10px;
    }
    
    input[type=password]{
    margin-bottom: 25px;
    }
    
    #icon {
    display: inline-block;
    width: 45px;
    background-color: #007bff;
    padding: 8px 0px 8px 15px;
    margin-left: 15px;
    -webkit-border-radius: 4px 0px 0px 4px; 
    -moz-border-radius: 4px 0px 0px 4px; 
    border-radius: 4px 0px 0px 4px;
    color: white;
    -webkit-box-shadow: 1px 2px 5px rgba(0,0,0,.09);
    -moz-box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
    box-shadow: 1px 2px 5px rgba(0,0,0,.09); 
    border: solid 0px #cbc9c9;
    }
    
    
    .accounttype{
    margin-left: 8px;
    margin-top: 20px;
    }
    
    a.button {
    font-size: 14px;
    font-weight: 600;
    color: white;
    padding: 6px 25px 0px 20px;
    margin: 10px 8px 20px 0px;
    display: inline-block;
    float: right;
    text-decoration: none;
    width: 50px; height: 27px; 
    -webkit-border-radius: 5px; 
    -moz-border-radius: 5px; 
    border-radius: 5px; 
    background-color: #3a57af; 
    -webkit-box-shadow: 0 3px rgba(58,87,175,.75); 
    -moz-box-shadow: 0 3px rgba(58,87,175,.75); 
    box-shadow: 0 3px rgba(58,87,175,.75);
    transition: all 0.1s linear 0s; 
    top: 0px;
    position: relative;
    }
    
    a.button:hover {
    top: 3px;
    background-color:#2e458b;
    -webkit-box-shadow: none; 
    -moz-box-shadow: none; 
    box-shadow: none;
    
    }
    
    .cadastro{
    justify-content: space-between;
    width: 100%;
    margin-top: 1rem;
    display: flex;
    flex-direction: column;
    }
    
    
    #submit{
    margin-top: 1rem;
    width: 100%;
    display: flex;
    justify-content: center;
    }
    
    .navbar-brand{
    width: 100%;
    height: 100%;
    object-fit: cover;
    }
    
    .navbar-brand img{
    width: 100px;
    }
    
    .navbar-nav a{
    color: black !important;
    font-weight: 800 !important;
    }
    
    .bg-light{
    background-color: #fff !important;
    }
    
    .form-group {
    display: flex;
    width: 100%;
    justify-content: center;
    margin-bottom: 1rem;
}
    
.btn-info {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}

.btn-info:hover{
    border: none;
    background-color: #0f5fb5;
}
.text-info {
    color: #fff !important;
    font-weight: 700;

}

a.text-info:focus, a.text-info:hover {
    color: #007bff !important;
}
    
    </style>
    
        <?php
        if (!empty($_GET['msg'])) {
    
            if ($_GET['msg'] == "OK") {
        ?>
                <div class="alert alert-info" role="alert">
                    <?php echo "<strong> Registered Successfull. Please, login.</strong>"; ?>
                </div>
            <?php
    
            } else if ($_GET['msg'] == "LOGIN_ERROR") {
    
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo "<strong>Usuário Incorreto ou Senha incorreta.</strong>"; ?>
                </div>
            <?php
    
            } else {
            ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo "<strong> It is not possible to connect the database server. <strong><br>"; ?>
                </div>
        <?php
            }
            unset($_GET['msg']);
        }
    
    
        ?>
    
    
    
        <div class="testbox">

        <h1>Login</h1>
    
            <form id="login-form" class="form" action="./customersession.php" method="post">
                <hr>
                <label id="icon" for="name"><i class="icon-user"></i></label>
                <input type="text" name="username" id="email" placeholder="Usuário" required />
    
                <label id="icon" for="name"><i class="icon-shield"></i></label>
                <input type="password" id="passwdInputLabel" name="password" placeholder="Senha" required />
                <div class="cadastro">
                    <div class="form-group">
                        
                        <input type="submit" name="submit" class="btn btn-info btn-md" value="Entrar">
                    </div>
                    <div id="register-link" class="text-right">
                                        <a href="./registeruser.php" class="text-info">Cadastre-se</a>
                     </div>
    
                </div>
            </form>
        </div>

</body>    
</html>

