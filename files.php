<!DOCTYPE html>
<html lang="en">
<head>
    <title>File handling</title>
</head>
<body>
   <?php 
   echo readfile("webdictionary.txt"), "<br/>", "<br/>";

   $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
   
echo fread($myfile,filesize("webdictionary.txt"));
echo "<br/>";
echo fgets($myfile);

fclose($myfile);
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo "<br/>";
echo fgets($myfile);

fclose($myfile);

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);

$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);


$newFile = fopen("testfile.txt", "w");

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);

$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);


   ?>
</body>
</html>