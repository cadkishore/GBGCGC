<html lang="en">

<head>

  <title>Tickets</title>




  <!-- CORE CSS-->
  <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
 
  
</head>

<body>

        <div class="container">
          <p class="caption">If you're experiencing any issues, contact us by opening a ticket.</p>
          <div class="divider"></div>
            <div class="row">
              <div class="col s12 m4 l3">
                <h4 class="header">Open a ticket</h4>
              </div>
<div>
                <div class="card-panel">
                  <div class="row">
                    <form class="formValidate" id="formValidate" method="post" action="routers/add-ticket.php" novalidate="novalidate" class="col s12">
                      <div class="row">
                        <div class="input-field col s12">
                          <input name="subject" id="subject" type="text" data-error=".errorTxt1">
                          <label for="subject" class="">Subject</label>
						  <div class="errorTxt1"></div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s12">
                          <textarea name="description" id="description" class="materialize-textarea validate" data-error=".errorTxt2"></textarea>
                          <label for="description" class="">Description</label>
						  <div class="errorTxt2"></div>
                        </div>
                      </div>					  
                      <div class="row">
                        <div class="input-field col s4">
							<select name="type">
								<option disabled selected>Choose a type</option>
								<option value="Support">Support/Query</option>
								<option value="Payment">Payment</option>
								<option value="Complaint">Complaint</option>
								<option value="Others">Others</option>				
							</select>
							<label>Type</label>
                        </div>
                      </div>					  
                      <div class="row">
                        <div class="row">
                          <div class="input-field col s12">
						  <input type="hidden" value="<?php echo $user_id;?>" name="id">
                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                              
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        
            
          </div>
  
    </div>

    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>    

    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script type="text/javascript" src="js/plugins.min.js"></script>
  
  
</body>

</html>
