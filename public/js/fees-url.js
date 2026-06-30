document.addEventListener("DOMContentLoaded", function () {
    const filterForm = document.querySelector('form[action*="fees-details"]');
    if (filterForm) {
        filterForm.addEventListener("submit", function (e) {
            e.preventDefault();
            urlFilter();
        });
    }

    const perPageForm = document.querySelector('form[action="' + window.location.href.split('?')[0] + '"]');
    if (perPageForm) {
        perPageForm.addEventListener("submit", function (e) {
            e.preventDefault();
        });

        const perPageSelect = document.getElementById("per_page");
        if (perPageSelect) {
            perPageSelect.addEventListener("change", function () {
                urlFilter();
            });
        }
    }

    document.querySelectorAll('.pagination a').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const url = new URL(this.href);
            const page = parseInt(url.searchParams.get("page")) || 1;
            urlFilter(page);
        });
    });
});
function urlFilter(page = 1) {
    // const baseUrl = "http://127.0.0.1:8000/fees-details/details";
    const baseUrl = window.location.origin + window.location.pathname;
    let queryString = "";

    const academicId = document.getElementById("academic")?.value;
    const courseId = document.getElementById("course")?.value;
    const semesterId = document.getElementById("semester")?.value;
    const search = document.getElementById("search")?.value;
    const perPage = parseInt(document.getElementById("per_page")?.value) || 5;

    const minAmount = parseInt(document.getElementById("min_amount")?.value);
    const maxAmount = parseInt(document.getElementById("max_amount")?.value);

    if (academicId) queryString += `academic_id=${academicId}&`;
    if (courseId) queryString += `course_id=${courseId}&`;
    if (semesterId) queryString += `semester_id=${semesterId}&`;
    if (search) queryString += `search=${encodeURIComponent(search)}&`;
    if (perPage) queryString += `per_page=${perPage}&`;

    if (minAmount !== 40000) queryString += `min_amount=${minAmount}&`;
    if (maxAmount !== 500000) queryString += `max_amount=${maxAmount}&`;

    queryString += `page=${page}&offset=${(page - 1) * perPage}`;

    queryString = queryString.replace(/&$/, "");
    window.location.href = `${baseUrl}?${queryString}`;
}




