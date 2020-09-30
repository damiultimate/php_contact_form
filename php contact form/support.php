<?php 

 $file_name=  $_SERVER["SCRIPT_FILENAME"];

                  if (!strpos($file_name, 'index')){
die('<h1>You are not authorized to access this page');
                  }
$sent_email=0;

if (isset($_POST['contact_us'])){

	$to = "contact@topoffers.website";
$subject = $_POST['subject'];
$txt = 'Email: '.$_POST['email'].' & Message: '.$_POST['message'];
$headers = 'From: '.$_POST['email'];

mail($to,$subject,$txt,$headers);

$sent_email=1;


}

 ?>
 <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Support</h2>
                                
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">Contact Us</div>
                                    <div class="card-body">
                                       
                                       <form action="index.php?page=support" method="post">
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo $_SESSION['user']; ?>">
  </div>
   <div class="form-group">
    <label for="email">Title</label>
    <input type="text" name="subject" class="form-control" id="subject" aria-describedby="emailHelp" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea type="text" name="message" class="form-control" id="message" placeholder="Enter Message Here" style="height: 150px;"></textarea>
  </div>
 
  <button type="submit" class="btn btn-primary" name="contact_us">Submit</button>
</form>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                        
           
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 Topoffers. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>