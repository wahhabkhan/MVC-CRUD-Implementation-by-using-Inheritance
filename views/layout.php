<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CRUD </title>
    
</head>
<body >
    
        <nav class="navbar navbar-expand-lg w-100 rounded navbar-dark bg-primary">
  <a class="navbar-brand ms-3" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div style="margin:5px 9\70px" class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul  class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a  class="nav-link text-light" href="home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  text-light" href="/pone/user/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="/pone/user/logout">Logout</a>
      </li>
    </ul>
    <h3 style="margin-left:200px" class="text-light  fw-normal mt-1"><i>PHP CRUD</i></h3>
    <form class="form-inline my-2 my-lg-0 d-flex ml-auto" style="margin-left:auto">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-primary text-light my-2 my-sm-0 ms-2" type="submit">Search</button>
    </form>

  </div>
</nav>    
        <div>
        <div style="display:flex"  class="mt-1">
            <div>
            <div class="d-flex flex-column flex-shrink-0 p-3 rounded" style="width:280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4  border rounded p-1 font-italic">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li>
        <a href="#" class="nav-link link-dark text-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark text-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-dark text-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Products
        </a>
      </li>
      <li>
        <a href="<?= BASEURL ?>/user" class="nav-link link-dark text-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Users
        </a>
      </li>
      <li>
        <a href="<?= BASEURL ?>/employee" id="employee"  class="nav-link link-dark text-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Employees
        </a>
      </li>
      <li>
        <a href="<?= BASEURL ?>/department" id="department" class="nav-link link-dark text-dark">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Departments
        </a>
      </li>
    </ul>
    <hr>
  </div>
            </div>
            <div >
                <?php echo $content; ?>
            </div>
        </div>
        <div>
        <div class="card mt-1 ">
  <div class="card-header mx-5">
    Footer
  </div>
  <div class="card-body mx-5">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
        </div>
    </div>
</body>
</html>