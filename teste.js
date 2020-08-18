var request = require('request');
var cheerio = require('cheerio');

busca = "processador";

urlTera = "https://www.terabyteshop.com.br/busca?str=" + busca;
console.log(urlTera);

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
                titulo[i] = $(this).text();
            });

            $(' .prod-new-price span').each(function (i, elem) {
                preco[i] = $(this).text();
            });

            $(' .commerce_columns_item_image img').each(function (i, elem) {
                imagem[i] = $(this).attr('src');
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
}

Tera();