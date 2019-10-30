<script>
    $(document).ready(function () {

        let container = $('#container');
        //Редактирование элемента категории
        container.on('click', '.edit-item-name', function () {
            $(this).siblings('.item-name,.item-control').addClass('d-none');
            $(this).addClass('d-none');
            $(this).siblings('.item-edit-control').removeClass('d-none');
            $(this).siblings('.item-name-input').removeClass('d-none').addClass('d-inline-block');
        });

        container.on('click', '.update-item-name', function () {
            let el = $(this);
            let itemType = el.data('item-type');
            let itemId = el.data('item-id');
            let newItemName = el.siblings('.item-name-input').val();
            $.ajax({
                type: "POST",
                url: "ajax",
                data: {
                    action: 'updateItem',
                    itemType: itemType,
                    itemId: itemId,
                    newItemName: newItemName
                },
                success: function (response) {
                    if (response == 1) {
                        el.siblings('.item-name-input').val(newItemName);
                        el.siblings('.item-name').text(newItemName);
                        el.siblings('.item-name, .item-control').removeClass('d-none');
                        el.addClass('d-none');
                        el.siblings('.item-edit-control').addClass('d-none');
                        el.siblings('.item-name-input').removeClass('d-inline-block').addClass('d-none');
                    } else {
                        console.log('Не обновилось');
                    }

                }
            });
        });

        container.on('click', '.cancel-edit-item', function () {
            $(this).siblings('.item-name, .item-control').removeClass('d-none');
            $(this).addClass('d-none');
            $(this).siblings('.item-edit-control').addClass('d-none');
            $(this).siblings('.item-name-input').removeClass('d-inline-block').addClass('d-none');
            $(this).siblings('.item-name-input').val($(this).siblings('.item-name').text());
            $(this).siblings('.item-name-input').val($(this).siblings('.item-name').text());
        });

        container.on('click', '.remove-item', function () {
            confirm('Перед удалением категории нужно удалить возможность его выбора в мобильном приложении. ' +
                'Вы действительно хотите удалить элемент?');
        });

        // Редактирование категории
        container.on('click', '.edit-category-name', function () {
            $(this).siblings('.category-name,.category-control').addClass('d-none');
            $(this).addClass('d-none');
            $(this).siblings('.category-edit-control').removeClass('d-none');
            $(this).siblings('.category-name-input').removeClass('d-none').addClass('d-inline-block');
        });

        container.on('click', '.update-edit-category', function () {
            let el = $(this);
            let categoryType = el.data('category-type');
            let categoryId = el.data('category-id');
            let newCategoryName = el.siblings('.category-name-input').val();
            $.ajax({
                type: "POST",
                url: "ajax",
                data: {
                    action: 'updateCategory',
                    categoryType: categoryType,
                    categoryId: categoryId,
                    newCategoryName: newCategoryName
                },
                success: function (response) {
                    if (response == 1) {
                        el.siblings('.category-name-input').val(newCategoryName);
                        el.siblings('.category-name').text(newCategoryName);
                        el.siblings('.category-name, .category-control').removeClass('d-none');
                        el.addClass('d-none');
                        el.siblings('.category-edit-control').addClass('d-none');
                        el.siblings('.category-name-input').removeClass('d-inline-block').addClass('d-none');
                    } else {
                        console.log('Не обновилось');
                    }

                }
            });
        });

        container.on('click', '.cancel-edit-category', function () {
            $(this).siblings('.category-name, .category-control').removeClass('d-none');
            $(this).addClass('d-none');
            $(this).siblings('.category-edit-control').addClass('d-none');
            $(this).siblings('.category-name-input').removeClass('d-inline-block').addClass('d-none');
            $(this).siblings('.category-name-input').val($(this).siblings('.category-name').text());
        });

        container.on('click', '.remove-category', function () {
            confirm('Перед удалением категории нужно удалить возможность его выбора в мобильном приложении. ' +
                'Вы действительно хотите удалить элемент?');
        });

        // Добавление элемента
        container.on('click', '.add-item', function () {
            let el = $(this);
            let categoryId = el.data('category-id');
            let categoryType = el.data('category-type');
            let itemName = el.closest('.input-group').find('.add-item-input').val();
            let list = el.closest('.collapse').find('.item-list');
            console.log(itemName);
            if (itemName !== '') {
                $.ajax({
                    type: "POST",
                    url: "ajax",
                    dataType: "json",
                    data: {
                        action: 'addItem',
                        itemName: itemName,
                        categoryType: categoryType,
                        categoryId: categoryId,
                    },
                    success: function (response) {
                        if (response.itemId) {
                            el.closest('.input-group').find('.add-item-input').val('');
                            let sourceCode = $(".item-template").html();
                            let finalCode = sourceCode
                                .replace(new RegExp('{{itemId}}', 'g'), response.itemId)
                                .replace(new RegExp('{{itemName}}', 'g'), itemName)
                                .replace(new RegExp('{{categoryId}}', 'g'), categoryId)
                                .replace(new RegExp('{{itemType}}', 'g'), categoryType);
                            $(".item-template").clone()
                                .removeClass('d-none')
                                .removeClass('item-template')
                                .html(finalCode)
                                .appendTo(list);
                        }
                    }
                });
            }
        });

        //Добавление категории
        container.on('click', '.add-category', function () {
            let el = $(this);
            let categoryType = el.data('category-type');
            let categoryName = el.closest('.input-group').find('.add-category-input').val();
            let list = el.closest('.collapse').find('.category-list');
            if (categoryName !== '') {
                $.ajax({
                    type: "POST",
                    url: "ajax",
                    dataType: "json",
                    data: {
                        action: 'addCategory',
                        categoryName: categoryName,
                        categoryType: categoryType,
                    },
                    success: function (response) {
                        if (response.categoryId) {
                            el.closest('.input-group').find('.add-category-input').val('');
                            let template = $(".category-template");
                            let sourceCode = template.html();
                            let finalCode = sourceCode
                                .replace(new RegExp('{{categoryId}}', 'g'), response.categoryId)
                                .replace(new RegExp('{{categoryName}}', 'g'), categoryName)
                                .replace(new RegExp('{{categoryType}}', 'g'), categoryType);
                            console.log(list);
                            template.clone()
                                .removeClass('d-none')
                                .removeClass('category-template')
                                .html(finalCode)
                                .appendTo(el.closest('.collapse').find('.category-list'));
                        }
                    }
                });
            }
        })
    });
</script>