$(document).ready(function(){

    $table = $('#tblHeroes').DataTable({
        ajax: {
            'url': 'server.php',
            'type': 'POST',
            'dataType': 'JSON'
        },
        columns: [
            { 'data': 'Id' },
            { 'data': 'HeroName' },
            { 'data': 'HeroType'}
        ]
    });


});