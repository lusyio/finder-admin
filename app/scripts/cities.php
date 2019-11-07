<script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
<script>

// нкция выделения текста
    jQuery.fn.selectText = function(){
        this.find('input').each(function() {
            if($(this).prev().length === 0 || !$(this).prev().hasClass('p_copy')) {
                $('<p class="p_copy" style="position: absolute; z-index: -1;"></p>').insertBefore($(this));
            }
            $(this).prev().html($(this).val());
        });
        var doc = document;
        var element = this[0];
        if (doc.body.createTextRange) {
            var range = document.body.createTextRange();
            range.moveToElementText(element);
            range.select();
        } else if (window.getSelection) {
            var selection = window.getSelection();
            var range = document.createRange();
            range.selectNodeContents(element);
            selection.removeAllRanges();
            selection.addRange(range);
        }
    };

    $('.select-csv').on('click', function () {
        let elId = $(this).data('id-to-select');
        $('#' + elId).selectText();
    });

    $('#addCity').on('click', function () {
        let cityName = $('#city').val();
        let regionId = $('#region').val();
        let regionName = $('#region option:selected').text();
        if (cityName === '') {
            $('#city').addClass('invalid');
        } else if (regionId === null) {
            $('#region').addClass('invalid');
        } else {
            $.ajax({
                type: "POST",
                url: "ajax",
                dataType: "json",
                data: {
                    action: 'addCity',
                    cityName: cityName,
                    regionId: regionId,
                },
                success: function (response) {
                    if (response.status === 'ok') {
                        $('#cityAddSuccess').fadeIn();
                        setTimeout(function () {
                            $('#cityAddSuccess').fadeOut();
                        }, 2000);
                        let cityData = {
                            cityId: response.id,
                            cityName: cityName,
                            regionName: regionName,
                            regionId: regionId
                        };
                        $('#citiesTable').bootstrapTable('append', cityData);
                    }
                }
            })
        }
    });
    $('#city').on('keyup', function () {
        $(this).removeClass('invalid');
    });
    $('#region').on('click', function () {
        $(this).removeClass('invalid');
    });
</script>