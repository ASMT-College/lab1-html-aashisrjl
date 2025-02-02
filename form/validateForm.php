<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error {
            color: red;
        }
        .success{
            color: green;
        }
    </style>
</head>
<body>
    <?php
    $nameError = $ageError = $descError = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isValid = true;
        $name = $_POST['name'];
        $age = $_POST['age'];
        $desc = $_POST['desc'];


        if ($name == '') {
            $nameError = "Name is required";
            $isValid = false;
        } 

        if ($age=='') {
            $ageError = "Age is required";
            $isValid = false;
        } else {
            if (!is_numeric($age) || $age < 18) {
                $ageError = "Only 18+ allowed";
                $isValid = false;
            }
        }


        if ($desc=='') {
            $descError = "Description is required";
            $isValid = false;
        }

        if ($isValid) {
            echo "<p class='success'>Form submitted successfully!</p>";
        }
    }
    ?>

    <form action="" method="post" onsubmit="return validateForm(event)">
        <label for="name">Name</label> <br>
        <input type="text" name="name" id="name"> <br>
        <span class="error" id="nameError"><?php echo $nameError; ?></span> <br><br>

        <label for="age">Age</label> <br>
        <input type="number" name="age" id="age"> <br>
        <span class="error" id="ageError"><?php echo $ageError; ?></span> <br><br>

        <label for="desc">Description</label> <br>
        <input type="text" name="desc" id="desc"> <br>
        <span class="error" id="descError"><?php echo $descError; ?></span> <br><br>

        <button type="submit">Submit Form</button>
    </form>

    <script>
        function validateForm(e){
            // e.preventDefault();

            // Clear previous error messages
            document.getElementById('nameError').textContent = '';
            document.getElementById('ageError').textContent = '';
            document.getElementById('descError').textContent = '';

            const name = document.getElementById('name').value.trim();
            const age = parseInt(document.getElementById('age').value);
            const desc = document.getElementById('desc').value.trim();

            let isValid = true;

            if (name === '') {
                document.getElementById('nameError').textContent = 'Name is required';
                isValid = false;
            }

            if (isNaN(age)) {
                document.getElementById('ageError').textContent = 'Age is required';
                isValid = false;
            } else if (age < 18) {
                document.getElementById('ageError').textContent = 'Only 18+ allowed';
                isValid = false;
            }

            if (desc === '') {
                document.getElementById('descError').textContent = 'Description is required';
                isValid = false;
            }

            return isValid;
        }
    </script>

</body>
</html>
