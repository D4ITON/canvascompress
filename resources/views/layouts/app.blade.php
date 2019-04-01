<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link rel="stylesheet" href="/pluggins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- input file -->
    <link rel="stylesheet" href="/pluggins/input-file/input-file.css">


</head>
<body>
  <div class="row m-0" style="height: 100vh;">
      <!-- inicio hoja de trabajo -->
      <div class="col-9 p-0" style="background-color: #E4E4E4;">
        <div class="content">
          <div class="box">
            <input type="file" name="file-3[]" id="file-3" class="inputfile inputfile-3 d-none" data-multiple-caption="{count} files selected" multiple />
            <label for="file-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Subir imagen &hellip;</span></label>
          </div>
        </div>
      </div>
      <!-- fin de hoja de trabajo -->

      <!-- inicio menu controles -->
      <div class="col-3 p-4" style="background-color: #F5F5F5;">
        <form>
        <!-- propiedades -->
        <h2 class="mb-2" style="font-size: 13px; color: #B4B4B4; letter-spacing: 1px;">PROPIEDADES</h2>
        <label for="" style="font-size: 12px; color: #B4B4B4;">nombre:</label>
        <input type="text" class="input-flat" name="" value="nature-3082832_1920_1532x153.png" style="font-size: 12px; color: #666666;font-weight: 625;">
        <label for="" style="font-size: 12px; color: #B4B4B4;">peso:</label>
        <h4 class="d-inline" style="font-size: 12px; color: #666666;">&nbsp; 153.54 KB </h4>
        <!-- control de imagen section -->
        <h2 class="my-3" style="font-size: 13px; color: #B4B4B4; letter-spacing: 1px;">CONTROL DE IMAGEN</h2>
        <div class="form-group">
          <label for="rangoCALIDAD" class="mb-0" style="font-size: 12px; color: #B4B4B4;">Calidad</label>
          <div class="row px-3">
            <input class="col-10 inputDiv" id="rangoCALIDAD" type="range" name="amountRangeQuality" min="0" max="100" value="0" oninput="this.form.amountInputQuality.value=this.value" />
		        <input class="col-2" type="number" name="amountInputQuality" min="0" max="100" value="0" oninput="this.form.amountRangeQuality.value=this.value" />
          </div>
          <label for="rangoWIDTH" class="mb-0" style="font-size: 12px; color: #B4B4B4;">Ancho</label>
          <div class="row px-3">
            <input class="col-10 inputDiv" id="rangoWIDTH" type="range" name="amountRangeWidth" min="0" max="100" value="0" oninput="this.form.amountInputWidth.value=this.value" />
		        <input class="col-2" type="number" name="amountInputWidth" min="0" max="100" value="0" oninput="this.form.amountRangeWidth.value=this.value" />
          </div>
          <label for="rangoWIDTH" class="mb-0" style="font-size: 12px; color: #B4B4B4;">Alto</label>
          <div class="row px-3">
            <input class="col-10 inputDiv" id="rangoWIDTH" type="range" name="amountRangeHeight" min="0" max="100" value="0" oninput="this.form.amountInputHeight.value=this.value" />
		        <input class="col-2" type="number" name="amountInputHeight" min="0" max="100" value="0" oninput="this.form.amountRangeHeight.value=this.value" />
          </div>
        </div>
        <div class="text-center mb-3">
          <button class="btn btn-canvascompress" type="button" id="">AGREGAR A LA PILA</button>
        </div>
        <!-- pila de imagenes -->
        <h2 class="mb-3" style="font-size: 13px; color: #B4B4B4; letter-spacing: 1px;">PILA DE IMÁGENES</h2>
        <!-- iinicio item -->
        <div class="row my-2" style="font-size: 12px; color: #666666;">
          <div class="col-8" >
            macbook606763_1920x453adfasdflaskdf.png
          </div>
          <div class="col-3 px-1" style="z-index: 1; background-color: #F5F5F5;">
            154.35 KB
          </div>
          <div class="1 px-0" style="z-index: 1;background-color: #F5F5F5;">
            <i class="fa fa-trash" aria-hidden="true"></i>
          </div>
        </div>
        <!-- fin de item -->
        <!-- iinicio item -->
        <div class="row my-2" style="font-size: 12px; color: #666666;">
          <div class="col-8" >
            macbook606763_1920x453adfasdflaskdf.png
          </div>
          <div class="col-3 px-1" style="z-index: 1; background-color: #F5F5F5;">
            154.35 KB
          </div>
          <div class="1 px-0" style="z-index: 1;background-color: #F5F5F5;">
            <i class="fa fa-trash" aria-hidden="true"></i>
          </div>
        </div>
        <!-- fin de item -->
        <!-- iinicio item -->
        <div class="row my-2" style="font-size: 12px; color: #666666;">
          <div class="col-8" >
            macbook606763_1920x453adfasdflaskdf.png
          </div>
          <div class="col-3 px-1" style="z-index: 1; background-color: #F5F5F5;">
            154.35 KB
          </div>
          <div class="1 px-0" style="z-index: 1;background-color: #F5F5F5;">
            <i class="fa fa-trash" aria-hidden="true"></i>
          </div>
        </div>
        <!-- fin de item -->
        <!-- iinicio item -->
        <div class="row my-2" style="font-size: 12px; color: #666666;">
          <div class="col-8" >
            macbook606763_1920x453adfasdflaskdf.png
          </div>
          <div class="col-3 px-1" style="z-index: 1; background-color: #F5F5F5;">
            154.35 KB
          </div>
          <div class="1 px-0" style="z-index: 1;background-color: #F5F5F5;">
            <i class="fa fa-trash" aria-hidden="true"></i>
          </div>
        </div>
        <!-- fin de item -->

        <div class="text-center m-3">
          <button class="btn btn-canvascompress" type="submit" id="envioAxiosBtn">GUARGAR EN BD</button>
        </div>
      </form>
      </div>
      <!-- fin de menu controles -->
    </div>

    <!-- Scripts -->
    <!-- bootstrap -->
    <script src="/pluggins/jquery/jquery.min.js" charset="utf-8"></script>
    <script src="/pluggins/bootstrap/popper.min.js" charset="utf-8"></script>
    <script src="/pluggins/bootstrap/bootstrap.min.js" charset="utf-8"></script>
    <!-- input file -->
    <script src="/pluggins/input-file/input-file.js" charset="utf-8"></script>
</body>
</html>
