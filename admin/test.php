<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssa/main.css">
    <link rel="stylesheet" href="../cssa/home.css">
    <link rel="stylesheet" href="../cssa/header.css">
    <link rel="stylesheet" href="../cssa/footer.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin.css">
    
    <script src="js/main.js"></script>
    <title>Головна</title>
</head>
<body>
    <section class="header" >
        
        <div class="green_head">
            <div class="cont_head">
                <p>Тел.: +380 44 288-14-50</p>
                <p>Email:  museumkhanenko@gmail.com</p>
            </div>
            <div class="social_h">
                <a href=""><img src="../media/social/twitter.svg"></a>
                <a href=""><img src="../media/social/facebook.svg"></a>
                <a href=""><img src="../media/social/instagram.svg"></a>
                <a href=""><img src="../media/social/pinterest.svg"></a>
                <a href=""><img src="../media/social/youtube.svg"></a>
            </div>
        </div>
        <div class="white_head navbar navbar-expand-lg">
            <div class="container-fluid">
                <a href="home.php" class="navbar-brand"><img src="../media/лого.PNG" width="150" ></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="links navbar-nav mr-auto nav-tabs">
                        <a href="catalog.php" class="nav-item nav-link active">Колекція</a>
                        <a href="program.php" class="nav-item nav-link">Програма</a>
                        <a href="contacts.html" class="nav-item nav-link">Замовлення</a>
                        <a href="contacts.html" class="nav-item nav-link">Коментарі</a>
                        <a href="contacts.html" class="nav-item nav-link">Користувачі</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="box-body">
  <table id="example1" class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Collection name</th>
          <th scope="col">Exhibit name</th>
          <th scope="col">Photo</th>
          <th scope="col">Edit</th>
        </tr>
    </thead>

    <tbody>
      <?php
        require '../vendor/autoload.php';
        $client = new MongoDB\Client("mongodb://localhost:27017");
        $collection = $client->museum->collection;
        $cursor = $collection->find();
        $count = 0;
        foreach ($cursor as $obj) {
          echo "
            <tr>
              <th scope='row'>".$obj['id_exhibit']."</th>
              <td>".$obj['name_collection']."</td>
              <td>".$obj['description']."</td>
              <td>".$obj['photo']."</td>
              <td>
                <button type='button' class='btn btn-primary btn-success btn-sm edit btn-flat' data-toggle='modal' data-target='#edit' data-whatever=".$obj['name_collection']."> Edit</button>
                  <div class='modal fade' id='edit' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered' role='document'>
                      <div class='modal-content'>
                        <div class='modal-header'>
                          <h5 class='modal-title' id='exampleModalLongTitle'>Редагувати</h5>
                          <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                          </button>
                        </div>
                        <div class='modal-body'>
                          <form method='post' action='UpdateСollection.php'>
                                    <table width='100%'' border='0'>
                                        <tr>
                                            <td height='32'><span class='style8'>Collection name</span></td>
                                            <td>
                                <label>
                                <input name='collectionName' type='text' id='collectionName' value='".$obj['name_collection']."'/>
                                </label>
                                </td>
                                        </tr>
                                        <tr>
                                            <td height='36'><span class='style8'>Exhibit name</span></td>
                                            <td>
                                <label>
                                <input name='exhibitName' type='text' id='exhibitName' />
                                </label>
                                </td>
                                        </tr>
                                        <tr>
                                            <td height='36'><span class='style8'>Photo</span></td>
                                            <td>
                                <label>
                                <input name='Photo' type='text' id='Photo'/>
                                </label>
                                </td>
                                        </tr>
                                  </table>
                                </form>
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-primary'>Зберегти зміни</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$obj['id_exhibit']."'> Delete</button>
              </td>
            </tr>";
        }                   
      ?>
    </tbody>
  </table>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>