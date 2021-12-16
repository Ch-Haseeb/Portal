<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buy Service</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset ('css/style.css') }}">
  
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Buy Service</h2>
                        <form action="service" method="POST" class="register-form" id="register-form" >
                        @csrf
                        <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="name" id="name" placeholder="Enter your  name"/>
                            </div>
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="phone" id="phone" placeholder="Enter your phone no"/>
                            </div>
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="gmail" id="gmail" placeholder="Enter your gmail"/>
                            </div>
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="service_name" id="service_name" placeholder="Enter the service name"/>
                            </div>
                          
                            
                            
                         
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Submit"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="{{asset ('img/signup-image.jpg') }}" alt="sing up image"></figure>
                        
                    </div>
                </div>
            </div>
        </section>

       
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>