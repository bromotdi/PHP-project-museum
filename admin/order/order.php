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
                        <a href="../project/project.php" class="nav-item nav-link">Програма</a>
                        <a href="order.php" class="nav-item nav-link active">Замовлення</a>
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
        <form action="new_order.php" method="POST">
          <input type="hidden" class="prodid" name="_id" id="_id">
          <div class="form-group">
            <label for="names" class="col-form-label">Name</label>
            <input type="text" class="form-control" id="names" name="names"/>
          </div>
          <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email"/>
          </div>
          <div class="form-group">
            <label for="project" class="col-form-label">Project</label>
            <input type="text" class="form-control" id="project" name="project"/>
          </div>   
          <div class="form-group">
            <label for="date" class="col-form-label">Date</label>
            <input type="text" class="form-control" id="date" name="date"/>
          </div> 
          <div class="form-group">
            <label for="status" class="col-form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status"/>
          </div>   
          <div class="form-group">
            <label for="benefits" class="col-form-label">Benefits</label>
            <input type="text" class="form-control" id="benefits" name="benefits"/>
          </div>  
          <div class="form-group">
            <label for="coments" class="col-form-label">Comment</label>
            <input type="text" class="form-control" id="coments" name="coments"/>
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
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Project</th>
          <th scope="col">Date</th>
          <th scope="col">Status</th>
          <th scope="col">Benefits</th>
          <th scope="col">Comment</th>
          <th scope="col">Edit </th>
        </tr>
    </thead>

    <tbody>
      <?php
        
        $link = mysqli_connect('localhost', 'root', '', 'museum') 
                        or die("Ошибка " . mysqli_error($link));
                    
        $query="SELECT id_user, names, email, id_project, date, id_status, id_benefits, coments FROM orders";
        $result=$link->query($query);
        $project=mysqli_fetch_assoc($result);

        foreach ($result as $obj) {
          $id = $obj["id_user"];
          echo '
            <tr> 
              <td>'.$obj["id_user"].'</td>
              <td>'.$obj["names"].'</td>
              <td>'.$obj["email"].'</td>
              <td>'.$obj["id_project"].'</td>
              <td>'.$obj["date"].'</td>
              <td>'.$obj["id_status"].'</td>
              <td>'.$obj["id_benefits"].'</td>
              <td>'.$obj["coments"].'</td>
              <td>
                <button type="button" class="btn btn-primary btn-success btn-sm edit btn-flat" data-toggle="modal" data-target="#edit" data-_id="'.$obj['id_user'].'" data-names="'.$obj["names"].'" data-email="'.$obj["email"].'" data-project="'.$obj["id_project"].'" data-date="'.$obj["date"].'" data-status="'.$obj["id_status"].'" data-benefits="'.$obj["id_benefits"].'" data-coments="'.$obj["coments"].'">Edit</button>
                <button class="btn btn-danger btn-sm delete btn-flat" data-toggle="modal" data-target="#delete" data-_id="'.$obj['id_user'].'"><i class="fa fa-trash"></i> Delete</button>       
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
                  <label for="names" class="col-form-label">Name</label>
                  <input type="text" class="form-control" id="names" name="names"/>
                </div>
                <div class="form-group">
                  <label for="email" class="col-form-label">Email</label>
                  <input type="text" class="form-control" id="email" name="email"/>
                </div>   
                
                <div class="form-group">
            <label for="project" class="col-form-label">Project</label>
            <input type="text" class="form-control" id="project" name="project"/>
          </div> 
          <div class="form-group">
            <label for="date" class="col-form-label">Date</label>
            <input type="text" class="form-control" id="date" name="date"/>
          </div>   
          <div class="form-group">
            <label for="status" class="col-form-label">Status</label>
            <input type="text" class="form-control" id="status" name="status"/>
          </div>   
          <div class="form-group">
            <label for="benefits" class="col-form-label">Benefits</label>
            <input type="text" class="form-control" id="benefits" name="benefits"/>
          </div>  
          <div class="form-group">
            <label for="coments" class="col-form-label">Comment</label>
            <input type="text" class="form-control" id="coments" name="coments"/>
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
                        <h2 class="bold names"></h2>
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
var names = button.data('names')
var email = button.data('email') 
var project = button.data('project') 
var date = button.data('date') 
var status = button.data('status')
var benefits = button.data('benefits') 
var coments = button.data('coments') 
var modal = $(this)
modal.find('#_id').val(id)
modal.find('#names').val(names)
modal.find('#email').val(email)
modal.find('#project').val(project)
modal.find('#date').val(date)
modal.find('#status').val(status)
modal.find('#benefits').val(benefits)
modal.find('#coments').val(coments)
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