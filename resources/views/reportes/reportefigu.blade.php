
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reporte de Figuras</title>

                <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
            



            @font-face { 
  font-family: "Angeline_Vintage";
  src: url(../fonts/Angeline_Vintage.ttf); }

    h2.logo {
        font-size: 75px;
        font-family: "Angeline_Vintage";
        color: black ; 
        text-align: center;
    }
    
            </style>
</head>
<body>
<h2 class="logo">FrikiThings</h2>

<table class="table table-striped table-bordered table-hover">
                <thead>
                    
                    <tr>
                        <th> ID </th>
                        <th> NOMBRE </th>
                        <th> SERIE </th>
                        <th> MARCA </th>    
                        <th> PESO </th>
                        <th> ALTURA </th>
                        <th> EMPAQUE  </th>
                        <th> PRECIO </th>
                          
                        
                    </tr>
                    </thead>
                    
                    <tbody>
                    @foreach ($datosfi as $figu)
                                <tr>
                                    <td> {{$figu->id}}</td>
                                    <td> {{$figu->nombre}}</td>
                                    <td> {{$figu->serie}}</td>
                                    <td> {{$figu->marca}}</td>
                                    <td> {{$figu->peso}}</td>
                                    <td> {{$figu->altura}}</td>
                                    <td> {{$figu->empaque}}</td>
                                    <td> {{$figu->precio}}</td>
                                </tr>
                                @endforeach
                    </tbody>
                </table>
</body>
</html>