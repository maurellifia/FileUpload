<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action ="" method="POST" enctype= "multipart/form-data">
        <h1> Upload File and Add Email here</h1>

        <p>Input your email here</p>
        <input type="email" name="email" required>
        <br>
        <br>
        <label>Select file to upload (JPEG or PNG)</label>
        <input type="file" name="file" accept="JPEG, PNG" required>
        <br>
        <br>
        <input type="submit" value="Sumbit">
    </form>
</body>
</html>

