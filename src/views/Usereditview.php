<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>


<body>
    <div class="container">

        <form action = '#' method="post">
           <div class="mb3">
              ID GV:  <input type="text" class="form-control" name="magv" >
              <br>
              ho va ten:  <input type="text" class="form-control" name="hovaten" >
              <br>
              ngay sinh:  <input type="date" class="form-control" name="ngaysinh" >
              <br>
              gioi tinh:  <select name="gioitinh" class="form-select">
                                <option value="1">nam</option>
                                <option value="0">nu</option>
                        </select>
                        <br>
              trinh do:  <input type="text" class="form-control" name="trinhdo" >
              <br>
              chuyen mon:  <input type="text" class="form-control" name="chuyenmon" >
              <br>
              hoc ham:  <input type="text" class="form-control" name="hocham" >
              <br>
              hoc vi:  <input type="text" class="form-control" name="hocvi" >
              <br>
              co quan  <input type="text" class="form-control" name="coquan" >
              <br>

           </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>



    </div>

</body>

</html>