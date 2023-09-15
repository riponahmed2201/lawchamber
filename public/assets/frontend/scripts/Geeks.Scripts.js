var _CurrentPopupBox = null;
var _CurrentModalFrame = null;
var _CurrentModalCover = null;
var _IFrameEventInterval = null;
function OpenModalPop(url, openEffect, height, width, className) {
    GetOpenModal(url, openEffect, height, width, 'defaultModalSmall ' + className, '');
}
function OpenModalSmall(url, openEffect, height, width) {
    GetOpenModal(url, openEffect, height, width, 'defaultModalSmall', '');
}

function OpenModal(url, openEffect, height, width) {
    GetOpenModal(url, openEffect, height, width, 'defaultModal', '');
}

function OpenModalDiv(url, openEffect, height, width, formName) {
    GetOpenModal(url, openEffect, height, width, 'defaultModal', formName);
}

function GetOpenModal(url, openEffect, height, width, className, formName) {
    CloseModelGS(false);

    //if (cssClass == null || cssClass == '' || cssClass == undefined)
    var cssClass = className;

    // Create a box:
    _CurrentPopupBox = $('<div style="position:absolute;" />');
    _CurrentPopupBox.addClass(cssClass);

    // Create an IFRAME:
    _CurrentModalFrame = $("<iframe frameborder='0' height='" + height + "' width='" + width + "' />");
    _CurrentModalFrame.css("visibility", 'hidden');
    // _CurrentModalFrame.attr("src", url);

    _CurrentModalFrame.attr("parentWidth", $(window).width());
    _CurrentModalFrame.attr("parentHeight", $(window).height());
    _CurrentModalFrame.attr("parentScroll", $(window).scrollTop());
    if (openEffect != undefined) //openEffect = "fast";
        _CurrentModalFrame.attr("openEffect", openEffect);

    // Create DL and DD
    var dl = $("<dl />");
    _CurrentPopupBox.append(dl);
    var dd = $("<dd />");
    dl.append(dd);
    var closewin = $("<a class=\"close fixed close-defaultModal\" onclick='CloseModelGS();'><svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#closeRound'></use></svg></a>");

    dd.append(_CurrentModalFrame);
    dd.append(closewin);

    // Create new cover:
    _CurrentModalCover = $("<div />");

    //_CurrentModalCover.append($("nbsp;"));
    _CurrentModalCover.addClass("modal-cover");
    _CurrentModalCover.width($(window).width() * 2);
    _CurrentModalCover.height($(window).height() * 2);
    // in the next code 50 is the half of the spinner image width (height)
    _CurrentModalCover.css("background-position",
    ($(window).width() / 2 - 50) + "px "
    + ($(window).height() / 2 - 50) + "px");
    _CurrentModalCover.css("top", $(window).scrollTop());

    $(window).scroll(function () {
        if (_CurrentModalCover != undefined) {
            _CurrentModalCover.css("top", $(window).scrollTop() + "px");
            _CurrentModalFrame.css("top", (($(window).height() - _CurrentModalFrame.height()) / 2 + $(window).scrollTop()) + "px");
        }
    });

    $(document.body).css("overflow", "hidden");

    // hide items
    _CurrentModalCover.hide();
    _CurrentPopupBox.hide();

    // Add all to the body:   
    if (formName == '') {
        $('form').append(_CurrentPopupBox);
        $('form').append(_CurrentModalCover);
    }
    else {
        $('#' + formName).append(_CurrentPopupBox);
        $('#' + formName).append(_CurrentModalCover);
    }

    // show items    
    _CurrentModalCover.show();
    _CurrentPopupBox.show();

    _CurrentPopupBox.css("top", 0);
    _CurrentPopupBox.css("left", 0);

    _CurrentModalFrame.load(InitializeModalPage(url));

    return _CurrentModalFrame;
}

function InitializeModalPage(url) {

    var IFrame = _CurrentModalFrame;
    var doc = IFrame.get(0).contentWindow.document;

    if (IFrame.attr('name') == "frmContent") {
        return;
    }
    var margin = 30;

    var minheight = "0";

    IFrame.attr("src", url);
    IFrame.attr("src", url);

    if (IFrame.css('min-height'))
        minheight = IFrame.css("min-height").replace("px", "");

    var isFirstTimeLoading = IFrame.attr("isLoaded") != "true";
    if (!isFirstTimeLoading) return;
    if (isFirstTimeLoading) IFrame.attr("isLoaded", "true");

    var actualheight = doc.body.parentNode.scrollHeight + 50;
    var actualwidth = $(doc.body).width() + 10;

    var parentWidth = parseInt(IFrame.attr("parentWidth"));
    var parentHeight = parseInt(IFrame.attr("parentHeight")) - margin;
    var parentScroll = parseInt(IFrame.attr("parentScroll"));
    var openEffect = IFrame.attr("openEffect");

    IFrame.css("min-height", 0);

    if (actualheight > parentHeight) actualheight = parentHeight;
    //IFrame.height(actualheight);
    //IFrame.width(actualwidth);

    var top = IFrame.offset().top;
    var left = IFrame.offset().left;

    top = (parentHeight - actualheight) / 2;
    if (top < margin / 2) top = margin / 2;
    top = top + parentScroll;

    left = (parentWidth - actualwidth) / 2;
    IFrame.hide();
    IFrame.css("visibility", 'visible');
    IFrame.css("top", top + "px");
    IFrame.css("left", left + "px");
    /*
        if (openEffect == "immediate")
            IFrame.show();
        else if (openEffect == "slow" || openEffect == "normal" || openEffect == "fast")
            IFrame.show(openEffect);
        else if (openEffect == "slide")
            IFrame.slideDown();
        else if (openEffect == "fade")
            IFrame.fadeIn();
        else IFrame.show();
    */
    IFrame.show();
    $(IFrame.get(0).contentWindow).focus();
}

function CloseModelGS(refreshParent, closeEffect) {
    if ($(document.html).length != 0) {
        $(document.html).removeClass("popupShown");
        $(document.body).removeClass("modal-open");
    }
    else {
        $('html').removeClass("popupShown");
        $('body').removeClass("modal-open");
    }

    //$(document.body).css("overflow", "scroll");
    if (closeEffect == undefined) closeEffect = null;

    if (_CurrentModalFrame != null) {
        _CurrentModalFrame.attr("isLoaded", "false");
        if (closeEffect == "immediate")
            _CurrentModalFrame.hide();
        else if (closeEffect == "fade")
            _CurrentModalFrame.fadeOut();
        else if (closeEffect == "normal" || closeEffect == "fast" || closeEffect == "slow")
            _CurrentModalFrame.hide(closeEffect);
        else if (closeEffect == "slide")
            _CurrentModalFrame.slideUp();
        else
            _CurrentModalFrame.hide();
    }

    if (_CurrentModalCover != null) {
        //_CurrentModalCover.fadeOut();
        _CurrentModalCover.hide();
        _CurrentModalCover = null;
    }

    if (_CurrentPopupBox != null) {
        // _CurrentPopupBox.fadeOut();
        _CurrentPopupBox.hide();
        _CurrentPopupBox = null;
    }

    if (refreshParent == true) {
        window.location = window.location;
    }

    $(window).focus();
}

function SetTextboxClasses() {
    var inputs = document.getElementsByTagName('INPUT');
    for (var i = 0; i < inputs.length; i++) {
        if (inputs[i].type.toLowerCase() == 'text' || inputs[i].type.toLowerCase() == 'password') {
            inputs[i].className += ' textbox';
        }
    }
}

/// This will break the execution for current javascript thread.
function Break() {
    // Return nothing. This method is meant to be used in hyperlink href's
}

function OpenBrowserWindow(url, target) {
    if (target == null) target = '_blank';
    window.open(url, target);
}

function ShowPleaseWait() {
    var image = document.createElement("img");

    image.style.position = "absolute";
    image.style.left = 0;
    image.style.top = 0;
    image.style.margin = '30% 50% 50% 50%';
    image.setAttribute("src", "/Images/PleaseWait.gif");

    document.getElementById('aspnetForm').appendChild(image);
}

function UpdateFileUploadStatus(lstMode, fileUploadControlId) {
    var prefix = lstMode.getAttribute('id').substring(0, lstMode.getAttribute('name').lastIndexOf("$") + 1);
    var file = document.getElementById(prefix + fileUploadControlId);

    if (lstMode.selectedIndex == 1 && file.style.display == 'none')
        file.style.display = '';
    else
        file.style.display = 'none';
}

// Function list, for window.Onload:
var OnLoadFunctions = new Object();
function RunOnLoad(func) {
    var existing = 0;
    for (method in OnLoadFunctions) existing = existing + 1;

    OnLoadFunctions[existing] = func;
}
window.onload = function () {

    for (method in OnLoadFunctions) {
        OnLoadFunctions[method]();
    }
}

RunOnLoad(SetTextboxClasses);


$(document).ready(function () {
    return;
    // TODO: Debug this - accordion() must exist?!:

    $(".accordion").accordion({ header: "h3", autoHeight: false });
    $(".jtabs").tabs();
    $(".datepicker").datepicker({ showOn: 'both', buttonImage: "/Images/Icons/Calendar.png", buttonImageOnly: true });

});

//Spinner Div Popup
function OpenModalCSpinner(url, openEffect, height, width, className) {

    GetOpenModalSpinner(url, openEffect, height, width, 'defaultModal' + ' ' + className);
}
function OpenModalSpinner(url, openEffect, height, width) {

    GetOpenModalSpinner(url, openEffect, height, width, 'defaultModal');
}

function GetOpenModalSpinner(url, openEffect, height, width, className) {

    CloseModelGS(false);


    //if (cssClass == null || cssClass == '' || cssClass == undefined)
    var cssClass = className;

    // Create a box:
    _CurrentPopupBox = $('<div style="position:absolute;" />');
    _CurrentPopupBox.addClass(cssClass);

    // Create an IFRAME:
    _CurrentModalFrame = $("<iframe frameborder='0' height='" + height + "' width='" + width + "' />");
    _CurrentModalFrame.css("visibility", 'hidden');
    // _CurrentModalFrame.attr("src", url);

    _CurrentModalFrame.attr("parentWidth", $(window).width());
    _CurrentModalFrame.attr("parentHeight", $(window).height());
    _CurrentModalFrame.attr("parentScroll", $(window).scrollTop());
    if (openEffect != undefined) //openEffect = "fast";
        _CurrentModalFrame.attr("openEffect", openEffect);

    // Create DL and DD
    var dl = $("<dl />");
    _CurrentPopupBox.append(dl);
    var dd = $("<dd />");
    dl.append(dd);



    var closewin = $("<a class=\"close fixed close-defaultModal\" onclick='CloseModelGS();'><svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#closeRound'></use></svg></a>");

    if (className.indexOf("pop-waiting-form") > -1) {
        closewin = $("<a class=\"close fixed close-defaultModal\" onclick='parent.fnFullCourseSkip();CloseModelGS();'><svg><use xmlns:xlink='http://www.w3.org/1999/xlink' xlink:href='#closeRound'></use></svg></a>");
    }

    dd.append(_CurrentModalFrame);
    dd.append(closewin);

    // Create new cover:
    _CurrentModalCover = $("<div />");

    //_CurrentModalCover.append($("nbsp;"));
    _CurrentModalCover.addClass("modal-cover");
    _CurrentModalCover.width($(window).width() * 2);
    _CurrentModalCover.height($(window).height() * 2);
    // in the next code 50 is the half of the spinner image width (height)
    _CurrentModalCover.css("background-position",
    ($(window).width() / 2 - 50) + "px "
    + ($(window).height() / 2 - 50) + "px");
    _CurrentModalCover.css("top", $(window).scrollTop());

    $(window).scroll(function () {
        if (_CurrentModalCover != undefined) {
            _CurrentModalCover.css("top", $(window).scrollTop() + "px");
            _CurrentModalFrame.css("top", (($(window).height() - _CurrentModalFrame.height()) / 2 + $(window).scrollTop()) + "px");
        }
    });

    //$(document.body).css("overflow", "hidden");

    $(document.html).addClass("popupShown");
    $(document.body).addClass("modal-open");
    // hide items
    _CurrentModalCover.hide();
    _CurrentPopupBox.hide();

    // Add all to the body:     
    $('form').append(_CurrentPopupBox);
    $('form').append(_CurrentModalCover);

    // show items    
    _CurrentModalCover.show();
    _CurrentPopupBox.show();

    _CurrentPopupBox.css("top", 0);
    _CurrentPopupBox.css("left", 0);

    _CurrentModalFrame.load(InitializeModalPageSpinner(url));

    return _CurrentModalFrame;
}

function InitializeModalPageSpinner(url) {

    var IFrame = _CurrentModalFrame;
    var doc = IFrame.get(0).contentWindow.document;

    if (IFrame.attr('name') == "frmContent") {
        return;
    }
    var margin = 30;

    var minheight = "0";

    IFrame.attr("id", "iframeSpinnerDiv");
    // IFrame.attr("class", "cls-iframeSpinnerDiv");

    IFrame.attr("src", url);
    IFrame.attr("src", url);

    if (IFrame.css('min-height'))
        minheight = IFrame.css("min-height").replace("px", "");

    var isFirstTimeLoading = IFrame.attr("isLoaded") != "true";
    if (!isFirstTimeLoading) return;
    if (isFirstTimeLoading) IFrame.attr("isLoaded", "true");

    var actualheight = doc.body.parentNode.scrollHeight + 50;
    var actualwidth = $(doc.body).width() + 10;

    var parentWidth = parseInt(IFrame.attr("parentWidth"));
    var parentHeight = parseInt(IFrame.attr("parentHeight")) - margin;
    var parentScroll = parseInt(IFrame.attr("parentScroll"));
    var openEffect = IFrame.attr("openEffect");

    IFrame.css("min-height", 0);

    if (actualheight > parentHeight) actualheight = parentHeight;
    //IFrame.height(actualheight);
    //IFrame.width(actualwidth);

    var top = IFrame.offset().top;
    var left = IFrame.offset().left;

    top = (parentHeight - actualheight) / 2;
    if (top < margin / 2) top = margin / 2;
    top = top + parentScroll;

    left = (parentWidth - actualwidth) / 2;
    IFrame.hide();
    IFrame.css("visibility", 'visible');
    IFrame.css("top", top + "px");
    IFrame.css("left", left + "px");

    IFrame.show();
    $(IFrame.get(0).contentWindow).focus();
}



// Attach keywords:
var ShowAllShortkeyToolTips = false;
$(document).ready(function () {

    //var displayHelps = $("<a style=\"position:absolute; bottom:20px; right:100px;\" onclick=\"$('.divShortkeyTooltipaler').css('display', 'block');\">Show helps</a>");
    //var displayHelps = $("<a  ShortKey='Ctrl+Shift+S'>Show helps</a>");
    var displayHelps = $("<span style='display:none;'><a ShortKey='Ctrl+Shift+F1' style='display:none;'>Show helps</a></span>");
    displayHelps.click(function () {
        $('.divShortkeyTooltipaler').css('display', ShowAllShortkeyToolTips ? 'none' : 'block');
        ShowAllShortkeyToolTips = !ShowAllShortkeyToolTips;
    });
    $("form").after(displayHelps);


});



