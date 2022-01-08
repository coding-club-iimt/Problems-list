<?php ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Submit Problem </title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch no-gutters contact-wrap">
        <div class="col-md-12">
          <div class="form h-100">
            <h3>Practice Problem</h3>
            <form class="mb-5" method="post" id="contactForm" name="contactForm" action="logic.php">
              

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Topic</label>
                  <select class="custom-select" id="budget" name="topic">
                        <option selected>Choose any topic </option>
                   
                         
                          <option value="Arrays"> Arrays</option>
                          <option value="Linked List"> Linked Lists</option>
                          <option value="Stack"> Stacks</option>
                          <option value="Queue"> Queues</option>
                          <option value="Tree"> Trees</option>
                          <option value="Graph"> Graphs</option>
                          <option value="Strings"> Strings</option>
                          <option value="Searching"> Searching</option>
                          <option value="Sorting"> Sorting</option>
                          <option value="Greedy"> Greedy</option>
                          <option value="Dynamic Programming"> Dynamic Programming</option>
                          <option value="Backtracking"> Backtracking</option>
                          <option value="Bitmasking"> Bitmasking</option>
                          <option value="Divide and Conquer"> Divide and Conquer</option>
                          <option value="Binary Search"> Binary Search</option>

                          
                         
                  </select>
                </div>
              </div>

              <!---difficulty --->
              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="difficulty" class="col-form-label">Difficulty</label>
                  <select class="custom-select" id="difficulty" name="difficulty">
                          <option selected>Choose difficulty level</option>
                          <option value="0">Easy</option>
                          <option value="1">Medium</option>
                          <option value="2">Hard</option>
                  </select>
               </div>
              </div>
              

            
          

              
              <div class="row">
                <div class="col-md-12 form-group">
                  <input type="submit" value="Submit" class="btn btn-primary rounded-0 py-2 px-4 " style="background-color:#070707;">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>
