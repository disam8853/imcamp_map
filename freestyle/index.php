<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache" />
  <title>IM map</title>
  <!-- normalize.css -->
  <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
  <!-- gogole fonts -->

  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&amp;subset=chinese-traditional" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">  

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
  <!-- hide address bar -->
  <?php
    include("../addstyle.php");
  ?>
</head>

<body>
    <div id="storybox" class="row">
        <div class='col-2'>
        </div>
        <div id='main' class='col-8'>
            <form>
                <div class="form-group">
                    <label for="freestyle">你的 style 夠酷嗎? 讓 Worldmap 變成你的 style !(記得重新整理！)</label>
                    <input name="style" type="text" class="form-control" id="freestyle" aria-describedby="" placeholder="background-color:white;">
                    <small id="style" class="form-text text-muted">Though I merely insert your style into body, the sky is the limit.</small>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
        <div class='col-2'>
        </div>
    </div>
</body>

</html>