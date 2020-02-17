<script>
    $(document).ready(function () {
        $('#saveTariffs').on('click', function (e) {
            e.preventDefault();
            let newCosts = [];
            let promptText = "Действительно изменить тарифы?\r\n";
            $('.tariff-cost-input').each(function (i, el) {
                promptText = promptText + $(el).data('tariff-name') + ": " + $(el).data('current-cost') + " -> " + $(el).val() + "\r\n";
                newCosts[$(el).data('tariff-id')] = $(el). val();
            });
            if (confirm(promptText)) {
                $.ajax({
                    type: "POST",
                    url: "ajax",
                    data: {
                        action: 'updateTariffs',
                        tariffs: newCosts,
                    },
                    success: function (response) {
                        if (response == 1) {
                            $('.tariff-cost-input').each(function (i, el) {
                                $(el).data('current-cost', $(el).val());
                            });
                            alert('Тарифы обновлены')
                        } else {
                            alert('Произошла ошибка. Тарифы не обновились')
                        }
                    }
                });
            }
        })
    })
</script>