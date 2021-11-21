<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <h2>PHP Google Drive Api </h2>
    <a href="submit.php?list_files_and_folders=1">Click here to list all files and folders</a>

    <h2>File Upload</h2>
    <form action="submit.php" method="post" enctype="multipart/form-data">
        <label for="">Choose File</label>
        <input type="file" name="file">
        <input type="text" name="folder" placeholder="folder name">

        <input type="submit" name="submit" value="submit">
    </form>


    <h2>File Search</h2>
    <form action="submit.php" method="post" enctype="multipart/form-data">
        <label for="">Search File</label>
        <input type="text" name="search_text" placeholder="Type name">

        <input type="submit" name="search_files" value="Search">
    </form>
</body>

</html>