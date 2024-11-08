<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Denuncias</title>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
            line-height: 1.5;
            color: #333;
            border: 1px solid #ccc;
            margin: 0;
            padding: 0;
            position: relative;
        }

        .page {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            min-height: 100vh;
            box-sizing: border-box;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
            position: relative;
        }

        .header img {
            height: 80px;
            margin-bottom: 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            text-transform: uppercase;
        }

        .header p {
            margin: 0;
            font-size: 14px;
            color: #777;
        }

        .header .meta-info {
            text-align: right;
            position: absolute;
            top: 10px;
            right: 0;
            font-size: 12px;
            color: #555;
        }

        .content {
            margin-top: 20px;
            font-size: 16px;
            padding-bottom: 60px;
        }

        .content label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .content p {
            margin: 5px 0 15px;
        }

        .content .section-title {
            font-size: 18px;
            margin-top: 20px;
            margin-bottom: 10px;
            text-decoration: underline;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 14px;
        }

        .table,
        .table th,
        .table td {
            border: 1px solid #000;
        }

        .table th,
        .table td {
            padding: 8px;
            text-align: left;
        }

        .footer {
            position: absolute;
            bottom: 10px;
            left: 0;
            width: 100%;
            text-align: center;
            font-size: 12px;
            color: #777;
            border-top: 1px solid #ccc;
            padding-top: 5px;
            background-color: white;
        }

        .field-group {
            page-break-inside: avoid;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="page">
        <div class="header">
            <img src="{{ public_path('img/logo_sder.jpg') }}" style="height: 100px;" alt="Logo">
            <h1>Denuncia #{{ $formulario->id }}</h1>
            <p>Subdirección de Educación Regular de Santa Cruz</p>
            <div class="meta-info">
                <p>Usuario: {{ auth()->user()->name }}</p>
                <p>Fecha: {{ \Carbon\Carbon::now('America/La_Paz')->format('d/m/Y') }}</p>
                <p>Hora: {{ \Carbon\Carbon::now('America/La_Paz')->format('H:i:s') }}</p>
            </div>
        </div>

        <div class="content">

            @if ($formulario->denunciante->mantener_identidad_reserva === 0)
                <div class="field-group">
                    <h1>DENUNCIANTE</h1>
                    <label>Nombre:</label>
                    <p>{{ $formulario->denunciante->nombre }}</p>
                </div>

                <div class="field-group">
                    <label>Carnet:</label>
                    <p>{{ $formulario->denunciante->carnet }}</p>
                </div>

                <div class="field-group">
                    <label>Email:</label>
                    <p>{{ $formulario->denunciante->correo_electronico }}</p>
                </div>

                <div class="field-group">
                    <label>Teléfono:</label>
                    <p>{{ $formulario->denunciante->telefono }}</p>
                </div>

                <div class="field-group">
                    <label>Identidad en reserva:</label>
                    <p>No</p>
                </div>

                <div class="field-group">
                    <label>Seguimiento:</label>
                    @if ($formulario->denunciante->seguimiento === 1)
                        <p>Sí</p>
                    @else
                        <p>No</p>
                    @endif
                </div>
            @endif


            <div class="field-group">
                <h1>DENUNCIA</h1>
                <label>Dirección General:</label>
                <p>{{ $formulario->denuncia->direccion_general }}</p>
            </div>

            <div class="field-group">
                <label>Unidad Educativa:</label>
                <p>{{ $formulario->denuncia->unidad_educativa }}</p>
            </div>

            <div class="field-group">
                <label>Distrito:</label>
                <p>{{ $formulario->denuncia->distrito }}</p>
            </div>

            <div class="field-group">
                <label>Zona:</label>
                <p>{{ $formulario->denuncia->zona }}</p>
            </div>

            <div class="field-group">
                <label>Barrio:</label>
                <p>{{ $formulario->denuncia->barrio }}</p>
            </div>

            <div class="field-group">
                <label>Referencia:</label>
                <p>{{ $formulario->denuncia->referencia }}</p>
            </div>
            <div class="field-group">

                <h1>DENUNCIADOS</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Cargo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formulario->denuncia->personasDenunciadas as $denunciado)
                            <tr>
                                <td>{{ $denunciado->nombre }}</td>
                                <td>{{ $denunciado->cargo }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="field-group">
                <h1>HECHOS</h1>
                <label>Fecha del Hecho:</label>
                <p>{{ \Carbon\Carbon::parse($formulario->relacionHechoDenuncia->fecha)->timezone('America/La_Paz')->format('d/m/Y') }}
                </p>
            </div>

            <div class="field-group">
                <label>Hora del Hecho:</label>
                <p>{{ \Carbon\Carbon::parse($formulario->relacionHechoDenuncia->hora)->timezone('America/La_Paz')->format('H:i:s') }}
                </p>
            </div>

            <div class="field-group">
                <label>Lugar del Hecho:</label>
                <p>{{ $formulario->relacionHechoDenuncia->lugar_hecho }}</p>
            </div>

            <div class="field-group">
                <label>Descripción del Hecho:</label>
                <p>{{ $formulario->relacionHechoDenuncia->descripcion_hecho }}</p>
            </div>

            <div class="field-group">
                <label>Fecha de Denuncia:</label>
                <p>{{ \Carbon\Carbon::parse($formulario->relacionHechoDenuncia->fecha_denuncia)->timezone('America/La_Paz')->format('d/m/Y') }}
                </p>
            </div>

            <div class="field-group">
                <label>Hora de Denuncia:</label>
                <p>{{ \Carbon\Carbon::parse($formulario->relacionHechoDenuncia->hora_denuncia)->timezone('America/La_Paz')->format('H:i:s') }}
                </p>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Santa Cruz - Dirección Departamental de Educación</p>
    </div>
</body>

</html>
