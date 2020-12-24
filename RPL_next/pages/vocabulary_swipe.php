
<html>

    <div class="section"></div>
    <main>
      <center>
        <img class="responsive-img" style="width: 300px;" src="style/img/vocabulary_swipe2.gif" />
        <div class="section"></div>
  
        <h5 class="blue-text darken-2 blue-text">Swipe And Find Useful Knowledge</h5>
        <div class="section"></div>
  
        <div class="container">
          <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
  
            <form class="col s12" method="post">
              <div class='row'>
                <div class='col s12'>
                </div>
              </div>

              <?php

              while($row = mysqli_fetch_assoc($verb)){


              ?>

              <div>
                <h5><?php echo $row['ing'] ;?></h5>
                <h5><?php echo $row['ind']; }?></h5>
              
                <ul class="pagination">
                    <?php if($page == 1){
                        echo '';
                    } else {
                        $link_prev = ($page > 1)? $page - 1 : 1;
                        echo '<li class="page-item"><a class="page-link" href="vocabulary_swipe.php?page='.$link_prev.'"><<</a></li>';
                    }?>

                
                <?php if($page == $jumlah_page){
                        echo '';
                    } else {
                        $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
                        echo '<li class="page-item"><a class="page-link" href="vocabulary_swipe.php?page='.$link_next.'">>></a></li>';
                    }?>
                  
              </div>
              
              
  
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
  
  