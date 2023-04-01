<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h3 class="text-center">
            Search Username Here!
        </h3>
        <p class="text-danger text-center">You Can search A User By Providing Username Below In The Search Box</p>
        <div class="input-group">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" id="user-data">

            <button type="button" class="btn btn-info" id="displaydata">search</button>
        </div>
    </div>
    <div class="container mt-5">
        <h3 class="bg-dark text-info text-center rounded">User Data</h3>
        <table class="table table-responsive table-striped table-bordered 
        .table-borderless text-center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Date</th>
                </tr>
            </thead>

            <tbody id="response">

            </tbody>
        </table>

    </div>
    <script src="jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#displaydata").click(function() {
                var usern = $('#user-data').val();

                $.ajax({
                    url: 'displaydata.php',
                    method: 'get',
                    data: {usern: usern},
                    
                    success: function(data) {
                        $('#response').html(data);

                    }
                });
            });
        });
    </script>
</body>

</html>