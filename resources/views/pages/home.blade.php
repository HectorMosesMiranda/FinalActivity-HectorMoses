@extends('layouts.default')

@section('content')

<head>
  <meta charset="utf-8">
  <title>AboutMe</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  
  <style>

    body{
      margin: 0;
      background-color: black;
    }

    *{
      box-sizing: border-box;
    }

    .box {
      padding: 0px;
      margin: 0px;
    }


    .row:after {
      content: "";
      display: table;
      clear: both
    }

    .columnL {
      float: left;
      width: 66%;
      padding: 20px;
      -webkit-text-stroke: 0.5px #778899;
      color: #999999
    }

    .columnR {
      float: left;
      width: 90%;
      padding: 20px;
    }


    .BigText{
      margin:20px;
      font-size: 30px;
      color: #808000;
    }

    .columnL p{
      font-size: 25px;
      color: #999999;
      position: relative;
      text-align: center;
    }

    .columnL li{
      font-size: 25px;
      font-weight: bold;
      text-transform: uppercase;
      text-decoration: underline;
    }


    .columnR img{
      overflow: hidden;
      box-shadow:0 0 50px #808000;
      border-radius: 10px;
      display: block;
      height: 80%;
      width: 100%;
    }

    .Profile{
      position: relative;
      text-align: center;
    }
    .Profile ul{
      list-style: none;
      justify-content: center;

    }
    ul{
      display: flex;

    }

    ul li{
      position: relative;
      display: block;
      color: #666;
      font-size: 50px;
      height: 80px;
      width: 80px;
      background: #171515;
      line-height: 80px;
      margin: 0 20px;
      border-radius: 50%;
      cursor: pointer;
    }
    ul li::before{
      position: absolute;
      content: '';
      top: 0;
      left: 0;
      background: #d35400;
      height: 100%;
      width: 100%;
      border-radius: 50%;
      z-index: -1;
      transform: scale(0.9);
      transition: .5s;
    }

    ul li:hover::before{
      filter: blur(4px);
      transform: scale(1.3);
      box-shadow: 0 0 15px #d35400;
    }

    ul li:hover{
      color: #ffa502;
      box-shadow: 0 0 15px #d35400;
      text-shadow: 0 0 15px #d35400;
    }

    .Profile img{
      width: 100%;
      height: 750px;
    }
    .h1Text{
      color: #FFFAF0;
      text-align: center;
      display: block;
      bottom: 350px;
      left: 40px;
      position: relative;
      font-style: italic;
      font-size: 120%;
    }

    .paragraph{
      color: #999999;
      position: relative;
      text-align: center;
      
    }

    p{
      font-size: 30px;
    }

    h1{
      font-size: 50px;
    }
    .gallery{
      position: relative;
      height: auto;
      width: 90%;
      margin: auto;
      padding: 45px 0;
      display: grid;
      grid-template-columns: auto auto auto auto;
      grid-gap: 2vh;
      grid-auto-flow: dense;
    }

    .row{
      position: relative;
      height: auto;
      width: 90%;
      margin: auto;
      padding: 45px 0;
      display: grid;
      grid-template-columns: auto auto auto;
      grid-gap: 2vh;
      grid-auto-flow: dense;
      
    }



    .galImg{
      position: relative;
      height: 100%;
      width: 100%;
      overflow: hidden;
      box-shadow:0 0 15px #d35400;
      border-radius: 10px;
    }
    .galImg:first-child{
      grid-column-start: span 2;
      grid-row-start: span 3;
    }

    .galImg:nth-child(2n+3){
      grid-row-start: span 3;
    }
    .galImg:nth-child(4n+5){
      grid-column-start: span 2;
      grid-row-start: span 2;
    }

    .galImg:nth-child(6n+7){
      grid-row-start: span 1;
    }
    .galImg:nth-child(8n+9){
      grid-column-start: span 1;
      grid-row-start: span 1;
    }
    .galImg img{
      height: 100%;
      width: 100%;
      object-fit: cover;
      filter: brightness(0.5)grayscale(1);
      transition: 0,3s;
    }

    .galImg img:hover{
      filter:brightness(1)grayscale(0);

    }

    .bLinks{
      padding-top: 20px;
      border: 2px solid;
      border-color: #FFA07A;
      border-radius: 50px;
      background-color: #1a1a1a;
      font-size: 200%;
      text-align: center;
    }

    .bLinks a{
      text-decoration: none;
      color:#FFA07A;
      -webkit-text-stroke: 0.8px black;
    }
    .bLinks a:hover{
      background-color: red;
    }

    nav a{
     margin-right: 20px;
    }



    @media only screen and (max-width: 300px) {
      .h1Text {
      font-size: 120%;
      }
    }

    @media screen and (max-width: 800px) {
      .gallery {
        flex: 50%;
        max-width: 50%;
      }
    }

    @media screen and (max-width: 600px) {
      .gallery {
        flex: 100%;
        max-width: 100%;
      }
    }

    .h1Text h1, h2{
      -webkit-text-stroke: 1px orange;
    }


    @media screen and (max-width: 1000px) {
      .columnR,
      .columnL{
        width: 100%;
        text-align: center;
      }
      img {
        margin: auto;
      }
    }
    </style>

</head>
<body>

  <div class="Profile">
    <img src="Image/profile.jpg" alt="">

    <ul>
      <li><a class="fa fa-instagram" href="https://www.instagram.com/mssmrnd/"></a></li>
      <li><a class="fa fa-twitter" href="https://twitter.com/mosesmiranda50"></a></li>
      <li><a class="fa fa-facebook" href="https://www.facebook.com/moses.miranda.186"></a></li>
    </ul>

      <br>
      <br>
      <br>
      <br>
      <h2>I AM HECTOR MOSES B. MIRANDA</h2>
    
  </div>

  <div class="box">
      <div class="columnL">
        <h1 class="BigText">PERSONAL SKILLS</h1>
        <br><br><br><br>
        <li>Flexible and Adaptable</li>
        <br><br>
        <li>Physically strong </li>
        <br><br>
        <li>Disciplined</li>
        <br><br>
        <li>Hardworking</li>
        <br><br><br>


        <h1 class="BigText">EDUCATION</h1>
        <br><br><br><br>
        <li>Saint Michael College - Cantilan Surigao Del Sur</li>
        <br><br>
        <li>Nagpayong High School - Centennial IIB, Nagpayong Pinagbuhatan Pasig City </li>
        <br><br>
        <li>AMA Computer College Pasig Campus - Pasig City,Metro Manila</li>
        <br><br>
        <li>Pamantasan ng Lungsod ng Pasig – Pasig City, Metro Manila</li>
        <br><br><br>

        <h1 class="BigText">WORK EXPERIENCE</h1>
        <br><br><br><br>
        <li>Teleperformance Company Edsa Shaw – COSTUMER SERVICE REPRESENTATIVE (3 MONTHS) </li>






      </div>
    </div>
  </div>

  <div class="paragraph">
    <p>Currently a student of Pamantasan ng Lungsod ng Pasig, BSCS3A. 21 years old. <br>
    In this section, You the reader will get the chance to know me, who I am or what I am look like<br><br>
    Click on the image to download my Resume: <br> <br> <br></p>
    <a href="Image/Hector-Moses-MIranda-Resume.docx">
    <img src="Image/resume.png" alt=""> <br> <br> <br>
    </a>
  </div>
  <div class="gallery">
      <div class="galImg">
        <img src="Image/7.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/2.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/9.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/4.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/10.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/6.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/1.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/8.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/5.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/3.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/11.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/12.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/13.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/14.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/15.jpg" alt="">
      </div>
      <div class="galImg">
        <img src="Image/16.jpg" alt="">
      </div>

  </div>


 <h1 class="paragraph">MY HOBBIES</h1>
   <div class="row">
    <div class="galImg">
      <img src="Image/hb1.jpg" alt="">
    </div>

    <div class="galImg">
      <img src="Image/hb2.jpg" alt="">
    </div>

    <div class="galImg">
      <img src="Image/hb3.jpg" alt="">
    </div>
    <div class="galImg">
      <img src="Image/hb4.jpg" alt="">
    </div>
    <div class="galImg">
      <img src="Image/hb5.jpg" alt="">
    </div>
    <div class="galImg">
      <img src="Image/h6.jpg" alt="">
    </div>
    <div class="galImg">
      <img src="Image/hb7.jpg" alt="">
    </div>

    <div class="galImg">
      <img src="Image/hb8.jpg" alt="">
    </div>
    </div>

  <br>


  </body>
</html>

@stop
