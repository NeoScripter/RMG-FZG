function includeHTML() {
    var elements = document.querySelectorAll('[include-html]');
    elements.forEach(function(elmnt) {
        var file = elmnt.getAttribute('include-html');
        if (file) {
            fetch(file)
                .then(response => {
                    if (response.ok) {
                        return response.text();
                    } else {
                        return 'Page not found.';
                    }
                })
                .then(data => {
                    elmnt.innerHTML = data;
                    elmnt.removeAttribute('include-html');
                })
                .catch(error => {
                    console.error('Error fetching the HTML file:', error);
                    elmnt.innerHTML = 'Error loading content.';
                });
        }
    });
}