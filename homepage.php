<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <style>
        body{
            padding: 0%;
            margin: 0%;
            background-color: rgb(45, 45, 46)

;
        }
       .hed img{
        width: 8%;
        position: absolute;
        top: 5px;
        left: 15px;
       }
       .hed .headtext{
        background-color:  rgb(182, 198, 214);
        position: relative;
        height: 50px;
        text-align: right;
        
       }
       .headtext ul{
        margin: 0px;
       }
       .headtext ul li{
        list-style-type: none;
        display: inline-block;
        /* margin-left: 10px; */
        margin-right: 8%;
        margin-top: 15px;
       }
       .headtext ul li a{
        text-decoration: none;
        color: #c50f9aa4;
        font-size: 18px;
        font-weight: 600;
        transition-duration: .3s;
       }
       .headtext ul li a:hover{
        color: azure;
       }
       .intro .shapeone{
        position: relative !important;
        background-color: rgb(151, 159, 167);
        height: 400px;
        width: 400px;
        top: 15%;
        
       }
       .intro .shapeone img{
        width: 100%;
        position: absolute;
        left: 0%;
        /* top: 10%; */
        /* right: 50%; */
       }
       .overlay {
  position: absolute !important;
  bottom: 0;
  left: 100%;
  right: 0;
  background-color: #75a5f7;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}
.overlay2{
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #d444b3;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}
.intro{padding-bottom: 100px !important;}

.container .shapeone:hover .overlay {
  width: 100%;
  left: 0;
}
.container .shapeone:hover .overlay2 {
  width: 100%;
  
}

.text a {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  white-space: nowrap;
  text-decoration: none;
}
h2{
    color: #75a5f7;
    /* margin-top: 5%; */
    padding-top: 3%;
    text-align: center;
    font-size: 50px;
    font-weight: 800;
    font-style: oblique

}
    </style>
  </head>
  <body>
    <section class="hed">
        <header>
            <div class="headtext">
                <ul>
                    <li><img src="images/pngegg_11.png"></li>
                   
                
                </ul>

            </div>
        </header>
    </section>

    <section class="intro">

        <div class="container text-center">
            <h2> WELECOME TO OUR HOME PAGE</h2>
            <div class="row">
                <div class="col-xl col-lg ">
                    <div class="shapeone">
                        <img src="images/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIyLTA2L3Y5MzItbmluZy01NS14LmpwZw.jpg">
                        <div class="overlay">
                                <div class="text"><a href="home.php">GO TO POST PAGE  <i class="fa-solid fa-arrow-right-long fa-beat"></i>  </a>  
                            </div>
                    </div>
                </div>
                </div>
                <div class="col-xl col-lg">
                    <div class="shapeone">
                        <img src="images/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvdjkzMi1uaW5nLTQ0XzEta2xidW5va3MuanBn.jpg">
                        <div class="overlay2">
                            <div class="text"><a href="comment.php">GO TO COMMENT PAGE <i class="fa-solid fa-arrow-right-long fa-beat"></i>  </a>  
                            </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
  
</html>