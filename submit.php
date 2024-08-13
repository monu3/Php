<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registration</title>
</head>
<body>
    <h2>Book Search Catalog</h2>
    <form method="POST" action="submit.php">
        <div>
            <label for="country">Choose Search Type: </label>
            <select name="searchtype">
                <option value="history">History</option>
                <option value="politics">Politics</option>
                <option value="childrenbook">Children's Book</option>
                <option value="drama">Drama</option>
                <option value="science">Science</option>
            </select>
        </div>
        <div>
            <label for="name">Please enter name of book: </label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="download">Download: </label>
            <input type="radio" name="download" value="true">True
            <input type="radio" name="download" value="false">False
        </div>
        <div>
            <input type="submit" name="submit" value="Submit">
        </div>
    </form>
</body>
</html>