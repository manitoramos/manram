          <div class="card my-4">
            <h5 class="card-header">Categorias</h5>
            <div class="card-body">
              <div class="row">
                <?php

                  $slct2 = "SELECT * FROM linguagem";
                  if ($result2 = mysqli_query($BD, $slct2)) {
                      while($reg2 = mysqli_fetch_array($result2)){
                        if($reg2['ling'] == "Csharp"){
                          echo "<div class=\"col-lg-6\">
                            <ul class=\"list-unstyled mb-0\">
                              <li>
                                <a style=\"color:#007bff;cursor: pointer;\" onclick=\"getipo('Csharp')\">C#</a>
                              </li>
                            </ul>
                          </div>";
                        }
                        else{
                          echo "<div class=\"col-lg-6\">
                            <ul class=\"list-unstyled mb-0\">
                              <li>
                                <a style=\"color:#007bff;cursor: pointer;\" onclick=\"getipo($(this).html())\">{$reg2['ling']}</a>
                              </li>
                            </ul>
                          </div>";
                        }
                      }

                  } else {
                      echo "Error: " . $slct . "<br>" . mysqli_error($BD);//return to javascript
                  }

                ?>
              </div>
            </div>
          </div>