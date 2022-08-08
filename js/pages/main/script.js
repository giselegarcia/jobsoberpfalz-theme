let txtMainSearch = document.querySelector('#txt-main-search');
window.onload = function(){
    $('.check-branche').change(checkBrancheChange);
    $('.logo-carousel').slick(logoCarouselConfig);
    getRequestResponse('GET', 'https://www.jobs-oberpfalz.de/api/groups/1/users', {}, 'Bearer sk_live_cWr3CtygfGZCMF0tdJRQEHf26I5b6O').done(function(response){
        let searchResults = response['users'];
        getRequestResponse('GET', 'https://www.jobs-oberpfalz.de/api/collections/1/lists', {}, 'Bearer sk_live_cWr3CtygfGZCMF0tdJRQEHf26I5b6O').done(function(response){
            searchResults = searchResults.concat(response['lists']);
            getRequestResponse('GET', 'https://www.jobs-oberpfalz.de/api/collections/2/lists', {}, 'Bearer sk_live_cWr3CtygfGZCMF0tdJRQEHf26I5b6O').done(function(response){
                searchResults = searchResults.concat(response['lists']);
                getRequestResponse('GET', 'https://www.jobs-oberpfalz.de/api/collections/3/lists', {}, 'Bearer sk_live_cWr3CtygfGZCMF0tdJRQEHf26I5b6O').done(function(response){
                    searchResults = searchResults.concat(response['lists']);
                    autocomplete(txtMainSearch, searchResults);
                });
            });
        });
    });
};