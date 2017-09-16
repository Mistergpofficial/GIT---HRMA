myDate = new Date();
shouldSnow = false;
year = myDate.getFullYear();
xmas = Date.parse("Dec 25, " + myDate.getFullYear())
today = Date.parse(myDate);
daysToChristmas = Math.round((xmas - today) / (1000 * 60 * 60 * 24));


if ((daysToChristmas >= 0) && (daysToChristmas < 10)) {
    $('#days').text("Complements of the Season. Christmas is around the corner.");

    shouldSnow = true;
}
if ((daysToChristmas >= 0) && (daysToChristmas < 5)) {
    $('#days').text("Complements of the Season and have a Merry Christmas.");
    shouldSnow = true;
}

if ((daysToChristmas <= 358) && (daysToChristmas >= 350)) {
    $('#days').text(" Welcome to " + year + ". Let's make it wonderful together.");
    shouldSnow = true;
}

if (!isMobile() && shouldSnow) {

//make snow

    snowDrop(150, randomInt(1035, 1280));
    snow(150, 150);

}

function isMobile() {
    return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

function snow(num, speed) {
    if (num > 0) {
        setTimeout(function () {
            $('#drop_' + randomInt(1, 250)).addClass('animate');
            num--;
            snow(num, speed);
        }, speed);
    }
};

function snowDrop(num, position) {
    if (num > 0) {
        var drop = '<div class="drop snow" id="drop_' + num + '"></div>';

        $('body').append(drop);
        $('#drop_' + num).css('left', position);
        num--;
        snowDrop(num, randomInt(60, 1280));
    }
};

function randomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
};