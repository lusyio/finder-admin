<script>
    $(document).ready(function () {
        let blockReason = $('#blockReason');
        let blockButton = $('#blockUser');
        let userId = blockButton.data('user-id');

        if (blockReason && blockButton) {
            blockReason.on('input', function () {
                if (blockReason.val() === '') {
                    blockButton.addClass('disabled');
                } else if (blockButton.hasClass('disabled')) {
                    blockButton.removeClass('disabled');
                    blockReason.css({'border': ''});
                } else {
                    blockReason.css({'border': ''});
                }
            });
            blockButton.on('click', function (e) {
                e.preventDefault();
                if ($(this).hasClass('disabled') || blockReason.val() === '') {
                    blockReason.css({'border': '1px solid #F44336'});
                } else {
                    let blockAction = '';
                    if (blockButton.data('block-action') === 'block') {
                        blockAction = 'blockUser';
                    } else if (blockButton.data('block-action') === 'unblock') {
                        blockAction = 'unblockUser';
                    } else {
                        return;
                    }
                    $.ajax({
                        type: "POST",
                        url: "/ajax",
                        data: {
                            action: blockAction,
                            userId: userId,
                            reason: blockReason.val()
                        },
                        success: function (response) {
                            if (response == 1) {
                                window.location.reload()
                            } else {
                                alert('Произошла ошибка')
                            }
                        }
                    });
                }
            })
        }
    })
</script>