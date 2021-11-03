<?php
    include ('conn.php');
    $search=$_POST['search'];

    //sql statement to select what to search
    $sql="SELECT * from documents
    where name like '%$search%'";

    //run sql statement
    if($result=mysqli_query($conn, $sql)){
            //find out how many matches
$count = mysqli_num_rows($result);

$pageTitle="Search Results";
print <<<HERE
<h2>Search Results</h2>
<h3>$count results found seaching for "$search"</h3>
<table cellpadding="15">
HERE;
            //loop through results and get variables
    while ($row=mysqli_fetch_array($result)){
        $id=$row['id'];
        $name=$row['name'];
        $size=$row['size'];

        print <<<HERE
            <tr>
                    <td>
                    <form method="post" action="confirmdelete.php>
                    <input type="hidden" name="sel_record" value="$id">
                    <input type="submit" name="delete" value="Delete">
                    </form>

                    <form method="post" action="updateform.php">
                    <input type="hidden" name="sel_record" value="$id">
                    <input type ="submit" name="update" value="Edit">
                    </form>
                    </td>
                    <td><strong>$name</strong><br />
                    Size: $size<br />
                    
HERE;        
    }

}else{
        echo "Error";
}
    print "</tr></table></body></html>";
?>