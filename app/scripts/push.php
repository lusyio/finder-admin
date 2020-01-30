<script>
    $(document).ready(function () {
        $('#fcmToken').on('click', function () {
            var tokenCheckBox = $('#setNewFcmToken');
            if (!$(tokenCheckBox).is(':checked')) {
                $(tokenCheckBox).prop('checked', true);
            }
        });
        $('#sendPush').on('click', function (e) {
            var pushType = $('#type').val();
            var toUser = $('#toUser').val();
            var fromUser = $('#fromUser').val();
            var updateFcmToken = $('#setNewFcmToken').is(':checked');
            var fcmToken = '';
            console.log(updateFcmToken);
            if (updateFcmToken) {
                fcmToken = $('#fcmToken').val();
            }
            e.preventDefault();
            if (pushType != '' && toUser != '' && fromUser != '') {
                $.ajax({
                    type: "POST",
                    url: "/ajax",
                    data: {
                        action: 'sendPush',
                        from: fromUser,
                        to: toUser,
                        type: pushType,
                        fcm: fcmToken
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