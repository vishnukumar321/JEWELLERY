  <?php
  // $img=new img_sliders(1);
  // $img->setimage("njan");
  // $img->getimage("njan");
$now= session::now_path();
?>
  <body class="" style="background: rgba(255, 255, 255, 1);">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path
          d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"
        ></path>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path
          d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"
        ></path>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path
          d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"
        ></path>
        <path
          d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"
        ></path>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path
          d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"
        ></path>
      </symbol>
    </svg>
    
  
    <!-- <div class="container bg-darks">
      <header class="border-bottom lh-1 py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
          </div>
          <div class="col-4 text-center">
            <a
              class="blog-header-logo text-body-emphasis text-decoration-none"
              href="#"
              >MovieClub</a
            >
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
          </div>
        </div>
      </header>
      <div class="nav-scroller py-1 mb-3 border-bottom">
        <nav class="nav nav-underline justify-content-end">
          <a class="nav-item nav-link link-body-emphasis me-4" href="#">Science</a>
          <a class="nav-item nav-link link-body-emphasis me-4" href="#">Health</a>
          <a class="nav-item nav-link link-body-emphasis me-4" href="#">Style</a>
          <a class="nav-item nav-link link-body-emphasis me-4" href="#">Travel</a>
        </nav>
      </div>
    </div> -->
    <header style="width: 100%;">
    <!-- <header class="" style="position: absolute;z-index: 2;width: 100%;"> -->
        <nav class="navbar navbar-dark  navbar-expand-lg" style="background-color: #ffe4c47d;">
        <!-- <nav class="navbar navbar-dark navbar-expand-lg  p-3" style=" background-color: rgb(84 68 68 / 50%); backdrop-filter: blur(20px);"> -->
            <div class="container-fluid">
                <!-- <a style="height: 70px;width: 120px" class="navbar-brand" href="#"><img class="w-100 h-100" src="https://i.pinimg.com/736x/98/4d/26/984d264dd9aa68cdaf11323a8e80e1b5.jpg" alt=""></a> -->
                <a style="height: 70px;width: 120px" class="navbar-brand" href="#"><img class="w-100 h-100" src="template/img/logo.png" alt=""></a>
                                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#ja"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="ja">
                    <ul class="navbar-nav ms-auto nav nav-underline" style="color:black">
                        <li class="nav-item ms-auto"><a style="font-weight: 500;" class="nav-link text-dark  <?=($now=="/")?"active":""?>" href="index.php">Home</a></li>
                        <li class="nav-item ms-auto"><a style="font-weight: 500;" class="nav-link text-dark" href="collection.php">Gold</a></li>
                        <li class="nav-item ms-auto"><a style="font-weight: 500;" class="nav-link text-dark" href="collection.php">Diamonds</a></li>
                        <li class="nav-item ms-auto"><a style="font-weight: 500;" class="nav-link text-dark" href="index.php#features">Features</a></li>
                        <li class="nav-item ms-auto"><a style="font-weight: 500;" class="nav-link text-dark" href="#">About Us</a></li>
                        <li class="nav-item ms-auto"><a style="font-weight: 500;" class="nav-link text-dark" href="#">Contact</a></li>
              
                    </ul>
                    
                    <a style="font-weight: 500;" class="ms-auto nav-link text-dark <?=($now=="/about.php")?"active":""?>" href="collection.php"><button class="btn btn-outline-light text-dark border-dark mx-5 px-5">Collection</button></a>
                </div>
            </div>
        </nav>
    </header>