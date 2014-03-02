 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
        <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>
        <div id="wrapper">
            <div id="banner">             
            </div>
            
    

            
          
                <div id="navig-bar" style="background-color:#a9a6a6">
               <ul class="nav nav-tabs nav-justified">
                  <li><a href="index.php">Home &nbsp <span class="glyphicon glyphicon-home"></span></a></li>
                  <li><a href="Course.php">Course &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                  <li class="active">
                      <a data-toggle="dropdown" href="#">Recommendation &nbsp </span class="glyphicon glyphicon-volume-up"> <span class="caret"></span>
                  </a>
                      <ul class="dropdown-menu" >
                        <li><a href="difficulty.php">Difficulty &nbsp</a></li>
                         <li><a href="difficulty.php">Advanced &nbsp</a></li>
                       </ul>
                  </li>
                   <li><a href="study.php">Study Room &nbsp <span class="glyphicon glyphicon-list-alt"></span></a></li>
                    <li><a href="#">About &nbsp <span class="glyphicon glyphicon-user"></span></a></li>
                   <li><a href="#">Contact &nbsp <span class="glyphicon glyphicon-phone"></span></a></li>
                    <li><a href="#">Search &nbsp <span class="glyphicon glyphicon-globe"></span></a></li>
                </ul>
                </div>


            




            <div id="content_area">
               

                Please check a single value from each the breadth areas:
                <br/>
                <br/>
                <table id="difficulty">
                   
            <FORM name="difficulty" method="POST" action="result.php">
                <tr>
                <td>
                Algorithms:
                </td>
                <td>
                <input type="Checkbox" name="algorithms" value="easy">Easy
                <input type="Checkbox" name="algorithms" value="moderate">Moderate
                <input type="Checkbox" name="algorithms" value="hard">Hard
                <input type="Checkbox" name="algorithms" value="advanced">Advanced
                </td>
                </tr>
                
                <tr>
                <td>
                Software Engineering:
                </td>
                <td>
                <input type="Checkbox" name="software" value="Easy">Easy
                <input type="Checkbox" name="software" value="moderate">Moderate
                <input type="Checkbox" name="software" value="hard">Hard
                <input type="Checkbox" name="software" value="advanced">Advanced
                </td>
                </tr>

                <tr>
                <td>
                Theory:
                </td>
                <td>
                <input type="Checkbox" name="theory" value="Easy">Easy
                <input type="Checkbox" name="theory" value="moderate">Moderate
                <input type="Checkbox" name="theory" value="hard">Hard
                <input type="Checkbox" name="theory" value="advanced">Advanced
                </td>
                </tr>

                <tr>
                <td>
                Systems:
                </td>
                <td>
                <input type="Checkbox" name="systems" value="Easy">Easy
                <input type="Checkbox" name="systems" value="moderate">Moderate
                <input type="Checkbox" name="systems" value="hard">Hard
                <input type="Checkbox" name="systems" value="advanced">Advanced
                </td>
                </tr>

                <tr>
                <td>
                Web Design:
                </td>
                <td>
                <input type="Checkbox" name="web" value="Easy">Easy
                <input type="Checkbox" name="web" value="moderate">Moderate
                <input type="Checkbox" name="web" value="hard">Hard
                <input type="Checkbox" name="web" value="advanced">Advanced
                </td>
                </tr>

                <tr>  
                    <td>
                      
                <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </td> 
                </tr>
                     </FORM>

                </table>
             </div>
            
            
            
            
            
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

            
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
