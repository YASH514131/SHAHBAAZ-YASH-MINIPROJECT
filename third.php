<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="script.js"> </script>
  <link rel="stylesheet" href="STYLE.css">
  <title>Non-Chordate.in</title>
</head>

<body>
  <section>
    <div id="sft">
      <h3 id="head">Chordate Animal</h3>
      <table id="naruto">
        <form name="f1">
          <tr>
            <td>
              <select onchange="check()" name="s1" id="sor">
                <option disabled selected hidden>Choose An Animal</option>
                <option>Herdmania</option>
                <option>Amphioxus</option>
                <option>Myxine</option>
                <option>Rohu</option>
                <option>Frog</option>
                <option>Tortoise</option>
                <option>Peacock</option>
                <option>Human</option>
              </select>
            </td>

        </form>
        <form name="f2" method="GET">
          <td>
            <div>
              <p id="madara"><input type="text" id="madara" name="ani_name" size="15" value="<?php if (isset($_GET['ani_name'])) {
                                                                                                echo $_GET['ani_name'];
                                                                                              }   ?>"></p>
            </div>
          </td>
          <td>
            <div>
              <button type="submit" id="sea">search</button>
            </div>
          </td>
          </tr>
        </form>
      </table>
    </div>
    <?php
    $con = mysqli_connect("localhost", "root", "", "project");
    if (isset($_GET["ani_name"])) {
      $ani_nam = $_GET["ani_name"];
      $query = "SELECT * FROM chordate where ani_name='$ani_nam'";
      $query_run = mysqli_query($con, $query);

      foreach ($query_run as $row) {
    ?>
        <div id="cer">
          <table id="shift">
            <tr>
              <td>
                <h3 style="font-family: 'Lucida Sans';"><label>Animal Name:</label>
                  <h3>
              </td>
              <td><input type="text" class="fix" value="<?= $row['ani_name'];   ?>"></input></td>
            </tr>
            <tr>

              <td>
                <h3 style="font-family: 'Lucida Sans';"><label for="">Phylum:</label></h3>
              </td>
              <td><input type="text" class="fix" value="<?= $row['phylum'];   ?>"></input></td>

            </tr>
            <tr>
              <td>
                <h3 style="font-family: 'Lucida Sans';"><label for="">Sub-Phylum:</label></h3>
              </td>
              <td><input type="text" class="fix" value="<?= $row['sub_phylum'];   ?>"></input></td>
            </tr>
            <tr>
              <td>
                <h3 style="font-family: 'Lucida Sans';"><label for="">Class:</label></h3>
              </td>
              <td> <input type="text" class="fix" value="<?= $row['class'];   ?>"></input></td>
            </tr>
            <tr>
              <td>
                <h3 style="font-family: 'Lucida Sans';"> <label for="">Features:</label></h3>
              </td>
              <td> <input type="text" class="fix" size="38" value="<?= $row['feature'];   ?>"></input></td>
            </tr>
            <tr>
              <td>
                
              </td>
              <td><img src="<?= $row['picture'];   ?>" style="width: 500px;height: 400px; border-radius: 10px;"></td>
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