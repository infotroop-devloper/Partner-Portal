function sendRequestSecure(postData = {}){
    if(!localStorage.getItem('token')){
        location.href = "../pages/index.php";
        return;
    }
    return new Promise((resolve, reject) => {
        $.ajax({
            type: 'POST',
            url: "../api/rootapi.php",
            data: postData,
            dataType: "json",
            headers: {"Authorization": "Bearer " + localStorage.getItem('token')},
            success: function(resultData) {
                resolve(resultData);
            },
            error: function(resultData){
                reject(resultData);
            }
        });
    });
}
function sendRequest(postData){
    try {
        return new Promise((resolve, reject) => {
            $.ajax({
                type: 'POST',
                url: "../api/rootapi.php",
                data: postData,
                dataType: "json",
                success: function(resultData) {
                    resolve(resultData);
                },
                error: function(resultData){
                    reject(resultData);
                }
            });
        });
    }catch (ex) {
        console.log(ex.toString());
        var sErrorText = "Error:";
        if (ex.hasOwnProperty("message")) {
            sErrorText += ex.message;
        } else {
            sErrorText += ex.toString();
        }
        throw sErrorText;
    }
    
}
function sendRequestFormdata(postData){
    try {
        return new Promise((resolve, reject) => {
            $.ajax({
                type: 'POST',
                url: "../api/rootapi.php",
                data: postData,
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(resultData) {
                    resolve(resultData);
                },
                error: function(resultData){
                    reject(resultData);
                }
            });
        });
    }catch (ex) {
        console.log(ex.toString());
        var sErrorText = "Error:";
        if (ex.hasOwnProperty("message")) {
            sErrorText += ex.message;
        } else {
            sErrorText += ex.toString();
        }
        throw sErrorText;
    }
    
}