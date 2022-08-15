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
                <a href="../home.php" class="navbar-brand"><img src="../media/лого.PNG" width="150" ></a>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="links navbar-nav mr-auto nav-tabs">
                        <a href="../collection/catalog.php" class="nav-item nav-link">Колекція</a>
                        <a href="project.php" class="nav-item nav-link active">Програма</a>
                        <a href="../order/order.php" class="nav-item nav-link">Замовлення</a>
                        <a href="../coment/coment.php" class="nav-item nav-link">Коментарі</a>
                        <a href="../user/user.php" class="nav-item nav-link">Користувачі</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<button class="btn btn-primary btn-sm btn-flat float-right mr-1 mb-1 mt-2" data-toggle="modal" data-target="#new">+ New</button>
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Додати новий об'єкт</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="new_project.php" method="POST">
          <input type="hidden" class="prodid" name="_id" id="_id">
          <div class="form-group">
            <label for="name" class="col-form-label">Name project</label>
            <input type="text" class="form-control" id="name" name="name"/>
          </div>
          <div class="form-group">
            <label for="description" class="col-form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description"/>
          </div>
          <div class="form-group">
            <label for="photo" class="col-form-label">Photo</label>
            <input type="text" class="form-control" id="photo" name="photo"/>
          </div>                        
      </div>
      <div class="modal-footer">
        <button type="submit" name="new" class="btn btn-primary">Додати</button>
      </div>
      </form>
    </div>
  </div>
</div>

<section class="box-body">
</table>
  <table id="example1" class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">№</th>
          <th scope="col">Collection name</th>
          <th scope="col">Exhibit name</th>
          <th scope="col">Photo</th>
          <th scope="col">Edit </th>
        </tr>
    </thead>

    <tbody>
      <?php
        
        $link = mysqli_connect('localhost', 'root', '', 'museum') 
                        or die("Ошибка " . mysqli_error($link));
                    
        $query="SELECT id_project, description, name, photo FROM project";
        $result=$link->query($query);
        $project=mysqli_fetch_assoc($result);

        foreach ($result as $obj) {
          $id = $obj["id_project"];
          echo '
            <tr> 
              <td>'.$obj["id_project"].'</td>
              <td>'.$obj["name"].'</td>
              <td>'.$obj["description"].'</td>              
              <td>'.$obj["photo"].'</td>
              <td>
                <button type="button" class="btn btn-primary btn-success btn-sm edit btn-flat" data-toggle="modal" data-target="#edit" data-_id="'.$obj['id_project'].'" data-name="'.$obj["name"].'" data-description="'.$obj["description"].'" data-photo="'.$obj["photo"].'">Edit</button>
                <button class="btn btn-danger btn-sm delete btn-flat" data-toggle="modal" data-target="#delete" data-_id="'.$obj['id_project'].'"><i class="fa fa-trash"></i> Delete</button>       
              </td>
            </tr>';
        }                   
      ?>
      <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Редагувати</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="edit.php" method="POST">
                <input type="hidden" class="prodid" name="_id" id="_id">
                <div class="form-group">
                  <label for="name" class="col-form-label">Name project</label>
                  <input type="text" class="form-control" id="name" name="name"/>
                </div>
                <div class="form-group">
                  <label for="description" class="col-form-label">Description</label>
                  <input type="text" class="form-control" id="description" name="description"/>
                </div>
                <div class="form-group">
                  <label for="photo" class="col-form-label">Photo</label>
                  <input type="text" class="form-control" id="photo" name="photo"/>
                </div>                        
            </div>
            <div class="modal-footer">
              <button type="submit" name="edit" class="btn btn-primary">Редагувати</button>
            </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <form class="form-horizontal" method="POST" action="delete.php">
                    <input type="hidden" class="prodid" id="_id" name="_id">
                    <div class="">
                        <p>Видалити об'єкт?</p>
                        <h2 class="bold name"></h2>
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Видалити</button>
                  </form>
                </div>
            </div>
        </div>
    </div>

    </tbody>
  </table>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">

$('#edit').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('_id')
var name = button.data('name')
var description = button.data('description') 
var photo = button.data('photo') 
var modal = $(this)
modal.find('#_id').val(id)
modal.find('#name').val(name)
modal.find('#description').val(description)
modal.find('#photo').val(photo)
})
$('#delete').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('_id')
var modal = $(this)
modal.find('#_id').val(id)
})
</script>
</body>
</html>