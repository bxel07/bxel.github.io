<?php
require_once("componen.php");
require_once("koneksi.php");
require_once("operation.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MT-SOLUTION 100</title>   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/typeit@8.0.7/dist/index.umd.js"></script>
    <link rel="stylesheet" href="css/crud.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"crossorigin="anonymous">
</head>
<body>
    <!--Navigation-->
    <header>
        <div class="container-fluid p-0">
          <nav class="navbar navbar-expand-lg sticky-top">
            <a class="navbar-brand" href="#">
              <i class="fas fa-book-reader fa-2x"></i> MT-SOLUTION</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <i class="fas fa-align-right text-light"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <div class="mr-auto"></div>
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">HOME
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="materi.html">Materi</a>
                </li>
                <li class="nav-item dropdown">
                  <div class="dropdown">
                    <a href="#" class="nav-link">Exercise</a>
                    <div class="dropdown-content">
                    <a href="./quiz/quiz.html">Quiz</a>
                      <a href="https://meet.google.com/wky-jexx-pya">Conference</a>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="vote.php">Vote Article</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="container-bread">
          <div class="contex">
            <h3 class="text-center text-light"><i class="fas fa-poll"></i> Vote Article</h3>
          </div>
      </div>
      </header>
      <div class="line-spaces" style="padding:1px; background-color: goldenrod;"></div>

      <div class="section-vote p-4 w-75">
        <form action="" method="POST"class="centered">
          <div class="py-2 d-flex">              
            <?php inputElement(icon:"<i class='fas fa-list-ol'></i>",placeholder:"id",name:"id",value:"");?>
          </div>
          <div class="py-2 d-flex">              
            <?php inputElement(icon:"<i class='fas fa-id-badge'></i>",placeholder:"Your Name",name:"name",value:"");?>
          </div>
          <div class="pt-2 d-flex">
            <?php inputElement(icon:"<i class='fas fa-poll'></i>",placeholder:"Your Vote",name:"vote",value:"");?>
          </div>
          <div class="pt-4 d-flex">
            <?php inputElement(icon:"<i class='fas fa-file-import'></i>",placeholder:"Your Reason",name:"alasan",value:"");?>
          </div>
          <div class="d-flex justify-content-center py-2">
            <?php buttonElement(name:"create", attr:"data-toggle='tooltip data-placement='bottom' title='create'",styleclass:"btn btn-outline-success", id:"cre", text:"<i class='fas fa-plus-square'></i>");?>
            <?php buttonElement(name:"Update", attr:"data-toggle='tooltip data-placement='bottom' title='Update'",styleclass:"btn btn-outline-primary", id:"upd", text:"<i class='fas fa-sync-alt'></i>");?>
            <?php buttonElement(name:"change", attr:"data-toggle='tooltip data-placement='bottom' title='Edit'",styleclass:"btn btn-outline-warning", id:"dle", text:"<i class='fas  fa-edit'></i>");?>
            <?php buttonElement(name:"Delete", attr:"data-toggle='tooltip data-placement='bottom' title='Delete'",styleclass:"btn btn-outline-danger", id:"dle-all", text:"<i class='fas fa-trash-alt'></i>");?>
            <?php deletebtnall()?>
          </div>        
        </form>
        <div class="table-responsive-md table-responsive-sm table-responsive-lg mt-4 zz">
          <table class="table">
          <thead class="thead-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Artikel</th>
                        <th>Alasan</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody id="tbody" class="text-center bg-warning text-light">
                <?php
                    if(isset($_POST['Update'])){
                        $result = getData();
                        if($result){
                            while($row = mysqli_fetch_assoc($result)){?>

                                <tr>
                                    <td data-id="<?php echo $row['id'];?>"><?php echo $row['id'];?></td>
                                    <td data-id="<?php echo $row['id'];?>"><?php echo $row['name'];?></td>
                                    <td data-id="<?php echo $row['id'];?>"><?php echo $row['title'];?></td>
                                    <td data-id="<?php echo $row['id'];?>"><?php echo $row['reason'];?></td>
                                    <td><i class="fas fa-edit btnedit" data-id="<?php echo $row['id']?>"></i></td>
                                </tr>
                            <?php
                            }
                        }
                    }
                ?>
                </tbody>
          </table>
        </div>
      </div>
      <div class="line-spaces" style="padding:1px; background-color: goldenrod;"></div>
     <!--Footer-->
    <div class="footer">
        <div class="footer-content">
          <h3>MT SOLUTION Teams</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero sint impedit sunt.</p>
          <ul class="socials">
            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
          </ul>

          <ul class="ingfo">
            <li><a href="AboutUS.html">About US</a></li>
            <li><a href="Privacy.html">Privacy and police</a></li>
            <li><a href="Dislaimer.html">Disclaimer</a</li>
          </ul>

        </div>
        <div class="line-spaces" style="padding:1px; background-color: goldenrod;"></div>
        <div class="footer-bottom">
          <p>copyright &copy;2021 MT-Solution</p>
        </div>
      </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
 