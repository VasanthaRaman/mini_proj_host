
<?php
	 // if ($_SERVER["REQUEST_METHOD"] == "POST") 
	 // {
	// 	//require_once("mmm.php");
 //         $target_dir = "";
 //         $fileName1 = basename($_FILES["file1"]["name"]);
 //         $fileName2 = basename($_FILES["file2"]["name"]);
 //         $fileType1 = pathinfo($fileName1,PATHINFO_EXTENSION);
 //         $fileType2 = pathinfo($fileName2,PATHINFO_EXTENSION);
 //         //echo $fileName1.",,,".$fileName2.",,,,".$fileType1;
 //         $ff=$fileName1;
 //         // $targetFilePath1 = $target_dir . 'f1.' . $fileType1;
 //         // $targetFilePath2 = $target_dir . 'f2.' . $fileType2;
 //         $targetFilePath1 = $target_dir . 'f1.' . 'jpg';
 //         $targetFilePath2 = $target_dir . 'f2.' . 'jpg';
 //        // echo $targetFilePath1.",,,,".$targetFilePath2;
 //         $uploadOk = 1;
 //         // $fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
 //         // $fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);
 //         $allowtypes=array('jpg','png','bmp','tiff');
 //         if(in_array($fileType1, $allowtypes) && in_array($fileType2, $allowtypes))
 //           {
 //            	if(move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath1))
 //               	 {
 //                      echo "file1 uploaded";
 //                 }
 //                 else
 //                  {
 //                	  echo "file1 upload failed";
 //                  }
 //                  if(move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePath2))
 //               	 {
 //                      echo "file2 uploaded";
 //                 }
 //                 else
 //                  {
 //                	  echo " file2 upload failed";
 //                  }
 //                  require_once("mmm.php");
 //            }
 //            else
 //            {
 //                echo "chk file format"; echo "<script type='text/javascript'>alert('Check file format');</script>";
 //            }                

	// }
?>
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

    function fff(datta){
        // body...
       // alert("sadad");
     var output = document.getElementById('output_image1');
    output.src = datta; 
 //    var reader = new FileReader();  
 //    reader.onload = function()
 // {
 //  var output = document.getElementById('output_image1');
 //  output.src = reader.result;
 //  window.alert(reader.result);
 // }
 // reader.readAsDataURL(datta);
    }
function preview_image(event,idd) 
{
 var reader = new FileReader();
 if(idd=="file1"){
 reader.onload = function()
 {
  var output = document.getElementById('output_image1');
  output.src = reader.result;
  //window.alert(reader.result);
 }
 reader.readAsDataURL(event.target.files[0]);
 //alert(event.target.files[0]);
 document.getElementById("opop").value="changed";
}
 if(idd=="file2"){
 reader.onload = function()
 {
  var output = document.getElementById('output_image2');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
}

function fna()
{
    alert("Check file format");
}
function inss(vall) {
            // body...
            document.getElementById('op').innerHTML=vall;
        }
function mt() {
    // body...
     document.getElementById('ifff').hidden=false;
}
</script>
 <style>



#output_image1,#output_image2
{
 max-width:100px;
}
</style>

</head>
<body>
     <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title" align="center">Image Submission</h2>
                    <form action="validi.php" method="POST" enctype="multipart/form-data" target="dd">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Image 1 Upload (Leave as such to use webcam picture) </label>
                                   <!-- <input class="input--style-4" type="file" name="file1" id="file1" required> -->
                                        
                                        <input  name="file1" id="file1" type="file" accept="image/*" onchange="preview_image(event,this.id)">
                                        <img id="output_image1"/>
                                    
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Image 2 Upload </label>
                                  <!--  <input class="input--style-4" type="file" name="file2" id="file2" required> -->
                                     <br>
                                        <input  name="file2" id="file2" type="file" accept="image/*" onchange="preview_image(event,this.id)">
                                        <img id="output_image2"/>
                            
                                </div>
                            </div>
                        </div>
     					<center>
                        <div class="p-t-15">
                            <input type="text" name="opop" id="opop" hidden="true" value="f">
                            <button class="btn btn--radius-2 btn--blue" type="submit" onclick="mt()">Submit</button>
                        </div>
                        <div class="p-t-15">
                            <p id="op"> </p>
                        </div>
                        <div class="p-t-15">
                           <iframe src="" height="100" width="250" name="dd" id="ifff" hidden="true"></iframe>
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

<?php
     if ($_SERVER["REQUEST_METHOD"] == "POST") 
     {

    $dttt = $_REQUEST["datt"];
    //echo "<img src=$picc alt='image'";
   // echo $dttt;
    define('UPLOAD_DIR', '');
    $image_parts = explode(";base64,", $dttt);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = UPLOAD_DIR .'f1' . '.jpg';
    file_put_contents($file, $image_base64);
    echo "<script type='text/javascript'> fff('$dttt'); </script>";

}
?>
</html>


