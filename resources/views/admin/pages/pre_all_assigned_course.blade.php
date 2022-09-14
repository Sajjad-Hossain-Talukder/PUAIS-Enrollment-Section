<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>{{ $row->session_name." ".$row->session_year }}</title>
    <style>
        .dv{
            border : 1px solid black;
            border-radius : 10px;
        }
        .dv:hover{
           
            border-radius : 10px;
            box-shadow : 1px 1px 5px gray;
        }
    </style>
</head>
<body>

    <div class="container border-bottom text-center p-4">
        <h4>{{ $row->session_name." ".$row->session_year}}</h4>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-3">
            <table class="table">
            <thead>
                <tr>
                    <th>Semester</th>
                    <th>Course Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach($assigned as $as )
                    <tr>
                        <td>{{$as->semester}}</td>
                        <th>{{$as->course_title}}</th>
                    </tr>
                @endforeach
            </tbody>

         </table>
            </div>
            <div class="col-lg-3"></div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>




