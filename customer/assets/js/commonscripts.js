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
function sendRequest(postData = {}){
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
}