function loadPage(key) {
    var contentDiv = document.getElementById('content');

    // Create an AJAX request to fetch the content of the other HTML page
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Insert the fetched content into the 'content' div
            contentDiv.innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", key, true);
    xhttp.send();
}