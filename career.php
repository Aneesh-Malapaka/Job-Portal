<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal Register</title>
    <!-- Bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="./StyleFolder/style.css">
    <style>
        .sidebar {
            margin: 0 0 0 0;
            padding: 0;
            width: 200px;
            background-color: #eeffed;
            position: fixed;
            /* top: 56px;
            left: 0; */
            height: 100vh;
            overflow: auto;
        }

        .navbar {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            left: -5px;
            top: 0;
            width: 100%;
        }

        div.content {
            margin-left: 200px;
            margin-top: 56px;
            padding: 1px 16px;
            height: 1000px;
        }

        div.content button {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .card-content {
            display: flex;
            flex-wrap: wrap;
            height: 100vh;
        }


        @media screen and (max-width: 1024px) {
            .card-content {
                justify-content: center;
            }
        }
    </style>
</head>

<body style="width: 100vw;">
    <div class="container-fluid">
        <div class="nav--div">
            <!-- <nav class="navbar navbar-expand-lg navbar-light navbar-fixed" style=" background-color: #e3f2fd; width:100vw">
                <a class="navbar-brand" href="#">Job Postings</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">

                    </ul>
                </div>
            </nav> -->
            <div class="banner">
                <img style="opacity:0;" src="https://images.unsplash.com/photo-1544027993-37dbfe43562a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="" width="800">
                <div class="upper">
                    <h1>Jobs Portal</h1>
                    <h4>Get the Job you always wanted.</h4>
                </div>

            </div>
            <div class="card-content">
                <?php
                $server = 'localhost';
                $username = 'root';
                $password = '';
                $database = 'jobportal';


                $conn = new mysqli($server, $username, $password, $database);

                if ($conn->connect_error) {
                    die("connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT `company`,`position`,`description`,`Skills`,`CTC` from `jobinfo`";
                $res = mysqli_query($conn, $sql);
                if ($res->num_rows > 0) {

                    while ($rows = $res->fetch_assoc()) {
                        $i = 0;
                        echo


                        '<div class="card" style="width: 28em; padding:10px; margin:20px;height:23em; box-shadow: 0 10px 20px rgba(64, 61, 61, 0.553);">'
                            . '<div class="card-body">' .
                            '<h5 class="card-title">' . $rows['position'] . '</h5>'
                            . '<h6 class="card-subtitle mb-2 text-muted">' . $rows['company'] . '</h6>'
                            . '<p class="card-text">' . $rows['description'] . '</p>'

                            . '<p><b>Skills Required: </b>' .
                            $rows['Skills'] . '</p>'
                            . '<p><b>CTC</b> : ' . $rows['CTC'] . '</p>
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">
                            Apply Now
                        </button>'
                            . '</div>
                    </div>';
                    }
                }

                ?>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button> -->

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Your Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="candidateConfig.php" method="post">
                                    <div class="form-group">
                                        <label for="CandidateName" class="col-form-label">Name:</label>
                                        <input type="text" class="form-control" id="CandidateName" name="CandidateName">
                                    </div>
                                    <div class="form-group">
                                        <label for="pos" class="col-form-label">Applying For Position:</label>
                                        <input type="text" class="form-control" id="pos" name="pos">
                                    </div>
                                    <div class="form-group">
                                        <label for="qual" class="col-form-label">Qualification:</label>
                                        <input type="text" class="form-control" id="qual" name="qual">
                                    </div>
                                    <div class="form-group">
                                        <label for="year" class="col-form-label">Passout Year:</label>
                                        <input type="text" class="form-control" id="year" name="year">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name="apply" class="btn btn-primary">Apply</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>