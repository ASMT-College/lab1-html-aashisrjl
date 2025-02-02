<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta keyword="aashis rijal">
    <meta description="This is Aashish Rijal">
    <title>Aashis-web</title>
</head>
<body>
    <h1>WELCOME! </h1>
    <h2>This is AASHISH RIJAL</h2>
    <a href="https://www.aashishrijal.com.np">visit portfolio</a>
    <p>Thank You</p>
    <br>

    <?php
    echo "Server Date:". Date("y-m-d");
    ?>
    <br>
    <p id="client-date">cleint-Date:</p>

</body>
<script type="text/javascript">
    const p = document.getElementById("client-date");
    p.textContent = ' ClientDate= ' + Date()
</script>
</html>