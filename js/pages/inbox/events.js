function buttonClickMailTo(event){
    event.preventDefault();
    let email = $(this).attr('data-email');
    let subject = $(this).attr('data-subject');
    let body = $(this).attr('data-body');
    window.location = 'mailto:'+email+'?subject='+subject+'&body='+body;
    $(this).parent().submit();
}

function dropdownClickStatusItem(){
    let url = $(this).attr('data-url');
    let value = $(this).attr('data-value');
    let text = $(this).text();
    createCookie("status-value", value, "10");
    createCookie("status-text", text, "10");
    window.location.replace(url);
}