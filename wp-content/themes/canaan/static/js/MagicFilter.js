import isotope from "isotope-layout";


class MagicFilter {
    constructor(wrapper, options) {
        var iso = new isotope('.data-project-grid-js', {
            itemSelector: '.p-item',
            layoutMode: 'fitRows'
        });

        // filter functions
        var filterFns = {
            filter: function (itemElem,) {
                const cats = itemElem.dataset.category.split(',');
                console.log(itemElem);
                return cats.includes('iso-20');
            },

        };

        let savedElm = [];
        // / bind filter button click
        var filtersElem = document.querySelector('.filters-button-group');
        filtersElem.addEventListener('click', function (event) {

            if (event.target.type !== 'button') {
                return;
            }


            var filterValue = event.target.getAttribute('data-filter');

            if (savedElm.length > 0) {
                // if (savedElm[0].dataset.division === "allbuttons") {
                //     document.querySelector('.img-check-mark').classList.remove('all-remove-check')
                //     savedElm = []
                // }

                if (savedElm[0].dataset.typer === "category") {
                    savedElm[0]?.classList.remove('category-btn-active')

                    savedElm[0].firstChild.style = "display: none";
                    savedElm = []

                }
                else {
                    savedElm[0]?.classList.remove('term-btn-active')
                    savedElm[0].firstChild.style = "display: none";
                    savedElm = []

                }
            }


            if (event.target.dataset.division === "allbuttons") {
                if (savedElm.length > 0) {
                    savedElm = []

                }
                document.querySelector('.img-check-mark').classList.remove('all-remove-check')
                savedElm.push(event.target)
                event.target.style = "background-color: #EEEEEE"
            } else {
                savedElm.push(event.target)
                event.target.classList.add(event.target.dataset.typer === "category" ? 'category-btn-active' : 'term-btn-active')
                document.querySelector('.img-check-mark').classList.add('all-remove-check')
                document.querySelector('.allButton').style = "background-color: white;"
                event.target.firstChild.style = "display: block";
            }




            iso.arrange({
                filter: function (itemElem) {
                    // console.log(filterValue);
                    if (!filterValue) {
                        return true
                    }
                    if (filterValue === "*") return true
                    const cats = itemElem.dataset.category.split(',');
                    // console.log(itemElem);
                    return cats.includes(filterValue);
                }
            });

        });



    }
}

export { MagicFilter };