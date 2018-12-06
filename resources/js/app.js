
/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

window.getData = function(url){
        return fetch(url,{
        method: 'get',
        credentials: 'same-origin'
    }).then((response) => response.json())
}
