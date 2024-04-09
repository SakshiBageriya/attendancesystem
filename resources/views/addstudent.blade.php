<head>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body,
    form-control,
    textarea {
        font-family: "Poppins", sans-serif;
    }

    .container {
        position: relative;
        width: 100%;
        min-height: 100vh;
        padding: 2rem;
        background-color: #fafafa;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form {
        width: 100%;
        max-width: 820px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
        z-index: 1000;
        overflow: hidden;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    .contact-form {
        background-color: #77619e;
        position: relative;
    }

    .circle {
        border-radius: 50%;
        background: linear-gradient(135deg, transparent 20%, #149279);
        position: absolute;
    }

    .circle.one {
        width: 130px;
        height: 130px;
        top: 130px;
        right: -40px;
    }

    .circle.two {
        width: 80px;
        height: 80px;
        top: 10px;
        right: 30px;
    }

    .contact-form:before {
        content: "";
        position: absolute;
        width: 26px;
        height: 26px;
        background-color: #77619e;
        transform: rotate(45deg);
        top: 50px;
        left: -13px;
    }

    form {
        padding: 2.3rem 2.2rem;
        z-index: 10;
        overflow: hidden;
        position: relative;
    }

    .title {
        color: #fff;
        font-weight: 500;
        font-size: 1.5rem;
        line-height: 1;
        margin-bottom: 0.7rem;
    }

    .form-group {
        position: relative;
        margin: 1rem 0;
    }

    .form-control {
        width: 100%;
        outline: none;
        border: 2px solid #fafafa;
        background: none;
        padding: 0.6rem 1.2rem;
        color: #fff;
        font-weight: 500;
        font-size: 0.95rem;
        letter-spacing: 0.5px;
        border-radius: 5px;
        transition: 0.3s;
    }

    .form-control option {
        color: #333;
        /* Change the color to ensure visibility */
        background-color: rgba(255, 255, 255, 0.8);
        /* Adjust the alpha value (0.8) for transparency */
    }


    textarea.form-control {
        padding: 0.8rem 1.2rem;
        min-height: 150px;
        border-radius: 5px;
        resize: none;
        overflow-y: auto;
    }

    .form-group label {
        position: absolute;
        top: 50%;
        left: 15px;
        transform: translateY(-50%);
        padding: 0 0.4rem;
        color: #fafafa;
        font-size: 0.9rem;
        font-weight: 400;
        pointer-events: none;
        z-index: 1000;
        transition: 0.5s;
    }

    .form-group.textarea label {
        top: 1rem;
        transform: translateY(0);
    }

    .btn {
        padding: 0.6rem 1.3rem;
        background-color: #fff;
        border: 2px solid #fafafa;
        font-size: 0.95rem;
        color: #77619e;
        line-height: 1;
        border-radius: 5px;
        outline: none;
        cursor: pointer;
        transition: 0.3s;
        margin: 0;
        width: 100%;
    }

    .btn:hover {
        background-color: transparent;
        color: #fff;
    }

    .form-group span {
        position: absolute;
        top: 0;
        left: 25px;
        transform: translateY(-50%);
        font-size: 0.8rem;
        padding: 0 0.4rem;
        color: transparent;
        pointer-events: none;
        z-index: 500;
    }

    .form-group span:before,
    .form-group span:after {
        content: "";
        position: absolute;
        width: 10%;
        opacity: 0;
        transition: 0.3s;
        height: 5px;
        background-color: #77619e;
        top: 50%;
        transform: translateY(-50%);
    }

    .form-group span:before {
        left: 50%;
    }

    .form-group span:after {
        right: 50%;
    }

    .form-group.focus label {
        top: 0;
        transform: translateY(-50%);
        left: 25px;
        font-size: 0.8rem;
    }

    .form-group.focus span:before,
    .form-group.focus span:after {
        width: 50%;
        opacity: 1;
    }

    .contact-info {
        padding: 2.3rem 2.2rem;
        position: relative;
    }

    .contact-info .title {
        color: #77619e;
    }

    .text {
        color: #333;
        margin: 1.5rem 0 2rem 0;
    }

    .information {
        display: flex;
        color: #555;
        margin: 0.7rem 0;
        align-items: center;
        font-size: 0.95rem;
    }

    .information i {
        color: #1ABC9C;
    }

    .icon {
        width: 28px;
        margin-right: 0.7rem;
    }

    .social-media {
        padding: 2rem 0 0 0;
    }

    .social-media p {
        color: #333;
    }

    .social-icons {
        display: flex;
        margin-top: 0.5rem;
    }

    .social-icons a {
        width: 35px;
        height: 35px;
        border-radius: 5px;
        background: linear-gradient(45deg, #77619e, #4d3866);
        color: #fff;
        text-align: center;
        line-height: 35px;
        margin-right: 0.5rem;
        transition: 0.3s;
    }

    .social-icons a:hover {
        transform: scale(1.05);
    }

    .contact-info:before {
        content: "";
        position: absolute;
        width: 110px;
        height: 100px;
        border: 22px solid #77619e;
        border-radius: 50%;
        bottom: -77px;
        right: 50px;
        opacity: 0.3;
    }

    .big-circle {
        position: absolute;
        width: 500px;
        height: 500px;
        border-radius: 50%;
        background: linear-gradient(to bottom, #77619e, #77619e);
        /* Updated color */
        bottom: 50%;
        right: 50%;
        transform: translate(-40%, 38%);
    }

    .big-circle:after {
        content: "";
        position: absolute;
        width: 360px;
        height: 360px;
        background-color: #fafafa;
        /* Updated color */
        border-radius: 50%;
        top: calc(50% - 180px);
        left: calc(50% - 180px);
    }


    .square {
        position: absolute;
        height: 400px;
        top: 50%;
        left: 50%;
        transform: translate(181%, 11%);
        opacity: 0.2;
    }

    @media (max-width: 850px) {
        .form {
            grid-template-columns: 1fr;
        }

        .contact-info:before {
            bottom: initial;
            top: -75px;
            right: 65px;
            transform: scale(0.95);
        }

        .contact-form:before {
            top: -13px;
            left: initial;
            right: 70px;
        }

        .square {
            transform: translate(140%, 43%);
            height: 350px;
        }

        .big-circle {
            bottom: 75%;
            transform: scale(0.9) translate(-40%, 30%);
            right: 50%;
        }

        .text {
            margin: 1rem 0 1.5rem 0;
        }

        .social-media {
            padding: 1.5rem 0 0 0;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 1.5rem;
        }

        .contact-info:before {
            display: none;
        }

        .square,
        .big-circle {
            display: none;
        }

        form,
        .contact-info {
            padding: 1.7rem 1.6rem;
        }

        .text,
        .information,
        .social-media p {
            font-size: 0.8rem;
        }

        .title {
            font-size: 1.15rem;
        }

        .social-icons a {
            width: 30px;
            height: 30px;
            line-height: 30px;
        }

        .icon {
            width: 23px;
        }

        .form-control {
            padding: 0.45rem 1.2rem;
        }

        .btn {
            padding: 0.45rem 1.2rem;
        }
    }
    </style>
</head>

<body>

    @extends("layout.master")

    @section('content')
    <div class="container">

        <div class="form">
            <div class="contact-info">
                <h3 class="title">Add Student</h3>
                <p class="text">
                    Here You can Add Student as you need <br>
                    Thank You
                </p>
            </div>

            
            <div class="contact-form" style="margin-top: 20px;">
                <span class="circle one"></span>
                <span class="circle two"></span>
                <form action="./addstudent" method="post" style="color: white; font-weight: bold;">
                    {{ csrf_field()}}
                    <h2 class="add-student-heading">ADD STUDENT</h2>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="course">Course:</label>
                            <select id="course" name="cr" class="form-control">
                                <option value="">Select Course</option>
                                <?php $arr=DB::table("course")->get(); ?>
                                @foreach($arr as $values)
                                <option value="{{$values->coursename}}">{{$values->coursename}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div style="flex: 1;">
                            <label for="semester">Semester:</label>
                            <select id="semester" name="sem" class="form-control">
                                <option value="">Select Semester</option>
                                <?php $arr=DB::table("subject")->get(); ?>
                                @foreach($arr as $values)
                                <option value="{{$values->semester}}">{{$values->semester}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="btch">Batch:</label>
                            <select id="btch" name="btch" class="form-control">
                                <option value=""> Select Batch</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>

                        <div style="flex: 1;">
                            <label for="snm">Student Name:</label>
                            <input type="text" name="snm" value="" class="form-control">
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="fnm">Father's Name:</label>
                            <input type="text" name="fnm" value="" class="form-control">
                        </div>

                        <div style="flex: 1;">
                            <label for="mnm">Mother's Name:</label>
                            <input type="text" name="mnm" value="" class="form-control">
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="cont">Contact No.:</label>
                            <input type="text" name="cont" value="" maxlength="10" class="form-control">
                        </div>

                        <div style="flex: 1;">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" value="" class="form-control">
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; margin-bottom: 10px;">
                        <div style="flex: 1; margin-right: 10px;">
                            <label for="photo">Photo:</label>
                            <input type="file" name="aa" class="form-control">
                        </div>

                        <div style="flex: 1;">
                            <label for="pass">Password:</label>
                            <input type="text" name="pass" value="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Add Student" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection

</body>