<?php

include('db.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX CRUD</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1 class="display-4">AJAX CRUD Operations</h1>

                </div>
            </div>
        </div>
    </div>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary addPerson" data-toggle="modal" data-target="#exampleModalCenter">
                    Add New
                </button>
                <br> <br>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="table_content" class="panel-body"><br /><br />


                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Name</td>
                                <td>Email</td>
                                <td><button class="btn btn-info" data-toggle="modal" id="person_edit" data-id="" data-target="#editPerson">Edit</button>
                                    &nbsp;&nbsp;
                                    <button class="btn btn-danger" data-id="" id="deletePerson" onclick="return confirm('Are You Sure To Delete')">Delete</button>
                                </td>
                            </tr>



                        </tbody>

                    </table>



                </div>

            </div>
        </div>
    </div>






    <!-- Modal  Add New Person-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Personal Information </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="name">Enter Name</label>
                            <input type="text" class="form-control" id="add_name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="add_email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>

                        <button type="submit" id="addPerson" class="btn btn-primary">Save</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>





        <!-- Modal  Edit Person-->
        <div class="modal fade" id="editPerson" tabindex="-1" role="dialog" aria-labelledby="editPerson" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Personal Information </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="update.php?person_id=">

                            <div class="form-group">
                                <label for="name">Enter Name</label>
                                <input type="text" class="form-control" name="name" id="add_name" value="" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" name="email" id="add_email" value="" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>

                            <button type="submit" id="update_person" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

    <script>

    </script>
</body>

</html>
