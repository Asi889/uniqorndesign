<template>
    <div class="grid pb-[60px]">

        <ul
            class="flex gap-x-2 lg:gap-x-4 gap-y-3 lg:gap-y-6 flex-wrap pt-5 lg:pt-10 mb-0 lg:mb-[112px] button-group filters-button-group">

            <li v-for="filter in filters" :key="filter.id">
                <button type="button" @click="setFilter(filter.id)" :class="`filter-app-button flex gap-x-[7px] items-center border transition  text-sm lg:text-2xl lg:leading-none px-2 lg:px-4 h-[52px]  rounded-full
                ${filter.taxonomy === 'category' ? 'border-purple-500 active:bg-purple-200 text-purple-500 hover:bg-purple-100/80' : ''}
                ${filter.taxonomy === 'post_tag' ? 'border-blue-500 active:bg-blue-200 text-blue-500 hover:bg-blue-100/80' : ''}
                ${activeFilters.includes(filter.id) && filter.taxonomy === 'category' ? `bg-purple-200 border-transparent active` : ''}
                ${activeFilters.includes(filter.id) && filter.taxonomy === 'post_tag' ? `bg-blue-100 border-transparent active` : ''}
                `">
                    <svg v-if="activeFilters.includes(filter.id)" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                        viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>{{ filter.name }}</span>
                </button>
            </li>
        </ul>

        <section class="flex flex-col">

            <transition-group name="list" tag="ul"
                class="grid lg:grid-cols-3 md:grid-cols-2  gap-x-5 gap-y-20  mt-5 lg:mt-5 list-none">
                <li v-for="project in projects" :key="project.id">
                    <div v-html="project.html"></div>
                </li>
            </transition-group>
        </section>
    </div>

</template>

<script>

import { defineComponent, ref } from 'vue'

export default defineComponent({

    setup() {
        const projects = ref(JSON.parse(JSON.stringify(__mainData.projects)))
        const addOrRemoveFromArray = (array, value) => {
            if (array.value.includes(value)) {
                array.value.splice(array.value.indexOf(value), 1)
            } else {
                array.value.push(value)
            }
        }
        let params = (new URL(document.location)).searchParams;
        const taxonomies = params.get("taxonomies") ? params.get("taxonomies").split(",").map(Number) : [];
        const activeFilters = ref(taxonomies);
        const setFilter = (filterId) => {
            addOrRemoveFromArray(activeFilters, filterId);
            const taxonomies = activeFilters.value.join(',')
            const url = new URL(window.location.href);
            url.searchParams.set('taxonomies', taxonomies);
            window.history.replaceState(null, null, url); // or pushState
            filterProjects()
        }

        const filterProjects = () => {
            if (activeFilters.value.length === 0) {
                return projects.value = JSON.parse(JSON.stringify(__mainData.projects));
            }
            projects.value = __mainData.projects.filter(project => {
                return activeFilters.value.some(filter => project.taxonomies.includes(filter))
            })
        }
        filterProjects()
        return {
            filters: __mainData.filters,
            projects,
            setFilter,
            activeFilters,
        }
    },
})
</script>

<style>
.list-enter-active,
.list-leave-active {
    transition: all 0.5s ease;
}

.list-enter-from,
.list-leave-to {
    opacity: 0;
    transform: translateX(30px);
}
</style>