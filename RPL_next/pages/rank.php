<?php

?>
  
      <div class="section"></div>
      <main>
        <center>
          <img class="responsive-img" style="width: 300px;" src="style/img/ranking.png" />
          <div class="section"></div>
    
          <h5 class="blue-text darken-2 blue-text">Quiz Rank</h5>
          <div class="section"></div>
    
          <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="padding: 32px 20px 0px 20px; border: 1px solid #EEE;">
    
                <table class="highlight">
                    <thead>
                      <tr>
                          <th>Rank</th>
                          <th>User</th>
                          <th>Score</th>
                          <th>Time(minute)</th>
                      </tr>
                    </thead>
<?php
            $datarank = getRank();
            $no = 1;
            while($rank = mysqli_fetch_assoc($datarank)){
                $detik = round($rank['waktu']);
                $waktu = sprintf('%02d:%02d', ($detik/ 60 % 60), $detik% 60);
                echo '
                    <tbody>
                      <tr>
                        <td name="nomer">'.$no.'</td>
                        <td>'.$rank['user'].'</td>
                        <td>'.$rank['nilai'].'</td>
                        <td>'.$waktu.'</td>
                      </tr>';
                $no++;
            }
?>
                    </tbody>
                  </table>
            </div>
          </div>
        </center>
    
        <div class='row' style="width: 320px;">
          <br>
          <br>
          <br>
            <a name='btn_login' style="width: 320px;" class='col s12 btn btn-large waves-effect blue darken-2' href="index.php"><p class="white-text darken-2 black-text" style="display:inline;" >Back</p></a>
        </div>
  
        <div class="section"></div>
        <div class="section"></div>
      </main>
    <script>
     //membuat side bar
            //membuat side bar
            const sideNav = document.querySelectorAll('.sidenav');
              M.Sidenav.init(sideNav);
    </script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    </body>
    
    </html>
    
    