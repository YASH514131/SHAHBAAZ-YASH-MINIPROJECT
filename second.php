<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script.js"> </script>
    <link rel="stylesheet" href="Sty.css">
    <title>Non-Chordate.in</title>
</head>
<body>
  <section id="home3">
  <table id="naruto">
    <form name="f1">
      <tr>
        <td>
    <select onchange="check()" name="s1">
        <option  disabled selected hidden>Choose An Animal</option>
        <option>Sycon</option>
        <option>Jelly Fish</option>
        <option>Tape Worm</option>
        <option>Intestinal Worm</option>
        <option>Earth Worm</option>
        <option>Centipede</option>
        <option>Octopus</option>
        <option>Sea Urchin</option>
        <option>Balanoglossus</option>
    </select>
        </td>
    
      </form>
              <form name="f2"method="GET">
                <td>
                 <div>
                  <p id="madara"><input type="text" name="ani_name" size="15" value="<?php if(isset($_GET['ani_name'])){echo $_GET['ani_name'];}   ?>"></p>
                  </div>
                    </td>
                              <td>
                              <div>
                                <button type="submit">search</button>
                              </div>
                              </td>
                                </tr>
                              </form>
    </table>
      <hr>
            <?php
            $con=mysqli_connect("localhost","root","","project");
            if(isset($_GET["ani_name"]))
            {
              $ani_nam=$_GET["ani_name"];
              $query="SELECT * FROM animal where ani_name='$ani_nam'";
              $query_run=mysqli_query($con,$query);

              foreach($query_run as $row){
                ?>
          <div id="cer">
           <table id="shift">
        <tr>
           <td> <h3><label>Animal Name:</label><h3></td>
            <td><input type="text" value="<?=$row['ani_name'];   ?>"></input></td>
      </tr>
                               <tr> 
                                
                                  <td><h3><label for="">Phylum:</label></h3></td>
                                  <td><input type="text" value="<?=$row['phylum'];   ?>"></input></td>
                              
                               </tr>
                      <tr>
                        <td><h3><label for="">Body Symetry:</label></h3></td>
                        <td><input type="text" value="<?=$row['body_symmetry'];   ?>"></input></td>
                      </tr>
                                    <tr>
                                      <td><h3><label for="">Grade Of Organization:</label></h3></td>
                                     <td> <input type="text" value="<?=$row['orgainzation'];   ?>"></input></td>
                                    </tr>
                    <tr>
                     <td><h3> <label for="">Features:</label></h3></td>
                     <td> <input type="text" size="30"value="<?=$row['feature'];   ?>"></input></td>
              </tr>
     </table>
          </div>

                <?php
              }
            }
            ?>
  </section>
           
            

            
           
            
         
</body>
</html>