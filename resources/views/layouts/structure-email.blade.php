<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style type="text/css">
        .email-container{
            width:90%;
            padding:5px;
            border-radius:10px;
            text-align:center;
            font-family: 'Arial', sans-serif;
            background-color: rgb(206, 205, 205);
            color:rgb(18, 22, 37);
        }
        @media (min-width: 640px){
            h1{
                font-size:20px;
            }
            p{
                font-size:1rem;
            }
            .email-container{
                width:100%;
                padding:20px;
            }
        }
        
        @media (min-width: 900px){
            h1{
                font-size:40px;
            }
            p{
                font-size:1.5rem;
            }
            .email-container{
                width:90%;
                margin:0 auto;
                padding:10px;
            }
        }
        
        @media (min-width: 1800px){
            h1{
                font-size:50px;
            }
            p{
                font-size:2rem;
            }
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>