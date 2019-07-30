$(function() {
    $("#demarcheName").change(function() {
        var demarche = $(this).val();
        $.post('/controlers/villinfosScript.php',
                {
                    demarchesInfos: demarche
                },
                function(demarchesInfos) {
                    $.each(demarchesInfos, function(searchArraypos, needMethods) {
                        $('#rowInfos').append('<a href="media/vilinfo/'+needMethods.corpus+'.pdf"><div id="change" class="col-xs-12 col-sm-12 col-md-12 col-lg-4 offset-lg-1"><div class="row"><div class="col-12"><h2>'+needMethods.name+'</h2><p>'+needMethods.trimestre+' '+needMethods.year+'</p></div></div></div></a>');
                    });
                },
                'json'
                );
        $('#rowInfos').empty();
    });
});
