
function debuggerOn() {
if (devMode) {
debugger;
}
}//End of debuggerOn

var debugLevel = {
    criticalError: 1,
    serverError: 2,
    debugMsg: 3,
    infoDeveloper: 4,
    infoUser: 5
};

function ssAlert(p_sMessage, p_iMsgLevel, p_oSubPage) {
    try{
        var sSeperator = '~';
        var sDateSeperator = '-';
        var sNextLine = '\n';
        var ssLogger = $("#ssLogger");
        var enumVal = debugLevel[p_iMsgLevel];
        var p_oSubPageNm = "";
        var sMsgLevel = "";
        var dNow = new Date();
        //var currDateTime = dNow.getDate() + sSeperator + (dNow.getMonth() + 1) + sSeperator + dNow.getFullYear() + sSeperator + dNow.getHours() + ':' + dNow.getMinutes() + ':' + dNow.getSeconds() + ',' + dNow.getMilliseconds();
        var currDateTime = ("0" + dNow.getDate()).slice( - 2) + sDateSeperator + ("0" + (dNow.getMonth() + 1)).slice( - 2) + sDateSeperator + dNow.getFullYear() + sSeperator + dNow.getHours() + ':' + dNow.getMinutes() + ':' + dNow.getSeconds() + sSeperator + dNow.getMilliseconds();
        if (p_iMsgLevel == debugLevel.criticalError) {
            sMsgLevel = "criticalError";
        } else if (p_iMsgLevel == debugLevel.serverError) {
            sMsgLevel = "serverError";
        } else if (p_iMsgLevel == debugLevel.debugMsg) {
            sMsgLevel = "debugMsg";
        } else if (p_iMsgLevel == debugLevel.infoDeveloper) {
            sMsgLevel = "infoDeveloper";
        } else if (p_iMsgLevel == debugLevel.infoUser) {
            sMsgLevel = "infoUser";
        }
        //alert(p_oSubPageNm);
        alertLevel = debugLevel.infoUser;
        logLevel = debugLevel.infoUser;
        if (p_iMsgLevel >= alertLevel)
    {
    alert(p_sMessage);
    }
    if (p_iMsgLevel <= logLevel)
    {
    var strLogger = currDateTime + sSeperator + sMsgLevel + sSeperator + p_oSubPageNm + sSeperator + p_sMessage + sNextLine;
        ssLogger.append(strLogger);
    }
    } catch (ex) {
    var sErrorText = "Error:";
        if (ex.hasOwnProperty("message"))
        sErrorText += ex.message;
        else
        sErrorText += ex.toString();
        ssAlert("Ex in famework-ssAlert():" + sErrorText, debugLevel.debugMsg);
        throw sErrorText;
    }
    }; //end ssAlert()


    function sendrequest(p_sOp, p_sUrl, p_sPoststr, successCallBack, p_blockUI) {
    try {
    var returnObj;
        if (p_sOp.toString().toUpperCase() != "POST") {
    //ssAlert("Sendrequest does not support " + p_sOp + " Method. URL is:" + p_sUrl, debugLevel.debugMsg);
    returnObj = {
    errorresponse: "Error:Sendrequest does not support " + p_sOp + " Method.",
        serverresponse: "",
        functionresponse: false
    };
        return returnObj;
    }
    if (!p_blockUI)	{
    //p_blockUI = "Please wait";
    } else {
    showLoader();
    }

    setTimeout(function () {
    $.ajax({
    type: p_sOp,
        url: p_sUrl,
        datatype: 'json',
        async: true,
        data: p_sPoststr,
        success: function (result)
        {
        //debugger;
        ajaxCallComplete = true;
            if (jQuery.type(result) === "object") {
        result = JSON.stringify(result);
        }

        if (result.indexOf("error:") == - 1) {
        returnObj = {
        errorresponse: "",
            serverresponse: result,
            functionresponse: true
        }
        } else {
        returnObj = {
        errorresponse: result.trim().toString(),
            serverresponse: "",
            functionresponse: false
        }
        }
        successCallBack(returnObj);
            //call back to assginData
        },
        error: function (result)
        {
        debugger;
            alert(result.statusText);
            returnObj = {
            errorresponse: "Error:Sendrequest:" + result.responseText,
                serverresponse: "",
                functionresponse: false
            }
        successCallBack(returnObj);
            // or we can even throw it here
            // throw "Ex in ajax error block";
        }
    });
    }, 0);
    }
    catch (ex) {
    //debugger;
    alert(ex.toString());
        var sErrorText = "Error:";
        if (ex.hasOwnProperty("message")){
    sErrorText += ex.message;
    } else {
    sErrorText += ex.toString();
    }
    ssAlert("Ex in famework-sendrequest():" + sErrorText, debugLevel.debugMsg);
        throw sErrorText;
    }
    }
//end sendRequest

function sendrequest_sync(p_sOp, p_sUrl, p_sPoststr, p_bAsync)
{
try
{
ssAlert("Entered In sendrequest():", debugLevel.debugMsg);
    ssAlert("Entering with url:" + p_sUrl, debugLevel.debugMsg);
    var returnObj;
    if (p_sOp.toString().toUpperCase() != "POST")
{
ssAlert("Sendrequest does not support " + p_sOp + " Method. URL is:" + p_sUrl, debugLevel.debugMsg);
    returnObj = {
    errorresponse: "Error:Sendrequest does not support " + p_sOp + " Method.",
        serverresponse: "",
        functionresponse: false
    }
return returnObj;
}

var xmlhttp = null;
    if (xmlhttp == null)
{
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
}

if (p_bAsync == true)
{  // only here we need the onreadystatechange
xmlhttp.onreadystatechange = function ()
{
if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
{
alert(xmlhttp.responseText);
}
}
return;
}//p_bAsync==true

xmlhttp.open(p_sOp, p_sUrl, false);
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send(p_sPoststr);
    if (p_bAsync == false)
{
if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
{
if (xmlhttp.responseText.toLowerCase().indexOf("error") == 0)
{   //ERROR EXISTS
returnObj = {
errorresponse: xmlhttp.responseText,
    serverresponse: "",
    functionresponse: false
}
return returnObj;
}
else
{
returnObj = {
serverresponse: xmlhttp.responseText,
    errorresponse: "",
    functionresponse: true
}
return returnObj;
}
}
else
{
returnObj = {
errorresponse: xmlhttp.responseText,
    serverresponse: "",
    functionresponse: false
}
return returnObj;
}
}
}
catch (ex)
{
var sErrorText = "Error:";
    if (ex.hasOwnProperty("message"))
    sErrorText += ex.message;
    else
    sErrorText += ex.toString();
    ssAlert("Ex in famework-sendrequest():" + sErrorText, debugLevel.debugMsg);
    throw sErrorText;
}
}
; //end sendRequest_sync


    function sendrequest_formData(p_sOp, p_sUrl, p_sPoststr, successCallBack, p_blockUI)
    {
    try
    {
    var returnObj;
        if (p_sOp.toString().toUpperCase() != "POST")
    {
    //ssAlert("Sendrequest does not support " + p_sOp + " Method. URL is:" + p_sUrl, debugLevel.debugMsg);
    returnObj = {
    errorresponse: "Error:Sendrequest does not support " + p_sOp + " Method.",
        serverresponse: "",
        functionresponse: false
    }
    return returnObj;
    }
    if (!p_blockUI)
    {
    p_blockUI = "Please wait";
    }
    else
    {
    p_blockUI = p_blockUI;
    }
    //ssBlockUI(p_blockUI);

    setTimeout(function ()
    {
    $.ajax({
    type: 'POST',
        url: p_sUrl,
        //datatype: 'json',
        async: true,
        data: p_sPoststr,
        cache: false,
        contentType: false,
        processData: false,
        success: function (result)
        {
        debugger;
            ajaxCallComplete = true;
            if (jQuery.type(result) === "object")
        {
        result = JSON.stringify(result);
        }

        if (result.indexOf("error:") == - 1)
        {
        returnObj = {
        errorresponse: "",
            serverresponse: result,
            functionresponse: true
        }
        }
        else
        {
        returnObj = {
        errorresponse: result.trim().toString(),
            serverresponse: "",
            functionresponse: false
        }
        }
        successCallBack(returnObj);
            //call back to assginData
        },
        error: function (result)
        {
        debugger;
            alert(result.statusText);
            returnObj = {
            errorresponse: "Error:Sendrequest:" + result.responseText,
                serverresponse: "",
                functionresponse: false
            }
        successCallBack(returnObj);
            // or we can even throw it here
            // throw "Ex in ajax error block";
        }
    });
    }, 0);
    }
    catch (ex)
    {
    debugger;
        alert(ex.toString());
        var sErrorText = "Error:";
        if (ex.hasOwnProperty("message"))
        sErrorText += ex.message;
        else
        sErrorText += ex.toString();
        ssAlert("Ex in famework-sendrequest():" + sErrorText, debugLevel.debugMsg);
        throw sErrorText;
    }
    }
//end sendRequest_formData

function getSessionValue(p_sSessionVarName)
{
var sSessionValue = "_Undefined";
    try
{
ssAlert("Entered In getSessionValue():", debugLevel.debugMsg);
    if (p_sSessionVarName != '' && p_sSessionVarName != null)
{
var oParameters = {
psessionVarName: p_sSessionVarName
};
    $.ajax({
    type: 'POST',
        url: '../Common/getSessionValue.jsp',
        datatype: 'json',
        async: false,
        data: oParameters,
        success: function (result)
        {
        sSessionValue = result;
        },
        error: function (xhr)
        {
        throw "Ex in ajax error block";
        }
    });
}
}
catch (ex)
{
var sErrorText = "Error:";
    if (ex.hasOwnProperty("message"))
    sErrorText += ex.message;
    else
    sErrorText += ex.toString();
    ssAlert("Ex in famework-getSessionValue():" + sErrorText, debugLevel.debugMsg);
    throw sErrorText;
}
return sSessionValue;
}
;
    function setSessionValue(p_sSessionVarName, p_sSessionVarValue, p_sVarType)
    {
    try
    {
    ssAlert("Entered In setSessionValue():", debugLevel.debugMsg);
        if (p_sSessionVarName != '' && p_sSessionVarValue != '')
    {
    var p_oParameters = {
    psessionVarName: p_sSessionVarName,
        psessionVarValue: p_sSessionVarValue,
        psessionVarType: p_sVarType
    };
        $.ajax({
        type: 'POST',
            url: '../Common/setSessionValue.php',
            datatype: 'json',
            async: false,
            data: p_oParameters,
            success: function (result)
            {
            },
            error: function (xhr)
            {
            throw "Ex in ajax error block";
            }
        });
    }
    }
    catch (ex)
    {
    var sErrorText = "Error:";
        if (ex.hasOwnProperty("message"))
        sErrorText += ex.message;
        else
        sErrorText += ex.toString();
        ssAlert("Ex in famework-setSessionValue():" + sErrorText, debugLevel.debugMsg);
        throw sErrorText;
    }
    }

function showLoader(p_sDivId = '', p_sLoadMsg = '')
{

$('.theme-loader').fadeIn('slow', function() {
$(this).css('display', 'block');
});
    return;
    try
{
ssAlert("Entered In showLoader():", debugLevel.debugMsg);
    var messageToDisplay = "";
    if (p_sLoadMsg === undefined)
{
messageToDisplay = "Loading...";
}
else
{
messageToDisplay = p_sLoadMsg;
}
var dVPos = $('#' + p_sDivId).position();
    var dvHeight = $('#' + p_sDivId).height();
    var dvWidth = $('#' + p_sDivId).width();
    var dvLoadTop = dvHeight / 2 + dVPos.top;
    var dvTopMain = dVPos.top - 15;
    var dvMainLeft = dVPos.left - 15;
    var dvLodCenterLeft = (dvWidth / 2) - dVPos.left;
    $('#' + p_sDivId).append("<div class=\"blockUI blockMsg blockElement\" style=\"z-index: 1011; \n\
  position: absolute; padding: 0px; margin: 0px; width: 30%; top:" + dvLoadTop + "px" + ";\n\
  left: " + dvLodCenterLeft + "px" + "; text-align: center; color: rgb(0, 0, 0); border: 3px solid rgb(170, 170, 170); \n\
  background-color: rgb(255, 255, 255); cursor: wait;\">" + messageToDisplay + "</div>\n\
  <div class=\"blockUI blockOverlay\" style=\"z-index: 1000; border: medium none;\n\
  margin: 15px; padding: 10px; width: " + dvWidth + "px" + "; height:" + dvHeight + "px" + "; top: " + dvTopMain + "px" + "; left: " + dvMainLeft + "px" + ";\n\
  background-color: rgb(0, 0, 0); opacity: 0.6; cursor: wait; position: absolute;\"></div>");
}
catch (ex)
{
var sErrorText = "Error:";
    if (ex.hasOwnProperty("message"))
    sErrorText += ex.message;
    else
    sErrorText += ex.toString();
    ssAlert("Ex in famework-showLoader():" + sErrorText, debugLevel.debugMsg);
    throw sErrorText;
}

} // end showLoader()

function hideLoader(p_sDivId = '')
{
$('.theme-loader').fadeOut('slow', function() {
$(this).css('display', 'none');
});
    return;
    try
{
$('#' + p_sDivId + " .blockUI").removeAttr('style').empty();
    $('#' + p_sDivId).removeClass('blockUI');
}
catch (ex)
{
var sErrorText = "Error:";
    if (ex.hasOwnProperty("message"))
    sErrorText += ex.message;
    else
    sErrorText += ex.toString();
    ssAlert("Ex in famework-hideLoader():" + sErrorText, debugLevel.debugMsg);
    throw sErrorText;
}
}
; //hideLoader()

    function  ssBlockUI(p_str)
    {
    $.blockUI({
    message: "<h3><img src='../images/loader2.gif' /><b>  " + p_str + "  </b></h3>"
    });
    }

function ssUnBlockUI()
{
$.unblockUI();
}

