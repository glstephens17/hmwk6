<!DOCTYPE html>
<html>
<head>
    <title>JavaScript Example</title>
    <style>
        /* Define a CSS class for buttons with margins */
        .button-with-margin {
            margin: 10px;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Define a hover effect */
        .button-with-margin:hover {
            background-color: #0056b3;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>JavaScript Alert</h2>
        <button class="button-with-margin" onclick="showAlert()">Try it</button>

        <h2>JavaScript Timing</h2>
        <p>Click "Try it". Wait 3 seconds, and the page will alert "Hello".</p>
        <button class="button-with-margin" onclick="delayedAlert()">Try it</button>
    </div>

    <script>
        function showAlert() {
            alert("Learning is fun!");
        }

        function delayedAlert() {
            setTimeout(function() {
                alert('Hello! Thank you for waiting!');
            }, 3000);
        }
    </script>
    <!DOCTYPE html>
<html>
<body>

<h1>JavaScript Dates</h1>
<h2>Using new Date()</h2>

<p>100000000000 milliseconds from January 01 1970 UTC is:</p>
<p id="demo"></p>

<script>
const d = new Date(100000000000);
document.getElementById("demo").innerHTML = d;
</script>

</body>
</html>

</body>
</html>
