
var oWebURL = $('#hfWebURL').val();
if (oWebURL == undefined || oWebURL == "" || oWebURL == null) {
    oWebURL = document.location.origin;

    if (oWebURL.includes("localhost"))
        oWebURL = oWebURL + "/Website/";
    else if (oWebURL.includes("caboodlecode"))
        oWebURL = oWebURL + "/auto-web/";
}

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}

function ValidateCustForm(objID, FormName) {
    var isValid = true;
    var sMsg = "";
    $("." + objID + " input, ." + objID + " select, ." + objID + " textarea").each(function (index) {
        var inputClass = $(this).attr("class");

        if (inputClass != undefined) {
            if (inputClass.indexOf("requiredValue") > -1) {
                if ($(this).val() == "" || $(this).val() == $(this).attr("placeholder")) {
                    $(this).addClass("errorCSS");
                    isValid = isValid ? false : isValid;
                    sMsg += $(this).attr("data-label") + " is required. \n";
                }
                else {
                    $(this).removeClass("errorCSS");
                }
            }
            if (inputClass.indexOf("requiredEmail") > -1 && $(this).val() != "") {
                var reg = /^[A-Z0-9._+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i;
                if (!reg.test($(this).val())) {
                    $(this).addClass("errorCSS");
                    sMsg += "Invalid Email \n";
                    isValid = isValid ? false : isValid;
                }
                else
                    $(this).removeClass("errorCSS");
            }
            if (inputClass.indexOf("requiredSelect") > -1) {
                if ($("#" + $(this).attr("id") + " option:selected").val() == "0") {
                    $(this).addClass("errorCSS");
                    sMsg += $(this).attr("data-label") + " is required.\n";
                    isValid = isValid ? false : isValid;
                }
                else
                    $(this).removeClass("errorCSS");
            }

            // FOR RATING
            if (inputClass.indexOf("required_rating") > -1) {

                var IsRatSelected = false;
                $(('.' + objID) + ' fieldset input[type=radio]').each(function () {

                    if ($(this).prop('checked')) {
                        IsRatSelected = true;
                        return false;
                    }
                });

                if (!IsRatSelected) {
                    $(this).parent('.rat_div').addClass("errorCSS");
                    sMsg += $(this).attr("data-label") + " is required.\n";
                    isValid = isValid ? false : isValid;
                }
                else
                    $(this).parent('.rat_div').removeClass("errorCSS");

            }
        }
    });

    if (!isValid) {
        alert(sMsg);
    }
    else {

        var formValue = "";
        $("." + objID + " input, ." + objID + " select, ." + objID + " textarea").each(function (index) {

            if (!$(this).hasClass('clsTrack')) {

                var dataLabel = $(this).attr("data-label");
                if (dataLabel == "Rating") {
                    if ($(this).prop('checked')) {
                        formValue += '\"' + dataLabel + '\"' + ":" + '\"' + $(this).val() + '\",';
                    }
                }
                else {
                    formValue += '\"' + dataLabel + '\"' + ":" + '\"' + $(this).val() + '\",';
                }
            }
        });
        formValue = "{" + formValue.replace(/^,|,$/g, '') + "}";

        var FormID = objID.split('_');
        FormID = (FormID[FormID.length - 1]);

        $('#main-block, #dvCustForm').removeClass('slide');
        $('#divLoadingForm').show();

        var path = window.location.pathname;
        var page = path.split("/").pop();

        $.ajax({
            type: "POST",
            contentType: "application/json; charset=utf-8",
            url: oWebURL + 'WebService.asmx/SaveCustomFormEnq',
            data: "{FormID:'" + FormID + "', FormName:'" + FormName + "', FormValues:'" + formValue + "', PageUrl:'" + window.location.href + "',PageName:'"+page+"' }",
            async: false,
            success: function (Result) {
                $('#main-block, #dvCustForm').removeClass('slide');
                $('#divLoadingForm').hide();
                //$(".success" + objID).show();
                fnOpenPopupById('dvMSGCust'+objID);

                $("." + objID + " input, ." + objID + " select, ." + objID + " textarea").each(function (index) {
                    $(this).val("");
                });

                // For GA Tracking
                $("." + objID + " .clsTrack").trigger("click");

                // For Download File
                var oMediaID = $("." + objID + " .clsMediaID").text();
                if (oMediaID != "" && oMediaID != "0" && oMediaID != undefined) 
                {
                    // Redirect to download page
                    var oWebURL = $('#hfWebURL').val();
                    window.open(oWebURL + 'Download.aspx?MediaID=' + oMediaID, '_blank');
                }
            },
            error: function (Result) {
            }
        });
    }
    return false;
}

function fnCloseMsgPopCust() {
    window.location.href = window.location.href;
}

