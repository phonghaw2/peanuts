function GetNow(date){
    var currentdate = new Date(date);
    var datetime = currentdate.getUTCDate() + "/"
            + (currentdate.getUTCMonth()+1)  + "/"
            + currentdate.getUTCFullYear() + " "
            + currentdate.getUTCHours() + ":"
            + currentdate.getUTCMinutes() ;
    return datetime;
}

function renderPagination(links){
    links.forEach(function(each){
        $('.pagination').append($('<li>').attr('class', `page-item  ${each.active ? 'active' : ''}`)
        .append(`<a class="page-link" href="${each.url}">${each.label}</a>`));
    })
}
