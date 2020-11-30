
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Reporte de Ropa</title>

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
                        <th> TIPO </th>
                        <th> TALLA </th>
                        <th> GENERO </th>    
                        <th> NO.LOTE </th>
                        <th> ORIGEN </th>
                        <th> PESO </th>
                                                  
                        
                    </tr>
                    </thead>
                    
                    <tbody>
                    @foreach ($datosro as $ropa)
                                <tr>
                                    <td> {{$ropa->id}}</td>
                                    <td> {{$ropa->tipo}}</td>
                                    <td> {{$ropa->talla}}</td>
                                    <td> {{$ropa->genero}}</td>
                                    <td> {{$ropa->nolote}}</td>
                                    <td> {{$ropa->origen}}</td>
                                    <td> {{$ropa->peso}}</td>
                                </tr>
                                @endforeach
                    </tbody>
                </table>
</body>
</html>