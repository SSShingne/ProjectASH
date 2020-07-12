
<!DOCTYPE html>

<html>

    <head>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
  
  
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">


<style>
		$baseColor: #398B93;
$borderRadius: 10px;
$imageBig: 100px;
$imageSmall: 60px;
$padding: 10px;



img {
   border-radius: 50%;
   height: $imageSmall;
   width: $imageSmall;
}



table {
   border: 1px solid darken($baseColor, 5%);
   border-radius: $borderRadius;
   box-shadow: 5px 5px 0 rgba(0,0,0,0.1);
   max-width: calc(100% - 2em);
   margin: 1em auto;
   overflow: hidden;
   width: 800px;
   height: 190px;
   
   
   
   td {
      text-align: center;
      vertical-align: middle;
      
      &:last-child {
         font-size: 0.95em;
         line-height: 1.4;
         
      }
   }
   
   th { 
      background-color: lighten($baseColor, 50%);
      font-weight: 300;
   }
   
   tr {     
      nth-child(2n) { background-color: white; }
       background-color: lighten($baseColor, 55%) 
      box-shadow: 5px 10px inset;
   }
  



}
table, th, td {
      border: 1px solid cyan;
      
    }
		</style>
        <link href="/css/styles.css" rel="stylesheet"/>
        <script src="/js/scripts.js"></script>
        <?php if (isset($title)): ?>
            <title>ASH,COM: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Ash.in</title>
        <?php endif ?>
    
    </head>

    <body>


<nav class="navbar navbar-default">
    <div class="container-fluid">
      <!--logo-->
      <div class="navbar-header">
        <a href="store.php" class="navbar-brand">
          ash.in
        </a>
      </div>

      <!--nav items-->
      <div >
        <ul class="nav navbar-nav">
          
          
          <li >
            <a href='sell.php'>Post Ad</a>
          </li>

          
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="about.html">About Us</a>
          </li>

          <li>
            <a href="portofolio.php">My Profile</a>
          </li>

        
        </ul>
      </div>
      
    </div>

  </nav>



       
                
<?php 
      if(!empty($_SESSION['id'])){
         $conn=dbconnect();
         $query="SELECT * FROM users WHERE id=".$_SESSION['id'];
         $result=$conn->query($query);
         $row=$result->fetch_assoc();
         echo "<b>Welcome,   <b><a href='portofolio.php'>".$row['name']."</a></br>";
      }
      
      if(!empty($_SESSION['id'])){
          echo "<a href='logout.php'>Logout</a>";
      }
?>

<?php if (in_array($_SERVER['PHP_SELF'],["/store.php"])): ?>
                    <ul style="list-style: none;">
                        <li><a href="store.php?category=all">All</a></li>
                        <li><a href="store.php?category=electrician">Electrician</a></li>
                        <li><a href="store.php?category=plumber">Plumber</a></li>
                        <li><a href="store.php?category=carpenter">Carpenter</a></li>
                        <li><a href="store.php?category=cleaner">Cleaner</a></li>
                        <li><a href="store.php?category=painter">Painter</a></li>
                        <li><a href="store.php?category=mason">Mason</a></a></li>
                        <li><a href="store.php?category=welder">Welder</a></a></li>
                        <li><a href="store.php?category=others">Others</a></li>
                        <form action="store.php" method="GET">
                            <select name="college" required="required" placeholder="Select College">
                            <option value="sangli">Sangli</option>
                    <option value="kolhapur">Kolhapur</option>
                    <option value="satara">Satara</option>
                   
                    <option value="pune">Pune</option>
                    <option value="buldana">Buldana</option>
                     <option value="akola">Akola</option>
                      <option value="mumbai">Mumbai</option>
                            </select>
                            <button type="submit">
                                Submit
                            </button>
                        </form>
                    </ul>
<?php endif ?>
                
            </div>

        <div id="middle"><center>