<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../css/style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <title>KPM - web</title>
    <script type="text/javascript" src="../../js/main.js"></script>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="container flex">
            <h1 class="logo">HeerenHuys</h1>
            <nav>
                 <ul>
                      <li> <a href="../homepage/index.php">Home </a> </li>
                      <li> <a href="../events/index.php">Event </a> </li>
                      <li> <a href="../Login/index.php">Login/Register</a> </li>
                 </ul>
            </nav>
        </div>
    </div>

<!--  Showcase  -->
<section class="showcase">
    <div class="container grid">
        <div class="showcase-text">
            <h1>Events</h1>
            <p>i dont know what the fuck
            i need to type here so this is
            just some temporary dummy text.</p>
            <a href="../events/index.php" class="btn btn-outline">Events</a>
        </div>

        <div class="showcase-form card">
            <h2>Event</h2>
            <form>
                <div class="form-control">
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <div class="form-control">
                    <input type="text" name="company" placeholder="Company  Name" required>
                </div>
                <div class="form-control">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <input type="submit" value="send" class="btn btn-primary">

            </form>
        </div>
    </div>
</section>

</body>
</html>