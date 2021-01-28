"use strict";
let form = document.querySelector('form');

function responseHandler(serverAnswer) {
    console.log(serverAnswer);
}

form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const response = await fetch('handler.php',
        {
            method: 'POST',
            body: new FormData(form)
        });
    const answer = await response.text();
    responseHandler(answer);

    let divCom = document.getElementsByClassName('comments');
    let comment = document.createElement('p');
    divCom.append(comment);
    comment.append(answer);
});
