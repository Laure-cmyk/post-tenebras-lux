import { computed, ref, defineAsyncComponent } from "vue";
// defineAsyncComponent is used to avoid circular dependency issues 
export const routes = [
    {
        anchor: "home",
        label: "Home",
        page: defineAsyncComponent(() => import("../js/pages/PageLanding.vue")),
    },
    {
        anchor: "story",
        label: "Story",
        page: defineAsyncComponent(() => import("../js/pages/PageChapter.vue")),
    },
];

export const anchor = ref("home");
export const currentPage = computed(() => {
    return routes.find((route) => route.anchor === anchor.value)?.page;
});