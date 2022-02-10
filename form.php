<html>
    <head>
        <title>Davinder Singh</title>
        <meta charset = "utf-8">
    </head>
    <body>
        <!-----method="post" is used for multiple files ,else method = "get" used for single file ----->
        <form method="post" action="insert.php" enctype="multipart/form-data">
            <label>Course Name</label>
            <input type = "text" name = 'C'>
            <label>Semester</label>
            <input type = "text" name = 'S'>
            <label>Fees</label>
            <input type="text" name = 'F'>
            <input type='submit' value = 'Save'>
        </form>
    </body>
</html>