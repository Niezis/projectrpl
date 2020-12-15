<html>

      <div class="section"></div>
      <main>
        <center>
          <img class="responsive-img" style="width: 300px;" src="style/img/logo_quiz3.png" />
          <div class="section"></div>
    
          <h5 class="blue-text darken-2 blue-text">The spirit to be a better person in the future !!!</h5>
          <div class="section"></div>
    
          <div class="container">
            <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

              <form action="rank.php" class="col s12" method="post">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"  type="text/javascript"></script>
              <span id="minutes">00</span>
              <span id="colon">:</span>
              <span id="seconds">00</span>
              <span id="hasil"></span>
              <input type="hidden" name="time" id="time" value="">
              <span id="udh"></span>

    <script type="text/javascript">
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        var hasil = document.getElementById("hasil");
        var hasil2 = document.getElementById("udh")
        
        var totalSeconds = 0;
        var skor = 0;
        setInterval(setTime, 1000);

        function setTime()
        {
            ++totalSeconds;
            secondsLabel.innerHTML = pad(totalSeconds%60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
        }

        function pad(val)
        {
            var valString = val + "";
            if(valString.length < 2)
            {
                return "0" + valString;
            }
            else
            {
                return valString;
            }
        }

        function stopTime() {
            skor = pad(totalSeconds)
            hasil2.innerHTML = skor;
            document.getElementById("time").value = skor;
        }


    </script>
                <div class='row'>
                  <div class='col s12'>
                  </div>
                </div>
                
<?php

$i = 1;
foreach($daftarsoal as $soal){
?>              
                <div class='row'>
                    <h3 class="blue-text darken-2 blue-text"><b>No <?php echo $no; ?></b></h3>
                    <h4 class="blue-text darken-2 black-text"><?php echo $soal?></h4>
                </div>
                <?php
                $i++;
                $no++;
                
                $o = 0;

                $getopsi = GetOpsi($soal);
                $daftaropsi = array();
                while($row=mysqli_fetch_assoc($getopsi)){
                    $opsi = $row['opsi'];
                    array_push($daftaropsi, $opsi);
                }

                while($o<3){
                    
                
                ?>
                <div class="row left-align">
                  <p>
                    <label>
                      <input id="<?php echo $daftaropsi[''.$o.''];?>" name='opsi<?php $nono = $no-1; echo $nono;?>' value="<?php echo $daftaropsi[''.$o.''];?>" type="radio"/>
                      <span><?php echo $daftaropsi[''.$o.'']?></span>
                      <input type="hidden" name="soal<?php $nono = $no-1; echo $nono;?>" value="<?php echo $soal;?>">

                    </label>
                  </p>
                </div>
                <?php
                $o++;
                $nono++;
                }
            }
                ?>
              
            </div>
            <div>
            
            <button type="submit" value="finish" onclick="stopTime()" name="finish" formmethod="post" class="col s12 btn btn-large waves-effect blue darken-2">Finish</button>
            <?php
              $_SESSION['soal'] = $daftarsoal;
              $_SESSION['quiz'] = 'on';
              ?>
              
              </form>
            </div>
          </div>
  
  
        </center>
        <div class='row' style="width: 320px;">
          <br>
          <br>
          <br>
            <type='submit' name='btn_login'  style="width: 320px;" class='col s12 btn btn-large waves-effect blue darken-2' ><a class="white-text darken-2 black-text" href=landing.html>Back</a></button>
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