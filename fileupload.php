<?php







?>





<!DOCTYPE html>
<html lang="en">
<head>
    <title>UploadFile</title>
</head>
<body>
<form action ="" method="POST" enctype= "multipart/form-data">
        <h1> Upload File and Add Email here</h1>

        <p>Input your email here</p>
        <input type="email" name="email"  placeholder="Enter your email" required/>
        <br>
        <br>
        <label>Select file to upload (JPEG or PNG)</label>
        <input type="file" name="file" accept=".jpeg, .png, .jpg" required />
        <br>
        <br>
        <input type="submit" value="Sumbit"/>
    </form>
</body>
</html>

