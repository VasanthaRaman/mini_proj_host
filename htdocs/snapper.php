<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title> Image Submission</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="colorib-regform-4/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="colorib-regform-4/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="colorlib-regform-4/css/main.css" rel="stylesheet" media="all">
<script type='text/javascript'>
// function preview_image(event,idd) 
// {
//  var reader = new FileReader();
//  if(idd=="file1"){
//  reader.onload = function()
//  {
//   var output = document.getElementById('output_image1');
//   output.src = reader.result;
//  }
//  reader.readAsDataURL(event.target.files[0]);
// }
//  if(idd=="file2"){
//  reader.onload = function()
//  {
//   var output = document.getElementById('output_image2');
//   output.src = reader.result;
//  }
//  reader.readAsDataURL(event.target.files[0]);
// }
// }

// function fna()
// {
//     alert("Check file format");
// }
// function inss(vall) {
//             // body...
//             document.getElementById('op').innerHTML=vall;
//         }
// function mt() {
//     // body...
//      document.getElementById('ifff').hidden=false;
// }


</script>
 <style>



#output_image1,#output_image2
{
 max-width:100px;
}

#container {
    margin: 0px auto;
    width: 400px;
    height: 275px;
    border: 10px #333 solid;
}
#videoElement {
    width: 400px;
    height: 275px;
    background-color: #666;
}
</style>

</head>
<body>
     <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title" align="center">Image Capture</h2>
                    <form action="miniproj.php" method="POST">
                        <!-- <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Image 1 Upload</label>
                                 
                                    
                                        <input  name="file1" id="file1" type="file" accept="image/*" onchange="preview_image(event,this.id)">
                                        <img id="output_image1"/>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Image 2 Upload</label>
                                 
                                     
                                        <input  name="file2" id="file2" type="file" accept="image/*" onchange="preview_image(event,this.id)">
                                        <img id="output_image2"/>
                            
                                </div>
                            </div>
                        </div> -->
     					<center>
                        <div class="p-t-15">
                            
                                 <video autoplay="true" id="videoElement">
                                </video>
                            
                            <canvas width="400" height="275" id="canvass" style="background-color: blue" hidden="true"></canvas>
                            <br>
                            <button type="button" class="btn btn--radius-2 btn--blue" id="snapp" onclick="snap()">Take screenshot</button>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                        <div class="p-t-15">
                            <input type="text" name="datt" id="datt" hidden="true" />
                            <p id="op"> </p>
                        </div>
                    	</center>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

  </body>
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

<!-- <body>
 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
 	Image upload: <input type="file" name="file1" id="file1"> <br>
    Image upload: <input type="file" name="file2" id="file2"> <br>
             <button>submit</button>
</form>
</body> -->
    <script>
var video = document.querySelector("#videoElement");
//var canvas = document.querySelector('canvas');
var canvas = document.getElementById('canvass');
var context = canvas.getContext('2d');
        // Define some vars required later
    var w, h, ratio;

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
      ratio = video.videoWidth / video.videoHeight;
            // Define the required width as 100 pixels smaller than the actual video's width
            w = video.videoWidth - 100;
            // Calculate the height based on the video's width and the ratio
            h = parseInt(w / ratio, 10);
        canvas.width = 400;
        canvas.height =275;
    })
    .catch(function (err0r) {
     // console.log("Something went wrong!");
     window.alert("err");
    });
}

video.addEventListener('loadedmetadata', function() {
            // Calculate the ratio of the video's width to height
            //ratio = video.videoWidth / video.videoHeight;
            // Define the required width as 100 pixels smaller than the actual video's width
            //w = video.videoWidth - 100;
            // Calculate the height based on the video's width and the ratio
            //h = parseInt(w / ratio, 10);
            // Set the canvas width and height to the values just calculated
            //canvas.width = 100;
            //canvas.height = 200;          
        }, false);

function snap() {
            // Define the size of the rectangle that will be filled (basically the entire element)
            window.alert("Clicked! Take a picture again or Press submit to continue.");
            canvas.hidden=false;
            context.fillRect(0, 0, 400, 275);
            // Grab the image from the video
            context.drawImage(video, 0, 0,400, 275);
            var dat = document.getElementById('datt');
            var myImage = canvas.toDataURL("image/png"); 
            dat.value=canvas.toDataURL("image/png");  
        }
</script>
</html>
