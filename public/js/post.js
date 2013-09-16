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
    console.log("post ready12");
    $("#left-menu").hide();
    $("#right-menu").hide();
    $("#entry").css("width", "100%");
    $("#entry").css("margin-top", "10px");
    $("#banner").hide();
    $("#runtext").hide();
    $('#MyTableContainer').jtable({
        messages: vnMessages,
        paging: true,
        sorting: true,
        title: "Quản lý bài viết",
        selecting: true, //Enable selecting
        multiselect: true, //Allow multiple selecting
        selectingCheckboxes: true, //Show checkboxes on first column
        actions: {
            listAction: '/Sfive/public/application/post/list',
//            deleteAction: '/Sfive/public/application/post/delete',
//            updateAction: '/Sfive/public/application/post/update',
//            createAction: '/Sfive/public/application/post/create'
        },
        toolbar: {
            items: [
                {
                    text: 'Đăng bài',
                    click: function() {
                        alert("Đăng bài viết");
                    }
                },
                {
                    text: 'Sửa bài viết',
                    click: function() {
                        alert("Sửa bài viết");
                    }
                },
                {
                    text: 'Xóa bài viết',
                    click: function() {
                        alert("Xóa bài viết");
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
            created: {
                title: "Ngày tạo",
                width: '20%',
                sorting: false
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
            if ($selectedRows.length > 0) {
                $selectedRows.each(function() {
                    var record = $(this).data('record');
                    id = record.title;
                    console.log("id = " + id);

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
                    title: $("#articletitle").val(),
                    type: $("#menuselect").val()
                }
        );
        console.log("Searching");
    }

};