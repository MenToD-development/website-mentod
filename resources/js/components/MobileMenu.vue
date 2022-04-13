<template>
    <aside :class="containerStyles">
        <slot></slot>
    </aside>
</template>

<script>
import { mapState } from "vuex";

export default {
    computed: {
        ...mapState({
            opened: state => state.mobileMenu.opened,
        }),

        containerStyles() {
            return {
                'flex-none': true,
                'fixed': true,
                'left-full': this.opened === false,
                'top-full': this.opened === false,
                'left-0': this.opened,
                'top-0': this.opened,
                'duration-200': true,
                'scale-0': this.opened === false,
                'scale-1': this.opened,
                'z-10': true,
                'w-screen': true,
                'h-screen': true,
                'bg-secondary': true,
            };
        }
    }
}
</script>
