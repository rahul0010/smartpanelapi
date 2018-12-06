function getStudentsData()
{
    fetch('/api/v1/students',{
        method: 'get',
        credentials: 'same-origin'
    }).then(function(data){
        var contentType = data.headers.get("content-type");
        if(contentType && contentType.includes("application/json")) {
        return data.json();
        }
    }).then(function(data){
        console.log(JSON.stringify(data));
    })
}
