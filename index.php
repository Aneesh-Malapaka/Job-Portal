<?php include 'header.php'; ?>

<div class="content">
    <p>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Add a new Job
        </button>
    </p>
    <div class="collapse" id="collapseExample">
        <form action="jobsConfig.php" method="post">
            <div class="form-group">
                <label for="companyName">Company Name</label>
                <input type="text" class="form-control" id="companyName" aria-describedby="CnameHelp" placeholder="Enter Company Name" name="company">
            </div>
            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" id="position" placeholder="Enter Job Position" name="position">
            </div>
            <div class="form-group">
                <label for="JobDesc">Job Description</label>
                <textarea class="form-control" id="JobDesc" placeholder="Enter Job Description" rows="10" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="skills">Skills Required</label>
                <input type="text" class="form-control" id="skills" placeholder="Enter Skills Required" name="skills">
            </div>
            <div class="form-group">
                <label for="CTC">CTC</label>
                <input type="text" class="form-control" id="CTC" placeholder="Enter Job CTC" name="CTC">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>
    <br>
    <h3>Existing Jobs Records</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Company Name</th>
                <th scope="col">Position</th>
                <th scope="col">Skills</th>
                <th scope="col">CTC</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <th scope="row">1</th>
                <td>TCS</td>
                <td>SDE1</td>
                <td>HTML, CSS</td>
                <td>8 LPA</td>
            </tr> -->
            <?php
            $server = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'jobportal';


            $conn = new mysqli($server, $username, $password, $database);

            if ($conn->connect_error) {
                die("connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT `id`, `company`,`position`,`Skills`,`CTC` from `jobinfo`";
            $res = mysqli_query($conn, $sql);
            if ($res->num_rows > 0) {

                while ($rows = $res->fetch_assoc()) {
                    $i = 0;
                    echo
                    "<tr>" .
                        "<td>" . $rows['id'] . "</td>" .
                        "<td>" . $rows['company'] . "</td>" .
                        "<td>" . $rows['position'] . "</td>" .
                        "<td>" . $rows['Skills'] . "</td>" .
                        "<td>" . $rows['CTC'] . "</td>" .
                        "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>

</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script> -->


</body>

</html>