function checkBrancheChange(){
    let url = $("meta[name='url-base']").attr('content');
    let filters = []
    $('.check-branche:checked').each(function(index, item){ filters.push($(item).val()); });
    filters = filters.join('/');
    window.location.replace(`${url}/${filters}`);
}