<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery.terminal/0.10.12/css/jquery.terminal.min.css" rel="stylesheet"/>

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }

        .navbar {
            margin-bottom: 0;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Blackhat | WhiteCollar | GrayMatters
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <!-- <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                </ul> -->

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.terminal/0.10.12/js/jquery.terminal.min.js"></script>

<script>
    
        $(function() {
            var response;
            $(document).ready(function(){
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajaxSetup({
                         headers: {
                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                         }
                         });

                        $("#LeftTerminal").terminal(function(command, term) {

                            if(command == 'initialize'){
                                $('.terminal-output').eq(1).first().next().append("<div><br><h4><div style='color:darkgrey;'>black hat</div><div style='color:white;'>white collar</div><div style='color:lightgray;'>gray matter</h4><br><h3 style='color:red;'>GOOGLE THE ANSWERS TO ALL YOUR QUESTIONS.<br><br></h3><h4>this is the end. || the beginning.</h4><br><br><br><h4>IF YOU STILL DON'T GET IT TYPE 'help' AT THE PROMPT IN THE LEFT TERMINAL WINDOW.</h4></div>");
                            }

                            if(command == 'help'){
                                $('.terminal-output').eq(1).first().next().append("<div><br><h4>stop being a bozo and start helping yourself.</h4></div>");
                            }
                                     
                        }, { prompt: '>>> ', name: 'shellInput', greetings: false, 
                            
                            login: function(user, password, callback) {
                                if (user == 'root' && password == 'secrets') {
                                    $('.terminal-output').eq(1).first().next().append("<div><br><h4>hello "+user+", welcome to Dojo YOLO.<br><br>TYPE 'initialize' TO BEGIN.</h4></div>");
                                    callback('AUTHENTICATION TOKEN');
                                } else {
                                    callback(null);
                                }
                            }  

                        });

                        $('#RightTerminal').terminal(function(command, term) 
                            {},
                            { prompt:'', name: 'shellOutput', greetings: false, enabled: false }
                        );

                        // $('.terminal-output').eq(0).html('<br><code id="shellIn" style="float:right;padding:10px;font-size:28px;">INPUT</code><br><br><br>');
                        // $('.terminal-output').eq(1).html('<br><code id="shellOut" style="float:right;padding:10px;font-size:28px;">OUTPUT</code><br><br><br>');
                        // $('.terminal-output').css('text-align', 'center');
                    });
        });

</script>
</body>
</html>
