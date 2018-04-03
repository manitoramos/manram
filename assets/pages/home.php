<div id="homepage" style="display:none;">
          <?php

            $slct = "SELECT * FROM programacao WHERE Featured='Yes' ORDER BY id";
            if ($result = mysqli_query($BD, $slct)) {
                while($reg = mysqli_fetch_array($result)){
                  echo "<!-- Blog Post PHP -->
                  <div class=\"card mb-4\">
                    <!--<img class=\"card-img-top\" src=\"http://placehold.it/750x300\" alt=\"Card image cap\">-->
                    <div class=\"card-body\">
                      <h2 class=\"card-title\">";
                      echo htmlentities($reg['titulo'], ENT_COMPAT,'ISO-8859-1', true);
                      echo "
                        <span style=\"float: right;color:blue;\">#{$reg['id']}</span>
                      </h2>
                      <p class=\"card-text\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                      <a href=\"#\" class=\"btn btn-primary\">Read More &rarr;</a>
                    </div>
                    <div class=\"card-footer text-muted\">
                      Publicado por
                      <a href=\"#\">{$reg['user']}</a>";
                      if($reg['tipo'] == "Csharp"){
                        echo "<a href=\"#\" style=\"float:right;\">C#</a>";
                      }
                      else{
                        echo "<a href=\"#\" style=\"float:right;\">{$reg['tipo']}</a>";
                      }
                      echo "
                    </div>
                  </div>";
                }

            } else {
                //echo "Error: " . $slct . "<br>" . mysqli_error($BD);//return to javascript
            }

          ?>

          <!-- Blog Post -->
          <div class="card mb-4">
            <!--<img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">-->
            <div class="card-body">
              <h2 class="card-title">Post Title</h2>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
              <a href="#" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on January 1, 2017 by
              <a href="#">Start Bootstrap</a>
            </div>
          </div>

          <!-- Pagination -->
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="#">&larr; Older</a>
            </li>
            <li class="page-item disabled">
              <a class="page-link" href="#">Newer &rarr;</a>
            </li>
          </ul>
</div>