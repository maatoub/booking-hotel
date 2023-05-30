<!DOCTYPE html>
<html>
<head>
    <title>Welecom</title>
    <link rel="stylesheet" type="text/css" href="home.css" />
</head>

<body>
    <header>
        <div class="brand"><a href="#">Booking</a></div>
        <div class="navBar">
            <ul>
                <li><a class="link-one" href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Help</a></li>
            </ul>
        </div>
    </header>

    <div class="image">
        <img src="images/img.png " width="1350" height="590""/>
    </div>

    <form class ="login-form" action="connect.php" method="post">
    <h1>Booking report</h1>
        <input type="text" name="firstName" placeholder="First Name" required />
        <input type="text" name="lastName" placeholder="Last Name" required/>
        <input type="text" name="email" placeholder="E-mail" required />
        <label> Check In </label>
        <input type="date" name="dateIn" value="2022-11-12" min="2022-01-01" max="2023-01-31">
        <label> Check Out  </label>
        <input type="date" name="dateOut" value="2022-11-12" min="2022-01-01" max="2023-01-31">
        <button>
      <span>Booking</span>
    </button>
    </form>
</body>


</html>