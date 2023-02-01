<?php include('partials/menu.php'); ?>



<!-- Main Content Section Starts -->
<div class = "main-content">

        <div class = "wrapper">
                 <h1>Manage Admin</h1>
                 <br><br><br>
                 <?php 
                  if(isset($_SESSION['add'])){
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                  }
                 if(isset($_SESSION['delete'])){
                   echo $_SESSION['delete'];
                   unset($_SESSION['delete']);
                 }

                 if(isset($_SESSION['update'])){
                   echo $_SESSION['update'];
                   unset($_SESSION['update']);
                 }
                 if(isset($_SESSION['user-not-found'])){
                  echo $_SESSION['user-not-found'];
                  unset($_SESSION['user-not-found']);
                }
                 
                if(isset($_SESSION['pwd-not-match'])){
                  echo $_SESSION['pwd-not-match'];
                  unset($_SESSION['pwd-not-match']);
                }
                
                if(isset($_SESSION['change-pwd'])){
                  echo $_SESSION['change-pwd'];
                  unset($_SESSION['change-pwd']);
                }
                 ?>


                <!--Button to Add Admin-->
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <br><br><br>


                 <table class ="tbl-full">
                        <tr>                       
                          <th>ID</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>Actions</th>                                         
                        </tr>


                        <?php
                          $sql = "SELECT * FROM admin";
                          $res = mysqli_query($conn,$sql);
                          
                          if($res == TRUE){

                            $count = mysqli_num_rows($res);
                            $sn =1;
                            if($count>0){
                              while($rows = mysqli_fetch_assoc($res)){
                                $id = $rows['admin_id'];
                                $username = $rows['admin_username'];
                                $email = $rows['admin_email'];

                                ?>
                                   <tr>
                                        <td><?php  echo $sn++;  ?>.</td>
                                        <td><?php echo $username; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td>
                                        <a href="http://localhost/project/admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change Password</a>
                                        <a href="http://localhost/project/admin/update-admin.php?id=<?php echo $id; ?>"  class="btn-secondary"> Update Admin</a>
                                         <a href="http://localhost/project/admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-danger"> Delete Admin</a>
                                         </td>
                                         
                        
                                     </tr>

                                <?php

                              }
                            }
                            else{

                            }
                          }
                        ?>

                 
                 </table>

                

               
        </div>        
  </div>
<!-- Main Content Section Ends -->




<?php include('partials/footer.php') ?>


</body>
</html>