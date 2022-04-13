<template>
    <button class="group flex align-center flex-nowrap p-2 rounded duration-200 bg-white
               hover:drop-shadow-md hover:-translate-y-1
               active:bg-secondary" @click="toggle()">
        <svg v-show="!opened" xmlns="http://www.w3.org/2000/svg"
             class="inline-block h-6 w-6 stroke-secondary duration-200 group-active:stroke-primary"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
        <svg v-show="opened" xmlns="http://www.w3.org/2000/svg"
             class="inline-block h-6 w-6 stroke-secondary duration-200 group-active:stroke-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</template>

<script>
import { mapActions, mapState } from "vuex";
import { TOGGLE_ACTION } from "../stores/mobile-menu/actions";

export default {
    name: "MobileMenuSwitch",

    computed: {
        ...mapState({
            opened: state => state.mobileMenu.opened,
        }),
    },

    methods: {
        ...mapActions('mobileMenu', [
            TOGGLE_ACTION,
        ]),
    }
}
</script>
