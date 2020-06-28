<!--//Snippet1-->
<html>
<body>
<b>ENTER YOUR PERSONAL DETAIL</b>
<form action="detail.php" method="get">
    First name: <input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br>
    Address: <textarea name="address" id="" cols="100" rows="1"></textarea>
    <br>
    Contact no: <input type="text" name="contact"><br>
    <input type="submit" name="submit" value="submit">
</form>
<hr>
</body>
</html>

<!--//Snippet2-->
<html>
<head>
    <title>Employee Details</title>
</head>
<body>
<h4>Enter your details</h4>
<form action="detail.php" method="post">
    <table>
        <tr>
        <td>Employee</td>
        <td><input type="text" name="empid"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Deparment</td>
            <td><input type="radio" name="dept" value="Finance">Finance
                <input type="radio" name="dept" value="Marketing">Marketing
                <input type="radio" name="dept" value="IT">IT
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
    </table>
    <br>
    <td><input type="submit" value="Submit"></td>
</form>
<hr>
</body>
</html>

<!--Snippet5-->
<html>
<h4>Continent</h4>
<form action="detail.php" method="get">
    Specify the continent:
    <select name="continent" id="" type="listbox">
        <option>Asia</option>
        <option>Australia</option>
        <option>Europe</option>
    </select><br>
    <input type="hidden" name="asia">
    <input type="hidden" name="australia">
    <input type="hidden" name="europe">
    <br>
    <input type="submit" value="submit">
    <br><hr>
</form>
</html>