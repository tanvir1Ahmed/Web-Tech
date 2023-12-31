<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        .price {
            margin-top: 0px;
            margin-left: 1180px;
        }

        .course_box {
            margin: 10px;
            padding: 10px;
            background: linear-gradient(rgba(148, 130, 118, 0.5),rgb(148, 130, 118, 0.5)),url('Image/d.jpg');
            width: 90%;
            height: 300px;
            border-radius: 20px;
            border: 5px solid black;
            color: black;
            background-size: cover;
            background-position: center;
        }
        .course_box:hover {
            overflow-y: scroll; 
        }

        .course_box::-webkit-scrollbar {
            width: 12px;
        }

        .course_box::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 6px;
        }

        .course_box::-webkit-scrollbar-track {
            background-color: #eee;
            border-radius: 8px;
        }

        .container {
            overflow-y: scroll;
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.4)), url("Image/education1.jpg");
            background-position: center;
            background-size: cover;
            position: fixed;
            background-repeat: no-repeat;
        }

        .title {
            font-family: "Trirong", serif;
            font-size: 60px;
            text-shadow: 3px 3px 3px #ababab;
        }

        .teacher{
            margin-top: -42px;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>

        </header>
        <main>
            <div class="course_box">
                <u><h1 class="title">Course name</h1></u>
                <h1 class="price">Price</h1>
                <h3 class="teacher">Course Teacher</h3>
                <h1>Course description</h1>
                <h6>Publish Date</h6>
            </div>
            
        </main>
        <footer>

        </footer>
    </div>

</body>

</html>