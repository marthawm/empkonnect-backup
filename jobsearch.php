
<?php 
  include("includes/layouts/header.php");
  include("db.php");
  include("includes/functions.php");
?>

<?php
if (isset($_POST['search'])) {
    $searchq = $_POST['search'];
    $searchq = preg_replace("#[^0-9a-z]#i","", $searchq);

    $query = mysql_query("SELECT * FROM jobs WHERE category LIKE '%$searchq%' OR location LIKE '%$searchq%'") or die("could not search1");
    $count = mysql_num_rows($query);

    if ($count == 0) {
        $output = 'There was no search results';
    }else{
        while ($row = mysql_fetch_array($query)) {
            $jname = $row['category'];
            $lname = $row['location'];
            $id = $row['id'];
            $output .= '<div>'.$jname.' '.$lname.'</div>';
        }
    }
    echo $output;
}
?>


<div class="row">
<h5 style="color: #000; margin-left: 200px;font-family: franklin gothic heavy;">JOB SEARCH</h5>
<div class="container" style="margin-top: 10px; background-color: #fff; padding: 20px; border-radius: 5px; opacity: 0.8;border-style: solid; border-color: #039be5; border-width: 1px;">
   <form action="jobsearch.php" method="GET">
     <div class="col m4">
     <div class="form-group">
    <lable style="color: #000; font-weight: bold;">Job Category</lable>
    <select style="margin-top: 10px;" class="form-control" name="category">
         <option>Accounting & Auditing</option>
         <option>Executive / Top Management</option>
         <option>Creatives (Arts, Design, Fashion)</option>
         <option>Customer Service & Customer Support</option>
         <option>Education & Training</option>
         <option>Engineering/Mechanics/Construction</option>
         <option>Farming & Agriculture</option>
         <option>Government</option>
         <option>Healthcare & Pharmaceuticals</option>
         <option>Human Resources & Recruitment</option>
         <option>Insuarance</option>
         <option>IT & Telecoms</option>
         <option>Legal</option>
         <option>Manufacturing/Production</option>
         <option>Marketing, Communications & PR</option>
         <option>Mining & Natural Resources</option>
         <option>NG0, Community & Social Development</option>
         <option>Administration & Office Support</option>
         <option>Project/Programme Management</option>
         <option>Research, Quality Control/Quality Assuarance</option>
         <option>Retail</option>
         <option>Sales/Business Development</option>
         <option>Security & Consulting</option>
         <option>Tourism & Travel</option>
         <option>Trade & Services</option>
         <option>Transport, Logistics, Procurement</option>
         <option>Real Estate</option>
         <option>Hospitality/Leisure/Travel</option>
         <option>Others</option>

    </select>
    </div>
    </div>


     <div class="col m4">
     <div class="form-group">
     <label style="color: #000; font-family: arial; font-size: 15px; font-weight: bold;">Location</label>
    
    <select style="margin-top: 5px;" class="form-control" name="location" id="location">   
       
         <option>Nairobi</option>
         <option>Kisumu</option>
         <option>Thika</option>
         <option>Mombasa</option>
         <option>Nakuru</option>
         <option>Eldoret</option>
         <option>Naivasha</option>
         <option>Garissa</option>
         <option>Embu</option>
         <option>Meru</option>
         <option>Rest of Kenya</option>
         <option>Rest of World</option>

      </select>

    </div>
    </div>

    <div class="col m4">
     <button style="margin-top: 29px; background-color: #03a9f4; width: 180px;" class="btn btn-info" type="submit" name="search"><span class="glyphicon glyphicon-search"></span>Search</button>
    </div>
    
    <div class="col m4">
    
    </div>
</form>
<?php echo $output;?>

</div>

</div>
<?php 
  include("includes/layouts/footer.php");
?>