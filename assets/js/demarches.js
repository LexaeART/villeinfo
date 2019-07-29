$(function() {
    $("#demarcheName").change(function() {
        var demarche = $(this).val();
        $.post('/controlers/demarchesInfosScript.php',
                {
                    demarchesInfos: demarche
                }, // Un script PHP que l'on va créer juste après
                function(demarchesInfos) {
                        $('#bodyTable').append('<tr><th id = "bodyTableLocal">' + demarchesInfos.contact + '</th><td>' + demarchesInfos.doc + '</td><td>' + demarchesInfos.prix + '</td><td>' + demarchesInfos.more + '</td></tr>');

                },
                'json'
                );
        $('#bodyTable').empty();
    });
});
