<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
        background-image: url(https://images8.alphacoders.com/132/1320554.png);
        background-repeat: no-repeat;
        background-size: cover;
        box-sizing: border-box;
        margin:0;
        padding: 0;
        }
        header{
            text-align: center;
            width: 100%;
            height: 70px;
            font-size: 50px;
            padding-top: 20px;
            background-color: blueviolet;
            font-family:Georgia, 'Times New Roman', Times, serif;
            
        }
        nav{
            margin-top: -20px;
            width: 100%;
            height: 70px;
            background-color: rgb(9, 21, 37);
            color: white;
        
        }
        ul {
            list-style: none;
        }
        li{
            float: left;
            margin-top: 10px;
            margin-left: 10%;
            width:100px;
            height: 40px;
            background-color: white;
            color: blueviolet;
            border-radius: 20px;
            padding-left: 40px;
            
        }
        li:hover{
            background-color:blueviolet;
            color: white;
            
        }
        a{
            color: blueviolet;
            text-decoration: none;
        }
        a:hover{
            color:white;
            text-decoration: none;
        }
        
        h1{
        color:red;
        text-align: center;
        font-family: Georgia, 'Times New Roman', Times, serif;
            }
        form{
            width:250px;
            height: 100%;
            background-color: white;
            
            margin-left:10%;
            text-align: center;
            float: left;
        }
    </style>
    
</head>

<body>
    <header>
        AMAZONIA
    </header>
    <nav>
        <ul>
            <li><a href="home">HOME</a></li>
            <li><a href="galeria">GALERIA</a> </li>
            <li><a href="">SOBRE NOSOTROS</a></li>
            <li><a href="">CONTACTO</a></li>
        </ul>
    </nav>
    <h1>
        AMAZONIA
    </h1>
    
    <form method="get" action="get_ejemplo">
    <h2>REGISTRO GET</h2>
    <label for="idNombre">Nombre:</label><br>
    <input type="text" id="idNombre" name="nombre" ><br>
    <label for="idApellido">Apellido:</label><br>
    <input type="text" id="idApellido" name="apellido" ><br><br>
    <input type="submit" value="Submit">
    </form>

    
    <form method="post" action="InformacionPost">
    <h2>REGISTRO POST</h2>
    <label for="idNombre">Nombre:</label><br>
    <input type="text" id="idNombre" name="nombre" ><br>
    <label for="idApellido">Apellido:</label><br>
    <input type="text" id="idApellido" name="apellido" ><br><br>
    <input type="submit" value="Submit">
    </form>
    
    <form method="post" action="InformacionPost2">
        @csrf
    <h2>POST2</h2>
    <label for="idNombre">Nombre:</label><br>
    <input type="text" id="idNombre" name="nombre" ><br>
    <label for="idApellido">Apellido:</label><br>
    <input type="text" id="idApellido" name="apellido" ><br><br>
    <input type="submit" value="Submit">
    </form>
        

    
    <form method="post" action="/PostParametros1">
        @csrf
    <h2>POST_Param1</h2>
    <label for="idNombre">Nombre: </label><br>
    <input type="text" id="idNombre" name="nombre"  required><br>
    <label for="idApellido">Apellido:</label><br>
    <input type="text" id="idApellido" name="apellido"  required><br><br>
    <label for="idEdad">Edad:</label><br>
    <input type="number" id="idEdad" name="edad"  required><br><br>
    <label for="idNumero">Telefono:</label><br>
    <input type="tel" id="idNumero" name="numeroTel" ><br><br>

    <input type="submit" value="Submit">
    </form>

    <form method="post" action="/PostParametros2">
        @csrf
    <h2>POST_Param2</h2>
    <label for="idNombre">Nombre: </label><br>
    <input type="text" id="idNombre" name="nombre"  required><br>
    <label for="idApellido">Apellido:</label><br>
    <input type="text" id="idApellido" name="apellido"  required><br><br>
    <label for="idEdad">Edad:</label><br>
    <input type="number" id="idEdad" name="edad"  required><br><br>
    <label for="idNumero">Telefono:</label><br>
    <input type="tel" id="idNumero" name="numeroTel" ><br><br>

    <input type="submit" value="Submit">
    </form>

    <form method="post" action="/PostParametrosCorrecion">
        @csrf
    <h2>POST_Param_Solucion</h2>
    <label for="idNombre">Nombre: </label><br>
    <input type="text" id="idNombre" name="nombre"  required><br>
    <label for="idApellido">Apellido:</label><br>
    <input type="text" id="idApellido" name="apellido"  required><br><br>
    <label for="idEdad">Edad:</label><br>
    <input type="number" id="idEdad" name="edad"  required><br><br>
    <label for="idNumero">Telefono:</label><br>
    <input type="tel" id="idNumero" name="numeroTel" ><br><br>

    <input type="submit" value="Submit">
    </form>

    


</body>