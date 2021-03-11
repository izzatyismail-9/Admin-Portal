
    <!DOCTYPE html>
    <html>
    <head>
        <title>GSM Admin Portal</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <style>
        body {
            background-image: url(https://thegreen.studio/images/gsm.png);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: auto;
            background-position: top;
        }
        {
            margin: 0;
            padding: 0;
            background-color:#6abadeba;
            font-family: 'Arial';
        }
        .login{
                width: 300px;
                overflow: hidden;
                margin: auto;
                margin: 20 0 0 450px;
                padding: 60px;
                background: #09364f;
                border-radius: 15px ;

        }
        h2{
            text-align: center;
            color: #277582;
            padding: 20px;
        }
        label{
            color: #D3AE35;
            font-size: 17px;
        }
        #Uname{
            width: 300px;
            height: 30px;
            border: none;
            border-radius: 3px;
            padding-left: 10px;
        }
        #Pass{
            width: 300px;
            height: 30px;
            border: none;
            border-radius: 3px;
            padding-left: 10px;

        }
        #log{
            width: 310px;
            height: 30px;
            border: none;
            border-radius: 17px;
            padding-left: 7px;
            color: black;


        }
        span{
            color: white;
            font-size: 17px;
        }
        a{
            float: right;
            background-color: ;
            color: black;
        }
    </style>
    </head>
    <body>
        <h2>     </h2><br><br>
        <div class="login">
        <form id="login" method="get" action="login.php">
            <label><b>Username:
            </b>
            </label>
            <input type="text" name="Uname" id="Uname" placeholder="Your User ID">
            <br><br>
            <label><b>Password:
            </b>
            </label>
            <input type="Password" name="Pass" id="Pass" placeholder="Password">
            <br><br>
            <input type="button" name="log" id="log" value="Log In">
            <br><br><br>
            <a href="#">Forgot Password</a>
        </form>
    </div>
    </body>
    </html>
