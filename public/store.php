<?php
    include('../models/config.php');
    require('../views/header.php');
?>

<div id="hero-area">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-12 col-xs-12 text-center">
              <div class="contents">
                <h1 class="head-title">Welcome to <span class="year">ash.in</span></h1>
                <p>Get all types of household services from trained professionals in your city at just one click</p>
                <div class="search-bar">
                  <fieldset>
                    <form class="search-form" action="store.php" method="get">
                      <div class="form-group tg-inputwithicon">
                        <i class="lni-tag"></i>
                        <input type="text" name="customword" class="form-control" placeholder="What are you looking for">
                      </div>
                      <div class="form-group tg-inputwithicon">
                        <i class="lni-map-marker"></i>
                        <div class="tg-select">
                          <select name="city">
                            <option value="">All Locations</option>
                            <option value="sangli">Sangli</option>
                            <option value="kolhapur">Kolhapur</option>
                            <option value="satara">Satara</option>
                            <option value="pune">Pune</option>
                            <option value="buldana">Buldana</option>
                            <option value="akola">Akola</option>
                            <option value="mumbai">Mumbai</option>
                            
                          </select>
                        </div>
                      </div>
                      <div class="form-group tg-inputwithicon">
                        <i class="lni-layers"></i>
                        <div class="tg-select">
                          <select name="category">
                            <option value="">All Services</option>
                            <option value="electrician">Electrician</option>
                            <option value="plumber">Plumber</option>
                            <option value="carpenter">Carpenter</option>
                            <option value="cleaner">Cleaner</option>
                            <option value="painter">Painter</option>
                            <option value="mason">Mason</option>
                            <option value="welder">Welder</option>
                            <option value="other">Other</option>
                          </select>
                        </div>
                      </div>
                      <button class="btn btn-common" type="submit"><i class="lni-search"></i></button>
                    </form>
                  </fieldset>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


<?php
    $conn=dbconnect();
    $query="SELECT * FROM items";

    if(!empty($_GET['city'])){
        $loc=$_GET['city'];
        $query=$query." WHERE city='".$loc."'";
        if(!empty($_GET['category']))
        {
            $query.=" AND category='".$_GET['category']."'";
        }
    }

    else if(!empty($_GET['category']))
    {
        
        
            $query=$query." WHERE category='".$_GET['category']."'";

        
    }
     
    $result =$conn->query($query);
    if(!empty($result) && $result->num_rows>0){
        $itemsu = item_maker($result);
        echo $itemsu;
    }
    else{
        echo "No Items in the store Currently related to This Category";
    }
    require('../views/footer.php');
?>