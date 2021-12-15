//AJAX request

let mygtukas = document.getElementById('mygtukas');

mygtukas.addEventListener('click', function(e) {
    e.preventDefault();

    let handler = new XMLHttpRequest();
    handler.open( 'GET', 'index.php?action=test', false);
    handler.send();
    
    document.getElementById('response').innerHTML = handler.responseText;
});
