$(document).ready(function () {
    let ctrlDown = false;
    const url = $('#url');
    const ctrlKey = 17;
    const cmdKey = 91;
    const vKey = 86;
    const cKey = 67;
    const regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#\&\?]*).*/;

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
            thumbnail(url.val())
        })

    function thumbnail(url) {
        let match = url.match(regExp);
        let href = `http://img.youtube.com/vi/${match[7]}/0.jpg`;

        if (match && match[7].length == 11) {
            b1.src = href;
            b1.title = 'Clique para baixar';
            botao.href = href;
            botao.download = 'Miniatura.jpg';
        }
    }
});