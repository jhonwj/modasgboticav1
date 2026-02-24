<!-- <html class>
<head>
  <title>MANKAS</title>
 <script src="resources/js/jquery-3.2.1.min.js"></script>

</head>
<style type="text/css">
html,
body {
  width: 100%;
  height: 100%;
}
body {
  font-family: 'Roboto', sans-serif;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin: 0;
}
body:before {
  content: "";
  width: 100%;
  height: 100%;
  display: block;
  background: url('/resources/images/fondo.jpg') no-repeat;
  background-size: cover;
  position: absolute;
}
.login-box {
  position: relative;
  top: 10%;
  left: 50%;
  width: 320px;
  margin: 0 auto;
  margin-left: -160px;
  background: rgba(255,255,255,0.8);
  border-radius: 12px;
  box-shadow: 0 0 20px rgba(0,0,0,0.15);
  overflow: hidden;
  transition: 0.5s all;
}
.login-box:hover {
  transform: scale(1.02);
  transition: 0.5s all;
  box-shadow: 0 20px 80px rgba(0,0,0,0.3);
}
.login-box * {
  box-sizing: border-box;
}
.login-header {
  background: #e74c3c00;
  padding: 30px;
  text-align: center;
  color: #c0392b;
  text-shadow: 0 2px 2px rgba(0,0,0,0.2);
  box-shadow: inset 0 -1px rgba(255,255,255,0.8), 0 4px rgba(0,0,0,0.06), inset 0 4px rgba(255,255,255,0.2), inset 0 2px 2px rgba(255,255,255,0.2);
}
.login-header h1 {
  font-size: 2em;
  margin-bottom: 0.5em;
}
.login-icon {
  width: 50px;
  fill: #c0392b;
  -webkit-filter: drop-shadow(0 2px 2px rgba(0,0,0,0.2));
  filter: drop-shadow(0 2px 2px rgba(0,0,0,0.2));
}
.login-sign {
  text-decoration: none;
  color: #a8ff67;
}
.login-content {
  padding: 20px;
}
.login-content input,
.login-content button,
.login-content a {
  width: 100%;
  display: inline-block;
}
.login-mail,
.login-pass {
  margin-bottom: 20px;
  padding: 10px;
  color: #999;
  border: 1px solid transparent;
  border-radius: 5px;
  outline: none;
  transition: 0.5s all;
}
.login-mail:hover,
.login-pass:hover,
.login-mail:focus,
.login-pass:focus {
  transition: 0.5s all;
  box-shadow: 0 2px rgba(153,153,153,0.2);
  border: 1px solid rgba(153,153,153,0.4);
}
.login-forgot {
  margin-bottom: 20px;
  text-align: right;
  text-decoration: none;
  color: #8996a4;
  font-size: 0.8em;
  transition: 0.2s all;
}
.login-forgot:hover {
  transition: 0.2s all;
  color: #009fd7;
}
.login-enter {
  padding: 14px;
  text-transform: uppercase;
  border-radius: 5px;
  border: none;
  background: #76d035;
  color: #fff;
  outline: none;
  cursor: pointer;
  text-shadow: 0 2px 1px rgba(0,0,0,0.2);
  transition: 0.5s all;
}
.login-enter:hover {
  background: #94ee53;
  background-image: linear-gradient(to bottom, rgba(255,255,255,0), #76d035);
  transform: scale(1.04);
  transition: 0.5s all;
}
.login-enter:active {
  background: #58b217;
  background-image: linear-gradient(to top, rgba(255,255,255,0), #449e03);
  transform: scale(0.98);
  transition: 0.3s all;
}
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $("#frmLogin").submit(function(e){
      var xhr = $.ajax({
        url: "../controllers/validarLogin.php",
        type: "post",
        data: {nameUser: $('#nameUser').val(), namePass: $('#namePass').val()},
        dataType: "html",
        success: function(res){
            res = $.parseJSON(res);
            if (res.isLogin) {
              window.location = "/views/V_VentaFormNuevo.php";
            }
        },
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert("Status: " + textStatus); alert("Error: " + errorThrown);
        }
      });
      e.preventDefault();
    });
  });

</script>
<body>
<section class="login-box">
  <header class="login-header">
    <img src="/resources/images/logo.png" style="max-width: 100%" />

    <h2 style="margin-bottom: -14px;">Ingrese sus datos</h2>
  </header>
  <div class="login-content">
    <form id="frmLogin" method="post">
    <input class="login-mail" name="nameUser" id="nameUser" type="text" placeholder="Usuario"/>
    <input class="login-pass" name="namePass" id="namePass" type="password" placeholder="Contraseña"/>
    <button type="submit" class="login-enter">Entrar    </button>
    </form>
    <div style="text-align: center; font-weight: bold;">
      <label>CONTACTO</label>
      <br>
      <br>
      <label>Telf: (062) 511550 -  Cel: 954370221</label>
      <br>
      <br>
      <label>Cel. Soporte: 997578199</label>
      <br>
      <br>
      <label><a href="https://neurosoft.pe" target="_blank">Neuro System Perú</a></label>
    </div>
  </div>
</section>
</body>
</html>
 -->



<html class>

<head>

  <link rel="manifest" href="/manifest.json">
  <script src="resources/js/jquery-3.2.1.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<style type="text/css">
  body {
    padding: 0;
    margin: 0;
    overflow-x: hidden;
    overflow-y: hidden;
  }

  .contenedor {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    width: 100vw;
    background-color: #bdbdbd !important;
    background-image: url("/resources/images/mini.jpg");
    background-size: cover;
    background-position: center;
    text-align: center;
  }

  .login {
    border: 1px solid #fff;
    color: #fff;
    border-radius: 25px;
    align-content: center;
    align-items: center;
    text-align: center;
    backdrop-filter: blur(100px);
    transition: opacity 0.5s ease-in-out;
    background: rgb(224, 224, 224, 0.15);
    min-width: 20%;
    min-height: 70%;
    padding: 0 0 1% 0;
    width: 600px;
  }

  .clsTitle {
    margin: 0 0 70px 0;
    font-size: 4rem;
    font-weight: bold;
  }

  .clsGroupInput {
    background: #fff;
    margin: 25px auto;
    width: 80%;
    border-radius: 25px;
    padding: 5px;
    /* margin: auto!important; */
  }

  .clsButon {
    margin: 6% 0;
    /* padding: 5% 0; */
    font-size: 1.5em;
  }

  .btnLogin {
    background: #ffd600;
    border: none;
    width: 50%;
    font-weight: bold;
    font-size: 1.5em;
    border-radius: 10px;
    color: #fff;
  }

  .clsIcon {
    color: red;
    font-size: 1.5em;
  }

  .clsInput {
    font-size: 1.5em;
    background: #fff !important;
    border: none;
    width: 80%;
    text-align: center;
    -webkit-text-size-adjust: 100%;
    /* margin: 0 5px; */
  }

  .clsFooter {
    font-size: 1.2em;
  }

  .clsLink {
    text-decoration: none;
    font-size: 1.2em;
    cursor: pointer;
    background: #fff;
    padding: 1% 5%;
    border: none;
    border-radius: 25px;
    margin: 0 0 5% 0;
  }

  p {
    padding: 0 !important;
    margin: 1.5% !important;
  }

  @media (max-width: 1024px) {
    .login {
      border: 1px solid #fff;
      color: #fff;
      border-radius: 25px;
      align-content: center;
      align-items: center;
      text-align: center;
      backdrop-filter: blur(100px);
      transition: opacity 0.5s ease-in-out;
      background: rgb(224, 224, 224, 0.15);
      /* background: rgba(255, 255, 255, 0.15); */
      backdrop-filter: blur(5px);
      min-width: 50%;
      min-height: 60%;
    }
  }
</style>
<script type="text/javascript">
  document.addEventListener("DOMContentLoaded", function() {
    obtenerEmpresas();
    let togglePassword = document.getElementById("togglePassword");
    let passwordInput = document.getElementById("pass");

    togglePassword.addEventListener("click", function() {
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        togglePassword.classList.remove("fa-eye");
        togglePassword.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = "password";
        togglePassword.classList.remove("fa-eye-slash");
        togglePassword.classList.add("fa-eye");
      }
    });
  });


  function obtenerEmpresas() {
    $.ajax({
      url: "../controllers/ObtenerEmpresar.php",
      type: "post",
      dataType: "json", // directamente json
      success: function(res) {
        let $combo = $("#IdEmpresa");
        $combo.empty(); // limpia las opciones

        // Agregar la opción por defecto
        $combo.append('<option value="" selected disabled>Seleccione una Empresa</option>');

        // Recorrer las islas que vienen del PHP
        if (res.islas && res.islas.length > 0) {
          $.each(res.islas, function(index, isla) {
            $combo.append('<option value="' + isla.IDEMPRESA + '">' + isla.RAZONSOCIAL + '</option>');
          });
        }

        // Agregar la opción de administrador al final
        // $combo.append('<option value="0">Administrador</option>');
      },
      error: function(xhr, status, error) {
        console.error("Error al obtener islas:", error);
      }
    });
  }


  function acceder(event) {
    event.preventDefault();
    let usuario = document.getElementById("usr").value;
    let clave = document.getElementById("pass").value;
    let IdEmpresa = document.getElementById("IdEmpresa").value;
    let botonAcceder = document.getElementById("btnAcceder");

    if (usuario.trim() === "" || clave.trim() === "" || IdEmpresa === "") {
      document.getElementById("errorLogin").innerText = "Ingrese usuario, contraseña y Empresa.";
      return;
    }


    // Deshabilitar botón y mostrar icono de carga
    botonAcceder.disabled = true;
    botonAcceder.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Cargando...';

    $.ajax({
      url: "../controllers/validarLogin.php",
      type: "post",
      data: {
        nameUser: usuario,
        namePass: clave,
        IdEmpresa: IdEmpresa
      },
      dataType: "html",
      success: function(res) {
        res = $.parseJSON(res);
        if (res.isLogin) {
          sessionStorage.setItem('empresa', IdEmpresa)
          sessionStorage.setItem('User', usuario)
          console.log(res);
          setTimeout(() => {

            window.location = "/views/V_VentaForm.php";
          }, 100);
        } else {
          document.getElementById("errorLogin").innerText = res.message;
        }
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
        alert("Status: " + textStatus);
        alert("Error: " + errorThrown);
      },
      complete: function() {
        // Rehabilitar botón y restaurar texto después de la respuesta
        botonAcceder.disabled = false;
        botonAcceder.innerHTML = "ACCEDER";
      }
    });
  }
</script>

<body>
  <form enctype="text/plain" method="POST" onsubmit="acceder(event)">
    <div class="contenedor">
      <div class="login">
        <div class="clsTitle"> <img src="/resources/images/logo.png" style="width:100%; margin-bottom:-10px" /></div>
        <div class="clsGroupInput">
          <i class="clsIcon fa fa-user" aria-hidden="true"></i>
          <input class="clsInput" type="text" name="" id="usr" placeholder="Usuario" v-model="user" autocomplete="off">
        </div>
        <div class="clsGroupInput">
          <i id="togglePassword" class="clsIcon fa fa-eye" aria-hidden="true"></i>
          <input type="password" class="clsInput" id="pass" placeholder="Clave" autocomplete="off">
        </div>
        <div class="clsGroupInput">
          <select class="login-surtidor clsInput" id="IdEmpresa" style="min-width: 280px;">
          </select>
        </div>
        <div class="clsButon">
          <p style="color:red" id="errorLogin"></p>
          <button id="btnAcceder" class="btnLogin" type="submit">ACCEDER</button>
        </div>
        <div class="clsFooter">
          <p>CONTACTO</p>
          <p>Telf: (062) 511550 - Cel: 954370221</p>
          <p>Cel. Soporte: 997578199</p>
          <p><a href="http://neurosystemperu.com" target="_blank" class="clsLink">Neuro System Perú</a></p>
        </div>
      </div>
    </div>
  </form>
</body>

</html>