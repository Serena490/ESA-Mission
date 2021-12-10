<!DOCTYPE html>
<html lang="en">
<head>
  <title> Space-range homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<!--This will load the html which contains the title of the tab, the size and the bootstrap as its stylesheet -->
<style>
 body {
  background-image: url('Space-Range_Homepage_Background.png');
}
</style>
</head>
<!--This puts my picture as the background in the wwww grid which is presented neatly to the user for a professional effect -->
<body>

<div class="jumbotron text-center">
  <h1>Space-Range Homepage</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
<!-- This presents the Heading title of the webpage and gives the user information relating to the webpage -->
<div class="d-grid gap-6">
  <button type="button" class="btn btn-dark btn-block" onclick="window.location.href='mission_forms.php'">Create Mission</button>
  <button type="button" class="btn btn-dark btn-block" onclick="window.location.href='mission_view.php'">View Mission</button>
  <button type="button" class="btn btn-dark btn-block" onclick="window.location.href='AAA.php'" >Amend Mission</button>
   <button type="button" class="btn btn-dark btn-block" onclick="window.location.href='astronaut_forms.php'">Create Astronaut ID</button>
     <button type="button" class="btn btn-dark btn-block" onclick="window.location.href='astronaut_view.php'">View Astronaut ID </button>
       <button type="button" class="btn btn-dark btn-block" onclick="window.location.href='testingform.php'">Amend Astronaut ID</button>
</div>
<!--This will present six buttons which will lead the user into different locations so they can either create, edit or view missions and astronaut ids.-->
</body>
</html>
<!--https://www.w3docs.com/snippets/html/how-to-create-an-html-button-that-acts-like-a-link.html-->
<!--https://www.w3schools.com/bootstrap5/tryit.asp?filename=trybs_button_styles&stacked=h-->