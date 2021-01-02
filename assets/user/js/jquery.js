
function openDetail(num){
    if($("#detailPerson" + num).css('display') == 'none')
    {
        $("#detailPerson" + num).css('display', 'inline-block')
        $("#detailBtn" + num).text("Close")
    }
    else {
        $("#detailPerson" + num).css('display', 'none')
        $("#detailBtn" + num).text("Detail")
    }
}

$('#linkDetail').click(function(e)
{
    if($("#detailTC").css('display') == 'none'){
        e.preventDefault();
        $("#detailTC").css('display', 'inline-block')
    }
    else {
        e.preventDefault();
        $("#detailTC").css('display', 'none')
    }
});