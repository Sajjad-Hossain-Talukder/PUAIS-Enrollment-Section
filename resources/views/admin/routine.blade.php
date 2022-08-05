<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <title>Routine</title>
</head>
<body>

<div class="container">
    <div class="row">
        <h2>All Courses</h2>


        <form method='post' action="{{url('all-courses')}}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="sess">Select Session :  </label> 
                <select name="sess" class='form-control'>
                    @foreach($session as $s)
                        {{$val = $s->s_name. " ".$s->s_year ; }}
                        <option value="{{$val}}">{{$val}}</option>
                    @endforeach
                </select>
            </div>
           

            <div class="form-group">
                <button type="submit" class='btn btn-primary'> Save</button>
            </div>

        </form>

    </div>
</div>


    
</body>
</html>