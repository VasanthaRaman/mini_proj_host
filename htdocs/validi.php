<html>
<script type='text/javascript'>
function preview_image(event,idd) 
{
 var reader = new FileReader();
 if(idd=="file1"){
 reader.onload = function()
 {
  var output = document.getElementById('output_image1');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
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
function emptyy() {
            // body...
            document.getElementById('waitt').hidden=true;
        }
      
       function strt(){
          // body...
           var h = document.createElement("H3")                // Create a <h1> element
var t = document.createTextNode("Your result is loading...");     // Create a text node
h.appendChild(t);
var att = document.createAttribute("id");       // Create a "class" attribute
att.value = "waitt";                           // Set the value of the class attribute
h.setAttributeNode(att); 
//document.getElementById("waitt").hidden=false;
        }
 window.onload= strt();
        function makehide() {
          // body...
          document.getElementById("waitt").hidden=true;
        }
</script>
<body>
<h3 id='waitt'>Your result is loading...</h3>
</body>
</html>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		//require_once("mmm.php");
          //echo "<h3 id='waitt'>Your result is loading...</p>";
          echo "<script type='text/javascript'> strt(); </script>";
         $target_dir = ""; $fl1=1;$fl2=1;
         $chch=$_REQUEST["opop"];
         $fileName1 = basename($_FILES["file1"]["name"]);
         $fileName2 = basename($_FILES["file2"]["name"]);
         $fileType1 = pathinfo($fileName1,PATHINFO_EXTENSION);
         $fileType2 = pathinfo($fileName2,PATHINFO_EXTENSION);
         //echo $fileName1.",,,".$fileName2.",,,,".$fileType1;
         $ff=$fileName1;
         // $targetFilePath1 = $target_dir . 'f1.' . $fileType1;
         // $targetFilePath2 = $target_dir . 'f2.' . $fileType2;
         $targetFilePath1 = $target_dir . 'f1.' . 'jpg';
         $targetFilePath2 = $target_dir . 'f2.' . 'jpg';
        // echo $targetFilePath1.",,,,".$targetFilePath2;
         $uploadOk = 1;
         // $fileType1 = pathinfo($targetFilePath1,PATHINFO_EXTENSION);
         // $fileType2 = pathinfo($targetFilePath2,PATHINFO_EXTENSION);
         $allowtypes=array('jpg','png','bmp','tiff');
         if($chch=="changed"){
         if(in_array($fileType1, $allowtypes))
           {
            	if(move_uploaded_file($_FILES["file1"]["tmp_name"], $targetFilePath1))
               	 {
                      echo "<script type='text/javascript'>alert('File 1 uploaded succesfully');</script>";
                 }
                 else
                  {
                	  echo "File 1 upload failed.\n"; $fl1=0;
                  }
            }
             else
            {
               echo "<script type='text/javascript'>alert('Check file format of file 1');</script>";
            }                

          }
          if(in_array($fileType2, $allowtypes)){
                  if(move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePath2))
               	 {
                      echo "<script type='text/javascript'>alert('File 2 uploaded succesfully');</script>";
                 }
                 else
                  {
                	  echo "File 2 upload failed.\n"; $fl2=0;
                  }
                }
               else
            {
               echo "<script type='text/javascript'>alert('Check file format of file 2');</script>";$fl2=0;
            }                
                if($fl1==1 && $fl2==1)
                  require_once("mmm.php");
            
           
	}


?>
