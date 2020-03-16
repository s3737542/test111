<?php

    
    session_start();
	include_once("tools.php");
	// 定义变量并默认设置为空值
    $movieErr="";
	$nameErr = "";
	$emailErr = "";
	$mobileErr = "";
	$creditCardErr = "";
	$expiryMonthErr = "";
	$expiryYearErr = "";
	$name = "";
	$email = "";
	$mobile = "";
	$creditCard = "";
	$expiryMonth = "";
	$expiryYear = "";
	$ErrFound = false;
    $movieHour = $_POST['movie']['hour'];
	$movieDay = $_POST['movie']['day'];
    $movieID = $_POST['movie']['id'];



$movieNameArray = array(
    'ACT'  => 'Avengers Endgame',
    'ANM'  => 'Dumbo',
    'AHF'  => 'Top End Wedding',
    'RMC'  => 'The Happy Prince',
);




$movieDayArray = array(
    'MON' => 'Monday',
    'TUE' => 'Tuesday',
    'WED' => 'Wednesday',
    'THU' => 'Thursday',
    'FRI' => 'Friday',
    'SAT' => 'Saturday',
    'SUN' => 'Sunday',
    
    
    
);

$movieHourArray = array(

    'T12' => '12PM',
    'T15' => 'T15PM',
    'T18' => '18PM',
    'T21' => '21PM',



);
    
    
   if(!empty($_POST)){
     
      if (in_array($movieHour, $movieHourArray))
      {
        $ErrFound=true;   
         $movieErr= "time is invalid";
      }
      if (in_array($movieDay, $movieDayArray))
      {
         $ErrFound=true;   
         $movieErr= "time is invalid";
      }
      if (in_array($movieID, $movieNameArray))
      {
        $ErrFound=true;   
         $movieErr= "time is invalid";
      }
       
       
    
    if (empty($_POST['cust']['name'])||!preg_match('/^[a-zA-Z]+/', $_POST['cust']['name'])){
		
		
		 $ErrFound = true;
		$nameErr = " Please provide a correct name ";
		}
       
          
	
    if (empty($_POST['cust']['email'])||!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$_POST['cust']['email'])){
    
        $ErrFound = true;
		$emailErr = "Please provide a valid Email address";
         
    }
   if (empty($_POST['cust']['mobile'])||!preg_match("/^(\+?61|0)4\d{8}$/",$_POST['cust']['mobile'])){
       
       $ErrFound = true;
	   $mobileErr = "Please provide a valid Mobile number";
   }
        
       
    if (empty($_POST['cust']['card'])||!preg_match("/^\d{4}[\s]?\d{4}[\s]?\d{4}[\s]?\d{4}/",$_POST['cust']['card'])){
        $ErrFound = true;
		$creditCardErr = "Please provide a valid Card number";
    }
	//if(in_array(m))   
   
     if ($ErrFound == false ){
      header('Location: receipt.php');
        
		 $_SESSION['cart'] = $_POST;
		 
     }
    }
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assignment 2</title>

    <!-- Keep wireframe.css for debugging, add your css to style.css -->

    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>


    <link rel="stylesheet" href="style.css" />
    <script src='../wireframe.js'></script>

    <script type="text/javascript" src="script.js"></script>

</head>

<body>

    <section>




        -->



    </section>
    <header>
        <div class="header">

            <div class="logo">
                <img src='../../media/cartoon-cinema.jpg' alt='Lunardo Cinema' height=100 /></div>
            <div class="name">
                <p>
                    <font color="slateblue">Lunardo</font>
                </p>
            </div>

        </div>
    </header>

    <nav>
        <ul>
            <a href=#AboutUs>About Us</a>
            <a href=#PriceArea>Prices</a>
            <a href=#moviep>Now Showing</a>
        </ul>
    </nav>
    <script>
        window.onscroll = function() {
            // console.clear();
            // console.log("Win Y: "+window.scrollY);
            var articles = document.getElementsByTagName('main')[0].getElementsByTagName('article');
            //console.log(articles);
            var navlinks = document.getElementsByTagName('nav')[0].getElementsByTagName('a');
            //console.log(navlinks);
            var n = -1;
            while (n < articles.length - 1 && articles[n + 1].offsetTop <= window.srollY) {
                n++;
            }
            // console.log(n);
            for (var a = 0; a < navlinks.length; a++) {
                navlinks[a].classList.remove('active');
            }
            // console.log('No active link'); 
            if (n >= 0) {
                navlinks[n].classList.add('active');
                // console.log(articles[n].id+": "+articles[n].offsetTop);
            }
        }
        // console.log(articles[a].id+": "+articles[a].offsetTop); 

    </script>


    <div class="parallax"> </div>
    <main>
        <article id=AboutUs style=background:grey;>
            <h1>About Us</h1>
            <div class="standard">
                <div class="description1">

                    <p>
                        538(Standard)
                        With a distinctive headrest and a contoured backrest, the 538 seat delivers outstanding comfort and value.
                    </p>
                    <br>
                    <p>
                        FEATURES:<br>
                        Leather headrest for extended durability <br>
                        Multi-angled positioned backrest<br>
                        No finger traps
                    </p>
                </div>

                <div class="S-div">

                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src='../../media/Standard/Rocker-backrest.jpeg' style="width:200px;height:200px;">

                        </div>


                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src='../../media/Standard/back.jpeg' style="width:200px;height:200px;">

                        </div>


                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src='../../media/Standard/cup-holder-1.jpeg' style="width:200px;height:200px;">

                        </div>



                    </div>


                    <!--<div style="text-align:justify">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
      
    </div>-->
                </div>
            </div>
            <div class="FirstClass">
                <div class="description2">


                    <p>
                        VERONA(First Class)<br>
                        The Verona is a fully reclining luxurious cinema seat.
                        Available in a single seat, a twin seat or linked seat with shared armrests.
                    </p>

                    <p>
                        FEATURES:
                        luxurious aesthetic<br>
                        fully reclining seat<br>
                        easy lift system<br>

                    </p>

                </div>
                <div class="F-div">

                    <div class="slideshow-container">

                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src='../../media/FirstClass/Verona-Twin.png' style="width:200px;height:200px;">

                        </div>


                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src='../../media/FirstClass/zero.png' style="width:200px;height:200px;">

                        </div>


                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src='../../media/FirstClass/clean-150x150.jpeg' style="width:200px;height:200px;">

                        </div>

                    </div>

                    <br>

                </div>
            </div>
        </article>
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                length = slides.length / 2;
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > length) {
                    slideIndex = 1
                }
                slides[slideIndex - 1].style.display = "block";
                slides[slideIndex + 2].style.display = "block";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            }

        </script>

        <article id=PriceArea>
            <h1>Prices Section</h1>

            <table id="table">
                <tr>
                    <th>Seat Type </th>
                    <th>Seat Code</th>
                    <th>Monday, Wednesday <br>
                        AND 12pm on Weekdays</th>
                    <th>All other times</th>

                </tr>


                <tr>
                    <td class="color">Standard Adult</td>
                    <td>STA</td>
                    <td>14.00</td>
                    <td>19.80</td>

                </tr>
                <tr>
                    <td class="color">Standard Concession</td>
                    <td>STP</td>
                    <td>12.50</td>
                    <td>17.50</td>

                </tr>
                <tr>
                    <td class="color">Standard Child</td>
                    <td>STC</td>
                    <td>11.00</td>
                    <td>15.30</td>

                </tr>
                <tr>
                    <td class="color">First Class Adult</td>
                    <td>FCA</td>
                    <td>24.00</td>
                    <td>30.00</td>

                </tr>
                <tr>
                    <td class="color">First Class Concession</td>
                    <td>FCP</td>
                    <td>22.50</td>
                    <td>27.00</td>

                </tr>
                <tr>
                    <td class="color">First Class Child</td>
                    <td>STFCCP</td>
                    <td>21.00</td>
                    <td>24.00</td>

                </tr>
            </table>



        </article>
        <article id=moviep>
            <h1>Now Showing</h1>
            <div class="ALLmovie">
                <div class="FristMovie">
                    <div style="padding: 5px;" id="p1" onclick="ShowElements('123')">

                        <!--<div class="tableImage">-->
                        <div class="Nowshowing image" style="float: left;">
                            <img src='../../media/Avengers  Endgame.jpg' style="width:200px;height:300px;">

                        </div>
                        <div style="float: right;" class="table">
                            <h3>Avenger:Endgame G</h3>
                            <p>Wed - 9pm </p>

                            <p>Thu - 9pm </p>

                            <p>Fri - 9pm </p>

                            <p>Sat - 6pm </p>

                            <p>Sun - 6pm </p>

                        </div>

                    </div>
                    <div style="padding: 5px;" id="p2" onclick="ShowElements('456')">
                        <div class="Nowshowing image" style="float: left;">
                            <img src='../../media/Top End Wedding.jpg' style="width:200px;height:300px;">

                        </div>




                        <div style="float: right;" class="table">
                            <h3>Top End Wedding G</h3>
                            <p>Mon - 6pm </p>

                            <p>Tue - 6pm </p>

                            <p>Sat - 3pm </p>

                            <p>Sun - 3pm </p>

                        </div>

                    </div>
                </div>

                <div class="SecondMovie">
                    <div id="p3" onclick="ShowElements('789')">
                        <div class="Nowshowing image" style="float: left;">
                            <img src='../../media/Dumbo.jpg' style="width:200px;height:300px;">
                        </div>

                        <div class="table">
                            <h3>Dumbo G</h3>
                            <p>Mon - 12pm </p>

                            <p>Tue - 12pm </p>

                            <p>Wed - 6pm </p>

                            <p>Thu - 6pm </p>

                            <p>Fri - 6pm </p>

                            <p>Sat - 12pm </p>

                            <p>Sun - 12pm </p>

                        </div>

                    </div>


                    <div id="p4" onclick="ShowElements('012')">
                        <div class="Nowshowing image" style="float: left;">
                            <img src='../../media/Happy Prince.jpg' style="width:200px;height:300px;">
                        </div>
                        <div class="table">
                            <h3>The Happy Prince G</h3>
                            <p>Wed - 12pm </p>

                            <p>Thu - 12pm </p>

                            <p>Fri - 12pm </p>

                            <p>Sat - 9pm </p>

                            <p>Sun - 9pm </p>

                        </div>

                    </div>
                </div>
            </div>

        </article>
        <article id=MoreDetails>
            <div id="p123" class="hide">
                <h1>Movie showing</h1>
                <div class="container">
                    <div class="content">
                        <div class="description">
                            <h1>Avengers Endgame <span class="float-right">PG</span></h1>

                            <p class="a"> Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics superhero team the Avengers, produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures.
                            </p>
                        </div>

                        <div class="trailer">
                            <iframe src="https://www.youtube.com/embed/TcMBFSGVi1c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="movie-booking">

                        <button type="button" class="button" onclick="showElement('ACT','WED','T21')">Wed -9pm </button>
                        <button type="button" class="button" onclick="showElement('ACT','THU','T21')">Thu - 9pm </button>
                        <button type="button" class="button" onclick="showElement('ACT','FRI','T21')">Fri - 9pm </button>
                        <button type="button" class="button" onclick="showElement('ACT','SAT','18')">Sat - 6pm</button>
                        <button type="button" class="button" onclick="showElement('ACT','SUN','T18')">Sun - 6pm</button>

                    </div>
                </div>
            </div>

            <div id="p456" class="hide">
                <h1>Movie showing</h1>
                <div class="container">
                    <div class="content">
                        <div class="description">
                            <h1>Top End Wedding <span class="float-right">PG</span></h1>

                            <p class="a"> Lauren and Ned are engaged, they are in love, and they have just ten days to find Lauren's mother who has gone AWOL somewhere in the remote far north of Australia, reunite her parents and pull off their dream wedding.


                            </p>
                        </div>

                        <div class="trailer">
                            <iframe src="https://www.youtube.com/embed/uoDBvGF9pPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="movie-booking">
                        <button type="button" class="button" onclick="showElement('AHF','MON','T18')">Mon - 6pm</button>
                        <button type="button" class="button" onclick="showElement('AHF','TUE','T18')">Tue - 6pm </button>
                        <button type="button" class="button" onclick="showElement('AHF','SAT','15')">Sat - 3pm</button>
                        <button type="button" class="button" onclick="showElement('AHF','SUN','T15')">Sun - 3pm</button>

                    </div>
                </div>
            </div>



            <div id="p789" class="hide">
                <h1>Movie showing</h1>
                <div class="container">
                    <div class="content">
                        <div class="description">
                            <h1>Dumbo <span class="float-right">PG</span></h1>

                            <p class="a"> A young elephant, whose oversized ears enable him to fly, helps save a struggling circus, but when the circus plans a new venture, Dumbo and his friends discover dark secrets beneath its shiny veneer.
                            </p>
                        </div>

                        <div class="trailer">
                            <iframe src="https://www.youtube.com/embed/7NiYVoqBt-8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="movie-booking">
                        <div class="text_booking">
                            <h1>Make a Booking:</h1>
                        </div>

                        <button type="button" class="button" onclick="showElement('ANM','MON','T12')">Mon - 12pm</button>
                        <button type="button" class="button" onclick="showElement('ANM','TUE','T12')">Tue - 12pm </button>
                        <button type="button" class="button" onclick="showElement('ANM','WED','T18')">Wed - 6pm</button>
                        <button type="button" class="button" onclick="showElement('ANM','THU','T18')">Thu - 6pm </button>
                        <button type="button" class="button" onclick="showElement('ANM','FRI','T18')">Fri - 6pm</button>
                        <button type="button" class="button" onclick="showElement('ANM','SAT','T12')">Sat - 12pm</button>
                        <button type="button" class="button" onclick="showElement('ANM','SUN','T12')">Sun - 12pm</button>

                    </div>

                </div>
            </div>


            <div id="p012" class="hide">
                <h1>Movie showing</h1>
                <div class="container">
                    <div class="content">
                        <div class="description">
                            <h1>The Happy Prince <span class="float-right">PG</span></h1>

                            <p class="a"> The untold story of the last days in the tragic times of Oscar Wilde, a person who observes his own failure with ironic distance and regards the difficulties that beset his life with detachment and humor.

                            </p>
                        </div>

                        <div class="trailer">
                            <iframe src="https://www.youtube.com/embed/4HmN9r1Fcr8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>

                    </div>
                    <div class="movie-booking">
                        <div class="text_booking">
                            <h1>Make a Booking:</h1>
                        </div>
                        <button type="button" class="button" onclick="showElement('RMC','WED','T12')">Wed - 12pm</button>
                        <button type="button" class="button" onclick="showElement('RMC','THU','T12')">Thu - 12pm </button>
                        <button type="button" class="button" onclick="showElement('RMC','FRI','T12')">Fri - 12pm</button>
                        <button type="button" class="button" onclick="showElement('RMC','SAT','T21')">Sat - 9pm</button>
                        <button type="button" class="button" onclick="showElement('RMC','SUN','T21')">Sun - 9pm</button>

                    </div>

                </div>

            </div>

        </article>

        <section style="text-align:left; " id="formArea">
            <h1 class="title" style="text-align:center;">Booking form</h1>


            <form method="post" id="Form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


                <h3><span id="movieids"></span>

                    <span id="moviedays"></span>
                    <span id="moviehours"></span>
                </h3>
                <div class="BuyTicket" style="display:inline-block;">
                    <div class="ticket">
                        <input type="hidden" id="id" name="movie[id]" readonly>
                        <input type="hidden" id="day" name="movie[day]" readonly>
                        <input type="hidden" id="hour" name="movie[hour]" readonly>

                        <h3 style="background: #ffa366">Standard</h3>
                        <label>Adult</label>
                        <select id="adultStd" name="seats[STA]" onchange="getprice()" value="<?=$sta?>">
                            <script>
                                var options = '';
                                options = '<option value=0></option>'
                                for (var i = 1; i <= 10; i++) {
                                    options += '<option value=' + i + '>' + i + '</option>'
                                }
                                document.getElementById('adultStd').innerHTML = options;

                            </script>
                        </select>
                        <br>
                        <label>Concession</label>
                        <select id="concessionStd" name="seats[STP]" onchange="getprice()">
                            <script>
                                var options = '';
                                options = '<option value=0></option>'
                                for (var i = 1; i <= 10; i++) {
                                    options += '<option value=' + i + '>' + i + '</option>'
                                }
                                document.getElementById('concessionStd').innerHTML = options;

                            </script>
                        </select>
                        <br>
                        <label>Children</label>
                        <select id="childrenStd" name="seats[STC]" onchange="getprice()">
                            <script>
                                var options = '';
                                options = '<option value=0></option>'
                                for (var i = 1; i <= 10; i++) {
                                    options += '<option value=' + i + '>' + i + '</option>'
                                }
                                document.getElementById('childrenStd').innerHTML = options;

                            </script>
                        </select>

                    </div>

                    <br>

                    <div class="ticket">
                        <h3 style="background: #80aaff">First Class</h3>
                        <label>Adult</label>
                        <select id="adultFC" name="seats[FCA]" onchange="getprice()">

                            <script>
                                var options = '';
                                options = '<option value=0></option>'
                                for (var i = 1; i <= 10; i++) {
                                    options += '<option value=' + i + '>' + i + '</option>'
                                }
                                document.getElementById('adultFC').innerHTML = options;

                            </script>

                        </select>
                        <br>
                        <label>Concession</label>
                        <select id="concessionFC" name="seats[FCP]" onchange="getprice()">
                            <script>
                                var options = '';
                                options = '<option value=0></option>'
                                for (var i = 1; i <= 10; i++) {
                                    options += '<option value=' + i + '>' + i + '</option>'
                                }
                                document.getElementById('concessionFC').innerHTML = options;

                            </script>
                        </select>
                        <br>
                        <label>Children</label>
                        <select id="childrenFC" name="seats[FCC]" onchange="getprice()">
                            <script>
                                var options;
                                options = '<option value=0></option>'
                                for (var i = 1; i <= 10; i++) {
                                    options += '<option value=' + i + '>' + i + '</option>'
                                }
                                document.getElementById('childrenFC').innerHTML = options;

                            </script>
                        </select>


                    </div>
                    <br>

                    <div class="moneyArea">
                        <label>Total(AUD)</label>
                        <p type="text" id="totalPrice" readonly></p>
                    </div>

                </div>

                <div class="customerInformation">
                    <p><span class="error">* necessary part</span></p>
                    <label>Name</label>
                    <input type="text" id="name" name="cust[name]" value="<?php echo $_POST['cust']['name'];?>">
                    <p><?php echo $nameErr ; ?></p>
                    <span style="color:red" class="error"></span>




                    <label>Email</label>
                    <input type="email" name="cust[email]" value="<?php echo $_POST['cust']['email'];?>">
                    <p><?php echo $emailErr ; ?></p>
                    <span style="color:red" class="error"> </span>

                    <br><br>



                    <label>Mobile</label>

                    <input type="tel" id="mobile" name="cust[mobile]" value="<?php echo $_POST['cust']['mobile'];?>">
                    <p><?php echo $mobileErr ; ?></p>
                    <span style="color:red" class="error"> </span>

                    <br><br>



                    <label>Credit Card</label>
                    <input type="text" id="creditCard" name="cust[card]" value="<?php echo $_POST['cust']['card'];?>">
                    <p><?php echo $creditCardErr ; ?></p>

                    <span style="color:red" class="error"> </span>


                    <br><br>





                    <br><br>
                    <label>Card Expiry Date</label>


              

                    <select id="nowMonth" title="select a month" onchange="checkday()" name="cust[expiryMonth]" value=" <?php echo $_POST[cust][expiryMonth] ?>">
                        <option value="0"></option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>

                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>



                    <select id="nowYear" title="select a year" onchange="checkday()" name="cust[expiryYear]" value="<?php echo $_POST[cust][expiryYear] ?>">
                        <option value="0"></option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        <option value="2031">2031</option>
                        <option value="2031">2032</option>
                        <option value="2031">2033</option>
                        <option value="2031">2034</option>
                        <option value="2031">2035</option>
                        <option value="2031">2036</option>
                        <option value="2031">2037</option>
                        <option value="2031">2038</option>
                    </select>
                    <p id="check" name="check"> </p>


                    <br>
                    <br>
                    <input type="submit" id="submit" name="order" value="Order">
                </div>

                <br>
                <br>
               


            </form>



        </section>



    </main>




    <footer>
        <div>&copy;<script>
                document.write(new Date().getFullYear());

            </script> yuehan Chen,s3714653 Last modified <?= date ("Y F d  H:i", filemtime($_SERVER['SCRIPT_FILENAME'])); ?>.</div>
        <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
        <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>
    <?php
    
    preShow($_POST);
    preShow($_SESSION);
    printMyCode();
    ?>

</body>

</html>
