$(function () {
    pretraziKurseve();
    sortirajKurseve();
});


function pretraziKurseve() {

    $(document).on('keyup', '#input-pretraga', function () {

        var kriterijumPretrage = this.value;

        $.ajax(
            {
                url: 'pretragaBaza.php',
                method: 'post',
                data: { kriterijumPretrage: kriterijumPretrage },
                success: function (data) {
                    {
                        $('#rezultatPretrage').html(data);
                    }
                }
            }
        )
    })
}

function sortirajKurseve() {

    $(document).on('click', 'th', function () {

        let kolona = $(this).attr('id');
        let order_by = $(this).attr('value');

        $.ajax({
            url: 'sortiranjeBaza.php',
            method: 'post',
            data: { kolona: kolona, order_by: order_by },

            success: function (data) {
                $('#tabela-pocetna').hide();
                $('#tabela-sort').html(data);
            }
        })

    })
}