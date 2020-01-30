<script>
    $(document).ready(function () {
        $('#sendSocket').on('click', function (e) {
            var text = $('#text').val();
            var toUser = $('#toUser').val();
            var fromUser = $('#fromUser').val();
            var messageId = $('#messageId').val();
            e.preventDefault();
            if (text != '' && toUser != '' && fromUser != '' && messageId != '') {
                $.ajax({
                    type: "POST",
                    url: "/ajax",
                    data: {
                        action: 'sendSocket',
                        from: fromUser,
                        to: toUser,
                        text: text,
                        id: messageId
                    },
                    success: function (response) {
                        var resultsArea = $('#results');
                        $(resultsArea).val($(resultsArea).val() + "\r\n" + response)
                    }
                });
            }
        })

    })
</script>