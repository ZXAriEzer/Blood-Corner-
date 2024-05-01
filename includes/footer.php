<footer>  
<div class="w3ls-footer-grids pt-sm-4 pt-3">
      <div class="container py-xl-5 py-lg-3">
        <div class="row">
          
          <div class="col-md-4 w3l-footer my-md-0 my-4>
              <?php 
$pagetype="contactus";
$sql = "SELECT * from tblcontactusinfo";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{ ?>
            <?php } } ?>
          </div>
          <div class="col-md-4 w3l-footer">
            <div class="nav-w3-l">
              <ul class="list-unstyled">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li class="mt-2">
                  <a href="about.php">About Us</a>
                </li>
                <li class="mt-2">
                  <a href="contact.php">Contact Us</a>
                </li>
            
              </ul>
            </div>
          </div>
        </div>
        <div class="border-top mt-5 pt-lg-4 pt-3 pb-lg-0 pb-3 text-center">
          <p class="copy-right-grids mt-lg-1">©  Blood Corner
           
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- //footer -->