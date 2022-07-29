$(document).ready(function () {
    $('.back').on('click', () => {
        window.history.back();
    })
    $('.data-table').dataTable();
});