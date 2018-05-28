$(function () {
    $("#mainBack").vegas({
        timer: 'false',
        transition: 'fade',
        slides: [
            {
                src: "./images/banner/bk1.jpg"
            },
            {
                src: "./images/banner/bk4.jpg"
            },
            {
                src: "./images/banner/bk6.jpg"
            },
            {
                src: "./images/banner/bk8.jpg"
            }
    ],
        overlay: './images/01.png',
    });
});
