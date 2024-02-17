<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Protest+Guerrilla&display=swap');
        .contain {
            width: 100%;
            height: 750px;
            background-color: rgb(0,8,135);
            overflow: hidden;

        }

        .contain .header {
            width: 100%;
            height: 100px;
            background-color: rgb(0,8,135);
            display: flex;
            justify-content: space-between;
            position: fixed;
        }

        .contain .header .logo {
            width: 10%;
            height: 100px;
            /* background-color: red; */
            display: flex;
            align-items: center;
            justify-content: center;
            margin-left: 50px;
        }

        .contain .header .logo b {
            font-family: "Protest Guerrilla", sans-serif;
            font-weight: 400;
            font-style: normal;
            font-size: 30px;
            color: white;
        }

        .contain .header .nav {
            width: 30%;
            height: 100px;
            /* background-color: red; */
            align-items: center;
            justify-content: center;
            display: flex;
            margin-right: 5%;

        }

        .contain .header .nav ul {
            list-style: none;

        }

        .contain .header .nav ul li {
            display: inline-block;
            margin-left: 30px;

        }

        .contain .header .nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 20px;
            font-family: "Protest Guerrilla", sans-serif;
            font-weight: 400;
            font-style: normal;
        }
        .contain .header .nav ul li a:hover{
            text-decoration: underline;
            text-underline-offset: 10px;
        }
        .contain .textbox {
            width: 40%;
            height: 500px;
            /* background-color: black; */
            margin-top: 10%;

        }
        .contain .textbox .bopen{
            width: 40%;
            height: 80px;
            border-radius: 20px;
            background-color: black;
            margin-left: 30%;
            margin-top: 10%;
            cursor: pointer;
            transition: 2s;
        }
        .contain .textbox .bopen:hover{
            transition: 2s;
            background-color: #ED51C2;
        }
        .contain .textbox .bopen b{
            font-size: 50px;
            text-align: center;
            justify-content: center;
            display: flex;
            /* color: #ED51C2; */
            transition: 1s;
        }
        .contain .textbox .bopen b a{
            color:#ED51C2;
            text-decoration: none;
            
        }
        .contain .textbox .bopen b a:hover{
            transition: 1s;
            color: white;
        }
        .contain .textbox h1 b {
            font-size: 90px;
            font-weight: 7000;
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
        }

        .imgbox {
            width: 60%;
            height: 600px;
            /* background-color: red; */
            margin-top: -29.5%;
            margin-left: 46%;

        }

        .imgbox img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            position: absolute;
        }

        @keyframes moveup {
            100% {
                opacity: 1;
                transform: translateX(0);
                animation: moveup 0.8s linear forwards;
            }
        }

        .imgbox {
            opacity: 0;
            transform: translateY(70px);
            animation: moveup 0.8s linear forwards;
        }

        @keyframes moveup {
            100% {
                opacity: 1;
                transform: translateY(0);
                animation: moveup 0.3s linear forwards;
            }
        }

        .tb1 {
            opacity: 0;
            transform: translateY(30px);
            animation: moveup 0.3s linear forwards;
        }

        @keyframes moveup {
            100% {
                opacity: 1;
                transform: translateY(0);
                animation: moveup 0.6s linear forwards;
            }
        }

        .tb2 {
            opacity: 0;
            transform: translateY(60px);
            animation: moveup 0.6s linear forwards;
        }

        @keyframes moveup {
            100% {
                opacity: 1;
                transform: translateY(0);
                animation: moveup 0.9s linear forwards;
            }
        }

        .tb3 {
            opacity: 0;
            transform: translateY(30px);
            animation: moveup 0.9s linear forwards;
        }

        .nava {
            opacity: 0;
            transform: translateY(0);
            animation: moveright 0.3s linear forwards;
        }

        @keyframes moveright {
            100% {
                opacity: 1;
                transform: translateX(30px);
                animation: moveright 0.3s linear forwards;
            }
        }

        .nava1 {
            opacity: 0;
            transform: translateY(0);
            animation: moveright 0.6s linear forwards;
        }

        @keyframes moveright {
            100% {
                opacity: 1;
                transform: translateX(30px);
                animation: moveright 0.6s linear forwards;
            }
        }

        .nava2 {
            opacity: 0;
            transform: translateY(0);
            animation: moveright 0.9s linear forwards;
        }

        @keyframes moveright {
            100% {
                opacity: 1;
                transform: translateX(30px);
                animation: moveright 0.9s linear forwards;
            }
        }

        .nava3 {
            opacity: 0;
            transform: translateY(0);
            animation: moveright 1.2s linear forwards;
        }

        @keyframes moveright {
            100% {
                opacity: 1;
                transform: translateX(30px);
                animation: moveright 1.2s linear forwards;
            }
        }

        .nava4 {
            opacity: 0;
            transform: translateY(0);
            animation: moveright 1.4s linear forwards;
        }

        @keyframes moveright {
            100% {
                opacity: 1;
                transform: translateX(30px);
                animation: moveright 1.4s linear forwards;
            }
        }

        .contain1 {
            width: 100%;
            height: 900px;
            background-color: white;
        }

        .contain1 .con1-r1 {
            width: 100%;
            height: 30%;
            /* background-color: red; */
            text-align: center;
            justify-content: center;
            /* display: flex; */
        }

        h1 {
            margin-top: 40px;
            font-size: 70px;
            font-weight: 7000;
        }

        .contain1 .con1-r2 {
            height: 80%;
            width: 100%;
            /* background-color: red; */
            margin-top: -10%;
            display: flex;
        }

        .contain1 .con1-r2 .r2-le2 {
            width: 70%;
            height: 100%;
            /* background-color: #1C1C37; */
        }

        .contain1 .con1-r2 .r2-le2 .btl {
            width: 60%;
            height: 100%;
            /* background-color: black; */
            margin-left: 20%;
            text-align: center;
            justify-content: center;
        }
        .text{
            width: 100%;
            /* background-color: #ED51C2; */
            margin-top: -70%;
        }
        .text p{
            font-size: 20px;
        }
        .text h1{
            font-size: 20px;
            font-weight: 3000;
            color: blue;
        }
        .contain1 .con1-r2 .r2-le2 .btl img {
            width: 70%;
            height: 60%;

        }

        .contain1 .con1-r2 .r2-le2 .btl img  {
            font-size: 70px;
            color: black;
        }

        .contain1 .con1-r2 .r2-ri2 {
            width: 70%;
            height: 100%;
            /* background-color: pink; */
        }

        .contain1 .con1-r2 .r2-ri2 .btr {
            width: 60%;
            height: 100%;
            /* background-color: black; */
            margin-left: 20%;
            text-align: center;
            justify-content: center;
        }

        .contain1 .con1-r2 .r2-ri2 .btr img {
            width: 70%;
            height: 60%;

        }

        .contain1 .con1-r2 .r2-ri2 .btr img p {
            font-size: 70px;
            color: black;
        }
        .con1-r3{
            width: 100%;
            /* background-color: #1C1C37; */
            margin-top: -10%;
            text-align: center;
            justify-content: center;
        }
        .contact{
            width: 8%;
            height: 34px;
            background-color: #ED51C2;
            margin: auto;
            border-radius: 20px;
            text-align: center;
            justify-content: center;
            display: flex;
        }
        .con1-r3 h1{
            font-size: 30px;
        }
        .contact a{
            text-decoration: none;
            font-size: 20px;
            color: white;
        }
        .contain2{
            width: 100%;
            height: 1000px;
            background-color: rgb(0,8,135);
            display: flex;
        }
        .contain2 .con2-l2{
            width: 60%;
            height: 100%;
            /* background-color: #ED51C2; */
        }
        .contain2 .con2-l2 .img{
            width: 70%;
            height: 80%;
            /* background-color: blanchedalmond; */
            float: right;
            margin-right: 50px;
            margin-top: 10%;
        }
        .contain2 .con2-l2 .img img{
            width: 100%;
            height: 100%;
        }
        .contain2 .con2-r2{
            width: 40%;
            height: 100%;
            /* background-color: blueviolet; */
        }
        .contain2 .con2-r2 .text-top{
            width: 60%;
            height: 80px;
            /* background-color: #ED51C2; */
            margin: auto;
            margin-top: 15%;
        }
        .contain2 .con2-r2 .text-top b{
            font-size: 50px;
            text-align: center;
            justify-content: center;
            display: flex;
            color: white;
        }
        .contain2 .con2-r2 .text-1{
            width: 100%;
            height: 150px;
            /* background-color: #ED51C2; */
            display: flex;
            margin-top: 5%;
        }
        .contain2 .con2-r2 .text-1 .num{
            width: 20%;
            height: 100%;
            /* background-color: black; */
            justify-content: center;
            text-align: center;
            display: flex;
        }
        .contain2 .con2-r2 .text-1 .num b{
            font-size: 100px;
            color:#ED51C2;
        }
        .contain2 .con2-r2 .text-1 .con2-text{
            width: 48%;
            height: 100%;
            /* background-color: blue; */
        }
        .contain2 .con2-r2 .text-1 .con2-text b{
            font-size: 25px;
            color: white;
        }
        .hidden{
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s;
        }
        .show{
            opacity: 1;
            transform: translateY(0);
                
        }
        .hiddeni{
            opacity: 0;
            transform: translateY(30px);
            transition: all 1.5s;
        }
        .showi{
            opacity: 1;
            transform: translateY(0);
                
        }
        .hiddenii{
            opacity: 0;
            transform: translateY(30px);
            transition: all 2s;
        }
        .showii{
            opacity: 1;
            transform: translateY(0);
                
        }
        .hiddeniii{
            opacity: 0;
            transform: translateY(30px);
            transition: all 2.5s;
        }
        .showiii{
            opacity: 1;
            transform: translateY(0);
                
        }
    </style>
</head>

<body>
    <div class="contain">
        <div class="header">
            <div class="logo"><b>MYBD</b></div>
            <div class="nav">
                <ul>
                    <li class="nava"><a href="">About</a></li>
                    <li class="nava1"><a href="">Blog</a></li>
                    <li class="nava2"><a href="">Service</a></li>
                    <li class="nava3"><a href="">Contact</a></li>
                    <li class="nava4"><a href="../sql/1.php" target="_blank"><i class="fa-solid fa-user"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="textbox" >
            <h1><b class="tb1">BIG DATA</b> <b class="tb2">FOR BIG </b> <b style="color: #ED51C2;" class="tb3">SUCCESS</b></h1>
            <div class="bopen">
            <b><a href="../sql/1.php" target="_blank">EXPORE</a></b>
        </div>
        </div>
        
        <div class="imgbox">
            <img src="./img/pngwing.com.png" alt="">
        </div>
    </div>
    <div class="contain1">
        <div class="con1-r1">
            <h1 class="hidden">What we’re good at?</h1> <br>
            <p class="hiddeni">We believe in your success and that big data can help you achieve <br> the best results for your business, regardless of your field or target <br> market. </p>

        </div>
        <div class="con1-r2">
            <div class="r2-le2">
                <div class="btl">
                    <img src="./img/icon1-YBgxRLPwRBUvalQv.svg" alt="" class="hidden">
                    <div class="text">
                    <h1 class="hiddeni">Big Data <br>
                        Consulting</h1>
                    <p class="hiddeni">Sometimes you need to look far to see close. Our <br> experts help you make sense of big data. </p>
                    </div>
                </div>

            </div>
            <div class="r2-ri2">
                <div class="btr">
                    <img src="./img/icon2-d956kWb9Jkty1zP4.svg" alt="" class="hidden">
                    <div class="text">
                    <h1 class="hiddeni">Data Infrastructure <br> & Engineering</h1>
                    <p class="hiddeni">It's not enough to have data, you also need to <br> have the right tools to manage it day-to-day. </p>
                    </div>
                </div>
            </div>
            <div class="r2-le2">
                <div class="btl">
                    <img src="./img/icon3-mxB9PEqbP5Ta5rkg.svg" alt="" class="hidden">
                   <div class="text">
                   <h1 class="hiddeni">Data Analytics</h1> <br>
                    <p class="hiddeni">Sometimes you need to look far to see close. Our <br> experts help you make sense of big data. </p>
                   </div>
                </div>

            </div>
            <div class="r2-ri2">
                <div class="btr">
                    <img src="./img/icon4-dOq0RrLp8LTPNrN9.svg" alt="" class="hidden">
                    <div class="text"><h1 class="hiddeni">Data Visualization</h1> <br>
                    <p class="hiddeni">It's not enough to have data, you also need to <br> have the right tools to manage it day-to-day. </p></div>
                </div>
            </div>
        </div>
        <div class="con1-r3">
        <h1 class="hiddeni">Let us help you</h1>
                    <div class="contact" class="">
                        <a href="#" class="hiddenii">Contact</a>
                    </div>

        </div>                
    </div>
    <div class="contain2">
        <div class="con2-l2">
            <div class="img">
            <img src="./img/approach-m6L1p88KZrclGlpD.avif" alt="">
            </div>
        </div>
        <div class="con2-r2">
            <div class="text-top">
                <b>Our approach</b>
            </div>
            <div class="text-1" >
                <div class="num">
                    <b class="hidden">1</b>
                </div>
                <div class="con2-text">
                <b class="hidden">Business Challenge Review</b> <br> 
                <p style="color: white;" class="hidden">We help you realize the biggest challenges you're facing. </p>
                </div>
            </div>
            <div class="text-1">
                <div class="num">
                    <b class="hiddeni">2</b>
                </div>
                <div class="con2-text">
                <b class="hiddeni">Business Challenge Review</b> <br> 
                <p style="color: white;" class="hiddeni">We help you realize the biggest challenges you're facing. </p>
                </div>
            </div>
            <div class="text-1">
                <div class="num">
                    <b class="hiddenii">3</b>
                </div>
                <div class="con2-text">
                <b class="hiddenii">Business Challenge Review</b> <br> 
                <p style="color: white;" class="hiddenii">We help you realize the biggest challenges you're facing. </p>
                </div>
            </div>
            <div class="text-1">
                <div class="num">
                    <b class="hiddeniii">4</b>
                </div>
                <div class="con2-text">
                <b class="hiddeniii">Business Challenge Review</b> <br> 
                <p style="color: white;" class="hiddeniii">We help you realize the biggest challenges you're facing. </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    const observer= new IntersectionObserver((entries)=>{
        entries.forEach((entry)=>{
            console.log(entry);
            if(entry.isIntersecting){
                entry.target.classList.add('show');
            }
        });
    });
    const hiddenElement= document.querySelectorAll('.hidden');
    hiddenElement.forEach((el)=>observer.observe(el));


    const observer1= new IntersectionObserver((entries)=>{
        entries.forEach((entry)=>{
            console.log(entry);
            if(entry.isIntersecting){
                entry.target.classList.add('showi');
            }
        });
    });
    const hiddenElement1= document.querySelectorAll('.hiddeni');
    hiddenElement1.forEach((el1)=>observer1.observe(el1));
    

    const observer2= new IntersectionObserver((entries)=>{
        entries.forEach((entry)=>{
            console.log(entry);
            if(entry.isIntersecting){
                entry.target.classList.add('showii');
            }
        });
    });
    const hiddenElement2= document.querySelectorAll('.hiddenii');
    hiddenElement2.forEach((el2)=>observer2.observe(el2));
    

    const observer3= new IntersectionObserver((entries)=>{
        entries.forEach((entry)=>{
            console.log(entry);
            if(entry.isIntersecting){
                entry.target.classList.add('showiii');
            }
        });
    });
    const hiddenElement3= document.querySelectorAll('.hiddeniii');
    hiddenElement3.forEach((el3)=>observer3.observe(el3));
</script>