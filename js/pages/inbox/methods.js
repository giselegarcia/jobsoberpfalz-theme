function createCookie(name, value, seconds) {
    let expires;
    if(seconds){
        let date = new Date();
        date.setTime(date.getTime()+(seconds * 1000));
        expires = "; expires="+date.toGMTString();
    }
    else expires = "";
    document.cookie = escape(name)+"="+escape(value)+expires+"; path=/";
}