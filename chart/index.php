<div id="data"></div>
<div align="center" id="qr">
    <img src="https://chart.googleapis.com/chart?chs=200x200&chld=M|0&cht=qr&chl=otpauth%3A%2F%2Ftotp%2Fmy.hostnic.id%3Aari_sigit%40hotmail.com%3Fsecret%3DGRKTVS5JNWGDGILU%26issuer%3Dmy.hostnic.id" alt="">
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/kjua@0.9.0/dist/kjua.min.js" integrity="sha256-U9OwIwkuBJSExOOc5vUNG43RAHR5XmbaBuEUB5KpHZo=" crossorigin="anonymous"></script>
<script>
    const uri = $('#data');
    const qr = $('#qr');
    const img = $('img');

    const decodedUrl = decodeURIComponent(img.attr('src').split('?')[1]);
    const searchParams = new URLSearchParams(decodedUrl);

    searchParams.forEach((value, key) => {
        $('#data').data(key, value);
    })

    const el = kjua({
        crisp: false,
        render: 'img',
        text: uri.data('chl'),
        size: 200,
    });

    img.replaceWith(el);
</script>