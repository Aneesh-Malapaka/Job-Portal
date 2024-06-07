<?php include 'header.php'; ?>

<div class="content">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Candiadte Name</th>
                <th scope="col">Position</th>
                <th scope="col">Qualification</th>
                <th scope="col">Year Passout</th>
                <th scope="col">Resume</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $server = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'jobportal';


            $conn = new mysqli($server, $username, $password, $database);

            if ($conn->connect_error) {
                die("connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT `id`, `name`,`position`,`qualification`,`passout` from `candidates`";
            $res = mysqli_query($conn, $sql);
            if ($res->num_rows > 0) {

                while ($rows = $res->fetch_assoc()) {
                    $i = 0;
                    echo
                    "<tr>" .
                        "<td>" . $rows['id'] . "</td>" .
                        "<td>" . $rows['name'] . "</td>" .
                        "<td>" . $rows['position'] . "</td>" .
                        "<td>" . $rows['qualification'] . "</td>" .
                        "<td>" . $rows['passout'] . "</td>" .
                        '<td> <a href=""><i class="fa-solid fa-file-arrow-down">&nbsp; </i>' . $rows['name'] . 'Resume</a>' . "</td>" .
                        "</tr>";
                }
            }
            ?>
            <!-- <tr>
                <th scope="row">1</th>
                <td>Charles</td>
                <td>Detective</td>
                <td>BE</td>
                <td>2023</td>
                <td><a href=""><i class="fa-solid fa-file-arrow-down"></i> CharlesResume</a></td>
            </tr> -->

        </tbody>
    </table>
</div>