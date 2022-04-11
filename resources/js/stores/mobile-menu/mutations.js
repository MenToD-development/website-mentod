export const OPEN_MUTATION = 'open';

export const CLOSE_MUTATION = 'close';

export default {
    [OPEN_MUTATION](state) {
        state.opened = true;
    },

    [CLOSE_MUTATION](state) {
        state.opened = false;
    }
};
