var URL = window.URL || window.webkitURL;

var lastFile = null;
// valores para impresion en pantalla
var srcSize = document.querySelector('#srcSize'),
    srcType = document.querySelector('#srcType'),
    srcDimension = document.querySelector('#srcDimension');

var resSize = document.querySelector('#resSize'),
    resType = document.querySelector('#resType'),
    resDimension = document.querySelector('#resDimension'),
    resTasa = document.querySelector('#resTasa'),
    resDuracion = document.querySelector('#resDuracion');


var options = {
    quality: 0.9,
    width: 2000,
    height: 2000
};

var resultImg = document.querySelector('#result'),
    sourceImg = document.querySelector('#source'),
    resultInfo = document.querySelector('#result-info'),
    sourceInfo = document.querySelector('#source-info');

var compress = function(file) {
    file = file || lastFile;

    if (!file) return;

    lastFile = file;

    URL.revokeObjectURL(sourceImg.src);
    URL.revokeObjectURL(resultImg.src);

    sourceImg.src = resultImg.src = '';
    sourceInfo.textContent = resultInfo.textContent = '';

    var compressor = new CanvasCompress(Object.assign({
        type: CanvasCompress.isSupportedType(file.type) ? file.type : CanvasCompress.MIME.JPEG,
    }, options));
    var startTime = Date.now();

    compressor.process(file).then(function(res) {
        var source = res.source,
            result = res.result;

        sourceImg.src = URL.createObjectURL(source.blob);
        resultImg.src = URL.createObjectURL(result.blob);

        // sourceInfo.textContent = [
        //     'File size: ' + (source.blob.size / 1024 ).toFixed(2) + 'KB',
        //     'File type: ' + source.blob.type,
        //     'Dimensions: ' + source.width + ' * ' + source.height
        // ].join('\n');
        srcSize.innerHTML = (source.blob.size / 1024 ).toFixed(2) + 'KB';
        srcType.innerHTML = source.blob.type;
        srcDimension.innerHTML = source.width + ' * ' + source.height;
        //
        // resultInfo.textContent = [
        //     'File size: ' + (result.blob.size / 1024 ).toFixed(2) + 'KB',
        //     'File type: ' + result.blob.type,
        //     'Dimensions: ' + result.width + ' * ' + result.height,
        //     'Compress rate: ' + ((result.blob.size / source.blob.size) * 100).toFixed(2) + '%',
        //     'Compress duration: ' + (Date.now() - startTime)+ 'ms'
        // ].join('\n');
        resSize.innerHTML = (result.blob.size / 1024 ).toFixed(2) + 'KB';
        resType.innerHTML = result.blob.type;
        resDimension.innerHTML = result.width + ' * ' + result.height;
        resTasa.innerHTML = ((result.blob.size / source.blob.size) * 100).toFixed(2) + '%';
        resDuracion.innerHTML = (Date.now() - startTime)+ 'ms';

    }).catch(alert);
}
// envio de datos a la pila
var arrayPila = [];
var codeBlock = ''; // variable para bloque de codigo html
var codeGroup = document.querySelector('#codeGroup');

document.querySelector('#envioPila').addEventListener('click', sendToPila);
function sendToPila(){
  arrayPila.push(resultImg.src);
  console.log(arrayPila);
  // `<li class="row my-2" style="font-size: 12px; color: #666666; font-weight: 625;">
  //   <div class="col-8" >
  //     ` + resultImg.src +`
  //   </div>
  //   <div class="col-3 px-1" style="z-index: 1; background-color: #F5F5F5;">
  //     154.35 KB
  //   </div>
  //   <div class="1 px-0" style="z-index: 1;background-color: #F5F5F5;">
  //     <i class="fa fa-trash" aria-hidden="true"></i>
  //   </div>
  // </li>`;
}

//envio de datos al servidor
document.querySelector('#envioAxiosForm').addEventListener('submit', sendRequestPost);

function sendRequestPost(evt){

  console.log('datos enviados');
  console.log(resultImg.src);

  axios.post('/JqueryAjax', {
    img: resultImg.src
  })
  .then(function (response) {
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });

  evt.preventDefault();
}

// fin de envio de datos

Array.prototype.forEach.call(document.querySelectorAll('input[type="range"]'), function(input) {
    var value = input.nextElementSibling;
    var prop = input.name;

    input.value = options[prop];
    value.textContent = input.value;

    input.addEventListener('change', function() {
        options[prop] = value.textContent = input.value;
        compress();
    });
});

document.querySelector('#upload').addEventListener('change', function() {
  compress(this.files[0]);
});
