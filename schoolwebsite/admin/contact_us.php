<!DOCTYPE html>
<html>
    <head>
        <title>Contact_us</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    </head>
    <body>
        <header>

        </header>

        <main>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered">
                            <thread>
                                <tr>
                                    <th>id</th>
                                    <th>Fullname</th>
                                    <th>Email</th>
                                    <th>Phonenumber</th>
                                    <th>Password</th>
                                    <th>Confirmpassword</th>
                                </tr>
                            </thread>
                            <tbody>
                                <?php
                                    require_once("connection.php");
                                    $sql="SELECT * FROM `contact_us`";
                                     $result=mysqli_query($conn,$sql);
                                ?>
                                <?php while($row=mysqli_fetch_assoc($result)){?>
                                    <tr>
                                        <td> <?php echo$row["id"]?></td>
                                        <td> <?php echo$row["fullname"]?></td>
                                        <td> <?php echo$row["email"]?></td>
                                        <td> <?php echo$row["phonenumber"]?></td>
                                        <td> <?php echo$row["password"]?></td>
                                        <td> <?php echo$row["cpassword"]?></td>
                                        <td>

                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo$row['id']?>">
                                        Update
                                        </button>
                                        
                                        </td>

                                        <!--UPDATE MODAL-->
                                            <!-- Modal -->
                                                <div class="modal fade" id="updateModal<?php echo$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update:<?php echo$row['fullname']?></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!--UPDATE FORM-->
                                                        <form method="POST" action="update.php">
                                                                <div class="mb-3">
                                                                    <label for="id" class="form-label">Id</label>
                                                                    <input type="text" name="id" class="form-control" value="<?php echo$row["id"]?>">
                                                                   
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="fullname" class="form-label">Fullname</label>
                                                                    <input type="text" name="fullname" class="form-control" value="<?php echo$row["fullname"]?>">
                                                                   
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="email" class="form-label">Email</label>
                                                                    <input type="text" name="email" class="form-control" value="<?php echo$row["email"]?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="phonenumber" class="form-label">Phonenumber</label>
                                                                    <input type="text" name="phonenumber" class="form-control" value="<?php echo$row["phonenumber"]?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="password" class="form-label">Password</label>
                                                                    <input type="text" name="password" class="form-control" value="<?php echo$row["password"]?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="confirm_password" class="form-label">Confirm Password</label>
                                                                    <input type="text" name="cpassword" class="form-control" value="<?php echo$row["cpassword"]?>">
                                                                </div>
                                                                
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                        </form>
                                                        <!--END OF UPDATE FORM-->
                                                         <!--DELETE FORM-->
                                                         <!-- Button trigger modal -->
                                                                <td>
                                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo$row['id']?>">
                                                                Delete
                                                                </button>
                                                                </td>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="deleteModal<?php echo$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete:<?php echo$row['fullname']?></h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form>
                                                                        <div class="mb-3">
                                                                            <label for="id" class="form-label">Id</label>
                                                                            <input type="text" class="form-control" value="<?php echo$row["id"]?>">
                                                                        
                                                                        </div>
                                                                
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                                </div>
                                                        
                                                        <!--END OF DELETE FORM-->
                                                    </div>
                                                </div>
                                                </div>
                                        <!--END OF UPDATE MODAL-->
                                        

                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </main>
        <footer>

        </footer>

    </body>


</html>