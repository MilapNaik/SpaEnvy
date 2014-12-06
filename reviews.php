<html>
    <head>
        <title>Spa Envy Reviews</title>
        
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <link rel="stylesheet" href="tabbed.css" type="text/css" media="screen">
        <script type="text/javascript" src="script.js"></script>
        <script type="text/javascript" src="snowstorm.js"></script>
        <script type="text/javascript" src="tabber.js"></script>
        
        <script type="text/javascript">

        /* Optional: Temporarily hide the "tabber" class so it does not "flash"
           on the page as plain HTML. After tabber runs, the class is changed
           to "tabberlive" and it will appear. */
        
        document.write('<style type="text/css">.tabber{display:none;}</style>');
        
        </script>
        

</head>
    <body>
    
          <!-- Menu-->
          <div id="menu">
              <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="reviews.php">Reviews</a></li>
              <li><a href="contactUs.html">Contact Us</a></li>
              </ul>
          </div>
        
        <h2>Reviews</h2>
        <!-- Table-->
         
            <table id='myTable' bgcolor = "#884433" border = "3" width = "912px">
            <tr>
            <!-- Table Header -->
                <th onMouseOver = changetable(0,0) onMouseOut = changetable1(0,0)>ID     </th>
                <th onMouseOver = changetable(0,1) onMouseOut = changetable1(0,1)>First Name</th>
                <th onMouseOver = changetable(0,2) onMouseOut = changetable1(0,2)>Review</th>
                <th onMouseOver = changetable(0,3) onMouseOut = changetable1(0,3)>Time</th>
              </tr>
        <?php
            include('config.php');
            $result = mysqli_query($dbC,"SELECT * FROM review");
            $count = 1;
              while($row = mysqli_fetch_array($result)) {
              
              /* Dynamix Table Rows */
              echo "<tr id='$count' data-dbid='{$row['id']}'>", "\n";
              $row['id'];
                echo "<td onMouseOver = changetable($count,0) onMouseOut = changetable1($count,0)>$count</td>", "\n";
                echo "<td width = '110' onMouseOver = changetable($count,1) onMouseOut = changetable1($count,1)>{$row['name']}</td>", "\n";
                echo "<td onMouseOver = changetable($count,2) onMouseOut = changetable1($count,2)>{$row['text']}</td> ", "\n";
                echo "<td width = '90' onMouseOver = changetable($count,3) onMouseOut = changetable1($count,3)>{$row['date']}</td> ", "\n";
              echo "</tr>";
              $count++;
              }
              mysql_close($dbC);
        ?>
            </table>
            
        <br>
        <br>
        <!--Insert/Delete Review-->


        <div class="tabber">
        
             <div class="tabbertab" title = "Insert Review">
        	 <form action="insert.php" method="post" name="myform" bgcolor = "#884433">
         
                <p> <label for = "name" > Name: </label> <input type="text" size= "35px" name ="name" style= "border: 1px solid #781351; background-color: #fee3ad"></p>
                <p> <label for = "text"> Text: </label> <textarea rows="9" cols="60" name = "text" style= "border: 1px solid #781351; background-color: #fee3ad"></textarea></p>
                <input type="submit" class = "submit"/>
                
            </form>
             </div>
        
        
             <div class="tabbertab" title="Delete Review">
        	 <form name="myform2" bgcolor = "#884433" class = "form2">
                
                <p> <label for = "id" > ID #: </label> <input type="text" size = "35px" name ="id" id = "id" style= "border: 1px solid #781351; background-color: #fee3ad"></p>
               <!-- <p class = "submit"><input type="submit"/><p> -->
                <button class = "submit" margin-left: "30px" onClick='deleteRow(event)'>submit</button>
    
             </form>
             </div>
        
        </div>


        <img src = "pic/Jimmy1.jpg"  style = "visibility:visible" name = "img1"  width="32" height="32"
                    onMouseOver = "img1.width = '128'; img1.height = '256';"
                    onMouseOut = "img1.width = '32'; img1.height = '32';"/>  
    </body>
</html>

