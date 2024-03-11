document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.be_explanation').forEach(function (element) {
        element.addEventListener('click', function (event) {
            if (event.target.classList.contains('toggle')) {
                event.target.parentNode.classList.toggle('open');
            }
        });
    });
});