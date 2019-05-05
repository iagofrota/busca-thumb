$(document).ready(function () {
    var url = $("#url");

    var ctrlDown = false,
        ctrlKey = 17,
        cmdKey = 91,
        vKey = 86,
        cKey = 67;

    $(document).keydown(function (e) {
        if (e.keyCode == ctrlKey || e.keyCode == cmdKey) ctrlDown = true;
    }).keyup(function (e) {
        if (e.keyCode == ctrlKey || e.keyCode == cmdKey) ctrlDown = false;
    });

    url.keyup(function (e) {
        if (ctrlDown && (e.keyCode == vKey || e.keyCode == cKey))
            $(this).change()
    })
        .change(function () {
            console.log("Deu certo pegar " + url.val())
            thumbnail(url.val())
        })

    function thumbnail(url) {
        var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;
        var match = url.match(regExp);
        href = 'http://img.youtube.com/vi/' + match[7] + '/0.jpg';

        if (match && match[7].length == 11) {
            b1.src = 'http://img.youtube.com/vi/' + match[7] + '/0.jpg';
            b1.title = 'Clique para baixar';
            botao.href = 'http://img.youtube.com/vi/' + match[7] + '/0.jpg';
            botao.download = 'Miniatura.jpg';
        }
    }
})