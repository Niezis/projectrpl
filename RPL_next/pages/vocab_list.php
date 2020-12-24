
<html>

  <div class="section"></div>
  <main>
    <center>
      <img class="responsive-img" style="width: 300px;" src="style/img/vocabulary_list.png" />
      <div class="section"></div>

      <h5 class="blue-text darken-2 blue-text">Diligent is my friend</h5>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>
          
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
                  <th scope="col" >Bahasa Inggris</th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
                  <th scope="col"> </th>
                  <th scope="col">Bahasa Indonesia</th>
                </tr>
              </thead>
            <?php
                $i = 1;
                while($row = mysqli_fetch_assoc($getSoal)){
                    echo '
                    <tbody>
                        <tr>
                        <th scope="row">'.$i.'</th>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>'.$row['ing'].'</td>
                        <td> </td>
                        <td> </td>
                        <td> </td>
                        <td>'.$row['ind'].'</td>
                        </tr>
                    </tbody>';
                    $i++;
                    
                }
            ?>
            </table>
          

            

            <br />
          </form>
        </div>
      </div>

    </center>
    
    <ul class="right">
      <a href="index.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Home</a>
    </ul>

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

