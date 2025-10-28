<?php
$insert = false;
$update = false;
$delete = false;

$servername = "localhost";
$username = "root";
$password = "";
$database = "notes";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET ['delete'])) {
    $sno = $_GET ['delete'];
    $delete = true;
    $sql = "DELETE FROM `notes` WHERE `sno` = $sno";
    $resutl = mysqli_query($conn, $sql);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['snoEdit'])) {
        $title = $_POST['titleEdit'];
        $sno = $_POST['snoEdit'];

        $description = $_POST['descriptionEdit'];
        $sql = "UPDATE `notes` 
        SET `title` = '$title', 
            `description` = '$description'  
        WHERE `notes`.`sno` = $sno";
        // var_dump($sql);die;
        $result = mysqli_query($conn, $sql);
        $update = true;
    } else {
        $title = $_POST['title'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $sql);
        $insert = true;
    }
}?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>PHP_CDN</title>
</head>

<body>

    <!-- Edit modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">
        Launch demo modal
    </button> -->

    <!--Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/testing/index_01.php" method="POST">
                        <input type="hidden" class="form-control" name="snoEdit" id="snoEdit">
                        <div class="mb-3">
                            <label for="title">Note Title</label>
                            <input type="text" class="form-control" id="titleEdit" name="titleEdit" aria-describedby="">
                        </div>
                        <div class="mb-3">
                            <label for="desc" class="form-label">Note Description</label>
                            <textarea class="form-control" id="descriptionEdit" name="descriptionEdit"
                                rows="3"></textarea>
                        </div>

                </div>
                <div class="modal-footer d-block me-auto">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">iNotes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <?php
    if ($insert) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Success!</strong> Your note has been inserted successfully 
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
    }
    ?>
    <?php
    if ($delete) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Success!</strong> Your note has been deleted successfully 
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
    }
    ?>
    <?php
    if ($update) {
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Success!</strong> Your note has been updated successfully 
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
    }
    ?>

    <main>
        <div class="container my-5">
            <h2>Add a Note</h2>
            <form action="/testing/index_01.php" method="POST">
                <div class="mb-3">
                    <label for="title">Note Title</label>
                    <input type="title" class="form-control" id="title" name="title" aria-describedby="">
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Note Description</label>
                    <textarea class="form-control" id="description" name="descriddddddption" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Add Note</button>
            </form>
        </div>

        <div class="container my-4">

            <table class="table" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">S.no</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM `notes`";
                        $result = mysqli_query($conn, $sql);
                        $sno = 0;

                        while ($row = mysqli_fetch_assoc($result)) {
                            $sno = $sno + 1;
                        echo "<tr>
                            <th scope='row'>". $sno ."</th>
                            <td>". htmlspecialchars($row['title']) ."</td>
                            <td>". htmlspecialchars($row['description']) ."</td>
                            <td>
                                <button class='edit btn btn-sm btn-primary' id=".$row['sno'].">Edit</button>
                                <button class='delete btn btn-sm btn-primary' id=d".$row['sno'].">Delete</button>
                            </td>
                        </tr>";
                        }
                    ?>

                </tbody>
            </table>
        </div>
        <hr>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="//cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>

    <script>
    // let table = new DataTable('#myTable');
    $(document).ready( function () {
        $('#myTable').dataTable();
    } );
    </script>
    <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
        element.addEventListener("click", (e) => {
            tr = e.target.parentNode.parentNode;
            title = tr.getElementsByTagName("td")[0].innerText;
            description = tr.getElementsByTagName("td")[1].innerText;
            console.log(title, description);
            titleEdit.value = title;
            descriptionEdit.value = description;
            snoEdit.value = e.target.id;
            console.log(e.target.id);

            const editModalAlternative = new bootstrap.Modal('#editModal');
            editModalAlternative.show();
        });
    });

    deletes = document.getElementsByClassName('delete');
    Array.from(deletes).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log("edit ", );
            sno = e.target.id.substr(1, );

            if (confirm("Are you sure you want to delete this note!")) {
                console.log("yes")
                window.location = `/testing/index_01.php?delete=${sno}`;
            } else {
                console.log("no");

            }

        });
    });
    </script>



</body>

</html>