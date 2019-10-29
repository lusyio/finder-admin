<script>
    $(document).ready(function () {

        //Редактирование элемента категории
        $('#container').on('click', '.edit-item-name', function () {
            $(this).siblings('.item-name,.item-control').addClass('d-none');
            $(this).addClass('d-none');
            $(this).siblings('.item-edit-control').removeClass('d-none');
            $(this).siblings('.item-name-input').removeClass('d-none').addClass('d-inline-block');
        });

        $('#container').on('click', '.update-edit-item', function () {
            $(this).siblings('.item-name, .item-control').removeClass('d-none');
            $(this).addClass('d-none');
            $(this).siblings('.item-edit-control').addClass('d-none');
            $(this).siblings('.item-name-input').removeClass('d-inline-block').addClass('d-none');
            $(this).siblings('.item-name-input').val($(this).siblings('.item-name').text());
        });

        $('#container').on('click', '.cancel-edit-item', function () {
            $(this).siblings('.item-name, .item-control').removeClass('d-none');
            $(this).addClass('d-none');
            $(this).siblings('.item-edit-control').addClass('d-none');
            $(this).siblings('.item-name-input').removeClass('d-inline-block').addClass('d-none');
            $(this).siblings('.item-name-input').val($(this).siblings('.item-name').text());
        });

        $('#container').on('click', '.remove-item', function () {
            confirm('Перед удалением категории нужно удалить возможность его выбора в мобильном приложении. ' +
                'Вы действительно хотите удалить элемент?');
        });

        // Редактирование категории
        $('#container').on('click', '.edit-category-name', function () {
            $(this).siblings('.category-name,.category-control').addClass('d-none');
            $(this).addClass('d-none');
            $(this).siblings('.category-edit-control').removeClass('d-none');
            $(this).siblings('.category-name-input').removeClass('d-none').addClass('d-inline-block');
        });

        $('#container').on('click', '.update-edit-category', function () {
            $(this).siblings('.category-name, .category-control').removeClass('d-none');
            $(this).addClass('d-none');
            $(this).siblings('.category-edit-control').addClass('d-none');
            $(this).siblings('.category-name-input').removeClass('d-inline-block').addClass('d-none');
            $(this).siblings('.category-name-input').val($(this).siblings('.item-name').text());
        });

        $('#container').on('click', '.cancel-edit-category', function () {
            $(this).siblings('.category-name, .category-control').removeClass('d-none');
            $(this).addClass('d-none');
            $(this).siblings('.category-edit-control').addClass('d-none');
            $(this).siblings('.category-name-input').removeClass('d-inline-block').addClass('d-none');
            $(this).siblings('.category-name-input').val($(this).siblings('.category-name').text());
        });

        $('#container').on('click', '.remove-category', function () {
            confirm('Перед удалением категории нужно удалить возможность его выбора в мобильном приложении. ' +
                'Вы действительно хотите удалить элемент?');
        })
    });
</script>