<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Course</title>

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
                        <h2 class="form-title">Add Course</h2>
                        <form action="add" method="POST" class="register-form" id="register-form" >
                        @csrf
                        <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="course_name" id="course_name" placeholder="Enter the course name"/>
                            </div>
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="course_price" id="course_price" placeholder="Enter the course price"/>
                            </div>
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="duration" id="duration" placeholder="Enter the course duration"/>
                            </div>
                            <div class="form-group">
                                <label for="name"></label>
                                <input type="text" name="discount" id="discount" placeholder="Enter the discount"/>
                            </div>
                            <div class="form-group">
                            <input type="radio" id="html" name="status" value="Active">
                          <label for="Active">Active</label>
                            </div>
                            <div class="form-group">
                          <input type="radio" id="css" name="status" value="Deactive">
                       <label for="Deactivate">Deactivate</label>
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