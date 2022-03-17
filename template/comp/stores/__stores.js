$(window).load(function () {
    const metroFilters = document.querySelectorAll('.metro-filter');
    const storeItems = document.querySelectorAll('.store-item');

    metroFilters.forEach((el) => {
        el.addEventListener('click', (evt) => {
            const filterValue = evt.currentTarget.dataset.filter;
            metroFilters.forEach((metroFilter) => {
                metroFilter.classList.remove('is-active');
            });
            evt.currentTarget.classList.add('is-active');
            storeItems.forEach((item) => {
                if (item.dataset.filter != filterValue) {
                    item.classList.add('metro-filter__hidden');
                } else {
                    item.classList.remove('metro-filter__hidden');
                }
            });
            if (evt.currentTarget == metroFilters[0]) {
                storeItems.forEach((storeItem) => {
                    storeItem.classList.remove('metro-filter__hidden');
                });
            }
        });
    });
});