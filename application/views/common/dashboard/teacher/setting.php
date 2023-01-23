<style>
  .dash {
    min-height: 556px;
  }

  .bg {
    background-color: #F2F2F2;
  }

  .hov li:hover {
    background-color: #ced4da;
    border-radius: 5px 0px 0px 5px;
  }
</style>
<div class="container-fluid">
<div class="row border-bottom">
  <div class="col-sm-1"></div>
  <div class="col-sm-10 ">
    <h5 class="pt-3">Settings/Accounts</h5>
  </div>
  <div class="col-sm-1"></div>
</div>

<div class="row p-0 dash">
  <div class="col-sm-1 bg border-end"></div>
  <div class="col-sm-10">
    <div class="row p-0">
      <div class="col-sm-2 p-0">
      <nav class="navbar navbar-expand-lg ">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidenav" aria-controls="sidenav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="sidenav">
        <ul class="navbar-nav d-block my-5 ms-5 hov">
          <li class="nav-item rounded-start">
            <a class="nav-link text-primary active rounded-start" aria-current="page"
              style="cursor:pointer;" onclick="loadAccount();">Account</a>
          </li>
          <li class="nav-item rounded-start">
            <a class="nav-link  text-primary rounded-start" aria-current="page" style="cursor:pointer;"
              onclick="loadPassword();">Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-primary rounded-start" aria-current="page" style="cursor:pointer;">Emails</a>
          </li>
          <li class="nav-item rounded-start">
            <a class="nav-link  text-primary rounded-start" aria-current="page" style="cursor:pointer;"
              onclick="loadGeneral();">General</a>
          </li>
          <li class="nav-item rounded-start">
            <a class="nav-link  text-primary rounded-start" aria-current="page" style="cursor:pointer;">API</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-primary rounded-start" aria-current="page" style="cursor:pointer;">Single sign-on</a>
          </li>
          <li class="nav-item rounded-start">
            <a class="nav-link  text-primary rounded-start" aria-current="page" style="cursor:pointer;">Security</a>
          </li>
        </ul>
          </div>
      </nav>
      </div>
      <div class="col-sm-9 my-4  bg " id="content"></div>
      <div class="col-sm-1"></div>
    </div>
  </div>
  <div class="col-sm-1 bg border-start"></div>
</div>
<script>
  function loadAccount() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
      document.getElementById("content").innerHTML =
        this.responseText;
    }
    xhttp.open("GET", "<?php echo base_url('teacher/Account') ?>", true);
    xhttp.send();
  }
  function loadPassword() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
      document.getElementById("content").innerHTML =
        this.responseText;
    }
    xhttp.open("GET", "<?php echo base_url('teacher/Password') ?>", true);
    xhttp.send();
  }
  function loadGeneral() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
      document.getElementById("content").innerHTML =
        this.responseText;
    }
    xhttp.open("GET", "<?php echo base_url('teacher/General') ?>", true);
    xhttp.send();
  }
</script>
</div>