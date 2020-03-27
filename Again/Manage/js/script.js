$(document).ready(function () {
    var idM;

    DisplayData();

    $('#update').hide();

    $('#save').on('click', function () {
        if ($('#id').val() == "" || $('#type').val() == "" || $('#name').val() == "" || $('#price').val() == "" || $('#des').val() == "" || $('#img').val() == "" || $('#music').val() == "" || $('#singer').val() == "") {
            alert("Nhập thông tin vào");
        } else {
            var id = $('#id').val();
            var type = $('#type').val();
            var name = $('#name').val();
            var price = $('#price').val();
            var des = $('#des').val();
            var img = $('#img').val();
            var music = $('#music').val();
            var singer = $('#singer').val();

            $.ajax({
                url: 'save_query.php',
                type: 'POST',
                data: {
                    id: id,
                    type: type,
                    name: name,
                    price: price,
                    des: des,
                    img: img,
                    music: music,
                    singer: singer
                },
                success: function (data) {
                    DisplayData();
                    $('#id').val('');
                    $('#type').val('');
                    $('#name').val('');
                    $('#price').val('');
                    $('#des').val('');
                    $('#img').val('');
                    $('#music').val('');
                    $('#singer').val('');
                }
            });
        }

    });

    function DisplayData() {
        $.ajax({
            url: 'data_query.php',
            type: 'POST',
            data: {
                res: 1
            },
            success: function (response) {
                $('#data').html(response);
            }
        })
    }

    $(document).on('click', '.delete', function () {
        var id = $(this).attr('name');

        $.ajax({
            url: 'delete_query.php',
            type: 'POST',
            data: {
                id: id
            },
            success: function (data) {
                DisplayData();
                $('#update').hide();
                $('#save').show();
                $('#id').val('');
                $('#type').val('');
                $('#name').val('');
                $('#price').val('');
                $('#des').val('');
                $('#img').val('');
                $('#music').val('');
                $('#singer').val('');
            }
        });
    })

    $(document).on('click', '.edit', function () {
        var id = $(this).attr('name');

        $.ajax({
            url: 'edit.php',
            type: 'POST',
            data: {
                id: id
            },
            success: function (response) {
                var getArray = jQuery.parseJSON(response);

                idM = getArray.id;

                $('#type').val(getArray.type);
                $('#name').val(getArray.name);
                $('#price').val(getArray.price);
                $('#des').val(getArray.des);
                $('#music').val(getArray.music);
                $('#img').val(getArray.img);
                $('#singer').val(getArray.singer);

                $('#update').show();
                $('#save').hide();
            }
        })
    });

    $('#update').on('click', function () {
        var type = $('#type').val();
        var name = $('#name').val();
        var price = $('#price').val();
        var des = $('#des').val();
        var music = $('#music').val();
        var img = $('#img').val();
        var singer = $('#singer').val();


        $.ajax({
            url: 'update_query.php',
            type: 'POST',
            data: {
                id:idM,
                type: type,
                name: name,
                price: price,
                des: des,
                music: music,
                img: img,
                singer: singer
            },
            success: function () {
                DisplayData();
                $('#type').val('');
                $('#name').val('');
                $('#price').val('');
                $('#des').val('');
                $('#img').val('');
                $('#music').val('');
                $('#singer').val('');

                alert("Successfully Updated!");

                $('#update').hide();
                $('#save').show();

                idM = "";
            }
        });
    });
});