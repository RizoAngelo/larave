<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./Img/todo_fnaf.jpg">
    <link rel="stylesheet" href="./Estilo/estilos.css">
    <link rel="stylesheet" href="./Estilo/Login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Inicio de Sesion</title>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function iniciarSesion() {
            const usuariosValidos = [
    { nombre: "daniel", contrasenia: "12345" },
    { nombre: "alejandro", contrasenia: "abcde" },
    { nombre: "messi", contrasenia: "ronaldo" },
  ];

            var usuario = document.getElementById("nombreUsuario").value;
            var contrasenia = document.getElementById("contrasenia").value;

            var usuariosRegistrados = localStorage.getItem("usuariosRegistrados");
            if (!usuariosRegistrados) {
                swal("¡Error!", "No hay usuarios registrados. Regístrate primero.", "error");
                return false;
            }

            usuariosRegistrados = JSON.parse(usuariosValidos);
            if (usuariosRegistrados.hasOwnProperty(usuario) && usuariosRegistrados[usuario] === contrasenia) {
                swal("¡Éxito!", "Inicio de sesión exitoso.", "success");
            } else {
                swal("¡Error!", "Nombre de usuario o contraseña incorrectos.", "error");
            }
            return false; 
        }
    </script> 
</head>
<body> 
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;1,200&family=Mulish:ital,wght@0,300;0,400;1,200&family=Oswald:wght@200;600;700&family=Roboto:wght@100&family=Victor+Mono:wght@100&display=swap');
/*--------
Estilo index
----------*/
.Imagen_d{
    margin: auto;
    display: block;
    margin-top: 30px;
    border-radius: 10%;
    width: 350px;
    height: 350px;
    padding-top: 20px;
}
.boton{
    background: rgb(26, 83, 255);
    display: inline-block;
    font-size: 1.25em;
    padding: 14px 22px;
    border: 0;
    margin: 0 41%  0;
    text-align: center;
    width: 200px;
    text-decoration: none;
}
/*--------
Estilo Global
----------*/

*{
    padding: 0;
    margin: 0;
}

body{
    background: rgb(44, 43, 43);
}

.logo{
    position: absolute;
    width: 80px;
    height: 80px;
    margin-left: 50px;
    padding-top: 10px;
    border-radius: 50%;
}

h1{
    text-align: center;
    position: relative;
    float: center;
    padding: 30px;
    font-family: Arial, Helvetica, sans-serif,cursive;
    color: rgb(0, 0, 0);
}
header{
    box-sizing: border-box;
    background-color: rgb(44, 43, 43);
    width: 100%;
    height: 100%;
}


.menu{
    background: rgb(81, 34, 34);;
    list-style: none;
    text-align: center;
    width: 100%;
    height: 100px;
    display: inline-block;
    
}
ul{
    display: flex;
    justify-content: space-around;
    list-style: none;  
}
ul a{
    text-decoration: none;
    color: #000000;
    background-color: rgb(0, 0, 0);
    padding: 10px 16px;
    border-radius: 30px;
    opacity: 0.5;
    font-size: 26px;
    display: inline-block;
    outline: none;
    margin: 4px;
    transition: 0.2s ease;
    font-family: 'Mulish', sans-serif;
}
li a{
    background: rgb(93, 86, 86);
    color: rgb(255, 255, 255);
    padding: 10px;
    border: 30px;
    text-decoration: none;
}
ul li a.activo{
    background-color: rgb(255, 191, 0);
    transform: none;
}
ul li a:hover{
    opacity: 1;
}
footer {
    background-color: #333;
    color: #fff;
    padding: 20px 0;
  }
  
.footer {
    max-width: 600px;
    margin: 0 auto;
    margin-top: 100px;
  }
.footer p{
    text-align: center;
    margin: 0;
 }
 .img-footer{
    margin: auto;
    display: block;
    width: 20px;
    height: 20px;
    padding-top: 20px;
}
    </style>

    <header>
        <img class="logo" src="./Img/todo_fnaf.jpg" alt="logo">
        <h1>Inicio de Sesion</h1>
        <div class="menu">
            <ul>
                <li><a href="./index.html">Descripcion</a></li>
                <li><a class="activo" href="./Login.html">Iniciar Sesion</a></li>
                <li><a href="./Registro.html">Registrame</a></li>
                <li><a href="./busqueda.html">Busqueda</a></li>
            </ul>
            <div>
    </header>
                <div class="contenido">
                    <form class="form-basico" onsubmit="return iniciarSesion();">

                    <div class="entrada">
                        <label>usuario</label>
                        <input class="x" type="text" id="nombreUsuario" required>
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>  
                            </span>  
                    </div>
                    <div class="entrada">
                        <label>Contraseña</label>
                        <input class="x" type="password" id="contrasenia" required> 
                        <span class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                            </svg>  
                            </span>               
                    </div>
                    <div class="entrada">
                        <button class="boton" type="submit">Iniciar</button>
                    </div>
                   </form>
                    
                <div>
       

       
</body>
</html>