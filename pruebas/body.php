<body>
<div id="form1">
    <div  class="card text-center container-fluid col-5 my-5">
      <div class="card-header bg-info">
        Login
      </div>
      <div class="card-body">
      <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="registrar.php" method="post">
                <div class="mb-3">
                    <label for="validationCustomUsername" class="form-label"> Direccion email</label>
                    <input type="email" name="email" class="form-control" id="email">
                    <div class="form-text" id="emailHelper"> </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password </label>
                    <input type="password" name="password" class="form-control" id="password">
                    <div class="form-text" id="passlHelper"> </div>
                </div>
                </form>
        </div>
    </div>
        </div>
      <div class="card-footer text-muted">
      <button type="submit" id="enviar" class="btn btn-outline-info">Enviar</button>

      </div>
    </div>
</div>
<div id="mostrar"></div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="app.js"></script>
</body>