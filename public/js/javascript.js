$(document).ready(function () {
    $(".deletePokedex").click(function () {
            console.log("test");
            let button = $(this);
            let row = button.closest("div");

            if (confirm("Chces vymazat pokemona?")) {



                $.ajax({
                    url: "delete-pokedex/" + button.val(),
                    type: "GET",
                    dataType: 'json',
                    data: {
                        '_token': $('meta[name=csrf-token]').attr('content'),
                    }
                })
                    .done(function (data, textStatus, jqXHR) {
                        // alert(data.message);
                        $(".pokedex_" + button.val()).remove();

                    })

                    .fail(function (jqXHR, textStatus, errorThrown) {
                        alert("Error");//ak je chyba v kode (php )
                    })
                    .always(function (jqXHROrData, textStatus, jqXHROrErrorThrown) {
                    });
            }

        }
    );

});

