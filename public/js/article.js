var vnMessages = {
    serverCommunicationError: 'Một lỗi xảy ra khi cố kết nối máy chủ.',
    loadingMessage: 'Đang tải dữ liệu...',
    noDataAvailable: 'Không có bản ghi nào!',
    addNewRecord: 'Thêm mới',
    editRecord: 'Sửa',
    areYouSure: 'Bạn có chắc chắn không?',
    deleteConfirmation: 'Bạn có chắc chắn xóa không?',
    save: 'Lưu',
    saving: 'Đang lưu dữ liệu',
    cancel: 'Hủy bỏ',
    deleteText: 'Xóa',
    deleting: 'Đang xóa',
    error: 'Lỗi',
    close: 'Thoát',
    cannotLoadOptionsFor: 'Không thể tải dữ liệu cho trường {0}!',
    pagingInfo: 'Hiển thị từ {0} đến {1} của {2} bản ghi',
    canNotDeletedRecords: 'Không thể xóa {0} của {1} bản ghi!',
    deleteProggress: 'Đã xóa {0} của {1} bản ghi, đang xư lý...'
};

$(document).ready(function() {
    $id = -1;                   //id của bài viết được select
    $size = -1;
    console.log("post ready12");
    $isRunMar = false;
    $("#left-menu").hide();
    $("#right-menu").hide();
    $("#entry").css("width", "100%");
    $("#entry").css("margin-top", "10px");
    $("#banner").hide();
    $("#runtext").hide();
    $("#cr_title").bind("keypress", function(e) {
        var code = (e.keyCode ? e.keyCode : e.which);
        if (code == 13) { //Enter keycode
            postAction.btnSearchClick();
        }
    });
    $('#MyTableContainer').jtable({
        messages: vnMessages,
        paging: true,
        sorting: true,
        title: "Quản lý bài viết",
        selecting: true, //Enable selecting
        multiselect: false, //Allow multiple selecting
        selectingCheckboxes: true, //Show checkboxes on first column
        actions: {
            listAction: '/Sfive/public/application/articles/list',
            // deleteAction: '/Sfive/public/application/articles/delete'
        },
        toolbar: {
            items: [
                {
                    text: 'Xem bài viết',
                    click: function() {
                        if ($size == 1) {
                            document.location.href = "/Sfive/public/articles/detail/" + $id;
                        } else {
                            alert("Xin mời chọn một tin");
                        }
                    }
                },
                {
                    text: 'Đăng bài',
                    click: function() {
                        document.location.href = "/Sfive/public/application/articles/create?authkey=COuF2JS4wsPYZA";
                    }
                },
                {
                    text: 'Sửa bài viết',
                    click: function() {
                        console.log("Sửa bài viết");
                        if ($size == 1) {
                            document.location.href = "/Sfive/public/application/articles/edit?authkey=COuF2JS4wsPYZA&id=" + $id;
                        } else {
                            alert("Xin mời chọn một tin");
                        }
                    }
                },
                {
                    text: 'Xóa bài viết',
                    click: function() {
                        console.log("Xóa bài viết");
                        if ($size == 1) {
                            $.ajax({
                                url: "/Sfive/public/application/articles/delete",
                                type: "post",
                                data: "id=" + $id,
                                beforeSend: function() {
                                    layoutAction.addLoading();
                                },
                                success: function(result) {
                                    console.log("Result:" + result['result']);
                                    if (result['result'] == 'OK') {
                                        layoutAction.sendSuccesMessage("Đã xóa");
                                    } else {
                                        layoutAction.sendErrorMessage("Không xóa được");
                                    }
                                    $('#MyTableContainer').jtable('load');
                                    //layoutAction.removeLoading();
                                }
                            });
                        } else {
                            alert("Xin mời chọn một tin");
                        }
                    }
                }]
        },
        fields: {
            id: {
                key: true,
                create: false,
                edit: false,
                list: false
            },
            title: {
                title: "Tên bài viết",
                width: '30%'
            },
            menu: {
                title: "Mục",
                width: '20%',
                sorting: true
            },
            introText: {
                title: "Nội dung tóm tắt",
                width: '50%',
                sorting: false
            }
        },
        selectionChanged: function() {
            var $selectedRows = $('#MyTableContainer').jtable('selectedRows');
            $('#SelectedRowList').empty();
            $size = $selectedRows.length;
            console.log("Size = " + $size);
            if ($selectedRows.length > 0) {
                $selectedRows.each(function() {
                    var record = $(this).data('record');
                    $id = record.id;
                    console.log("id = " + $id);

                });
            } else {
                $('#SelectedRowList').append('No row selected! Select rows to see here...');
            }
        },
        recordsLoaded: function() {
            console.log("Loaded");
            $("#entry").height($("#MyTableContainer").height());
        }
    });
    $('#MyTableContainer').jtable(
            'load',
            {
                cmd: 0,
                title: $("#articletitle").val(),
                type: $("#menuselect").val()
            }
    );
});

var postAction = {
    btnSearchClick: function() {
        $('#MyTableContainer').jtable(
                'load',
                {
                    cmd: 1,
                    title: $("#cr_title").val(),
                    type: $("select[name=menu]").val()
                }
        );
        console.log("Searching");
    },
    createNew: function() {
        CKEDITOR.instances.cr_introtext.updateElement();
        CKEDITOR.instances.cr_fulltext.updateElement();
        var serialize = $('form.formArticle').serialize();
        console.log("thanh debug:");
        console.log(serialize);
        //formAction.addLoadding();
        if ($('form.formArticle').validationEngine('validate', {promptPosition: "bottomLeft"})) {
            $.ajax({
                url: "/Sfive/public/application/articles/add",
                type: "post",
                data: serialize,
                beforeSend: function() {
                    layoutAction.addLoading();
                },
                success: function(result) {
                    layoutAction.removeLoading();
                    console.log("Result:" + result['result']);
                    console.log("Data:" + result['data']);
                    if (result['result'] == 'OK') {
                        layoutAction.sendSuccesMessage("Đã đăng bài viết thành công");
                    } else {
                        layoutAction.sendErrorMessage("Không đăng bài được");
                    }
                }
            });
        }

    },
    editAction: function() {
        CKEDITOR.instances.cr_introtext.updateElement();
        CKEDITOR.instances.cr_fulltext.updateElement();
        var serialize = $('form.formArticle').serialize();
        if ($('form.formArticle').validationEngine('validate', {promptPosition: "bottomLeft"})) {
            $.ajax({
                url: "/Sfive/public/application/articles/update",
                type: "post",
                data: serialize,
                beforeSend: function() {
                    layoutAction.addLoading();
                },
                success: function(result) {
                    layoutAction.removeLoading();
                    console.log("Result:" + result['result']);
                    console.log("Data:" + result['data']);
                    if (result['result'] == 'OK') {
                        layoutAction.sendSuccesMessage("Đã lưu");
                    } else {
                        layoutAction.sendErrorMessage("Không lưu được");
                    }
                }
            });
        }
    },
    makeEditor: function(name, height) {
        CKEDITOR.replace(name, {
            fullpage: true,
            height: height,
            resizable: 'false'
        });
        CKEDITOR.config.resize_enabled = false;
    },
    parentMenuChange: function() {
        console.log("Change");
        data = $("#cr_menu_parent").serialize();
        $.ajax({
            url: "/Sfive/public/application/articles/menuChange",
            type: "post",
            data: data,
            beforeSend: function() {
                layoutAction.addLoading();
            },
            success: function(result) {
                layoutAction.removeLoading();
                console.log("Result:" + result['result']);
                console.log("Data:" + result['data']);
                $("select[name=menu]").empty();
                //$("select[name=newsType]").append('<option value="" > Tất cả </option>');
                $.each(result['data'], function(key, value) {
                    console.log(key, value);
                    $("select[name=menu]").append('<option value="' + key + '" >' + value + '</option>');
                });
            }
        });
    }
};