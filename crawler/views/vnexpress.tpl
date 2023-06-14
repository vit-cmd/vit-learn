
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crawler VnExpress</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>

  <body>
    <h1 class="text-center">{{$title}}</h1>
    <p class="text-center">{{$content}}</p>
    <hr>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Link Post</th>
            <th scope="col">Image</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($dataPosts as $key => $value) {
                    echo "<tr><th>$key</th>";
                    echo "<td>$value->title</td>";
                    if(!empty($value->description)) {
                      echo "<td>$value->description</td>";
                    }
                    if(!empty($value->link)) {
                      echo "<td>$value->link</td>";
                    }
                    if(!empty($value->image)) {
                      echo "<td><img src='$value->image' /></td>";
                    }
                }
            ?>
        </tbody>
        </table>
  </body>

</html>