<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>Course Details</title>
</head>
<body>
    
    <div class="container">
        <h2 class="text-center">Person List</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Course Code</th>
                    <th>Course Title</th>
                    <th>Section</th>
                    <th>Teacher ID</th>

                   

                </tr>
            </thead>
            <tbody>
                @foreach($rows as $p)
                <tr>
                    <td>{{$p->course_code}}</td>
                    <td>{{$p->course_name}}</td>
                    <td>{{$p->section}}</td>
                    <td>{{$p->T_name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>