<!DOCTYPE html>
<html lang="en">

<style>
.bgimage{
  height: 100%;
    background-repeat: repeat;
}
    .wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      background: rgb(223, 215, 215);
      margin: 10px auto;
      padding: 5px 30px;
      width: 800px;
      box-shadow: 0 0 5px black;
    }

    .hr {
      display: flex;
      align-items: center;
    }

    hr {
      width: 30px;
      height: 1px;
      background: black;
      margin: 0 15px;
    }

    h2 {
      font-size: 25px;
      font-weight: normal;
      text-transform: uppercase;
    }
   

    h3   {
        text-color: white;
        text-align: center;
         }

    .mission-txt {
      font-size: 18px;
      font-weight: 500px;
      font-style: italic;
      margin-top: 0;
    }

    div img {
      width: 150px;
      filter: drop-shadow(0 10px 5px black);
    }

    p {
      text-align: justify;
    }

    .Our Team {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      padding: 20px;
    }

    .unit {
      margin: 25px;
      width: 200px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .unit img {
      border-radius: 100px;
      width: 150px;
      height: 150px;
      margin-bottom: 10px;
    }

    .unit p {
      text-align: left;
      margin: 2px;
    }

    .unit p:first-of-type {
      font-weight: bolder;
      margin-bottom: 5px;
    }

    @media screen and (max-width:820px) {
      .wrapper {
        width: 80%;
        padding: 5px 30px;
      }
    }
    .bgimage{
	background-size: contain;
	/* height: 145vh; */
}



</style>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>About us page html</title>
</head>


<?php include("header.html");?>

  <div class="container">

    <div class="wrapper">
      <div class="hr">
        <hr>
        <h2>Our Mission</h2>
        <hr>
      </div>

      <p class="mission-txt">"Our Main Aim Is To Redistrubte Leftover Food From wasting , To <br> Stop  Food Shortage And Provide Food To Needy And Poor Person"</p>

    </div>

    <div class="wrapper">
      <h2>About Us</h2>
      <div>
	  <img src="img/pp.jpeg" class="avatar">
        <p>The food donation system can be assist in collecting the leftover food from individual homes, events (birthday parties, traditional cultural programs), and from many more possible places to distribute among those in need.NGO'S that are help in poor community to battle against starvation can raise the request of food supply from 
            restaurant through this application. Once the requeste is accepted, the NGO'S or needy people can collect the food from the donor or from restaurantfor it's distribution. </p>
        <p> The surplus food from the function and gathering can be donated easily. The visualization impact of the donation can create a positive impact on the user. The application is targeted in two ways, the user who is donating food and the 
            person/organization that is claming the food.</p>

      </div>
    </div>

    <div class="wrapper">
   
    <h2>Our Team</h2> 
      <div class="faculties">
        <div class="unit">
		<img src="img/vaishnavi.jpeg" class="avatar">
          <p>Vaishnavi Patil<br> Co-Founder & Art Director</p>
          <p>Student of diploma engineering in computer science<br>
        <p> <a href= "mailto:vishupatil15903@gmail.com" > vishupatil15903@gmail.com </a> </p>

        </div>
        <div class="unit">

		<img src="img/kareena.jpeg" class="avatar">
            <p>Kareena jethwani<br> Founder & Art Director</p>
          <p>Student of diploma engineering in computer science<br>
          <p> <a href= "mailto:missjethwani03@gmail.com" >missjethwani03@gmail.com</p><br><br>

            </div>
            </a>
			<div class="unit">
		<img src="img/sarthak.jpeg" class="avatar">
            <p>Sarthak Choudhary<br> Art Designer</p>
          <p>Student of diploma engineering in computer science<br>
          <p> <a href= "mailto:princesarthak072@gmail.com" >princesarthak072@gmail.com</p><br><br>
        </a>
            </div>
		
       
        
        <div class="unit">
		<img src="img/ashwini.jpeg" class="avatar">
            <p>Ashwini Mahajan<br> Supporter</p>
          <p>Student of diploma engineering in computer science<br>
          <p><a href= "mailto:aashwinimahajan0407@gmail.com" >aashwinimahajan0407@gmail.com</a></p><br><br>
          </a>
            </div>

        
   
      </div>
    </div>

  </div>
</body>
</body>
</html>