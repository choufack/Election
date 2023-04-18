<!-- <form action="/region-insert" method ="post"> 
    Ajout de region
    <label > nom</label>
    <br>
    <input type="text">
    <br>
    <button class="btn">ok</button>
</form> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Region</title>
</head>
<style>
    input[type=text], select {
        width: 50%;
        padding: 10px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-left: 140px ;
        margin-right: 140px ;
    }

    input[type=submit] {
        width: 50%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-left: 140px ;
        margin-right: 140px ;
    
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 56px;
        background-color: #f2f2f2;
        padding: 40px;
        margin-left: 400px ;
        margin-right: 400px ;
    }
    </style>
<body>

    <h1>Ajout de region</h1>

    <div>
      <form method="POST" action="region_insert">
        @csrf

       <br> <label for="fname">Name</label>
        <input type="text" id="fname" name="firstname" required>

        <input type="submit" value="Submit">
      </form>
    </div>

    </body>
</html>



