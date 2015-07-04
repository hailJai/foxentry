$(document).ready(function() {
    function updateMessageCount(){
      $('#datacount').load('../predef/counts.php?c=msg');
    }
    updateDataCount(); //set the datacount as soon as the page is loaded
    setInterval( "updateMessageCount()", 10000 ); //update the datacount every 10 seconds
});