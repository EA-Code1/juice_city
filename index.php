<?php 

  include('config/db_connect.php');

  // write query for all juices
  $sql = 'SELECT title, ingredients, id FROM juices ORDER BY created_at'; 

  // make query & get the result set (set of rows)
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $juices = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // free the $result from memory (good practise)
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);


 ?>

 <!DOCTYPE html>
 <html>

   <?php include('templates/header.php') ?>

   <h4 class="center grey-text">Juices!</h4>

    <div class="container">
      <div class="row">
          
       <?php foreach($juices as $juice): ?>

        <div class="col s6 md3">
            <div class="card z-depth-0">
                <img src="img/juice.svg" class="juice">
                <div class="card-content center">
                    <h6><?php echo htmlspecialchars($juice['title']) ?></h6>
                    <ul>
                        <?php foreach(explode(',', $juice['ingredients']) as $ing): ?>
                            <li><?php echo htmlspecialchars($ing); ?></li>
                         <?php endforeach; ?>
                    </ul>
                </div>
                <div class="card-action right-align">
                    <a class="brand-text" href="details.php?id=<?php echo $juice['id']?>">more info</a>
                </div>
            </div>
        </div>

       <?php endforeach; ?>

         </div>  

     </div>

   <?php include('templates/footer.php') ?>
 
 </html>