<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RV Form</title>
    <style>
        body {
            background-color: rgb(60, 60, 60);
            margin: 0;
            font-size: larger;
        }
        h1 {
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            color: white;
        }
        table {
            width: 100%;
            max-width: 600px;
            background-color: rgb(210, 210, 210);
            padding: 20px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            color: rgb(12, 38, 12);
        }
        td {
            padding: 10px;
        }
        form {
            padding-left: 430px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 8px;
        }
        .buttonapply {
            font-size: large;
            font-family: 'Times New Roman', Times, serif;
            font-weight: 500;
            background-color: #6d6875;
            cursor: pointer;
            color: rgb(12, 38, 12);
        }
        .buttonapply:hover {
            background-color: #2a0800;
            color: beige;
            box-shadow: 0 0 9px rgba(180, 180, 180, 2);
        }
    </style>
     <script>
    function validate() {
        var fullname = document.getElementById("yourname");
        var register_number = document.getElementById("usn");

        // Validate fields
        if (fullname.value.trim() === "" || register_number.value.trim() === "") {
            alert("Give your proper Name & USN");
            return false; // Prevent form submission
        }

      
        return true;
    }
</script>
</head>
<body>
    <h1>RV Application Form</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        echo "<table style='margin: 0 auto;'>";
        echo "<tr><td><strong>Your Name:</strong></td><td>" . htmlspecialchars($_POST['yourname']) . "</td></tr>";
        echo "<tr><td><strong>Registration Number (USN):</strong></td><td>" . htmlspecialchars($_POST['usn']) . "</td></tr>";
        echo "<tr><td><strong>Semester:</strong></td><td>" . htmlspecialchars($_POST['sem']) . "</td></tr>";
        echo "<tr><td><strong>Section:</strong></td><td>" . htmlspecialchars($_POST['sec']) . "</td></tr>";
        echo "<tr><td><strong>Branch:</strong></td><td>" . htmlspecialchars($_POST['branch']) . "</td></tr>";
        echo "<tr><td><strong>Subject Name(s):</strong></td><td>" . htmlspecialchars($_POST['subn']) . "</td></tr>";
        echo "<tr><td><strong>Subject Code(s):</strong></td><td>" . htmlspecialchars($_POST['sub']) . "</td></tr>";
        echo "<tr><td><strong>Applied Date:</strong></td><td>" . htmlspecialchars($_POST['dte']) . "</td></tr>";
        echo "<tr><td><strong>RV Fee:</strong></td><td>" . htmlspecialchars($_POST['fee']) . "</td></tr>";
        echo "</table>";
    } else {
       
        echo '<form action="form.php" method="post"  onsubmit="return validate()">
        <table>
            <tr>
                <td><label for="yourname">Your Name:</label></td>
                <td><input type="text" name="yourname" id="yourname"></td>
            </tr>
            <tr>
                <td><label for="usn">Registration Number (USN):</label></td>
                <td><input type="text" name="usn" id="usn"></td>
            </tr>
            <tr>
                <td><label for="sem">Semester:</label></td>
                <td><input type="text" name="sem" id="sem"></td>
            </tr>
            <tr>
                <td><label for="sec">Section:</label></td>
                <td><input type="text" name="sec" id="sec"></td>
            </tr>
            <tr>
                <td><label for="branch">Branch:</label></td>
                <td><input type="text" name="branch" id="branch"></td>
            </tr>
            <tr>
                <td><label for="subn">Subject Name(s):</label></td>
                <td><input type="text" name="subn" id="subn"></td>
            </tr>
            <tr>
                <td><label for="sub">Subject Code(s):</label></td>
                <td><input type="text" name="sub" id="sub"></td>
            </tr>
            <tr>
                <td><label for="dte">Applied Date:</label></td>
                <td><input type="date" name="dte" id="dte"></td>
            </tr>
            <tr>
                <td><label for="fee">RV Fee:</label></td>
                <td><input type="text" name="fee" id="fee"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Apply for RV" class="buttonapply">
                </td>
            </tr>
        </table>
        </form>';
    }
    ?>
   
</body>
</html>
