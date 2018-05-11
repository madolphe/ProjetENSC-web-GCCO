function draw() {
    var canvas = document.getElementById('lien1');
    var ctx = canvas.getContext('2d');
    if (canvas.getContext) {
        ctx.beginPath();
        ctx.moveTo(150,20);
        ctx.lineTo(850,20);
        ctx.stroke();
        ctx.closePath();

        ctx.beginPath();
        ctx.moveTo(150,20);
        ctx.lineTo(150,70);
        ctx.stroke();
        ctx.closePath();

        ctx.beginPath();
        ctx.moveTo(500,0);
        ctx.lineTo(500,70);
        ctx.stroke();
        ctx.closePath();

        ctx.beginPath();
        ctx.moveTo(850,20);
        ctx.lineTo(850,70);
        ctx.stroke();
        ctx.closePath();
    }
    var canvas = document.getElementById('lien2');
    var ctx = canvas.getContext('2d');
    if (canvas.getContext) {
        ctx.beginPath();
        ctx.moveTo(150,0);
        ctx.lineTo(150,50);
        ctx.stroke();
        ctx.closePath();

        ctx.beginPath();
        ctx.moveTo(500,0);
        ctx.lineTo(500,50);
        ctx.stroke();
        ctx.closePath();

        ctx.beginPath();
        ctx.moveTo(850,0);
        ctx.lineTo(850,50);
        ctx.stroke();
        ctx.closePath();
    }
    var canvas = document.getElementById('lien3');
    var ctx = canvas.getContext('2d');
    if (canvas.getContext) {
        ctx.beginPath();
        ctx.moveTo(150,0);
        ctx.lineTo(150,50);
        ctx.stroke();
        ctx.closePath();

        ctx.beginPath();
        ctx.moveTo(500,0);
        ctx.lineTo(500,50);
        ctx.stroke();
        ctx.closePath();

        ctx.beginPath();
        ctx.moveTo(850,0);
        ctx.lineTo(850,50);
        ctx.stroke();
        ctx.closePath();

    }
    var canvas = document.getElementById('lien4');
    var ctx = canvas.getContext('2d');
    if (canvas.getContext) {
        ctx.beginPath();
        ctx.moveTo(150,0);
        ctx.lineTo(150,50);
        ctx.stroke();
        ctx.closePath();
        ctx.beginPath();
        ctx.moveTo(500,0);
        ctx.lineTo(500,50);
        ctx.stroke();
        ctx.closePath();
    }
    var canvas = document.getElementById('lien5');
    var ctx = canvas.getContext('2d');
    if (canvas.getContext) {
        ctx.beginPath();
        ctx.moveTo(500,0);
        ctx.lineTo(500,50);
        ctx.stroke();
        ctx.closePath();
    }
    var canvas = document.getElementById('lien6');
    var ctx = canvas.getContext('2d');
    if (canvas.getContext) {
        ctx.beginPath();
        ctx.moveTo(500,0);
        ctx.lineTo(500,50);
        ctx.stroke();
        ctx.closePath();
    }
}