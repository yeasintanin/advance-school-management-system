<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<style>
  

body {
    background: #79a6d2;
}
.corners { 
    background: #85adad;
    height: 500px;
    margin: 50px auto;
    max-width: 400px;
    line-height:25px;
    position: relative;
    width: 80%;
    font-family:arial; font-size:14px; font-weight:bold; padding:10px; padding-top:40px;
    -webkit-box-shadow: 0 1px 7px hsla(0,0%,0%,.2);
       -moz-box-shadow: 0 1px 7px hsla(0,0%,0%,.2);
            box-shadow: 0 1px 7px hsla(0,0%,0%,.2);
}

/* Corner Effect */
.corners:after,
.corners:before {
    background: #e6e6e6;
    content: '';
    height: 50px;
    position: absolute;
    top: -25px;
    width: 100px;
    -webkit-box-shadow: 0 5px 10px -7px hsla(0,0%,0%,.5);
       -moz-box-shadow: 0 5px 10px -7px hsla(0,0%,0%,.5);
            box-shadow: 0 5px 10px -7px hsla(0,0%,0%,.5);
}
.corners:after {
    left: -50px;
    -webkit-transform: rotate(-45deg);
       -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
         -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
}
.corners:before {
    right: -50px;
    -webkit-transform: rotate(45deg);
       -moz-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
         -o-transform: rotate(45deg);
            transform: rotate(45deg);
}

</style>

<div class="corners">
<h3  class="text-danger">Class will start within 10th January 2021.</h3>
</div>

</body>
</html>