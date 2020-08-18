var unique = require('uniq');
var request = require('request');
var cheerio = require('cheerio');

function limpar() {
    document.getElementById("result").innerHTML = "";
    console.clear();
}

//Tratamento das informações:
function myTrim(trim) {
    return trim.replace(/^\s+|\s+$/gm, '');
}

function TrimAcent(trim) {
    return trim.replace(/�/g, 'í');
}

//URLs dos sites a serem requisitados:
function urls() {
    var busca = document.getElementById("inputProduto").value;
    busca = busca.replace(/ /g, "+");

    urlTera = "https://www.terabyteshop.com.br/busca?str=" + busca;
    console.log(urlTera);

    if ((busca == "processador") || (busca == "placa+de+video")) {
        urlKabum = "https://www.kabum.com.br/cgi-local/site/listagem/listagem.cgi?string=" + busca;
    }

    if (busca == "ssd") {
        urlKabum = "https://www.kabum.com.br/hardware/ssd-2-5/" + busca;
    }

    if (busca == "hd") {
        urlKabum = "https://www.kabum.com.br/hardware/disco-rigido-hd/" + busca;
    }

    if (busca == "cooler") {
        urlKabum = "https://www.kabum.com.br/hardware/coolers/" + busca;
    }

    console.log(urlKabum);
}

let main = function () {
    urls();
    Kabum();
    Tera();
}

function Kabum() {
    request(urlKabum, function (err, res, html) {
        if (err) console.log('Erro:' + err);

        var $ = cheerio.load(html);

        let produtoKabum = [];
        let titulo = [];
        let preco = [];
        let imagem = [];

        $(' .listagem-box').each(function (i, elem) {
            $(' .H-titulo a').each(function (i, elem) {
                titulo[i] = myTrim(TrimAcent($(this).text()));
            });

            $(' .listagem-preco').each(function (i, elem) {
                preco[i] = myTrim($(this).text());
            });

            $(' .listagem-img img').each(function (i, elem) {
                imagem[i] = myTrim($(this).attr('src'));
            });

            titulo.join(', ');
            preco.join(', ');
            imagem.join(', ');
            produtoKabum.join(', ');

            var htmlKabum = '<div class="card mb-3" style="max-width: 540px;"><div class="row no-gutters"><div class="col-md-4"><img src="' + imagem[i] + '" class="card-img" alt="..."/></div><div class="col-md-8"><div class="card-body"><h5 class="card-title">' + titulo[i] + '</h5><p class="card-text">' + preco[i] + '</p><button type="button" class="btn btn-primary">Selecionar</button></div></div></div></div>';

            document.getElementById("result").innerHTML += htmlKabum;

            produtoKabum[i] = [titulo[i], preco[i], imagem[i]];
        });
        console.log(produtoKabum.length);
    });
}

function Tera() {
    request(urlTera, function (err, res, html) {
        if (err) console.log('Erro:' + err);

        var $ = cheerio.load(html);

        let produtoTera = [];
        let titulo = [];
        let preco = [];
        let imagem = [];

        $(' .pbox.col-xs-12.col-sm-6.col-md-3').each(function (i, elem) {
            $(' .prod-name strong').each(function (i, elem) {
                titulo[i] = myTrim($(this).text());
            });

            $(' .prod-new-price span').each(function (i, elem) {
                preco[i] = myTrim($(this).text());
            });

            $(' .commerce_columns_item_image img').each(function (i, elem) {
                imagem[i] = myTrim($(this).attr('src'));
            });

            titulo.join(', ');
            preco.join(', ');
            imagem.join(', ');
            produtoTera.join(', ');

            if (preco[i] == undefined) {
                preco[i] = 'INDISPONÍVEL';
            }

            produtoTera[i] = [titulo[i], preco[i], imagem[i]];
        });
        console.log(produtoTera.length);
    });

    /*var htmlTera = '<div class="card mb-3" style="max-width: 540px;"><div class="row no-gutters"><div class="col-md-4"><img src="' + imagem[i] + '" class="card-img" alt="..."/></div><div class="col-md-8"><div class="card-body"><h5 class="card-title">' + titulo[i] + '</h5><p class="card-text">' + preco[i] + '</p><button type="button" class="btn btn-primary">Selecionar</button></div></div></div></div>';

    document.getElementById("result").innerHTML += htmlTera;*/
}

let button = document.getElementById("search");
button.addEventListener("click", main, true);

/*
<div class="card my-3 mx-auto col-9" style="flex-direction: initial;">
    <div class="card-body">
        <div>
            <img src="' + imagem[i] + '" border="0" id="imgtres" class="rounded d-blockcard-img-top my-2"/>
        </div>
            <div>
                <h5 class="limitText" style="text-align: left;">' + titulo[i] + '</h5>
                <p class="card-text limitText" style="text-align: left;">' + titulo[i] + '</p>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">
                            </font>
                        </font>
                        <button type="button" class="btn btn-outline-secondary mr-3 ml-3" data-toggle="modal" data-target="#exampleModalScrollable">Escolher</button>
                        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalScrollableTitle">title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a href="#" class="btn btn-outline-secondary mr-3 ml-3" role="button" aria-pressed="true">' + preco[i] + '</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
*/

//<div class="card my-3 mx-auto col-9" style="flex-direction: initial;"><img src="' + imagem[i] + '" border="0" id="imgtres" class="rounded d-blockcard-img-top my-2"/><div class="card-body"><h5 class="limitText" style="text-align: left;">' + titulo[i] + '</h5><p class="card-text limitText" style="text-align: left;">' + titulo[i] + '</p><div class="card-footer"><div class="d-flex justify-content-between align-items-center"><div class="btn-group"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font><button type="button" class="btn btn-outline-secondary mr-3 ml-3" data-toggle="modal" data-target="#exampleModalScrollable">Escolher</button><div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-scrollable" role="document"><div class="modal-content"><div class="modal-header"><h5 class="modal-title" id="exampleModalScrollableTitle">title</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"></div></div></div></div><div><a href="#" class="btn btn-outline-secondary mr-3 ml-3" role="button" aria-pressed="true">' + preco[i] + '</a></div></div></div></div></div></div>